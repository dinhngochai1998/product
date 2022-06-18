<?php
/**
 * @Author Admin
 * @Date   May 18, 2022
 */

namespace Wave\Http\Controllers;

use App\Category;
use App\Contact;
use App\Helper\CategoriesConstant;
use App\Helper\StatusConstant;
use App\Jobs\NewJob;
use App\Jobs\SendMailProduct;
use App\Order;
use App\OrderProduct;
use App\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Wave\Post;

class ProductController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        $products   = [];
        $categories = Category::query()
                              ->whereNull('parent_id')
                              ->where('name', '<>', CategoriesConstant::USER_MANUAL)
                              ->where('name', '<>', CategoriesConstant::NEWS)
                              ->get();
        foreach ($categories as $category) {
            $products [] = [
                'category'    => $category,
                'subCategory' => Category::where('parent_id', $category->id)->get(),
                'product'     => Product::query()
                                        ->where('id_category', $category->id)
                                        ->where('status', StatusConstant::PUBLISHED)
                                        ->get(),
            ];
        }

        $seo = [
            'title'       => setting('site.title', 'thế giới điện máy'),
            'description' => setting('site.description',
                                     '⭐ Thế giới điện máy chuyên bán lẻ hàng điện tử điện lạnh nội địa Nhật Bản tại Số 1 ngõ 214/23 Đường Nguyễn Xiển, Quận Thanh Xuân, Hà Nội. Cam kết bán hàng chính hãng nội địa Nhật 100%, giá rẻ nhất thị trường.'),
            'image'       => url('/og_image.png'),
            'type'        => 'website',
            'keywords'    => 'thế giới diện máy, hàng điện tử, máy lạnh, điều hoà'
        ];

        $news = Category::query()->with('posts')->where('name', CategoriesConstant::NEWS)->first();


        return view('product.index', compact('categories', 'products', 'news', 'seo'));
    }

    public function allProduct()
    {
        $products = Product::query()->paginate(30);
        return view('product.all-product', compact('products'));
    }

    public function news()
    {
        $categoryNews = Category::query()->where('name', CategoriesConstant::NEWS)->first();
        $news         = Post::query()->where('category_id', $categoryNews->id)->paginate(10);

        return view('product.news', compact('news'));
    }

    public function newsDetail($slug)
    {
        $newsDetail = Post::query()
                          ->where('slug', $slug)
                          ->first();
        $seo = [
            'title'         => $newsDetail->title ?? null,
            'description'   => $newsDetail->meta_description ?? null,
            'image'         => url('storage/'.$newsDetail->image),
            'type'          => 'website',
            'keywords'    => 'thế giới diện máy, hàng điện tử, máy lạnh, điều hoà'
        ];
        return view('product.news-detail',
                    compact('newsDetail', 'seo'));
    }

    public function search(Request $request)
    {
        $searchProduct = Product::query()
                                ->where('name', 'like', '%' . $request->search . '%')
                                ->paginate(30);

        return view('product.search',
                    compact('searchProduct'));
    }

    public function contact()
    {
        return view('product.contact');
    }

    public function createContact(Request $request)
    {
        Contact::query()->create($request->all());

        return view('product.contact');
    }

    public function orderProduct(Request $request)
    {

        $product = Product::query()->where('id', '=', $request['id'])->first();
        $order   = Session::get('cart');
        $cart    = [
            "id"       => $product->id,
            "name"     => $product->name,
            "price"    => $product->price,
            "image"    => $product->image,
            "total"    => $product->price,
            "quantity" => $request['quantity'],
        ];
        Session::put('cart', $cart);

    }

    public function viewOrder()
    {
        $getCart = [];

        if (Session::get('cart')) {
            $getCart = Session::get('cart');
        }

        return view('product.order', compact('getCart'));
    }

    public function addCart(Request $request)
    {
        $product          = Product::query()->where('id', $request['product_id'])->first();
        $dataCart         = [
            'name'         => $request->name,
            'email'        => $request->email,
            'number_phone' => $request->number_phone,
            'note'         => $request->note,
            'address'      => $request->address,
        ];
        $order            = Order::query()->create($dataCart)->toArray();
        $dataOrderProduct = [
            'product_id' => $request['product_id'],
            'order_id'   => $order['id'],
            'quantity'   => $request['quantity'],
        ];
        $mergeData        = array_merge($order, $dataOrderProduct);
        OrderProduct::query()->create($dataOrderProduct);
        dispatch(new SendMailProduct($mergeData, $product))->delay(Carbon::now()->addMinutes(20));
        $cart = Session::get('cart');
        unset($cart);

        return redirect()->route('wave.home');
    }

}