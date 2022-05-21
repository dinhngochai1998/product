@extends('themes.layouts.app')

@section('content')
    <body  class="stretched no-transition product" >
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
                            <a href="/cart" id="top-cart-trigger"><img src='//theme.hstatic.net/1000227124/1000685523/14/cart_bg.png?v=21' ><span class='top_cart_qty'>1</span>
                            </a>
                            <div class="top-cart-content">
                                <div class="top-cart-title">
                                    <h4>Giỏ hàng</h4>
                                </div>
                                <div class="top-cart-items">
                                    <div class="top-cart-item clearfix">
                                        <input type="hidden" class="item_id" value="1067018197"/>
                                        <input type="hidden" class="item_qty" value="1"/>
                                        <input type="hidden" class="item_unit_price_not_formated" value="1100000000"/>
                                        <div class="top-cart-item-image">
                                            <a href="/products/may-giat-say-block-toshiba-g520"><img src="//product.hstatic.net/1000227124/product/ay-6kg-inverter-chuyen-dong-truc-tiep-86-750x500-removebg-preview1__1__f7efca8f1c32422a97059f9a5cea3167_small.jpg" alt="MÁY GIẶT SẤY NHIỆT TOSHIBA TW G520" /></a>
                                        </div>
                                        <div class="top-cart-item-desc">
                                            <a href="/products/may-giat-say-block-toshiba-g520">MÁY GIẶT SẤY NHIỆT TOSHIBA TW G520</a>
                                            <span class="top-cart-item-price">11,000,000₫</span>
                                            <span class="top-cart-item-quantity">x 1</span>
                                            <a class='top_cart_item_remove' onclick = 'deleteCart(1067018197);'><i class='icon-remove-sign'></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="top-cart-action clearfix">
                                    <span class="fleft top-checkout-price">11,000,000₫</span>
                                    <input type="hidden" class="top_cart_total_price_not_format" value="1100000000" />
                                    <button onclick='window.location.href="/cart"' class="button button-small nomargin fright">Xem giỏ hàng</button>
                                </div>
                            </div>
                        </div>
                        <a class='top_hotline col-sm-3 hidden-sm hidden-xs nopadding' href='tel:098 888 8642'><img src='//theme.hstatic.net/1000227124/1000685523/14/top_hotline.png?v=21' /></a>
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
    @include('product.header')
        <!-- #header end -->
        <!-- Content
           ============================================= -->
        <!-- BK CSS -->
        <link rel="stylesheet" href="https://pc.baokim.vn/css/bk.css">
        <!-- END BK CSS -->
        <style>
            .bk-btn .bk-btn-paynow {
                width: 49%;
                margin-right: 6px;
            }
            .bk-btn .bk-btn-installment {
                width: 49%;
                margin-right: 0px;
            }
            @media only screen and (max-width: 320px) {
                .bk-btn .bk-btn-paynow {
                    width: 100%;
                }
                .bk-btn .bk-btn-installment {
                    width: 100%;
                    margin-right: 0px;
                }
            }
            @media only screen and (max-width:439px) and (min-width:321px) {
                .bk-btn .bk-btn-paynow {
                    width: 100%;
                }
                .bk-btn .bk-btn-installment {
                    width: 100%;
                    margin-right: 0px;
                }
            }
            @media only screen and (min-width: 414px) and (max-width: 667px) {
                .bk-btn .bk-btn-paynow {
                    width: 100%;
                }
                .bk-btn .bk-btn-installment {
                    width: 100%;
                    margin-right: 0px;
                }
            }
            @media only screen and (max-width:767px) and (min-width:576px) {
                .bk-btn .bk-btn-paynow {
                    width: 100%;
                }
                .bk-btn .bk-btn-installment {
                    width: 100%;
                    margin-right: 0px;
                }
            }
            @media only screen and (max-width:1023px) and (min-width:768px) {
                .bk-btn .bk-btn-paynow {
                    width: 49%;
                }
                .bk-btn .bk-btn-installment {
                    width: 49%;
                    margin-right: 0px;
                }
            }
        </style>
        <script>
            $(document).ready(function() {
                var current_product = {"available":true,"compare_at_price_max":0.0,"compare_at_price_min":0.0,"compare_at_price_varies":false,"compare_at_price":0.0,"content":null,"description":"<p>&nbsp; &nbsp; &nbsp;- Bảo hành 12 tháng, 1 đổi 1 khi có lỗi</p><p>&nbsp;&nbsp;&nbsp;&nbsp; - Free ship 15km</p><p>&nbsp;&nbsp;&nbsp;&nbsp; - Tặng đổi nguồn 220v sang 100v giá 200.000</p><p>####</p><p>&nbsp; &nbsp; &nbsp; &nbsp;♦&nbsp;Website: <a href=\"https://l.facebook.com/l.php?u=https%3A%2F%2Fgiadungnhat.vn%2F%3Ffbclid%3DIwAR0TV2elalQ161HJWIe024AkqeoQqZcA-d2nzoPYAQAQE0EcGxzk46oFtSA&amp;h=AT3wu2fzjxrKdsifDzSiQXH1Th_55vMa82-NMHunfHl7BV_fAET2qyLGYwtvJWOvFrqqBlgC_KQRQTmrh-FmxYONrsO30jbGFT4oCgxRBCKEIKCvq4sL_sEKuklVyAVAeC9-vIar1UXsthSNCuI&amp;__tn__=-UK-R&amp;c%5b0%5d=AT0L2pHDbgammRuF55sVjZcelan_XqM4U2ZgCRdb1eUTt_1qny-SN9pCZ1mtXddwvbFEu2ivej1ABV27zt5dVDwBlv2LHC_5inFcwD1RsvZ81JDYhk2I7wCO4aHnJcjRyEbmhBpn-XXJ0XhOsDgafASLrqnDpf-Fx-Fp_yotEABM3eGNlpNCGbToK22kyfBp2g_kES6tmagbTHS9MwTDnKM\">https://giadungnhat.vn/</a></p><p>&nbsp; &nbsp; &nbsp; &nbsp;♦ Youtube hướng dẫn sản phẩm&nbsp;(tìm từ khóa - Hàng nhật Tuấn Hà):&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href=\"https://www.youtube.com/channel/UCKllovasXdzf6CVnc-6PI3A?fbclid=IwAR0E6Hi0NnZn7wMjOGwX7SpWKRDsctKdfk9Vw36--ZDINSs4kjllUSxkNI4\">https://www.youtube.com/channel/UCKllovasXdzf6CVnc-6PI3A</a></p><p>&nbsp; &nbsp; &nbsp; &nbsp;♦ Website hướng dẫn sửa lỗi sản phẩm- cách sử dụng tiếng Việt:&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href=\"https://hangnhattuanha.vn/\">https://hangnhattuanha.vn/</a></p><p>&nbsp; &nbsp; &nbsp; &nbsp;♦ FANPAGE : <a href=\"https://www.facebook.com/shophangnhatbainoidia\">https://www.facebook.com/shophangnhatbainoidia</a></p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_________________________________________</p><p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"https://www.facebook.com/hashtag/h%C3%A0ng_nh%E1%BA%ADt_tu%E1%BA%A5n_h%C3%A0?__eep__=6&amp;__cft__%5b0%5d=AZWuDevcUnbJDh_vu7TW1RMkH4GQmYanPfo8LhjpFPfUqE4jfMm-3JF_OMmuuXQ-85wQE5cBPTg-nQUET-bFl8qOd9ntk9rdEqGeSHOCASFLx_5V95fg4P77nC8kj-SSNdLXVeEhxpCqswDq0ZOM1A-sGtbGyvF4xeMTrQL53jCRBvbsgs1mFqUwJwyg4M_Y52w&amp;__tn__=*NK-R\">#Hàng_nhật_Tuấn_Hà</a> luôn rẻ - luôn chất lượng!</strong></p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; GIADUNGNHAT.VN: Số 2/603 Lạc Long Quân, Tây Hồ, Hà Nội</p><p>&nbsp; &nbsp; &nbsp; &nbsp;Hotline: 098 888 8642 - 098 888 4642</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bảo hành: 096666 2944</p><p>&nbsp; &nbsp; &nbsp; &nbsp;________________________________________</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hân hạnh được đón tiếp quý khách!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><p>####</p><p><strong>Tính năng nổi bật:</strong><br><img class=\"lazyloading\" src=\"https://congnghenhat.com/wp-content/uploads/2017/10/tick.png\">&nbsp;Công nghệ làm lạnh Frost Recycling<br><img class=\"lazyloading\" src=\"https://congnghenhat.com/wp-content/uploads/2017/10/tick.png\">&nbsp;Hút chân không công nghệ Photocatalyst<br><img class=\"lazyloading\" src=\"https://congnghenhat.com/wp-content/uploads/2017/10/tick.png\">&nbsp;Công nghệ kháng khuẩn – khử mùi<br><img class=\"lazyloading\" src=\"https://congnghenhat.com/wp-content/uploads/2017/10/tick.png\">&nbsp;Cửa điện trợ lực<br><strong>Bảo hành: 24 tháng</strong><br><strong>Chế độ sau bảo hành:&nbsp;</strong>Trong trường hợp sản phẩm bị trục trặc kỹ thuật khi hết thời gian bảo hành – nhận bảo trì cũng như sửa chữa dài hạn<br><strong>Hỗ trợ:</strong><br><img class=\"lazyloading\" src=\"https://congnghenhat.com/wp-content/uploads/2017/10/tick.png\">&nbsp;Vệ sinh, bảo dưỡng tủ lạnh định kỳ miễn phí 1 năm / 1 lần, trọn đời sản phẩm</p><p>####</p><p><strong>Dung tích:</strong>&nbsp;735L<br><strong>Xuất xứ:</strong>&nbsp;Nhật Bản<br><strong>Tình trạng:</strong>&nbsp;Hàng mới 100%<br><strong>Màu sắc:</strong>&nbsp;Xám pha lê / Gương pha lê<br><strong>Công nghệ:</strong>&nbsp;<a href=\"https://congnghenhat.com/tin-tuc/cong-nghe-inverter-la-gi.html\">Inverter</a>&nbsp;tiết kiệm điện<br><strong>Điện áp:</strong>&nbsp;100V</p>","featured_image":"https://product.hstatic.net/1000227124/product/thiet_ke_khong_ten_68c34684246947f8b390dca531651c9a.jpg","handle":"tu-lanh-hitachi-r-wx74j-735l","id":1017770762,"images":["https://product.hstatic.net/1000227124/product/thiet_ke_khong_ten_68c34684246947f8b390dca531651c9a.jpg"],"options":["Tiêu đề"],"price":7850000000.0,"price_max":7850000000.0,"price_min":7850000000.0,"price_varies":false,"tags":["Tủ lạnh Hitachi"],"template_suffix":null,"title":"Tủ lạnh Hitachi R-WX74J 735L","type":"Tủ lạnh","url":"/products/tu-lanh-hitachi-r-wx74j-735l","pagetitle":"Tủ lạnh Hitachi R-WX74J 735L","metadescription":"Dung tích: 735LXuất xứ: Nhật BảnTình trạng: Hàng mới 100%Màu sắc: Xám pha lê / Gương pha lêCông nghệ: Inverter tiết kiệm điệnĐiện áp: 100VTính năng nổi bật: Công nghệ làm lạnh Frost Recycling Hút chân không công nghệ Photocatalyst Công nghệ kháng khuẩn – khử mùi Cửa điện trợ lựcBảo hành: 24 thángChế độ sau bảo hành: Tr","variants":[{"id":1034599412,"barcode":null,"available":true,"price":7850000000.0,"sku":null,"option1":"tủ lạnh hitachi r wx74j","option2":"","option3":"","options":["tủ lạnh hitachi r wx74j"],"inventory_quantity":1,"old_inventory_quantity":1,"title":"tủ lạnh hitachi r wx74j","weight":0.0,"compare_at_price":0.0,"inventory_management":null,"inventory_policy":"deny","selected":false,"url":null,"featured_image":null}],"vendor":"Hitachi","published_at":"2018-11-21T03:02:08.365Z","created_at":"2018-11-21T03:02:08.451Z","not_allow_promotion":false};
                var strHTML = get_viewed_items_html(current_product);
                //console.log(current_product);
            });
        </script>
        <!-- Page Title
           ============================================= -->
        <section id="page-title">
            <div class="container clearfix">
                <div class="col-md-12">
                    <ol class="breadcrumb col-md-6 col-sm-6">
                        <li><a href="/">Trang chủ</a></li>
                        <li class='active'>Tủ lạnh Hitachi R-WX74J 735L</li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- #page-title end -->
        <!-- Content
           ============================================= -->
        <section id="content">
            <div class="content-wrap">
                <div class="container clearfix">
                    <div class="postcontent nobottommargin pull-right clearfix col-md-80 col-sm-9">
                        <div class='product-page'>
                            <div class="single-product">
                                <!--<form method="post" id="ProductDetailsForm" action="/???" crossorigin="anonymous">-->
                                <form method="post" id="ProductDetailsForm" action="/???" crossorigin="anonymous">
                                    <div class="product">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <!-- Product Single - Gallery
                                                   ============================================= -->
                                                <div class="product_image product-main-image">
                                                    <div id="surround" class="slider-wrap">
                                                        <img class="product-image-feature bk-product-image" src="{{asset('storage/' . $product->image)}}" alt="Tủ lạnh Hitachi R-WX74J 735L">
                                                        <a data-fancybox="gallery" class="gallery_show" href="//product.hstatic.net/1000227124/product/thiet_ke_khong_ten_68c34684246947f8b390dca531651c9a_master.jpg"><img src="//theme.hstatic.net/1000227124/1000685523/14/zoom-directions.png?v=21" class="img-responsive"/></a>
                                                        <div id="sliderproduct" class="">

                                                            <ul class="slides" class="owl-carousel owl-theme">
                                                                @foreach($product->productImages as $image)

                                                                    @php
                                                                        $images = json_decode($image->image) ?? [];
                                                                    @endphp
                                                                    @foreach($images as $value)
                                                                <li class="product-thumb">
                                                                    <a href="javascript:" data-image="{{asset('storage/' . $value)}}" data-zoom-image="{{asset('storage/' . $value)}}">
                                                                        <img alt="Tủ lạnh Hitachi R-WX74J 735L"  src="{{asset('storage/' . $value)}}" style="max-width: 100px; max-height: 100px">
                                                                    </a>
                                                                </li>
                                                                    @endforeach
                                                                @endforeach
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Single - Gallery End -->
                                            </div>
                                            <div class="col-sm-6 product-desc">
                                                <div class='page_title'>
                                                    <h1 class="bk-product-name">
                                                        {{$product->name}}
                                                    </h1>
                                                </div>
                                                <div class="short-review">
                                                    <ul class="list-inline">
                                                        <li>
                                                            <div class="haravan-product-reviews-badge" data-id="1017770762">  </div>
                                                        </li>
                                                        <li><a href="#tabs-3" id="scroll_review" ><i class="icon-pencil" aria-hidden="true"></i> Viết đánh giá</a></li>
                                                    </ul>
                                                </div>
                                                <!-- Product Single - Price
                                                   ============================================= -->
                                                <div class="product-price col-sm-12 col-md-12 noleftpadding">
                                                    <ins class="bk-product-price"> {{ number_format($product->price) . 'đ'}}</ins>
                                                </div>
                                                <!-- Product Single - Price End -->
                                                <div class="product-gift col-md-12 col-xs-12" style="background-color: #f2dede">
                                                    <div class="title">
                                                        <span class="icon-gift" aria-hidden="true"></span> Quà Tặng
                                                    </div>
                                                    <p>&nbsp; &nbsp; &nbsp;- Bảo hành 12 tháng, 1 đổi 1 khi có lỗi</p>
                                                    <p>&nbsp;&nbsp;&nbsp;&nbsp; - Free ship 15km</p>
                                                    <p>&nbsp;&nbsp;&nbsp;&nbsp; - Tặng đổi nguồn 220v sang 100v giá 200.000</p>
                                                    <p>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12 short-desc">

                                                    <p>{{ $product->sub_discription . 'đ'}}</p>


                                                </div>
                                                <div class="clear"></div>
                                                <div class="line"></div>
                                                <!-- Product Single - Quantity & Cart Button
                                                   ============================================= -->
                                                <input type="hidden" class='unit_price_not_formated' value="7850000000" />
                                                <input type="hidden" class="product_url" value="/products/tu-lanh-hitachi-r-wx74j-735l"/>
                                                <input type="hidden" class="product_title_hd" value="Tủ lạnh Hitachi R-WX74J 735L"/>
                                                <input type="hidden" class="product_img_small" value="//product.hstatic.net/1000227124/product/thiet_ke_khong_ten_68c34684246947f8b390dca531651c9a_master.jpg"/>
                                                <div class="hidden" style="">
                                                    <select id="product-select" name="id" >
                                                        <option value="1034599412" class="">tủ lạnh hitachi r wx74j - 78,500,000₫</option>
                                                    </select>
                                                </div>
                                                <!-- variants -->
                                                <div class="product-page-options ">
                                                    <div class="sizePicker" id = 'option-0'>
                                                        <label class="control-label options-title">Tiêu đề:</label>
                                                        <div class='options-selection'>
                                                            <select class="form-control input-sm">
                                                                <option data_size_code="tulanhhitachirwx74j" data_color_code="tulanhhitachirwx74j"  class="" value="tủ lạnh hitachi r wx74j" >
                                                                    tủ lạnh hitachi r wx74j
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end variant -->
                                                <!-- <form class="cart nobottommargin clearfix" method="post" enctype='multipart/form-data'>-->
                                                <div class=" col-xs-12 product-quantity clearfix noleftpadding">
                                                    <div class="quantity">
                                                        <label>Số lượng:</label>
                                                        <input type="button" value="-" class="minus">
                                                        <input type="text" id='product_quantity' readonly step="1" min="1"  name="quantity" value="1" title="Qty" class="qty bk-product-qty" size="4" />
                                                        <input type="button" value="+" class="plus">
                                                    </div>
                                                    <button type="submit" id='' class="add-to-cart icon-cart button nomargin col-xs-12 col-md-6 nopadding">Đặt hàng</button>
                                                </div>
                                                <!-- BK BUTTON -->
                                                <div class='bk-btn'></div>
                                                <!-- END BK BUTTON -->
                                                <script>
                                                    var quantity = parseInt($('#ProductDetailsForm .product-quantity input.qty').val());

                                                    $('#ProductDetailsForm .minus').click(function() {
                                                        if (quantity > 0) {
                                                            if (quantity == 1) {
                                                                $('#addtocart').attr('disabled','disabled');
                                                            }
                                                            quantity -= 1;
                                                        }
                                                        else {
                                                            quantity = 0;
                                                        }
                                                        $('#ProductDetailsForm .product-quantity input.qty').val(quantity);
                                                    });
                                                    $('#ProductDetailsForm  .plus').click(function() {
                                                        $('.add-to-cart').removeAttr('disabled');
                                                        if (quantity < 100) {
                                                            quantity += 1;
                                                        }
                                                        else {
                                                            quantity = 100;
                                                        }
                                                        $('#ProductDetailsForm .product-quantity input.qty').val(quantity);
                                                    });

                                                </script>
                                                <div class="clear"></div>
                                                <div class="line"></div>
                                                <!-- Product Single - Meta
                                                   ============================================= -->
                                                <div class="product-meta">
                                                    <div class="">
                                                        <div class="tagged_as">
                                                            <span><strong>Tags:</strong></span>
                                                            <a href="/collections/all/tu-lanh-hitachi" rel="tag">
                                                                Tủ lạnh Hitachi </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Single - Meta End -->
                                                <!-- Product Single - Share
                                                   ============================================= -->
                                                <div class="si-share noborder clearfix">
                                                    <div class='socical-wrapper'>
                                                        <ul class="social-icons">
                                                            <!-- check null: == nill -->
                                                            <div class="fb-send" data-href="/products/tu-lanh-hitachi-r-wx74j-735l"></div>
                                                            <div class="item">
                                                                <div class="fb-like fix_top" data-href="/products/tu-lanh-hitachi-r-wx74j-735l" data-layout="button" data-action="like" data-show-faces="true" data-share="true" style='margin-right: 5px;'></div>
                                                            </div>
                                                            <!-- old style: <li><a class="facebook" data-original-title="facebook" href="#"></a></li>   ...twitter,googleplus,evernote,tumblr -->
                                                            <script>
                                                                (function() {
                                                                    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                                                                    po.src = '//apis.google.com/js/plusone.js';
                                                                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                                                                })();
                                                            </script>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Product Single - Share End -->
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- sản phẩm bán cùng --
                                   <div class='clear'style='margin-bottom: 25px;'></div>
                                       <div class="col_full nobottommargin" >
                                           <div id="ovic_bundle_before_text" class="ovic_bundle-before-text ovic_bundle-text">Sản phẩm thường được mua cùng:</div>
                                           <table id="ovic_bundle_products" class="ovic_bundle-table ovic_bundle-products">
                                               <thead>
                                                   <tr>
                                                       <th></th>
                                                       <th class="thumb"></th>
                                                       <th class="item-product">Sản phẩm</th>
                                                       <th class="qty">Số lượng</th>
                                                       <th class="price-bundle">Giá</th>
                                                       <th class="discount">Giá chiết khấu</th>
                                                   </tr>
                                               </thead>
                                               <tbody>
                                                   <tr class="ovic_bundle-product" data-id="1034599412" data-price="7850000000" data-qty="0" data-sale="0">
                                                       <td class="ovic_bundle-check">
                                                           <label>
                                                               <input type="checkbox" class="input-text check" checked=""  disabled="">
                                                           </label>
                                                       </td>
                                                       <td class="ovic_bundle-thumb">
                                                           <div class="ovic_bundle-thumb-ori">
                                                               <img alt="Tủ lạnh Hitachi R-WX74J 735L" src="//product.hstatic.net/1000227124/product/thiet_ke_khong_ten_68c34684246947f8b390dca531651c9a_icon.jpg" alt="" />
                                                           </div>
                                                       </td>
                                                       <td class="ovic_bundle-title">
                                                           <div class="ovic_bundle-title-inner">
                                                               <a href="/products/tu-lanh-hitachi-r-wx74j-735l" target="_blank">Tủ lạnh Hitachi R-WX74J 735L</a>
                                                           </div>
                                                       </td>
                                                       <td class="ovic_bundle-qty">
                                                           <label>
                                                               <input type="number" class="input-text qty text" value="1" min="0" max="">
                                                           </label>
                                                       </td>
                                                       <td class="ovic_bundle-price">
                                                           <div class="ovic_bundle-price-ori">
                                                               <ins>
                                                                   <span class="woocommerce-Price-amount amount">0₫
                                                                   </span>
                                                               </ins>
                                                           </div>
                                                       </td>
                                                       <td class="ovic_bundle-total">
                                                           <div class="ovic_bundle-total-ori">
                                                               <span class="woocommerce-Price-amount amount">78,500,000₫
                                                               </span>
                                                           </div>
                                                           <div class="hidden compare_row">
                                                               -78,500,000₫
                                                           </div>
                                                           <div class="hidden total_row">
                                                               78,500,000₫
                                                           </div>
                                                       </td>
                                                   </tr>



                                               </tbody>
                                           </table>
                                           <div class="col-md-6 col-sm-6 col-xs-12">
                                               <button id="add_all" class="single_add_to_cart_button button alt">Đặt hàng</button>
                                           </div>
                                           <div class="col-md-6 col-sm-6 col-xs-12">
                                               <div class="ovic-bundle-subtotal text-right">
                                                   <div id="ovic_bundle_total" class="ovic_bundle-total ovic_bundle-text">Tổng: <span>78,500,000₫ </span> </div>
                                                   <div id="ovic_bundle_total_save" class="ovic_bundle-total-save ovic_bundle-text">Tiết kiệm:<span> -78,500,000₫ </span></div>
                                               </div>
                                           </div>
                                       </div>
                                   End sản phẩm bán cùng -->
                                <div class='clear'style='margin-bottom: 25px;'></div>
                                <div class="col_full nobottommargin" >
                                    <div class="tabs clearfix nobottommargin " id="tab-1">
                                        <ul class="tab-nav clearfix">
                                            <li class=''><a href="#tabs-1"><span class=""> Mô tả</span></a></li>
                                            <li class='image_gallery_tab'><a href="#tabs-2"><span class=""> Hình ảnh thực tế</span></a></li>
                                            <li class=''><a href="#tabs-3"><span class=""> Bình luận</span></a></li>
                                            <li class='tab-review'><a href="#tabs-4"><span class=""> Đánh giá</span></a></li>
                                        </ul>
                                        <div class="tab-container">
                                            <div class="tab-content clearfix " id="tabs-1">
                                                </p>
                                                <p>{{$product->discription}}</p>
                                                <p>
                                            </div>
                                            <div class="tab-content clearfix image_gallery_tab" id="tabs-2">
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                                        <a data-fancybox="gallery" href="{{route('wave.detail.product', $product->slug)}}" ><img src="{{asset('storage/' .$product->image)}}" class="img-responsive"/></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-content clearfix " id="tabs-3">
                                                <div id="fb-root"></div>
                                                <div class="fb-comments" data-href="https://giadungnhat.vn/products/tu-lanh-hitachi-r-wx74j-735l" data-numposts="5" width="100%" data-colorscheme="light"></div>
                                                <!-- script comment fb -->
                                            </div>
                                            <div class="tab-content clearfix tab-review" id="tabs-4">
                                                <div id="hrv-product-reviews" class="hrv-product-reviews" data-id="1017770762">
                                                    <div class="title-bl">
                                                        <h2>ĐÁNH GIÁ SẢN PHẨM</h2>
                                                    </div>
                                                    <div id="hrv-product-reviews-sub" style="width:100%">
                                                        <div class="hrv-product-reviews-summary" id="hrv-product-reviews-summary">
                                                        </div>
                                                        <div class="hrv-product-reviews-list" id="hrv-product-reviews-list">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-group hidden-lg hidden-sm hidden-xs hidden-md pd_description" id="accordion">
                                        <div class="panel panel-default ">
                                            <div class="panel-heading" role="tab" id="headingOne">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" style='width: 100%; display: block;'>
                                                        <i class="icon-align-justify2"></i><span class=""> Mô tả</span>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="panel-body">
                                                    </p>
                                                    <p><strong>Tính năng nổi bật:</strong><br><img class="lazyloading" src="https://congnghenhat.com/wp-content/uploads/2017/10/tick.png">&nbsp;Công nghệ làm lạnh Frost Recycling<br><img class="lazyloading" src="https://congnghenhat.com/wp-content/uploads/2017/10/tick.png">&nbsp;Hút chân không công nghệ Photocatalyst<br><img class="lazyloading" src="https://congnghenhat.com/wp-content/uploads/2017/10/tick.png">&nbsp;Công nghệ kháng khuẩn – khử mùi<br><img class="lazyloading" src="https://congnghenhat.com/wp-content/uploads/2017/10/tick.png">&nbsp;Cửa điện trợ lực<br><strong>Bảo hành: 24 tháng</strong><br><strong>Chế độ sau bảo hành:&nbsp;</strong>Trong trường hợp sản phẩm bị trục trặc kỹ thuật khi hết thời gian bảo hành – nhận bảo trì cũng như sửa chữa dài hạn<br><strong>Hỗ trợ:</strong><br><img class="lazyloading" src="https://congnghenhat.com/wp-content/uploads/2017/10/tick.png">&nbsp;Vệ sinh, bảo dưỡng tủ lạnh định kỳ miễn phí 1 năm / 1 lần, trọn đời sản phẩm</p>
                                                    <p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default ">
                                            <div class="panel-heading" id="headingTwo">
                                                <h4 class="panel-title">
                                                    <a style='width: 100%; display:block;' class="collapsed" data-toggle="collapse" href="#collapseTwo" >
                                                        <i class="icon-info-sign"></i><span class=""> Bình luận</span>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse in " role="tabpanel">
                                                <div class="panel-body">
                                                    <div id="fb-root"></div>
                                                    <div class="fb-comments" data-href="https://giadungnhat.vn/products/tu-lanh-hitachi-r-wx74j-735l" data-numposts="5" width="100%" data-colorscheme="light"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        // fb SDK v2.0
                                        (function(d, s, id) {
                                            var js, fjs = d.getElementsByTagName(s)[0];
                                            if (d.getElementById(id)) return;
                                            js = d.createElement(s); js.id = id;
                                            js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.0";
                                            fjs.parentNode.insertBefore(js, fjs);
                                        }(document, 'script', 'facebook-jssdk'));
                                    </script>
                                </div>
                                <div class='clear'style='margin-bottom: 25px;'></div>
                                <div class="col_full nobottommargin" >
                                    <div id="sale_index" class="clearfix">
                                        <h3 class="kuteshop-title">
                                            <span class="title">Sản phẩm nổi bật</span>
                                        </h3>
                                        <div class="row">
                                            <div class='col-lg-12 col-sm-12'>
                                                <div id="pr_col" class="owl-carousel owl-theme">
                                                    @foreach($featuredProducts as $featuredProduct)
                                                    <div class="item ">
                                                        <div class="product pr-item clearfix  product_single">
                                                            <div class="product-image">
                                                                <a href="{{route('wave.detail.product', $featuredProduct->slug)}}"><img  class="lazyload" data-src="{{asset('storage/' . $featuredProduct->image)}}"src="{{asset('storage/' . $featuredProduct->image)}}" alt="" class="img-responsive"></a>
                                                                <div class="product-overlay">
                                                                    <a class="add-to-cart disabled" data-toggle='tooltip' title='Hết hàng'><i class="icon-shopping-cart"></i><span class='hidden-lg hidden-md'> Hết hàng</span></a>
                                                                    <a href="#product-pop-up" class="item-quick-view fancybox-fast-view hidden-sm hidden-xs" product_url="/products/ghe-massage-nhat-noi-dia-taijutsu-as-2020-phien-ban-tri-lieu-date-2021-new-nguyen-hop" data-toggle='tooltip' title='Xem nhanh'><i class="icon-zoom-in2"></i><span class='hidden-md hidden-lg'> Xem nhanh</span></a>
                                                                </div>
                                                            </div>
                                                            <div class="product-desc">
                                                                <div class="product-title">
                                                                    <h4><a href="/products/ghe-massage-nhat-noi-dia-taijutsu-as-2020-phien-ban-tri-lieu-date-2021-new-nguyen-hop">{{$featuredProduct->name}}</a></h4>
                                                                </div>
                                                            </div>
                                                            <div class="product-desc">
                                                                <div class="product-price">
                                                                    <ins>{{ number_format($featuredProduct->price) . 'đ'}}</ins>
                                                                </div>
                                                                <div class="haravan-product-reviews-badge" data-id="1036056943">  </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- related products -->
                        <!-- end related products -->
                    </div>
                    <div class="sidebar nobottommargin nopadding left-sidebar col-md-20 col-sm-3">
                        <div class="sidebar-widgets-wrap">
                            <!-- begin: filters -->
                            <div class='hidden-xs hidden-sm'>
                                <!-- categories -->
                                <div class="widget widget_links clearfix">
                                    <h4>Danh mục sản phẩm</h4>
                                    <ul class='sidebar_menu'>
                                        <li>
                                            <a href="/collections/may-giat-nhat-noi-dia-nhat-bai">MÁY GIẶT</a>
                                            <i class='icon-angle-down'></i>
                                            <ul class='sidebar_submenu'>
                                                <li>
                                                    <a href="/collections/may-giat-nhat-bai-ban-chay-nhat">MÁY GIẶT BÁN CHẠY NHẤT</a>
                                                </li>
                                                <li>
                                                    <a href="/collections/may-giat-toshiba-nhat-bai">MÁY GIẶT TOSHIBA</a>
                                                </li>
                                                <li>
                                                    <a href="/collections/may-giat-panasonic-nhat-bai">MÁY GIẶT PANASONIC</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="/collections/tu-lanh-nhat-noi-dia-nhat-bai">TỦ LẠNH</a>
                                            <i class='icon-angle-down'></i>
                                            <ul class='sidebar_submenu'>
                                                <li>
                                                    <a href="/collections/tu-lanh-panasonic-noi-dia-nhat-bai">TỦ LẠNH PANASONIC</a>
                                                </li>
                                                <li>
                                                    <a href="/collections/tu-lanh-hitachi-noi-dia-nhat-bai">TỦ LẠNH HITACHI</a>
                                                </li>
                                                <li>
                                                    <a href="/collections/tu-lanh-toshiba-nhat-bai">TỦ LẠNH TOSHIBA</a>
                                                </li>
                                                <li>
                                                    <a href="/collections/tu-lanh-mitsubishi-nhat-bai">TỦ LẠNH MITSUBISHI</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="/collections/ghe-massage-cao-cap">GHẾ MASSAGE</a>
                                            <i class='icon-angle-down'></i>
                                            <ul class='sidebar_submenu'>
                                                <li>
                                                    <a href="/collections/ghe-massage-family-inada">GHẾ MASSAGE FAMILY INADA</a>
                                                </li>
                                                <li>
                                                    <a href="/collections/ghe-massage-taijutsu-dong-tri-lieu">GHẾ MASSAGE TAIJUTSU</a>
                                                </li>
                                                <li>
                                                    <a href="/collections/ghe-massage-panasonic-nhat-bai">GHẾ MASSAGE PANASONIC</a>
                                                </li>
                                                <li>
                                                    <a href="/collections/ghe-massage-fujikima">GHẾ MASSAGE FUJIKIMA</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="/collections/dieu-hoa-nhat-bai-noi-dia">ĐIỀU HÒA</a>
                                            <i class='icon-angle-down'></i>
                                            <ul class='sidebar_submenu'>
                                                <li>
                                                    <a href="/collections/dieu-hoa-nhat-bai-ban-chay-nhat">ĐIỀU HÒA BÁN CHẠY NHẤT</a>
                                                </li>
                                                <li>
                                                    <a href="/collections/dieu-hoa-fujitsu-nhat-bai">ĐIỀU HÒA FUJITSU</a>
                                                </li>
                                                <li>
                                                    <a href="/collections/dieu-hoa-panasonic-nhat-bai">ĐIỀU HÒA PANASONIC</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="/collections/may-loc-khong-khi-nhat-noi-dia">MÁY LỌC KHÔNG KHÍ</a>
                                            <i class='icon-angle-down'></i>
                                            <ul class='sidebar_submenu'>
                                                <li>
                                                    <a href="/collections/loc-khong-khi-hut-am-ban-chay-nhat">MÁY LỌC KHÔNG KHÍ  BÁN CHẠY NHẤT</a>
                                                </li>
                                                <li>
                                                    <a href="/collections/may-loc-khong-khi-nhat-bai">MÁY LỌC KHÔNG KHÍ NHẬT BÃI</a>
                                                </li>
                                                <li>
                                                    <a href="/collections/mang-than-hepa-may-loc-khong-khi">MÀNG THAN-HEPA MÁY LỌC KHÔNG KHÍ</a>
                                                </li>
                                                <li>
                                                    <a href="/collections/may-loc-khong-khi-moi-chinh-hang">MÁY LỌC KHÔNG KHÍ  NEW 100% CHÍNH HÃNG</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="/collections/may-hut-am-nhat-bai">MÁY HÚT ẨM</a>
                                            <i class='icon-angle-down'></i>
                                            <ul class='sidebar_submenu'>
                                                <li>
                                                    <a href="/collections/may-hut-am-nhat-bai-noi-dia">MÁY HÚT ẨM NHẬT BÃI</a>
                                                </li>
                                                <li>
                                                    <a href="/collections/may-hut-am-new-100-nhat-noi-dia">MÁY HÚT ẨM NEW 100% NHẬT NỘI ĐỊA</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="/collections/may-rua-bat-noi-com-dien-nhat">ĐỒ GIA DỤNG</a>
                                            <i class='icon-angle-down'></i>
                                            <ul class='sidebar_submenu'>
                                                <li>
                                                    <a href="/collections/may-rua-bat-noi-dia-nhat-bai">MÁY RỬA BÁT NHẬT NỘI ĐỊA</a>
                                                </li>
                                                <li>
                                                    <a href="/collections/noi-com-dien-nhat-bai">NỒI CƠM ĐIỆN NHẬT BÃI</a>
                                                </li>
                                                <li>
                                                    <a href="/collections/bep-tu-nhat-bai">BẾP TỪ NHẬT</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="/collections/may-loc-nuoc-nhat-bai">MÁY LỌC NƯỚC</a>
                                            <i class='icon-angle-down'></i>
                                            <ul class='sidebar_submenu'>
                                                <li>
                                                    <a href="/collections/may-loc-nuoc-toshiba">MÁY LỌC NƯỚC TOSHIBA</a>
                                                </li>
                                                <li>
                                                    <a href="/collections/may-loc-nuoc-panasonic">MÁY LỌC NƯỚC PANASONIC</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end categories -->
                                <!-- recent product -->
                                <div class="widget clearfix">
                                    <h4><a href='/collections/may-giat-nhat-noi-dia-nhat-bai'>Sản phẩm khuyến mãi</a></h4>
                                    <div id="post-list-footer" class='sidebar_menu'>
                                        @foreach($promotionalProducts as $value)
                                        <div class="item ">
                                            <div class="product pr-item clearfix  product_single">
                                                <div class="product-image">
                                                    <a href="{{route('wave.detail.product', $value->slug)}}"><img  class="lazyload" data-src="{{asset('storage/' . $value->image)}}"src="{{asset('storage/' . $value->image)}}" alt="MÁY GIẶT SẤY NHIỆT TOSHIBA TW G500" class="img-responsive"></a>
                                                    <div class="product-overlay">
                                                        <a href="/products/may-giat-toshiba-tw-g500l" class="add-to-cart product_quick_add" data-toggle='tooltip' title='Thêm vào giỏ'><i class="icon-shopping-cart"></i><span class='hidden-md hidden-lg'> Thêm vào giỏ</span></a>
                                                        <a href="{{route('wave.detail.product', $value->slug)}}" class="item-quick-view fancybox-fast-view hidden-sm hidden-xs" product_url="/products/may-giat-toshiba-tw-g500l" data-toggle='tooltip' title='Xem nhanh'><i class="icon-zoom-in2"></i><span class='hidden-md hidden-lg'> Xem nhanh</span></a>
                                                    </div>
                                                </div>
                                                <div class="product-desc">
                                                    <div class="product-title">
                                                        <h4><a href="/products/may-giat-toshiba-tw-g500l">{{$value->name}}</a></h4>
                                                    </div>
                                                </div>
                                                <div class="product-desc">
                                                    <div class="product-price">
                                                        <ins> {{number_format($value->sub_price) . 'đ'}} </ins>
                                                        <del>{{number_format($value->price) . 'đ'}} </del>
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
                                    <div id="post-list-footer" class='sidebar_menu'>
                                        <div class="spost clearfix">
                                            <div class="entry-image">
                                                <a href="/blogs/news/lieu-co-an-toan-khi-uong-nuoc-truc-tiep-tu-may-loc-nuoc-hay-khong"><img src="//file.hstatic.net/1000227124/article/may-loc-nuoc-nhat-ban-phong-vu-1-1024x773_bde3b26f6080429592eb029729fe9f8e_medium.png" alt="Liệu có an toàn khi uống nước trực tiếp từ máy lọc nước hay không?"></a>
                                            </div>
                                            <div class="entry-c">
                                                <div class="entry-title">
                                                    <h4><a href="/blogs/news/lieu-co-an-toan-khi-uong-nuoc-truc-tiep-tu-may-loc-nuoc-hay-khong">Liệu có an toàn khi uống nước trực tiếp từ máy lọc nước hay không?</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="spost clearfix">
                                            <div class="entry-image">
                                                <a href="/blogs/news/dung-may-khong-khi-ca-ngay-co-tot-khong"><img src="//file.hstatic.net/1000227124/article/may-loc-khong-khi-sharp-kc-h50-2_2ec1b3b2d28045659f894669d08f1119_medium.png" alt="Dùng máy không khí cả ngày có tốt không?"></a>
                                            </div>
                                            <div class="entry-c">
                                                <div class="entry-title">
                                                    <h4><a href="/blogs/news/dung-may-khong-khi-ca-ngay-co-tot-khong">Dùng máy không khí cả ngày có tốt không?</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="spost clearfix">
                                            <div class="entry-image">
                                                <a href="/blogs/news/su-dung-may-loc-khong-khi-nhu-the-nao-cho-dung"><img src="//file.hstatic.net/1000227124/article/269833353177938_7706911392074301440_n_02ec41d7567547f2a325a264350d747e_043d0780047c4088a8fe77a0bb2ef5e6_medium.jpg" alt="Sử dụng máy lọc không khí như thế nào cho đúng?"></a>
                                            </div>
                                            <div class="entry-c">
                                                <div class="entry-title">
                                                    <h4><a href="/blogs/news/su-dung-may-loc-khong-khi-nhu-the-nao-cho-dung">Sử dụng máy lọc không khí như thế nào cho đúng?</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end recent product -->
                                <!-- most popular -->
                                <div class="widget clearfix">
                                    <h4><a href='/collections/may-loc-khong-khi-nhat-bai'>Sản phẩm nổi bật</a></h4>
                                    <div id="Popular-item" class='sidebar_menu'>
                                        @foreach($featuredProducts as $featuredProduct)
                                        <div class="spost clearfix">
                                            <div class="entry-image">
                                                <a href="{{route('wave.detail.product', $featuredProduct->slug)}}"><img src="{{asset('storage/' . $featuredProduct->image)}}" alt=""></a>
                                            </div>
                                            <div class="entry-c">
                                                <div class="entry-title">
                                                    <h4><a href="{{route('wave.detail.product',$featuredProduct->slug)}}">{{ $featuredProduct->name }}</a></h4>
                                                </div>
                                                <ul class="entry-meta">
                                                    <li class="color">
                                                        <ins>{{ number_format($featuredProduct->price) . 'đ'}}</ins>
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
                </div>
            </div>
        </section>
        <!-- BK MODAL -->
        <div id='bk-modal'></div>
        <!-- END BK MODAL -->
        <script>
            $(".product-thumb img").click(function(){
                $(".product-thumb").removeClass('active');
                $(this).parents('li').addClass('active');
                $(".product-image-feature").attr("src",$(this).attr("data-image"));
                $(".gallery_show").attr("href",$(this).attr("data-image"));
                $(".product-image-feature").attr("data-zoom-image",$(this).attr("data-zoom-image"));
            });

            $(".product-thumb").first().addClass('active');

        </script>
        <script>
            $(document).ready(function(){
                $('#sliderproduct .slides').owlCarousel({
                    items: 5,
                    nav: true,
                    dots: false,
                    margin: 5,
                    slideSpeed: 1000,
                    navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>']
                });
                $('#pr_col').owlCarousel({
                    items: 4,
                    nav: true,
                    dots: false,
                    margin: 15,
                    responsive : {
                        // breakpoint from 0 up
                        0 : {
                            items: 2
                        },
                        768 : {
                            items: 2
                        },
                        1200 : {
                            items: 4
                        }
                    },
                    slideSpeed: 1000,
                    navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>']
                });
                if($(window).width() > 960){

                    $(".product-image-feature").elevateZoom({
                        zoomType				: "inner",
                        cursor: "default",
                        gallery:'sliderproduct'
                    });
                } else {

                }
                $('.slide-next').click(function(){
                    if($(".product-thumb.active").prev().length>0){
                        $(".product-thumb.active").prev().find('img').click();
                    }
                    else{
                        $(".product-thumb:last img").click();
                    }
                });
                $('.slide-prev').click(function(){
                    if($(".product-thumb.active").next().length>0){
                        $(".product-thumb.active").next().find('img').click();
                    }
                    else{
                        $(".product-thumb:first img").click();
                    }
                });
                $("#scroll_review").click(function(){
                    var height = $("div#tab-1").offset().top - 100;
                    $('html,body').animate({scrollTop: height}, 1000);
                    $("a#ui-id-3").trigger("click");
                });


            });

        </script>
        <script>
            $(document).ready(function(){
                function subPrice() {
                    var total_all = 0;
                    var compare_all = 0;
                    $("#ovic_bundle_products .ovic_bundle-product").each(function(){
                        if ($(this).find('.ovic_bundle-check input').is(':checked')  ){
                            var text = $(this).find(".ovic_bundle-total .total_row").html().replace(/\D/g, '');
                            var text_com = $(this).find(".ovic_bundle-total .compare_row").html().replace(/\D/g, '');
                            total_all = total_all + parseInt(text);
                            compare_all = compare_all + parseInt(text_com);
                        }
                    });
                    $(".ovic-bundle-subtotal div#ovic_bundle_total span").html(Haravan.formatMoney(total_all * 100));
                    $(".ovic-bundle-subtotal div#ovic_bundle_total_save span").html(Haravan.formatMoney(compare_all * 100));
                };
                subPrice();
                $(document).on('change', 'td.ovic_bundle-qty .qty', function () {
                    clearTimeout(200);
                    if ($(this).parent().parent().parent().find('.ovic_bundle-check input').is(':checked')  ){
                        var qty = parseInt($(this).val().replace(/\D/g, ''));
                        var price = $(this).parent().parent().parent().find(".ovic_bundle-price-ori span").text().replace(/\D/g, '');
                        var compare_price = $(this).parent().parent().parent().find(".ovic_bundle-total-ori span").text().replace(/\D/g, '');
                        var total = qty * price *100;
                        var com = compare_price * qty * 100;
                        $(this).parent().parent().parent().find(".total_row").html(Haravan.formatMoney(total));
                        $(this).parent().parent().parent().find(".compare_row").html(Haravan.formatMoney(total - com));
                    }else{
                        $(this).parent().parent().parent().find(".total_row").html(Haravan.formatMoney(0));
                        $(this).parent().parent().parent().find(".compare_row").html(Haravan.formatMoney(0));
                    }
                    subPrice();
                });
                $(document).on('change', 'td.ovic_bundle-check input', function () {
                    clearTimeout(200);
                    if ($(this).parent().parent().parent().find('.ovic_bundle-check input').is(':checked')  ){
                    }else{
                        $(this).parent().parent().parent().find(".total_row").html(Haravan.formatMoney(0));
                        $(this).parent().parent().parent().find(".compare_row").html(Haravan.formatMoney(0));
                    }
                    subPrice();
                });
                $(document).on('click', '#add_all', function () {
                    $("#ovic_bundle_products .ovic_bundle-product").each(function(){
                        if ($(this).find('.ovic_bundle-check input').is(':checked')  ){
                            var id = $(this).attr("data-id");
                            var quantity = $(this).find("td.ovic_bundle-qty input").val();
                            var params = {
                                type: 'POST',
                                url: '/cart/add.js',
                                data: 'quantity=' + quantity + '&id=' + id,
                                dataType: 'json',
                                success: function(line_item) {
                                    var currentIMG = '';
                                    currentIMG = $(this).find('td.ovic_bundle-thumb img');
                                    quickAddProduct($(this).find(".ovic_bundle-title a").attr('href'));
                                    window.location = '/cart';
                                },
                                error: function(XMLHttpRequest, textStatus) {
                                    Haravan.onError(XMLHttpRequest, textStatus);
                                }
                            };
                            jQuery.ajax(params);
                        }
                    });
                });
            });

        </script>
        <!-- BK JS -->
        <script src="https://pc.baokim.vn/js/bk_plus_v2.popup.js"></script>
        <!-- END BK JS -->
        <!-- #content end -->
        <footer id="footer" class='dark'>
            <div class="container">
                <!-- Footer Widgets
                   ============================================= -->
                <div class="footer-widgets-wrap clearfix footer_wrap_2">
                    <div class="prefooter_one col-sm-3 col-xs-6">
                        <div class="widget clearfix">
                            <a href='' class='footer_logo'><img class="lazyload" src="../assets/images/icons/lazyload.jpg" data-src='../assets/images/icons/footer_logo.png?v=21' /></a>
                            <p>
                            <p>Chúng tôi tin chất lượng - uy tín với khách hàng là dịch vụ tốt nhất.</p>
                            </p>
                        </div>
                    </div>
                    <div class="prefooter_one col-sm-3 col-xs-6">
                        <div class="widget widget_links clearfix">
                            <h4>LIÊN HỆ VỚI CHÚNG TÔI NHÉ</h4>
                            <ul>
                                <li><a href="/">QUAY LẠI TRANG CHÍNH</a></li>
                                <li><a href="/blogs/news">HƯỚNG DẪN SỬ DỤNG SẢN PHẨM</a></li>
                                <li><a href="/collections/all">TẤT CẢ SẢN PHẨM</a></li>
                                <li><a href="https://www.facebook.com/shophangnhatbainoidia">FANPAGE BÁN HÀNG CHÍNH</a></li>
                            </ul>
                        </div>
                        <div class='marginbottom hidden-lg hidden-md hidden-sm'>
                        </div>
                    </div>
                    <div class="prefooter_one col-sm-3 col-xs-6">
                        <div class="widget widget_links clearfix">
                            <h4>Đia chỉ cửa hàng </h4>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.1399329237706!2d105.80836201432503!3d21.067072585977645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab14366a79ed%3A0x160026bc6e678199!2zU2hvcCBow6BuZyBOaOG6rXQgQsOjaSBO4buZaSDEkOG7i2EgLSBnaWFkdW5nbmhhdC4gVm4!5e0!3m2!1sen!2s!4v1540694096425" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <div class='marginbottom hidden-lg hidden-md hidden-sm'>
                        </div>
                    </div>
                    <div class="prefooter_one col-sm-3 col-xs-6">
                        <div class="widget widget_links clearfix">
                            <h4>Liên hệ 098 888 8642 -098 888 4642</h4>
                            <p>giadungnhat.vn phân phối ghế massage , tủ lạnh, điều hòa , máy giặt , lọc không khí, máy hút ẩm Nhật nội địa chất lượng nhất</p>
                            <address>
                                <img src='../assets/images/icons/pre_footer_address_icon2.png' />
                                <span>Số 2 ngõ 603 Lạc Long Quân -Quận Tây Hồ , Hà Nội</span> <br>
                                <img src='../assets/images/icons/pre_footer_phone_icon2.png' />
                                <a href='tel:098 888 8642'>098 888 8642</a> <br>
                                <img src='../assets/images/icons/pre_footer_email_icon2.png' />
                                <a href='mailto:phamtuandca@gmail.com'>phamtuandca@gmail.com</a>
                            </address>
                            <div class="footer_more_info">
                                Hộ kinh doanh: Phạm Nguyễn Tuấn <br>
                                Đkkd: 01B8011516 do UBND Q.Tây Hồ cấp ngày: 04/11/2016 <br>
                                ĐC: Số 2 ngõ 603 Lạc Long Quân
                                , P.Xuân La, Q.Tây Hồ, Hà Nội
                            </div>
                        </div>
                        <div class='marginbottom hidden-lg hidden-md hidden-sm'>
                        </div>
                    </div>
                </div>
                <!-- .footer-widgets-wrap end -->
                <div class="tag_content">
                    <div class="row" style="margin:0">
                        <div class="col-sm-9 col-xs-12">
                            <div class="seo_keyword">
                                <ul class="content-seo list-inline">
                                    <li><span class="title-seo">truy cập nhanh:</span></li>
                                    <li class="seo-item">
                                        <a href="/collections/dieu-hoa-nhat-bai-ban-chay-nhat" target="_self"> ĐIỀU HÒA BÁN CHẠY NHẤT </a>
                                    </li>
                                    <li class="seo-item">
                                        <a href="/collections/dieu-hoa-fujitsu-nhat-bai" target="_self"> ĐIỀU HÒA FUJITSU </a>
                                    </li>
                                    <li class="seo-item">
                                        <a href="/collections/dieu-hoa-panasonic-nhat-bai" target="_self"> ĐIỀU HÒA PANASONIC </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="seo_keyword">
                                <ul class="content-seo list-inline">
                                    <li><span class="title-seo">truy cập nhanh:</span></li>
                                    <li class="seo-item">
                                        <a href="/collections/may-giat-nhat-bai-ban-chay-nhat" target="_self"> MÁY GIẶT BÁN CHẠY NHẤT </a>
                                    </li>
                                    <li class="seo-item">
                                        <a href="/collections/may-giat-toshiba-nhat-bai" target="_self"> MÁY GIẶT TOSHIBA </a>
                                    </li>
                                    <li class="seo-item">
                                        <a href="/collections/may-giat-panasonic-nhat-bai" target="_self"> MÁY GIẶT PANASONIC </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="seo_keyword">
                                <ul class="content-seo list-inline">
                                    <li><span class="title-seo">truy cập nhanh:</span></li>
                                    <li class="seo-item">
                                        <a href="/collections/tu-lanh-panasonic-noi-dia-nhat-bai" target="_self"> TỦ LẠNH PANASONIC </a>
                                    </li>
                                    <li class="seo-item">
                                        <a href="/collections/tu-lanh-hitachi-noi-dia-nhat-bai" target="_self"> TỦ LẠNH HITACHI </a>
                                    </li>
                                    <li class="seo-item">
                                        <a href="/collections/tu-lanh-toshiba-nhat-bai" target="_self"> TỦ LẠNH TOSHIBA </a>
                                    </li>
                                    <li class="seo-item">
                                        <a href="/collections/tu-lanh-mitsubishi-nhat-bai" target="_self"> TỦ LẠNH MITSUBISHI </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="seo_keyword">
                                <ul class="content-seo list-inline">
                                    <li><span class="title-seo">truy cập nhanh:</span></li>
                                    <li class="seo-item">
                                        <a href="/collections/loc-khong-khi-hut-am-ban-chay-nhat" target="_self"> MÁY LỌC KHÔNG KHÍ BÁN CHẠY NHẤT </a>
                                    </li>
                                    <li class="seo-item">
                                        <a href="/collections/may-loc-khong-khi-moi-chinh-hang" target="_self"> MÁY LỌC KHÔNG KHÍ NEW 100% CHÍNH HÃNG </a>
                                    </li>
                                    <li class="seo-item">
                                        <a href="/collections/may-loc-khong-khi-nhat-bai" target="_self"> MÁY LỌC KHÔNG KHÍ NHẬT BÃI </a>
                                    </li>
                                    <li class="seo-item">
                                        <a href="/collections/mang-than-hepa-may-loc-khong-khi" target="_self"> MÀNG THAN-HEPA MÁY LỌC KHÍ </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="seo_keyword">
                                <ul class="content-seo list-inline">
                                    <li><span class="title-seo">truy cập nhanh:</span></li>
                                    <li class="seo-item">
                                        <a href="/collections/ghe-massage-family-inada" target="_self"> GHẾ MASSAGE FAMILY INADA </a>
                                    </li>
                                    <li class="seo-item">
                                        <a href="/collections/ghe-massage-taijutsu-dong-tri-lieu" target="_self"> GHẾ MASSAGE TAIJUTSU </a>
                                    </li>
                                    <li class="seo-item">
                                        <a href="/collections/ghe-massage-panasonic-nhat-bai" target="_self"> GHẾ MASSAGE PANASONIC </a>
                                    </li>
                                    <li class="seo-item">
                                        <a href="/collections/ghe-massage-fujikima" target="_self"> GHẾ MASSAGE FUJIKIMA </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-12 prefooter_one">
                            <div class="widget widget_links clearfix">
                                <h4>máy rửa bát</h4>
                                <ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='payment_block'>
                    <h4>Hình thức thanh toán</h4>
                    <img class="lazyload" src="{{asset('images/icons/lazyload.jpg')}}" data-src='../assets/images/icons/payment_img.png' />
                </div>
            </div>
            <div id="footer_tag">
                <div class="container clearfix">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                    </div>
                </div>
            </div>
            <!-- Copyrights
               ============================================= -->
            <div id="copyrights">
                <div class="container clearfix">
                    <div class="col_half">
                        © Bản quyền thuộc về <a href="" target="_blank">Giadungnhat</a>.
                        <a href="http://online.gov.vn/CustomWebsiteDisplay.aspx?DocId=60878" target="_blank" rel="noopener noreferrer">
                            <noscript data-img="https://simdulich.com.vn/wp-content/uploads/2019/09/BCT-simdulich.png" data-webp="https://simdulich.com.vn/wp-content/uploads/2019/09/BCT-simdulich.png.webp" data-alt="bct-simdulich" data-title="Simdulich.com.vn Đã thông báo Bộ Công Thương" class=""><img src="https://simdulich.com.vn/wp-content/uploads/2019/09/BCT-simdulich.png" alt="bct-simdulich" title="Simdulich.com.vn Đã thông báo Bộ Công Thương"></noscript>
                            <img src="https://simdulich.com.vn/wp-content/uploads/2019/09/BCT-simdulich.png.webp" alt="bct-simdulich" title="Giadungnhat Đã thông báo Bộ Công Thương" style="width: 117px;">
                        </a>
                        <div class="copyright-links">
                        </div>
                    </div>
                    <div class="col_half col_last tright">
                        098 888 8642 tuấn
                    </div>
                </div>
            </div>
            <!-- #copyrights end -->
        </footer>
        <script>
            !function(window){
                var $q = function(q, res){
                        if (document.querySelectorAll) {
                            res = document.querySelectorAll(q);
                        } else {
                            var d=document
                                , a=d.styleSheets[0] || d.createStyleSheet();
                            a.addRule(q,'f:b');
                            for(var l=d.all,b=0,c=[],f=l.length;b<f;b++)
                                l[b].currentStyle.f && c.push(l[b]);

                            a.removeRule(0);
                            res = c;
                        }
                        return res;
                    }
                    , addEventListener = function(evt, fn){
                        window.addEventListener
                            ? this.addEventListener(evt, fn, false)
                            : (window.attachEvent)
                                ? this.attachEvent('on' + evt, fn)
                                : this['on' + evt] = fn;
                    }
                    , _has = function(obj, key) {
                        return Object.prototype.hasOwnProperty.call(obj, key);
                    }
                ;

                function loadImage (el, fn) {
                    var img = new Image()
                        , src = el.getAttribute('data-src');
                    img.onload = function() {
                        if (!! el.parent)
                            el.parent.replaceChild(img, el)
                        else
                            el.src = src;

                        fn? fn() : null;
                    }
                    img.src = src;
                }

                function elementInViewport(el) {
                    var rect = el.getBoundingClientRect()

                    return (
                        rect.top    >= 0
                        && rect.left   >= 0
                        && rect.top <= (window.innerHeight || document.documentElement.clientHeight)
                    )
                }

                var images = new Array()
                    , query = $q('img.lazy')
                    , processScroll = function(){
                        for (var i = 0; i < images.length; i++) {
                            if (elementInViewport(images[i])) {
                                loadImage(images[i], function () {
                                    images.splice(i, i);
                                });
                            }
                        };
                    }
                ;
                // Array.prototype.slice.call is not callable under our lovely IE8
                for (var i = 0; i < query.length; i++) {
                    images.push(query[i]);
                };

                processScroll();
                addEventListener('scroll',processScroll);

            }(this);
        </script>
        <!-- #footer end -->
    </div>
    <!-- #wrapper end -->
    <div class="phone-gif">
        <div class="fancybox" onclick="window.location='tel:098 888 8642'">
            <div class="coccoc-alo-phone coccoc-alo-green coccoc-alo-show" id="coccoc-alo-phoneIcon" style="right: 5%; top: 10%;">
                <div class="coccoc-alo-ph-circle">&nbsp;</div>
                <div class="coccoc-alo-ph-circle-fill">&nbsp;</div>
                <div class="coccoc-alo-ph-img-circle">&nbsp;</div>
            </div>
        </div>
        <div class="clicktocall">
            <a class="call" href="tel:098 888 8642">
                Mr Tuấn<br />
                <b>098 888 8642</b>
            </a>
        </div>
        <div class="clicktocall">
            <a class="call" href="tel:098 888 4642">
                Mrs Hà<br />
                <b>098 888 4642</b>
            </a>
        </div>
        <div class="clicktocall">
            <a class="call" href="tel:096 666 2944">
                Bảo hành 24/7<br />
                <b>096 666 2944</b>
            </a>
        </div>
    </div>
    <!-- Go To Top
       ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>
    <!-- Footer Scripts
       ============================================= -->
    <script src='{{asset('js/functions.js')}}' type='text/javascript'></script>
    <!-- quick add cart -->
    <div id='product-pop-up' style="display:none;" class="single-product shop-quick-view-ajax clearfix">
        <div class="ajax-modal-title">
            <a href=''>
                <h2>Pink Printed Dress</h2>
            </a>
        </div>
        <div class="product-page product modal-padding clearfix">
            <div class="col_half nobottommargin">
                <div class="product-image">
                    <div class="product-main-image">
                        <ul class="pgwSlideshow">
                        </ul>
                    </div>
                    <div class="sale-flash">Sale!</div>
                </div>
            </div>
            <div class="col_half nobottommargin col_last product-desc">
                <div class="product-price"> <ins style='margin-right: 5px;'>$24.99</ins> <del>$39.99</del></div>
                <div class="clear"></div>
                <div class="line"></div>
                <!-- variants -->
                <div class="product-page-options ">
                    <div class="sizePicker">
                        <label class="control-label options-title">Kích thước:</label>
                        <div class='options-selection'>
                            <select class="form-control input-sm size"></select>
                        </div>
                    </div>
                    <div class="sizePicker">
                        <label class="control-label options-title">Màu sắc:</label>
                        <div class='options-selection'>
                            <select class="form-control input-sm color" style='color:#555!important;'></select>
                        </div>
                    </div>
                    <div class="sizePicker">
                        <label class="control-label options-title">Chất liệu:</label>
                        <div class='options-selection'>
                            <select class="form-control input-sm material"></select>
                        </div>
                    </div>
                </div>
                <!-- end variant -->
                <!-- Product Single - Quantity & Cart Button
                   ============================================= -->
                <form id='ProductDetailsFormQV' class="cart nobottommargin clearfix">
                    <div class="quantity product-quantity clearfix col-xs-6 noleftpadding">
                        <input type="button" value="-" class="minus">
                        <input type="text" class='qty' id='product_quantity' readonly step="1" min="1"  name="quantity" value="1" title="Qty" class="qty" size="4" />
                        <input type="button" value="+" class="plus">
                    </div>
                    <script></script>
                    <div class="hidden" style="">
                        <select id="product-select-qw" name="id" >
                        </select>
                        <input type="hidden" class="unit_price_not_formated"  value="" >
                        <input type="hidden" class="product_url" value="">
                        <input type="hidden" class="product_title_hd" value="">
                        <input type="hidden" class="product_img_small" value="">
                    </div>
                    <button type="submit" id='addtocartQV' class="addtocartQV button nomargin col-xs-6">Add to cart</button>
                    <button class='buy_btn button col-xs-12 buynow' id='buynow'>Mua ngay</button>
                </form>
                <!-- Product Single - Quantity & Cart Button End -->
                <div class="clear"></div>
                <div class="line"></div>
                <p class="description">Libero velit id eaque ex quae laboriosam nulla optio doloribus! Perspiciatis, libero, neque, perferendis at nisi optio dolor!</p>
            </div>
        </div>
    </div>
    <script>
        var callBackQV = function(variant, selector) {
            // console.log('callBackQV  is functioning...');

            var $tagPrice = '#product-pop-up .product-price ins';
            var $tagPriceCompare = '#product-pop-up .product-price del';
            var $tagProductSection = '#ProductDetailsFormQV';
            update_variant(variant, $tagPrice, $tagPriceCompare, '#addtocartQV', $tagProductSection);

        }

        /*
        *  strip_html_js
        *
        * ref: http://stackoverflow.com/questions/822452/strip-html-from-text-javascript
        * author phong.nguyen 20150806
        */
        function strip_html_js(html)
        {
            var tmp = document.createElement("DIV");
            tmp.innerHTML = html;
            return tmp.textContent || tmp.innerText || "";
        }

        var quickViewProduct = function (purl) {
            alert(purl);
            // if ($(window).width() < 680) { window.location = purl; return false; }
            // modal = $('#quick-view-modal'); modal.modal('show');
            $.ajax({
                url: purl + '.js',
                async: false,
                success: function (product) {

                    //console.log('quick view...asd01');
                    //make-up "product-pop-up"

                    //
                    if (product.images.length == 0) {
                        $('#product-pop-up .product-main-image img').attr('src', '//hstatic.net/0/0/global/noDefaultImage6_large.gif');
                    }
                    else{
                        var html = '';
                        $('#product-pop-up .product-main-image .pgwSlideshow').remove();
                        html = '<ul class="pgwSlideshow">';
                        $.each(product.images, function (i, v) {
                            html += '<li><img src="'+ v +'" data-large-src="'+ v +'"></li>';
                        });
                        html+='</ul>';
                        $('#product-pop-up .product-main-image').html(html);
                        var iflag = 0;
                        $('#product-pop-up .product-main-image img').load(function () {
                            iflag++;
                            if (iflag == $('#product-pop-up .product-main-image img').length) {

                                $('.pgwSlideshow').pgwSlideshow();
                            }
                        });

                    }//end images length


                    // render basic info. main img, desc, qty, ...
                    var $strDesc = strip_html_js(product.description);
                    {{--var $strPrice = Haravan.formatMoney(product.price, "{{amount}} VND") + 'đ';--}}
                    {{--var $strComparePrice = Haravan.formatMoney(product.compare_at_price, "{{amount}} VND") + 'đ';--}}
                    $('#product-pop-up .description').html($strDesc.split(" ").splice(0,50).join(" ")+' ...');   // truncate 250 words
                    $('#product-pop-up .ajax-modal-title h2').html(product.title);
                    $('#product-pop-up .ajax-modal-title a').attr('href',purl);
                    $('#product-pop-up .product-price ins').html($strPrice);
                    if (product.price < product.compare_at_price) {
                        $('#product-pop-up .product-price del').html($strComparePrice);
                    }
                    else {
                        $('#product-pop-up .product-price del').html('');
                        $('#product-pop-up .sale-flash').hide();
                    }
                    $('#product-pop-up .qty').val(1);
                    var quantity = parseInt($('#ProductDetailsFormQV .product-quantity input.qty').val());
                    $('#ProductDetailsFormQV .minus').click(function() {
                        if (quantity > 0) {
                            if (quantity == 1) {
                                $('#addtocartQV').attr('disabled','disabled');
                            }
                            quantity -= 1;

                        }
                        else {
                            quantity = 0;
                        }
                        $('#ProductDetailsFormQV .product-quantity input.qty').val(quantity);
                    });
                    $('#ProductDetailsFormQV .plus').click(function() {
                        $('#addtocartQV').removeAttr('disabled');
                        if (quantity < 100) {
                            quantity += 1;
                        }
                        else {
                            quantity = 100;
                        }
                        $('#ProductDetailsFormQV .product-quantity input.qty').val(quantity);
                    });
                    $('#product-pop-up .more_details').attr('href', product.url);
                    // assign hidden values
                    $('#product-pop-up .unit_price_not_formated').val(product.price);
                    $('#product-pop-up .product_title_hd').val(product.title);
                    $('#product-pop-up .product_url').val(product.url);
                    $('#product-pop-up .product_img_small').val(product.featured_image);  // AAA!!!

                    //render variant size/color
                    // $('#product-pop-up .price strong').html(product.title);

                    //render selections (NOT formatted yet)
                    $('select#product-select-qw').html('');
                    $('.product-page-options select.size').html('');
                    $('.product-page-options select.color').html('');
                    $('.product-page-options select.material').html('');
                    $('.selector-wrapper').remove(); // remove all selectors by  Haravan.OptionSelectors
                    var $arrSize = [];
                    var $arrColor = [];
                    var $arrMaterial = [];
                    $.each(product.variants, function (i, v) {
                        $('select#product-select-qw').append("<option value='" + v.id + "'>" + v.title + ' - ' + v.price + "</option>");
                        if($arrSize.indexOf(v.option1) <= -1 )
                        {
                            $('#product-pop-up select.size').append("<option >" + v.option1 + "</option>");
                            $arrSize.push(v.option1);
                        }

                        if($arrColor.indexOf(v.option2) <= -1 )
                        {
                            $('#product-pop-up select.color').append("<option >" + v.option2 + "</option>");
                            $arrColor.push(v.option2);
                        }

                        if($arrMaterial.indexOf(v.option3) <= -1 )
                        {
                            $('#product-pop-up select.material').append("<option >" + v.option3 + "</option>");
                            $arrMaterial.push(v.option3);
                        }
                    });

                    //phong.nguyen 20150806: show label options 1,2,...
                    $($('#product-pop-up .product-page-options label')[0]).html(product.options[0].name);

                    var $option1_label = $('#product-pop-up .product-page-options label')[1];
                    var $option1_item = $('#product-pop-up .product-page-options .sizePicker')[1];
                    var $option2_label = $('#product-pop-up .product-page-options label')[2];
                    var $option2_item = $('#product-pop-up .product-page-options .sizePicker')[2];
                    if(product.options.length >= 2)
                    {
                        $($option1_label).html(product.options[1].name);
                        $($option1_item).removeClass('hidden');
                        if (product.options.length >= 3)  {
                            $($option2_label).html(product.options[2].name);
                            $($option2_item).removeClass('hidden');
                        }
                        else {
                            $($option2_item).addClass('hidden');
                        }
                    }
                    else {
                        $($option1_item).addClass('hidden');
                        $($option2_item).addClass('hidden');
                    }


                    //show/hide for any/1 variant
                    if (product.variants.length <= 1 && product.variants[0].title.indexOf('Default') != -1) {
                        // callBackQV(product.variants[0], null);
                        $('#product-pop-up .product-page-options').addClass('hidden');
                    }
                    else {
                        // // debugger...
                        $('#product-pop-up .product-page-options').removeClass('hidden');

                    }

                    //call back function for variants
                    new Haravan.OptionSelectors("product-select-qw", { product: product, onVariantSelected: callBackQV });


                    // function: choose size
                    $('#product-pop-up select.size').change(function(){
                        var $size = $(this).val();
                        var $color = $('#product-pop-up select.color').val();
                        var $material = $('#product-pop-up select.material').val();
                        var $tagSelectOption0 = '#product-select-qw-option-0';
                        var $tagSelectOption1 = '#product-select-qw-option-1';
                        var $tagSelectOption2 = '#product-select-qw-option-2';

                        refreshProductSelections($tagSelectOption0, $size, $tagSelectOption1 , $color,$tagSelectOption2, $material);
                    });

                    // function: choose color
                    $('#product-pop-up select.color').change(function(){
                        var $size = $('#product-pop-up select.size').val();
                        var $color = $(this).val();
                        var $material = $('#product-pop-up select.material').val();
                        var $tagSelectOption0 = '#product-select-qw-option-0';
                        var $tagSelectOption1 = '#product-select-qw-option-1';
                        var $tagSelectOption2 = '#product-select-qw-option-2';

                        refreshProductSelections($tagSelectOption0, $size, $tagSelectOption1 , $color,$tagSelectOption2, $material);
                    });

                    // function: choose material
                    $('#product-pop-up select.material').change(function(){
                        var $size = $('#product-pop-up select.size').val();
                        var $color = $('#product-pop-up select.color').val();
                        var $material = $(this).val();
                        var $tagSelectOption0 = '#product-select-qw-option-0';
                        var $tagSelectOption1 = '#product-select-qw-option-1';
                        var $tagSelectOption2 = '#product-select-qw-option-2';

                        refreshProductSelections($tagSelectOption0, $size, $tagSelectOption1 , $color,$tagSelectOption2, $material);
                    });


                    //second item: $($("#colorPicker option").get(1))...
                    $("#product-pop-up select.size option:first").attr('selected', 'selected');
                    $("#product-pop-up select.color option:first").attr('selected', 'selected');
                    $("#product-pop-up select.material option:first").attr('selected', 'selected');
                    var $size = $("#product-pop-up select.size option:first").val();
                    var $color = $("#product-pop-up select.color option:first").val();
                    var $material = $("#product-pop-up select.material option:first").val();
                    var $tagSelectOption0 = '#product-select-qw-option-0';
                    var $tagSelectOption1 = '#product-select-qw-option-1';
                    var $tagSelectOption2 = '#product-select-qw-option-2';

                    refreshProductSelections($tagSelectOption0, $size, $tagSelectOption1 , $color, $tagSelectOption2 , $material);


                }//end: success
            });

            //$('.modal-backdrop').css('opacity', '0');
            return false;
        }
    </script>
    <div id="product-quick-add" style="display: none; width: 700px;">
        <div class="product-page ">
            <div class="row">
                <form id="ProductDetailsForm_QuickAdd">
                    <div class="hidden" style="">
                        <select id="product-select-qa" name="id" >
                        </select>
                        <input type="hidden" class="unit_price_not_formated"><!-- </input> -->
                        <input type="hidden" class="product_url" value=""> <!--</input>-->
                        <input type="hidden" class="product_title_hd" value=""> <!--</input>-->
                        <input type="hidden" class="product_img_small" value=""> <!--</input>-->
                    </div>
                    <input id="product-quantity" name="quantity" type="text" value="1" readonly class="form-control input-sm quantity">
                    <button id="addtocartQA" class="btn btn-primary" type="submit">Thêm vào giỏ</button>
                </form>
            </div>
            <!-- END: row -->
        </div>
    </div>
    <script>
        var currentIMG = '';
        $(document).on('click', '.product_quick_add', function (event) {
            event.preventDefault();
            // quick add
            currentIMG = $(this).parents('.product').find('.product-image img');
            quickAddProduct($(this).attr('href')); // make-up "#product-quick-add"
        });
        var callBackQuickAdd = function(variant, selector) {
            // console.log('callBackQV  is functioning...');

            var $tagPrice = '#product-quick-add .price strong';
            var $tagPriceCompare = '#product-quick-add .price em span';
            var $tagProductSection = '#ProductDetailsForm_QuickAdd';
            update_variant(variant, $tagPrice, $tagPriceCompare, '#addtocartQA', $tagProductSection);
        }
        var quickAddProduct = function (purl) {

            // if ($(window).width() < 680) { window.location = purl; return false; }
            // modal = $('#quick-view-modal'); modal.modal('show');
            $.ajax({
                url: purl + '.js',
                async: false,
                success: function (product) {

                    //make-up "#product-quick-add"
                    // assign hidden values
                    $('#product-quick-add .product_title_hd').val(product.title);
                    $('#product-quick-add .product_url').val(product.url);
                    $('#product-quick-add .product_img_small').val(product.featured_image);  // AAA!!!

                    //render selections (NOT formatted yet)
                    $('select#product-select-qa').html('');
                    $('.selector-wrapper').remove(); // remove all selectors by  Haravan.OptionSelectors
                    // var $arrSize = [];
                    // var $arrColor = [];
                    $.each(product.variants, function (i, v) {
                        $('select#product-select-qa').append("<option value='" + v.id + "'>" + v.title + ' - ' + v.price + "</option>");
                        // if($arrSize.indexOf(v.option1) <= -1 )
                        // {
                        // $('#product-quick-add select.size').append("<option >" + v.option1 + "</option>");
                        // $arrSize.push(v.option1);
                        // }

                        // if($arrColor.indexOf(v.option2) <= -1 )
                        // {
                        // $('#product-quick-add select.color').append("<option >" + v.option2 + "</option>");
                        // $arrColor.push(v.option2);
                        // }
                    });

                    new Haravan.OptionSelectors("product-select-qa", { product: product, onVariantSelected: callBackQuickAdd });

                    // select default variants
                    var $size = $("#product-select-qa-option-0 option:first").attr('selected', 'selected');
                    var $color = $("#product-select-qa-option-1 option:first").attr('selected', 'selected');
                    var $material = $("#product-select-qa-option-2 option:first").attr('selected', 'selected');
                    var $tagSelectOption0 = '#product-select-qa-option-0';
                    var $tagSelectOption1 = '#product-select-qa-option-1';
                    var $tagSelectOption2 = '#product-select-qa-option-2';
                    refreshProductSelections($tagSelectOption0, $size, $tagSelectOption1 , $color, $tagSelectOption2, $material);

                    //auto add current variant...
                    // $('#ProductDetailsForm_QuickAdd').submit();
                    $("#addtocartQA").click();

                }//end: success
            });

            //$('.modal-backdrop').css('opacity', '0');
            return false;
        }


        jQuery(document).ready(function($){
            //add to cart for QuickView
            $("#addtocartQA").on('click', function(e) {  //.click(function(e){ //

                e.preventDefault();
                addItem('ProductDetailsForm_QuickAdd', currentIMG);

            });
        });
        /*** end quick add cart ***/

    </script>
    <!-- end quick add cart -->
    <script src='{{asset('js/layout.js')}}' type='text/javascript'></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();
            Layout.initOWL();

            Layout.initFixHeaderWithPreHeader();
            Layout.initNavScrolling();
        });
    </script>
    <script src='{{asset('js/footer_scripts.js')}}' type='text/javascript'></script>
    <div id="facebook-inbox" hiden="true">
        <button class="facebook-inbox-tab" style="display: block; ">
      <span class="facebook-inbox-tab-icon">
      <img src='{{asset('images/icons/fb-icon-1.png')}}' alt="Facebook Chat"/>
      </span>
            <span class="facebook-inbox-tab-title">chat với chúng tôi</span>
        </button>
        <div id="facebook-inbox-frame">
            <div class="f-close"></div>
            <div id="fb-root">&nbsp;</div>
            <div class="fb-page" data-adapt-container-width="true" data-hide-cover="false" data-href=""
                 data-show-facepile="true" data-small-header="true" data-width="250" data-height="350" data-tabs="messages">
                <div class="fb-xfbml-parse-ignore">
                    <blockquote cite=""><a href="">Chat với chúng tôi</a></blockquote>
                </div>
            </div>
        </div>
    </div>
    <link rel='stylesheet' media="screen" href='{{asset('css/box-style.css')}}'/>
    </body>
@endsection