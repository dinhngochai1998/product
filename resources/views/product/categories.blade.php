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
                <a target="_blank" href="#">{{strtoupper($config->name) ?? null}}</a>
            </div>
            <!-- Top Search
               ============================================= -->
            <div class='top_search col-md-9 col-xs-12'>
                <form action="{{route('wave.search.product')}}"class='col-sm-8 form-inline nopadding nomargin' method="get">
                    <input type="hidden" name="search" value="product" />
                    <input type="text" name="search"  class="form-control col-md-8 search_input" placeholder="Tìm kiếm sản phẩm bạn muốn mua">
                    <button class='button'>Tìm kiếm</button>
                </form>
                <div id="top-cart" class='top-cart-block col-md-1 nopadding'>
{{--                    <a href="/cart" id="top-cart-trigger"><img src='//theme.hstatic.net/1000227124/1000685523/14/cart_bg.png?v=21' ><span class='top_cart_qty'>3</span>--}}
{{--                    </a>--}}
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
            <!-- #primary-menu end -->top-cart-trigger
        </div>
    </div>
</header>
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
                @foreach($categories as $category)
                    <ul class='nav nav-pills nav-stacked'>
                        <li class='menu'>
                            <a class='menu' href="{{route('wave.category', $category->slug)}}">
                                <img src='' data-toggle="tooltip" data-placement="right" title="MÁY GIẶT"/>
                                <span class="menu_title">{{strtoupper($category->name)}}</span>
                                <i class='icon-angle-right arrow'></i>
                            </a>
                            @if(count($subCategories) > 0)
                            @foreach($subCategories as $subCategory)
                                @if($category->id == $subCategory->parent_id)
                                    <ul class='submenu'>
                                        <div class='submenu_padding'>
                                            <li class=''>
                                                <a class='sub-menu' href="{{route('wave.category', $subCategory->slug)}}">
                                                    <div>{{strtoupper($subCategory->name)}}</div>
                                                </a>
                                            </li>
                                        </div>
                                    </ul>
                                @endif
                            @endforeach
                            @endif
                        </li>
                    </ul>
                @endforeach
            </div>
        </div>
    </div>
    <script></script>
    <!-- end left menu -->
    <div class='slider_wrap'>
        <nav id="primary-menu" class='style-5'>
            <ul>
                @foreach($categories as $category)
                    <li class=''>
                        <a class='menu' href="{{route('wave.category', $category->slug)}}">
                            <div>
                                {{strtoupper($category->name)}}
                            </div>
                        </a>
                        <i class='icon-angle-right hidden-lg hidden-md submenu_toggle' style='position:absolute; right: 0; font-size: 16px; width: 25px; margin:0;'></i>
                        @foreach($subCategories as $subCategory)
                            @if($category->id == $subCategory->parent_id)
                                <ul>
                                    <li class=''>
                                        <a class='sub-menu' href="{{route('wave.category', $subCategory->slug)}}">
                                            <div>{{strtoupper($subCategory->name)}}</div>
                                        </a>
                                    </li>
                                </ul>
                            @endif
                        @endforeach
                    </li>
                @endforeach
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