@extends('themes.layouts.app')
@section('content')
    <body  class="stretched no-transition search" >
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
                            <a href="/cart" id="top-cart-trigger"><img src='//theme.hstatic.net/1000227124/1000685523/14/cart_bg.png?v=21' ><span class='top_cart_qty'>3</span>
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
                                    <div class="top-cart-item clearfix">
                                        <input type="hidden" class="item_id" value="1034599412"/>
                                        <input type="hidden" class="item_qty" value="1"/>
                                        <input type="hidden" class="item_unit_price_not_formated" value="7850000000"/>
                                        <div class="top-cart-item-image">
                                            <a href="/products/tu-lanh-hitachi-r-wx74j-735l"><img src="//product.hstatic.net/1000227124/product/thiet_ke_khong_ten_68c34684246947f8b390dca531651c9a_small.jpg" alt="Tủ lạnh Hitachi R-WX74J 735L" /></a>
                                        </div>
                                        <div class="top-cart-item-desc">
                                            <a href="/products/tu-lanh-hitachi-r-wx74j-735l">Tủ lạnh Hitachi R-WX74J 735L</a>
                                            <span class="top-cart-item-price">78,500,000₫</span>
                                            <span class="top-cart-item-quantity">x 1</span>
                                            <a class='top_cart_item_remove' onclick = 'deleteCart(1034599412);'><i class='icon-remove-sign'></i></a>
                                        </div>
                                    </div>
                                    <div class="top-cart-item clearfix">
                                        <input type="hidden" class="item_id" value="1067018082"/>
                                        <input type="hidden" class="item_qty" value="1"/>
                                        <input type="hidden" class="item_unit_price_not_formated" value="1050000000"/>
                                        <div class="top-cart-item-image">
                                            <a href="/products/may-giat-say-block-toshiba-tw-g510"><img src="//product.hstatic.net/1000227124/product/giat-toshiba-twg510l-inverter-giat-9kg-say-6kg-moi-95-removebg-preview_dc1a29f94c7543799a19e2eb33d5ea55_small.jpg" alt="MÁY GIẶT SẤY NHIỆT TOSHIBA TW G510" /></a>
                                        </div>
                                        <div class="top-cart-item-desc">
                                            <a href="/products/may-giat-say-block-toshiba-tw-g510">MÁY GIẶT SẤY NHIỆT TOSHIBA TW G510</a>
                                            <span class="top-cart-item-price">10,500,000₫</span>
                                            <span class="top-cart-item-quantity">x 1</span>
                                            <a class='top_cart_item_remove' onclick = 'deleteCart(1067018082);'><i class='icon-remove-sign'></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="top-cart-action clearfix">
                                    <span class="fleft top-checkout-price">100,000,000₫</span>
                                    <input type="hidden" class="top_cart_total_price_not_format" value="10000000000" />
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
        <!-- #header end -->
        <div class='container slide_wrapper'>
            <div class="hidden-lg hidden-md fanpape_mobile">
                <h2>
                    Truy cập fanpage
                </h2>
                <div class="fb-page" data-href="https://www.facebook.com/shophangnhatbainoidia" data-tabs="" data-width="480" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/shophangnhatbainoidia" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/shophangnhatbainoidia">https://www.facebook.com/shophangnhatbainoidia</a></blockquote>
                </div>
            </div>
            <!-- left menu -->
            <div class="panel-group left_menu" id='left_menu'>
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse1">DANH MỤC SẢN PHẨM <i class='icon-angle-down' ></i></a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class='nav nav-pills nav-stacked'>
                            <li class=' menu'>
                                <a class='menu' href="/collections/may-giat-nhat-noi-dia-nhat-bai">
                                    <img src='//theme.hstatic.net/1000227124/1000685523/14/leftmenu_icon_1.png?v=21' data-toggle="tooltip" data-placement="right" title="MÁY GIẶT"/>
                                    <span class="menu_title">MÁY GIẶT</span>
                                    <i class='icon-angle-right arrow'></i>
                                </a>
                                <ul class='submenu'>
                                    <div class='submenu_padding'>
                                        <!--1-->
                                        <li class=''>
                                            <a class='sub-menu' href="/collections/may-giat-nhat-bai-ban-chay-nhat">
                                                <div>MÁY GIẶT BÁN CHẠY NHẤT</div>
                                            </a>
                                        </li>
                                        <!--2-->
                                        <li class=''>
                                            <a class='sub-menu' href="/collections/may-giat-toshiba-nhat-bai">
                                                <div>MÁY GIẶT TOSHIBA</div>
                                            </a>
                                        </li>
                                        <!--3-->
                                        <li class=''>
                                            <a class='sub-menu' href="/collections/may-giat-panasonic-nhat-bai">
                                                <div>MÁY GIẶT PANASONIC</div>
                                            </a>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                            <li class=' menu'>
                                <a class='menu' href="/collections/tu-lanh-nhat-noi-dia-nhat-bai">
                                    <img src='//theme.hstatic.net/1000227124/1000685523/14/leftmenu_icon_2.png?v=21' data-toggle="tooltip" data-placement="right" title="TỦ LẠNH"/>
                                    <span class="menu_title">TỦ LẠNH</span>
                                    <i class='icon-angle-right arrow'></i>
                                </a>
                                <ul class='submenu'>
                                    <div class='submenu_padding'>
                                        <!--1-->
                                        <li class=''>
                                            <a class='sub-menu' href="/collections/tu-lanh-panasonic-noi-dia-nhat-bai">
                                                <div>TỦ LẠNH PANASONIC</div>
                                            </a>
                                        </li>
                                        <!--2-->
                                        <li class=''>
                                            <a class='sub-menu' href="/collections/tu-lanh-hitachi-noi-dia-nhat-bai">
                                                <div>TỦ LẠNH HITACHI</div>
                                            </a>
                                        </li>
                                        <!--3-->
                                        <li class=''>
                                            <a class='sub-menu' href="/collections/tu-lanh-toshiba-nhat-bai">
                                                <div>TỦ LẠNH TOSHIBA</div>
                                            </a>
                                        </li>
                                        <!--4-->
                                        <li class=''>
                                            <a class='sub-menu' href="/collections/tu-lanh-mitsubishi-nhat-bai">
                                                <div>TỦ LẠNH MITSUBISHI</div>
                                            </a>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                            <li class=' menu'>
                                <a class='menu' href="/collections/ghe-massage-cao-cap">
                                    <img src='//theme.hstatic.net/1000227124/1000685523/14/leftmenu_icon_3.png?v=21' data-toggle="tooltip" data-placement="right" title="GHẾ MASSAGE"/>
                                    <span class="menu_title">GHẾ MASSAGE</span>
                                    <i class='icon-angle-right arrow'></i>
                                </a>
                                <ul class='submenu'>
                                    <div class='submenu_padding'>
                                        <!--1-->
                                        <li class=''>
                                            <a class='sub-menu' href="/collections/ghe-massage-family-inada">
                                                <div>GHẾ MASSAGE FAMILY INADA</div>
                                            </a>
                                        </li>
                                        <!--2-->
                                        <li class=''>
                                            <a class='sub-menu' href="/collections/ghe-massage-taijutsu-dong-tri-lieu">
                                                <div>GHẾ MASSAGE TAIJUTSU</div>
                                            </a>
                                        </li>
                                        <!--3-->
                                        <li class=''>
                                            <a class='sub-menu' href="/collections/ghe-massage-panasonic-nhat-bai">
                                                <div>GHẾ MASSAGE PANASONIC</div>
                                            </a>
                                        </li>
                                        <!--4-->
                                        <li class=''>
                                            <a class='sub-menu' href="/collections/ghe-massage-fujikima">
                                                <div>GHẾ MASSAGE FUJIKIMA</div>
                                            </a>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                            <li class=' menu'>
                                <a class='menu' href="/collections/dieu-hoa-nhat-bai-noi-dia">
                                    <img src='//theme.hstatic.net/1000227124/1000685523/14/leftmenu_icon_4.png?v=21' data-toggle="tooltip" data-placement="right" title="ĐIỀU HÒA"/>
                                    <span class="menu_title">ĐIỀU HÒA</span>
                                    <i class='icon-angle-right arrow'></i>
                                </a>
                                <ul class='submenu'>
                                    <div class='submenu_padding'>
                                        <!--1-->
                                        <li class=''>
                                            <a class='sub-menu' href="/collections/dieu-hoa-nhat-bai-ban-chay-nhat">
                                                <div>ĐIỀU HÒA BÁN CHẠY NHẤT</div>
                                            </a>
                                        </li>
                                        <!--2-->
                                        <li class=''>
                                            <a class='sub-menu' href="/collections/dieu-hoa-fujitsu-nhat-bai">
                                                <div>ĐIỀU HÒA FUJITSU</div>
                                            </a>
                                        </li>
                                        <!--3-->
                                        <li class=''>
                                            <a class='sub-menu' href="/collections/dieu-hoa-panasonic-nhat-bai">
                                                <div>ĐIỀU HÒA PANASONIC</div>
                                            </a>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                            <li class=' menu'>
                                <a class='menu' href="/collections/may-loc-khong-khi-nhat-noi-dia">
                                    <img src='//theme.hstatic.net/1000227124/1000685523/14/leftmenu_icon_5.png?v=21' data-toggle="tooltip" data-placement="right" title="MÁY LỌC KHÔNG KHÍ"/>
                                    <span class="menu_title">MÁY LỌC KHÔNG KHÍ</span>
                                    <i class='icon-angle-right arrow'></i>
                                </a>
                                <ul class='submenu'>
                                    <div class='submenu_padding'>
                                        <!--1-->
                                        <li class=''>
                                            <a class='sub-menu' href="/collections/loc-khong-khi-hut-am-ban-chay-nhat">
                                                <div>MÁY LỌC KHÔNG KHÍ  BÁN CHẠY NHẤT</div>
                                            </a>
                                        </li>
                                        <!--2-->
                                        <li class=''>
                                            <a class='sub-menu' href="/collections/may-loc-khong-khi-nhat-bai">
                                                <div>MÁY LỌC KHÔNG KHÍ NHẬT BÃI</div>
                                            </a>
                                        </li>
                                        <!--3-->
                                        <li class=''>
                                            <a class='sub-menu' href="/collections/mang-than-hepa-may-loc-khong-khi">
                                                <div>MÀNG THAN-HEPA MÁY LỌC KHÔNG KHÍ</div>
                                            </a>
                                        </li>
                                        <!--4-->
                                        <li class=''>
                                            <a class='sub-menu' href="/collections/may-loc-khong-khi-moi-chinh-hang">
                                                <div>MÁY LỌC KHÔNG KHÍ  NEW 100% CHÍNH HÃNG</div>
                                            </a>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                            <li class=' menu'>
                                <a class='menu' href="/collections/may-hut-am-nhat-bai">
                                    <img src='//theme.hstatic.net/1000227124/1000685523/14/leftmenu_icon_6.png?v=21' data-toggle="tooltip" data-placement="right" title="MÁY HÚT ẨM"/>
                                    <span class="menu_title">MÁY HÚT ẨM</span>
                                    <i class='icon-angle-right arrow'></i>
                                </a>
                                <ul class='submenu'>
                                    <div class='submenu_padding'>
                                        <!--1-->
                                        <li class=''>
                                            <a class='sub-menu' href="/collections/may-hut-am-nhat-bai-noi-dia">
                                                <div>MÁY HÚT ẨM NHẬT BÃI</div>
                                            </a>
                                        </li>
                                        <!--2-->
                                        <li class=''>
                                            <a class='sub-menu' href="/collections/may-hut-am-new-100-nhat-noi-dia">
                                                <div>MÁY HÚT ẨM NEW 100% NHẬT NỘI ĐỊA</div>
                                            </a>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                            <li class=' menu'>
                                <a class='menu' href="/collections/may-rua-bat-noi-com-dien-nhat">
                                    <img src='//theme.hstatic.net/1000227124/1000685523/14/leftmenu_icon_7.png?v=21' data-toggle="tooltip" data-placement="right" title="ĐỒ GIA DỤNG"/>
                                    <span class="menu_title">ĐỒ GIA DỤNG</span>
                                    <i class='icon-angle-right arrow'></i>
                                </a>
                                <ul class='submenu'>
                                    <div class='submenu_padding'>
                                        <!--1-->
                                        <li class=''>
                                            <a class='sub-menu' href="/collections/may-rua-bat-noi-dia-nhat-bai">
                                                <div>MÁY RỬA BÁT NHẬT NỘI ĐỊA</div>
                                            </a>
                                        </li>
                                        <!--2-->
                                        <li class=''>
                                            <a class='sub-menu' href="/collections/noi-com-dien-nhat-bai">
                                                <div>NỒI CƠM ĐIỆN NHẬT BÃI</div>
                                            </a>
                                        </li>
                                        <!--3-->
                                        <li class=''>
                                            <a class='sub-menu' href="/collections/bep-tu-nhat-bai">
                                                <div>BẾP TỪ NHẬT</div>
                                            </a>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                            <li class=' menu'>
                                <a class='menu' href="/collections/may-loc-nuoc-nhat-bai">
                                    <span class="menu_title">MÁY LỌC NƯỚC</span>
                                    <i class='icon-angle-right arrow'></i>
                                </a>
                                <ul class='submenu'>
                                    <div class='submenu_padding'>
                                        <!--1-->
                                        <li class=''>
                                            <a class='sub-menu' href="/collections/may-loc-nuoc-toshiba">
                                                <div>MÁY LỌC NƯỚC TOSHIBA</div>
                                            </a>
                                        </li>
                                        <!--2-->
                                        <li class=''>
                                            <a class='sub-menu' href="/collections/may-loc-nuoc-panasonic">
                                                <div>MÁY LỌC NƯỚC PANASONIC</div>
                                            </a>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <script></script>
            <!-- end left menu -->
            <div class='slider_wrap'>
                <nav id="primary-menu" class='style-5'>
                    <ul>
                        <!-- normal sub menu -->
                        <li class=''>
                            <a class='menu' href="/collections/may-giat-nhat-noi-dia-nhat-bai">
                                <div>
                                    MÁY GIẶT
                                </div>
                            </a>
                            <i class='icon-angle-right hidden-lg hidden-md submenu_toggle' style='position:absolute; right: 0; font-size: 16px; width: 25px; margin:0;'></i>
                            <ul>
                                <li class=''>
                                    <a class='sub-menu' href="/collections/may-giat-nhat-bai-ban-chay-nhat">
                                        <div>MÁY GIẶT BÁN CHẠY NHẤT</div>
                                    </a>
                                </li>
                                <li class=''>
                                    <a class='sub-menu' href="/collections/may-giat-toshiba-nhat-bai">
                                        <div>MÁY GIẶT TOSHIBA</div>
                                    </a>
                                </li>
                                <li class=''>
                                    <a class='sub-menu' href="/collections/may-giat-panasonic-nhat-bai">
                                        <div>MÁY GIẶT PANASONIC</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- end normal sub menu -->
                        <!-- normal sub menu -->
                        <li class=''>
                            <a class='menu' href="/collections/tu-lanh-nhat-noi-dia-nhat-bai">
                                <div>
                                    TỦ LẠNH
                                </div>
                            </a>
                            <i class='icon-angle-right hidden-lg hidden-md submenu_toggle' style='position:absolute; right: 0; font-size: 16px; width: 25px; margin:0;'></i>
                            <ul>
                                <li class=''>
                                    <a class='sub-menu' href="/collections/tu-lanh-panasonic-noi-dia-nhat-bai">
                                        <div>TỦ LẠNH PANASONIC</div>
                                    </a>
                                </li>
                                <li class=''>
                                    <a class='sub-menu' href="/collections/tu-lanh-hitachi-noi-dia-nhat-bai">
                                        <div>TỦ LẠNH HITACHI</div>
                                    </a>
                                </li>
                                <li class=''>
                                    <a class='sub-menu' href="/collections/tu-lanh-toshiba-nhat-bai">
                                        <div>TỦ LẠNH TOSHIBA</div>
                                    </a>
                                </li>
                                <li class=''>
                                    <a class='sub-menu' href="/collections/tu-lanh-mitsubishi-nhat-bai">
                                        <div>TỦ LẠNH MITSUBISHI</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- end normal sub menu -->
                        <!-- normal sub menu -->
                        <li class=''>
                            <a class='menu' href="/collections/ghe-massage-cao-cap">
                                <div>
                                    GHẾ MASSAGE
                                </div>
                            </a>
                            <i class='icon-angle-right hidden-lg hidden-md submenu_toggle' style='position:absolute; right: 0; font-size: 16px; width: 25px; margin:0;'></i>
                            <ul>
                                <li class=''>
                                    <a class='sub-menu' href="/collections/ghe-massage-family-inada">
                                        <div>GHẾ MASSAGE FAMILY INADA</div>
                                    </a>
                                </li>
                                <li class=''>
                                    <a class='sub-menu' href="/collections/ghe-massage-taijutsu-dong-tri-lieu">
                                        <div>GHẾ MASSAGE TAIJUTSU</div>
                                    </a>
                                </li>
                                <li class=''>
                                    <a class='sub-menu' href="/collections/ghe-massage-panasonic-nhat-bai">
                                        <div>GHẾ MASSAGE PANASONIC</div>
                                    </a>
                                </li>
                                <li class=''>
                                    <a class='sub-menu' href="/collections/ghe-massage-fujikima">
                                        <div>GHẾ MASSAGE FUJIKIMA</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- end normal sub menu -->
                        <!-- normal sub menu -->
                        <li class=''>
                            <a class='menu' href="/collections/dieu-hoa-nhat-bai-noi-dia">
                                <div>
                                    ĐIỀU HÒA
                                </div>
                            </a>
                            <i class='icon-angle-right hidden-lg hidden-md submenu_toggle' style='position:absolute; right: 0; font-size: 16px; width: 25px; margin:0;'></i>
                            <ul>
                                <li class=''>
                                    <a class='sub-menu' href="/collections/dieu-hoa-nhat-bai-ban-chay-nhat">
                                        <div>ĐIỀU HÒA BÁN CHẠY NHẤT</div>
                                    </a>
                                </li>
                                <li class=''>
                                    <a class='sub-menu' href="/collections/dieu-hoa-fujitsu-nhat-bai">
                                        <div>ĐIỀU HÒA FUJITSU</div>
                                    </a>
                                </li>
                                <li class=''>
                                    <a class='sub-menu' href="/collections/dieu-hoa-panasonic-nhat-bai">
                                        <div>ĐIỀU HÒA PANASONIC</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- end normal sub menu -->
                        <!-- normal sub menu -->
                        <li class=''>
                            <a class='menu' href="/collections/may-loc-khong-khi-nhat-noi-dia">
                                <div>
                                    MÁY LỌC KHÔNG KHÍ
                                </div>
                            </a>
                            <i class='icon-angle-right hidden-lg hidden-md submenu_toggle' style='position:absolute; right: 0; font-size: 16px; width: 25px; margin:0;'></i>
                            <ul>
                                <li class=''>
                                    <a class='sub-menu' href="/collections/loc-khong-khi-hut-am-ban-chay-nhat">
                                        <div>MÁY LỌC KHÔNG KHÍ  BÁN CHẠY NHẤT</div>
                                    </a>
                                </li>
                                <li class=''>
                                    <a class='sub-menu' href="/collections/may-loc-khong-khi-nhat-bai">
                                        <div>MÁY LỌC KHÔNG KHÍ NHẬT BÃI</div>
                                    </a>
                                </li>
                                <li class=''>
                                    <a class='sub-menu' href="/collections/mang-than-hepa-may-loc-khong-khi">
                                        <div>MÀNG THAN-HEPA MÁY LỌC KHÔNG KHÍ</div>
                                    </a>
                                </li>
                                <li class=''>
                                    <a class='sub-menu' href="/collections/may-loc-khong-khi-moi-chinh-hang">
                                        <div>MÁY LỌC KHÔNG KHÍ  NEW 100% CHÍNH HÃNG</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- end normal sub menu -->
                        <!-- normal sub menu -->
                        <li class=''>
                            <a class='menu' href="/collections/may-hut-am-nhat-bai">
                                <div>
                                    MÁY HÚT ẨM
                                </div>
                            </a>
                            <i class='icon-angle-right hidden-lg hidden-md submenu_toggle' style='position:absolute; right: 0; font-size: 16px; width: 25px; margin:0;'></i>
                            <ul>
                                <li class=''>
                                    <a class='sub-menu' href="/collections/may-hut-am-nhat-bai-noi-dia">
                                        <div>MÁY HÚT ẨM NHẬT BÃI</div>
                                    </a>
                                </li>
                                <li class=''>
                                    <a class='sub-menu' href="/collections/may-hut-am-new-100-nhat-noi-dia">
                                        <div>MÁY HÚT ẨM NEW 100% NHẬT NỘI ĐỊA</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- end normal sub menu -->
                        <!-- normal sub menu -->
                        <li class=''>
                            <a class='menu' href="/collections/may-rua-bat-noi-com-dien-nhat">
                                <div>
                                    ĐỒ GIA DỤNG
                                </div>
                            </a>
                            <i class='icon-angle-right hidden-lg hidden-md submenu_toggle' style='position:absolute; right: 0; font-size: 16px; width: 25px; margin:0;'></i>
                            <ul>
                                <li class=''>
                                    <a class='sub-menu' href="/collections/may-rua-bat-noi-dia-nhat-bai">
                                        <div>MÁY RỬA BÁT NHẬT NỘI ĐỊA</div>
                                    </a>
                                </li>
                                <li class=''>
                                    <a class='sub-menu' href="/collections/noi-com-dien-nhat-bai">
                                        <div>NỒI CƠM ĐIỆN NHẬT BÃI</div>
                                    </a>
                                </li>
                                <li class=''>
                                    <a class='sub-menu' href="/collections/bep-tu-nhat-bai">
                                        <div>BẾP TỪ NHẬT</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- end normal sub menu -->
                        <!-- normal sub menu -->
                        <li class=''>
                            <a class='menu' href="/collections/may-loc-nuoc-nhat-bai">
                                <div>
                                    MÁY LỌC NƯỚC
                                </div>
                            </a>
                            <i class='icon-angle-right hidden-lg hidden-md submenu_toggle' style='position:absolute; right: 0; font-size: 16px; width: 25px; margin:0;'></i>
                            <ul>
                                <li class=''>
                                    <a class='sub-menu' href="/collections/may-loc-nuoc-toshiba">
                                        <div>MÁY LỌC NƯỚC TOSHIBA</div>
                                    </a>
                                </li>
                                <li class=''>
                                    <a class='sub-menu' href="/collections/may-loc-nuoc-panasonic">
                                        <div>MÁY LỌC NƯỚC PANASONIC</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- end normal sub menu -->
                    </ul>
                </nav>
                <script>
                    $("#sidebar-wrapper ul li a span").click(function( event ) {
                        event.preventDefault();
                        var li = $(this).parents('li');
                        li.children('ul').toggle('slow');
                    });
                </script>
            </div>
            <div class='clear'></div>
        </div>
        <!-- Content
           ============================================= -->
        <!-- Page Title
           ============================================= -->
        <section id="page-title">
            <div class="container clearfix">
                <div class="col-md-12">
                    <ol class="breadcrumb col-md-6 col-sm-6">
                        <li><a href="/">Trang chủ</a></li>
                        <li class='active'>Tìm kiếm</li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- #page-title end -->
        <input type="hidden" id="collection_id" value=">=0">
        <input type="hidden" id="search_term" value="may+giat">
        <!-- Content
           ============================================= -->
        <section id="content">
            <div class="content-wrap">
                <div class="container clearfix">
                    <div class='row'>
                        <!-- Post Content
                           ============================================= -->
                        <div class="postcontent nobottommargin col_last col-sm-9">
                            <!-- Shop
                               ============================================= -->
                            <div id="shop" class="product-3 clearfix">
                                <div class='row'>
                                    <div class="col-md-4">
                                        <p class="subtext">
                                            Có <span class='require_symbol'>65</span> sản phẩm.
                                        </p>
                                    </div>
                                    <div class='col-md-8 sort-wrapper'>
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
                                </div>
                                <div id='grid_pagination'>
                                    <div class='grid'>
                                        @foreach($searchProduct as $value)
                                        <div class='col-sm-3 col-xs-6 product_single nopadding'>
                                            <div class="product pr-item clearfix">
                                                <div class="product-image">
                                                    <a href="{{route('wave.detail.product', $value->slug)}}"><img src="{{asset('storage/'. $value->image)}}"  alt="MÁY GIẶT SẤY BLOCK TOSHIBA TW-Z370" class="img-responsive"></a>
                                                    <div class="product-overlay">

                                                        <a href="{{route('wave.detail.product', $value->slug)}} class="item-quick-view fancybox-fast-view hidden-sm hidden-xs" product_url="/products/may-giat-toshiba-tw-z370" data-toggle='tooltip' title='Xem nhanh'><i class="icon-zoom-in2"></i><span class='hidden-md hidden-lg'> Xem nhanh</span></a>
                                                    </div>
                                                </div>
                                                <div class="product-desc">
                                                    <div class="product-title">
                                                        <h4><a href="/products/may-giat-toshiba-tw-z370">{{$value->name}}</a></h4>
                                                    </div>
                                                </div>
                                                <div class="product-desc">
                                                    <div class="product-price">
                                                        <ins>{{number_format($value->sub_price) . 'đ'}}</ins>
                                                        <del>{{number_format($value->price) . 'đ'}}</del>
                                                    </div>
                                                    <div class="haravan-product-reviews-badge" data-id="1020742291">  </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class='pagination_wrapper'>
                                        <ul class="pagination ajax-pagination">
                                            <li class='disabled'><a>&laquo;</a></li>
                                            <li class='active'><a>1</a></li>
                                            <li><a href="#" pagefilter="/search?type=product&q=may%20giat&page=2" pageid="2">2</a></li>
                                            <li><a href="#" pagefilter="/search?type=product&q=may%20giat&page=2" pageid="2">&raquo;</a></li>
                                        </ul>
                                        <!-- BEGIN: AJAX-FILTER -->
                                        <script>
                                            $(".resetButton").click(function(e){
                                                e.preventDefault();	// không tự nhảy lên đầu trang
                                                $(':input[filtertype=search]:checked').each(function(){
                                                    this.checked = false;
                                                    var searchString=getStringFilter($(this));
                                                    var url_final = '/'+searchString+'&view=grid_and_control';
                                                    //loadResultBy(url_final,$("#results"));
                                                });
                                            });

                                            function getStringFilter(currentSelected){
                                                var vendor="",product_type="",price="",color='',tag_custom_1="",tag_custom_2="",tag_custom_3="";
                                                var tag_prefix_1 = 'xuatxu',
                                                    tag_prefix_2 = 'manhinh',
                                                    tag_prefix_3 = 'dungtich';
                                                var searchString = "search?q=";
                                                // if current page is search
                                                if ($("#collection_id").val() == ">=0") {
                                                    searchString += $("#search_term").val() + "&";
                                                }
                                                searchString += "filter=(";
                                                // BEGIN: Filter
                                                var collectionFilter = "";
                                                if ($("#collection_id").val() != ">=0") {
                                                    if($("#collection_id").val() != "=0") {
                                                        collectionFilter += "(collectionid:product"+$("#collection_id").val()+")";
                                                    }
                                                    else {
                                                        collectionFilter = "(collectionid:product>=0)";
                                                    }
                                                }
                                                else {
                                                    collectionFilter = "(collectionid:product>=0)";
                                                }

                                                // BEGIN: GET All checked filter string
                                                // standard filter
                                                vendor = getCheckedBy("vendor",vendor);
                                                product_type = getCheckedBy("product_type",product_type);
                                                price = getCheckedBy("price",price);
                                                // custom filer

                                                color = getCheckedBy("mausac",color);

                                                tag_custom_1 = (tag_prefix_1 != '') ? getCheckedBy(tag_prefix_1,tag_custom_1) : getCheckedBy('a',tag_custom_1);
                                                tag_custom_2 = (tag_prefix_2 != '') ? getCheckedBy(tag_prefix_2,tag_custom_2) : getCheckedBy('a',tag_custom_2);
                                                tag_custom_3 = (tag_prefix_3 != '') ? getCheckedBy(tag_prefix_3,tag_custom_3) : getCheckedBy('a',tag_custom_3);
                                                // END: GET FILTER

                                                //console.log(vendor);
                                                //console.log(color);
                                                // BEGIN: MERGE all filter string
                                                collectionFilter = mergeFilterWith(vendor,collectionFilter);
                                                collectionFilter = mergeFilterWith(product_type,collectionFilter);
                                                collectionFilter = mergeFilterWith(price,collectionFilter);

                                                collectionFilter = mergeFilterWith(color ,collectionFilter);
                                                collectionFilter = mergeFilterWith(tag_custom_1,collectionFilter);
                                                collectionFilter = mergeFilterWith(tag_custom_2,collectionFilter);
                                                collectionFilter = mergeFilterWith(tag_custom_3,collectionFilter);

                                                searchString+=collectionFilter;
                                                searchString+=')';
                                                // END: MERGE

                                                // BEGIN: Sorting
                                                if ($( "#sortControl option:selected" ).val() != "") {
                                                    searchString += "&sortby="+$( "#sortControl option:selected" ).val();
                                                }
                                                else{
                                                    //searchString+='&sortby=(updated_at:product=desc)';
                                                }
                                                // END: Sorting
                                                return searchString;
                                            }

                                            function getCheckedBy(filterKey, filterOption){
                                                $(':input[class^='+filterKey+']:checked').each(function(){
                                                    if (filterOption==""){
                                                        filterOption=$(this).val();
                                                    }
                                                    else{
                                                        filterOption=filterOption+'||'+$(this).val();
                                                    }
                                                });
                                                return filterOption;
                                            }

                                            function mergeFilterWith(filterCondition, currCollectionFilter){
                                                if(filterCondition != ""){
                                                    filterCondition='('+filterCondition+')';
                                                    currCollectionFilter+='&&'+filterCondition;
                                                }
                                                return currCollectionFilter;
                                            }
                                            function sorting(){
                                                var searchString = getStringFilter();
                                                var url_final = '/'+searchString+'&view=grid_pagination';
                                                var shop_url = '//giadungnhat.vn';
                                                console.log(shop_url);
                                                var urlState = shop_url + '/' + searchString;
                                                window.history.pushState(null,null,urlState);
                                                loadResultBy(url_final,$("#grid_pagination"));
                                            }

                                            function loadResultBy(url_building, position_load) {
                                                $.ajax({
                                                    'url': url_building,
                                                    'type':'POST',
                                                    'success':function(data){
                                                        position_load.html(data);
                                                        align_single_element();
                                                        //$('#shop .product').last().addClass('product-last');
                                                    }
                                                });
                                            }

                                            $('.ajax-pagination li a').click(function(e) {
                                                e.preventDefault();
                                                if($(this).parent().hasClass('disabled') || $(this).parent().hasClass('active')) {
                                                    return;
                                                }
                                                var searchString = getStringFilter();
                                                var page = $(this).attr('pageid');
                                                var url_final = '/'+searchString+'&view=grid_pagination&page='+page;

                                                var shop_url = '//giadungnhat.vn';
                                                var urlState = shop_url + '/' + searchString + '&page=' + page;
                                                window.history.pushState(null,null,urlState);

                                                loadResultBy(url_final,$("#grid_pagination"));

                                                scrollToShop(0);

                                                //http://stackoverflow.com/questions/7717527/jquery-smooth-scrolling-when-clicking-an-anchor-link
                                            });


                                            /**
                                             * Update filter to url
                                             * Tu.Nguyen 2016.04.11
                                             *
                                             **/
                                            function updateFilterToUrl(prefix,load_result_id) {
                                                var searchString = getStringFilter();
                                                var url_final = '/'+searchString+'&view=grid_pagination&page='+page;
                                                var shop_url = '//giadungnhat.vn';
                                                var urlState = shop_url + '/' + searchString + prefix;
                                                window.history.pushState(null,null,urlState);
                                                loadResultBy(url_final,$(load_result_id));
                                            }

                                            function scrollToShop(margin) {
                                                var locate = parseInt($('#content').offset().top) + margin;
                                                $('html, body').animate({
                                                    scrollTop: locate
                                                },1000);
                                                return false;
                                            }
                                            // end scroll

                                            //$('.pagination li a').click(function() {scrollToShop(0)});


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
                                            if(typeof Layout != 'undefined') {
                                                Layout.init();
                                            }

                                        </script>
                                        <!-- END: AJAX-FILTER -->
                                    </div>
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
                                                    <a href="/collections/may-giat-nhat-noi-dia-nhat-bai">{{$value->name}}</a>
                                                    <i class='icon-angle-down'></i>
                                                    <ul class='sidebar_submenu'>
                                                        @foreach($subCategories as $subCategory)
                                                            @if($value->id == $subCategory->parent_id)
                                                                <li class=''><a class='sub-menu' href="#"><div>
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
                                            @foreach($promotionalProducts as $value)
                                            <div class="item ">
                                                <div class="product pr-item clearfix  product_single">
                                                    <div class="product-image">
                                                        <a href="{{route('wave.detail.product', $value->slug)}}"><img  class="lazyload" data-src="{{asset('storage/' .$value->image)}}"src="{{asset('storage/' .$value->image)}}" alt="MÁY GIẶT SẤY NHIỆT TOSHIBA TW G500" class="img-responsive"></a>
                                                        <div class="product-overlay">
                                                            <a href="{{route('wave.detail.product', $value->slug)}}" class="item-quick-view fancybox-fast-view hidden-sm hidden-xs" product_url="/products/may-giat-toshiba-tw-g500l" data-toggle='tooltip' title='Xem nhanh'><i class="icon-zoom-in2"></i><span class='hidden-md hidden-lg'> Xem nhanh</span></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        <div class="product-title">
                                                            <h4><a href="{{route('wave.detail.product', $value->slug)}}">{{$value->name}}</a></h4>
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        <div class="product-price">
                                                            <ins> {{ number_format($value->sub_price) . 'đ'}} </ins>
                                                            <del>{{number_format($value->price) . 'đ'}}</del>
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
                                            @foreach($userManual->posts as $value)
                                            <div class="spost clearfix">
                                                <div class="entry-image">
                                                    <a href="{{route('wave.news.detail', $value->slug)}}"><img src="{{asset('storage/' . $value->image)}}" alt="Liệu có an toàn khi uống nước trực tiếp từ máy lọc nước hay không?"></a>
                                                </div>
                                                <div class="entry-c">
                                                    <div class="entry-title">
                                                        <h4><a href="{{route('wave.news.detail', $value->slug)}}">{{$value->excerpt}}</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <!-- end recent product -->
                                    <!-- most popular -->
                                    <div class="widget clearfix">
                                        <h4><a href='/collections/may-loc-khong-khi-nhat-bai'>Sản phẩm nổi bật</a></h4>
                                        <div id="Popular-item" class='sidebar_menu'>
                                            @foreach($featuredProducts as $value)
                                            <div class="spost clearfix">
                                                <div class="entry-image">
                                                    <a href="{{route('wave.detail.product', $value->slug)}}"><img src="{{asset('storage/' .$value->image)}}" alt="MÁY LỌC KHÍ SHARP KC D70"></a>
                                                </div>
                                                <div class="entry-c">
                                                    <div class="entry-title">
                                                        <h4><a href="{{route('wave.detail.product', $value->slug)}}">{{$value->name}}</a></h4>
                                                    </div>
                                                    <ul class="entry-meta">
                                                        <li class="color">
                                                            <ins>{{number_format($value->price) . 'đ'}}</ins>
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
        </section>
        <!-- #content end -->
        <!-- #content end -->
        <!-- Footer
           ============================================= -->
    </body>
@endsection