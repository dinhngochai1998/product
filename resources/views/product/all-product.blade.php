@extends('themes.layouts.app')
@section('content')
    <body  class="stretched no-transition collection" >
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-54HJ92D"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class='body_overlay'></div>
    <!-- Document Wrapper
       ============================================= -->
    <div id="wrapper" class="clearfix">
        <!-- style="animation-duration: 1.5s; opacity: 1;"-->
        <!-- Top Bar
           ============================================= -->
        <!-- #top-bar end -->
        <!-- Header
           ============================================= -->

        <header id="header">
            <div id="header-wrap">
                <div class="container clearfix">
                    <!--<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>-->
                    <!-- Logo
                  ============================================= -->
                    <!-- Top Search
                  ============================================= -->
                    <a href="#menu-toggle" class="btn btn-default hidden-lg hidden-md" id="menu-toggle">
                        <i class='icon-reorder'></i>
                        <span>MENU</span>
                    </a>
                    <div class="hidden-xs fanepage_pc">
                        <span>Truy cập fanpage:</span>
                        <a target="_blank" href="https://www.facebook.com/shophangnhatbainoidia">HÀNG NHẬT TUẤN HÀ</a>
                    </div>
                    <!-- Top Search
                  ============================================= -->
                    <div class='top_search col-md-9 col-xs-12'>
                        <form action="/search"class='col-sm-8 form-inline nopadding nomargin'>
                            <input type="hidden" name="type" value="product" />
                            <input type="text" name="q"  class="form-control col-md-8 search_input" placeholder="Tìm kiếm sản phẩm bạn muốn mua">
                            <button class='button'>Tìm kiếm</button>
                        </form>
                        <div id="top-cart" class='top-cart-block col-md-1 nopadding'>
                            <a href="/cart" id="top-cart-trigger"><img src='{{ asset('images/icons/cart_bg.png')}}' ><span class='top_cart_qty'>0</span>
                            </a>
                            <div class="top-cart-content">
                                <div class="top-cart-title">
                                    <h4>Giỏ hàng</h4>
                                </div>
                                <div class="top-cart-items">
                                </div>
                                <div class="top-cart-action clearfix">
                                    <span class="fleft top-checkout-price">0₫</span>
                                    <input type="hidden" class="top_cart_total_price_not_format" value="0" />
                                    <button onclick='window.location.href="/cart"' class="button button-small nomargin fright">Xem giỏ hàng</button>
                                </div>
                            </div>
                        </div>
                        <a class='top_hotline col-sm-3 hidden-sm hidden-xs nopadding' href='tel:098 888 8642'><img src='{{asset('images/icons/top_hotline.png')}}' /></a>
                    </div>
                    <!-- #top-search end -->
                    <!-- top link trigger --->
                    <a href='#' id='top_link_trigger' class='hidden-lg hidden-md'><i class='icon-ellipsis-vertical'></i></a>
                    <!-- end top link trigger --->
                    <script>
                        $("#sidebar-wrapper ul li a span").click(function( event ) {
                            event.preventDefault();
                            var li = $(this).parents('li');
                            li.children('ul').toggle('slow');
                        });
                    </script>
                    <!-- #primary-menu end -->
                </div>
            </div>
        </header>
    <!-- #header end -->
        @include('product.categories')
        <!-- Content
           ============================================= -->
        <!-- Page Title
           ============================================= -->
        <section id="page-title">
            <div class="container clearfix">
                <div class="col-md-12">
                    <ol class="breadcrumb col-md-6 col-sm-6">
                        <li><a href="/">Trang chủ</a></li>
                        <li class='active'>Tất cả sản phẩm</li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- #page-title end -->
        <!-- Content
           ============================================= -->
        <input type='hidden' id='collection_id' value='=0'>
        <section id="content">
            <div class="content-wrap">
                <div class="container clearfix">
                    <div class="col_desc">
                    </div>
                    <!-- Post Content
                       ============================================= -->
                    <div class="postcontent nobottommargin col_last col-md-80 col-sm-9">
                        <!-- Shop
                           ============================================= -->
                        <div id="shop" class="product-3 clearfix">
                            <div class='col-md-8 col-md-push-4 sort-wrapper'>
                                <div class="browse-tags row" style='margin-bottom: 20px;'>
                                    <div class='col-md-8 col-sm-9 col-xs-6 text-right nopadding' style='padding-right: 5px!important;'>
                                        <span style='line-height: 30px;'>Sắp xếp theo:</span>
                                    </div>
                                    <div class='col-md-4 col-sm-3 col-xs-6 nopadding'>
                           <span  class="custom-dropdown custom-dropdown--white pull-right" style='width: 100%'>
                              <select id='sortControl' onchange="sorting()" class="sort-by custom-dropdown__select custom-dropdown__select--white form-control input-sm">
                                 <option value="manual" sort_by='manual'>Sản phẩm nổi bật</option>
                                 <option value="(price:product=asc)" sort_by='price-ascending'>Giá: Tăng dần</option>
                                 <option value="(price:product=desc)" sort_by='price-descending'>Giá: Giảm dần</option>
                                 <option value="(title:product=asc)" sort_by='title-ascending'>Tên: A-Z</option>
                                 <option value="(title:product=desc)" sort_by='title-descending'>Tên: Z-A</option>
                                 <option value="(updated_at:product=asc)" sort_by='created-ascending'>Cũ nhất</option>
                                 <option value="(updated_at:product=desc)" sort_by='created-descending'>Mới nhất</option>
                                 <option value="(sold_quantity:product=desc)" sort_by='best-selling'>Bán chạy nhất</option>
                              </select>
                           </span>
                                    </div>
                                </div>
                            </div>
                            <div id='grid_pagination'>
                                <div class='grid'>

                                    <div class='product_wrapper'>
                                        @foreach($products as $product)
                                        <div class='col-sm-3 col-xs-6 nopadding product_single'>
                                            <div class="product pr-item clearfix">
                                                <div class="product-image">
                                                    <a href="{{route('wave.detail.product', $product->slug)}}"><img src="{{asset('storage/' . $product->image)}}"  alt="Nhân bản từ GHẾ MASSAGE FAMILY INADA  FMC S333E8  DATE  2018 Made in Japan" class="img-responsive"></a>
                                                    <div class="product-overlay">
{{--                                                        <a href="/products/nhan-ban-tu-ghe-massage-family-inada-fmc-s333e8-date-2018-made-in-japan" class="add-to-cart product_quick_add" data-toggle='tooltip' title='Thêm vào giỏ'><i class="icon-shopping-cart"></i><span class='hidden-md hidden-lg'> Thêm vào giỏ</span></a>--}}
{{--                                                        <a href="#product-pop-up" class="item-quick-view fancybox-fast-view hidden-sm hidden-xs" product_url="/products/nhan-ban-tu-ghe-massage-family-inada-fmc-s333e8-date-2018-made-in-japan" data-toggle='tooltip' title='Xem nhanh'><i class="icon-zoom-in2"></i><span class='hidden-md hidden-lg'> Xem nhanh</span></a>--}}
                                                    </div>
                                                </div>
                                                <div class="product-desc">
                                                    <div class="product-title">
                                                        <h4><a href="{{route('wave.category', $product->slug)}}">{{$product->name}}</a></h4>
                                                    </div>
                                                </div>
                                                <div class="product-desc">
                                                    <div class="product-price">
                                                        <ins>{{ number_format($product->sub_price) . 'đ'}} </ins>
                                                        <del>{{ number_format($product->price) . 'đ'}}</del>
                                                    </div>
                                                    <div class="haravan-product-reviews-badge" data-id="1038128098">  </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>

                                    <script>
                                        jQuery(document).ready(function(){
                                            Layout.init();
                                        });
                                    </script>
                                </div>
                                {!! $products->links() !!}
                            </div>
                        </div>
                        <!-- #shop end -->
                    </div>
                    <!-- .postcontent end -->
                    <!-- Sidebar
                       ============================================= -->
                    <div class="sidebar nobottommargin nopadding left-sidebar col-md-20 col-sm-3">
                        <div class="sidebar-widgets-wrap">
                            <!-- begin: filters -->
                            <div class='hidden-xs hidden-sm'>
                                <!-- categories -->
                                <div class="widget widget_links clearfix">
                                    <h4>Danh mục sản phẩm</h4>
                                    @foreach($categories as $value)
                                    <ul class='sidebar_menu'>

                                        <li>
                                            <a href="{{route('wave.category', $value->slug)}}">{{$value->name}}</a>
                                            <i class='icon-angle-down'></i>
                                            <ul class='sidebar_submenu'>
                                                @foreach($subCategories as $subCategory)
                                                    @if($value->id == $subCategory->parent_id)
                                                        <li class=''><a class='sub-menu' href="{{route('wave.category', $subCategory->slug)}}"><div>
                                                                    {{strtoupper($subCategory->name)}}</div></a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </li>

                                    </ul>
                                    @endforeach
                                </div>
                                <!-- end categories -->
                                <!-- recent product -->
                                <div class="widget clearfix">
                                    <h4><a href='/collections/may-giat-nhat-noi-dia-nhat-bai'>Sản phẩm khuyến mãi</a></h4>

                                    <div id="post-list-footer" class='sidebar_menu'>
                                        @foreach($promotionalProducts as $promotionalProduct)
                                        <div class="item ">
                                            <div class="product pr-item clearfix  product_single">
                                                <div class="product-image">
                                                    <a href="{{route('wave.detail.product', $promotionalProduct->slug)}}"><img  class="lazyload" data-src="{{asset('storage/' . $promotionalProduct->image)}}"src="{{asset('storage/' . $promotionalProduct->image)}}" alt=""></a>
                                                    <div class="product-overlay">
                                                        <a href="/products/may-giat-toshiba-tw-g500l" class="add-to-cart product_quick_add" data-toggle='tooltip' title='Thêm vào giỏ'><i class="icon-shopping-cart"></i><span class='hidden-md hidden-lg'> Thêm vào giỏ</span></a>
                                                        <a href="#product-pop-up" class="item-quick-view fancybox-fast-view hidden-sm hidden-xs" product_url="/products/may-giat-toshiba-tw-g500l" data-toggle='tooltip' title='Xem nhanh'><i class="icon-zoom-in2"></i><span class='hidden-md hidden-lg'> Xem nhanh</span></a>
                                                    </div>
                                                </div>
                                                <div class="product-desc">
                                                    <div class="product-title">
                                                        <h4><a href="{{route('wave.detail.product', $promotionalProduct->slug)}}">{{ $promotionalProduct->name }}</a></h4>
                                                    </div>
                                                </div>
                                                <div class="product-desc">
                                                    <div class="product-price">
                                                        <ins> {{ number_format($promotionalProduct->price) . 'đ' }}</ins>
                                                        <del>{{ number_format($promotionalProduct->price) . 'đ' }}</del>
                                                    </div>
                                                    <div class="haravan-product-reviews-badge" data-id="1020742272">  </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- end recent product -->
                                <!-- recent product -->
                                <div class="widget clearfix">
                                    <h4><a href='/blogs/news'>hướng dẫn sử dụng sản phẩm</a></h4>
                                    @foreach($userManual->posts as $value)
                                        <div id="post-list-footer" class='sidebar_menu'>

                                            <div class="spost clearfix">
                                                <div class="entry-image">
                                                    <a href="{{route('wave.news.detail', $value->slug)}}"><img src="{{asset('storage/' .$value->image)}}" alt="Liệu có an toàn khi uống nước trực tiếp từ máy lọc nước hay không?"></a>
                                                </div>
                                                <div class="entry-c">
                                                    <div class="entry-title">
                                                        <h4><a href="{{route('wave.news.detail', $value->slug)}}">{{$value->title}}</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <!-- end recent product -->
                                <!-- most popular -->
                                <div class="widget clearfix">
                                    <h4><a href='/collections/may-loc-khong-khi-nhat-bai'>Sản phẩm nổi bật</a></h4>
                                    <div id="Popular-item" class='sidebar_menu'>
                                        @foreach($featuredProducts as $featuredProduct)
                                        <div class="spost clearfix">
                                            <div class="entry-image">
                                                <a href="{{route('wave.detail.product', $featuredProduct->slug)}}"><img src="{{asset('storage/' .$featuredProduct->image)}}" alt="MÁY LỌC KHÍ DAIKIN MCK70P NHẬT NỘI ĐỊA"></a>
                                            </div>
                                            <div class="entry-c">
                                                <div class="entry-title">
                                                    <h4><a href="{{route('wave.detail.product', $featuredProduct->slug)}}">{{$featuredProduct->name}}</a></h4>
                                                </div>
                                                <ul class="entry-meta">
                                                    <li class="color">
                                                        <ins>{{number_format($featuredProduct->price) . 'đ'}}</ins>
                                                    </li>
                                                    <!--<li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i></li>-->
                                                </ul>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- end most popular -->
                                <!-- recent view -->
                                <div class="widget clearfix">
                                    <h4>Sản phẩm vừa xem</h4>
                                    <div class="widget-last-view sidebar_menu">
                                    </div>
                                </div>
                                <script>
                                    var $strHTML = get_viewed_items_html('');
                                    $('.widget .widget-last-view').html($strHTML);

                                </script>
                                <!-- end recent view -->
                                <div class="widget clearfix">
                                    <a href='https://www.facebook.com/shophangnhatbainoidia'><img src="//theme.hstatic.net/1000227124/1000685523/14/left_sidebar_banner.png?v=21" style='height:auto; width: 100%;'/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .sidebar end -->
                </div>
            </div>
        </section>
        <!-- #content end -->
        <script>
            /** align single element ***/
            $( document ).ready(function() {
                align_single_element();
            });
            var align_single_element = function() {
                var num_pro = $('#shop .product').length;
                if(num_pro % 2 == 1) {
                    $('#shop .product').last().addClass('product-last');
                }
            }
        </script>
        <!-- #content end -->
        <!-- Footer
           ============================================= --
    </body>
@endsection