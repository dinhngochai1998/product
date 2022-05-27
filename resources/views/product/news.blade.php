@extends('themes.layouts.app')
@section('content')
               <body  class="stretched no-transition blog" >
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
                                 <li class='active'>Tin tức</li>
                              </ol>
                           </div>
                        </div>
                     </section>
                     <!-- #page-title end -->
                     <section id="content">
                        <div class="content-wrap">
                           <div class="container clearfix">
                              <div class='row'>
                                 <!-- Post Content
                                    ============================================= -->
                                 <div class="postcontent nobottommargin clearfix col-sm-9">
                                    <!-- Posts
                                       ============================================= -->
                                    <div id="posts" class="small-thumbs">
                                       <!-- single article -->
                                       @foreach($news->posts as $value)
                                       <div class="entry clearfix">
                                          <div class="entry-image">
                                             <a href="" data-lightbox="image"><img class="image_fade" src="{{asset('storage/'. $value->image)}}" alt="Liệu có an toàn khi uống nước trực tiếp từ máy lọc nước hay không?"></a>
                                          </div>
                                          <div class="entry-c">
                                             <div class="entry-title">
                                                <h2><a href="{{route('wave.news.detail', $value->slug)}}">{{$value->title}}</a></h2>
                                             </div>
{{--                                             <ul class="entry-meta clearfix">--}}
{{--                                                <li><i class="icon-calendar3"></i> 26 Tháng 1 2021</li>--}}
{{--                                                <li><i class="icon-user"></i> Phạm Nguyễn Tuấn</li>--}}
{{--                                                <li><a href="/blogs/news/lieu-co-an-toan-khi-uong-nuoc-truc-tiep-tu-may-loc-nuoc-hay-khong#comments"><i class="icon-comments"></i> 0 Bình luận</a></li>--}}
{{--                                                <!--<li><a href="#"><i class="icon-camera-retro"></i></a></li>-->--}}
{{--                                             </ul>--}}
                                             <div class="entry-content">
                                                <!-- a -->
                                              {!! $value->excerpt !!}<a href="{{route('wave.news.detail', $value->slug)}}"class="more-link">Xem tiếp</a>
                                             </div>
                                          </div>
                                       </div>
                                       @endforeach
                                       <!-- end single article -->
                                    </div>
                                    <!-- #posts end -->
                                    <!-- Pagination
                                       ============================================= -->
                                    <ul class="pager nomargin">
                                       <li class="previous"><a href="/blogs/news?page=2">&larr; Bài viết cũ hơn</a></li>
                                    </ul>
                                    <!-- .pager end -->
                                 </div>
                                 <!-- .postcontent end -->
                                 <!-- Sidebar
                                    ============================================= -->
                                 <div class="sidebar nobottommargin col_last clearfix hidden-xs col-sm-3">
                                    <div class="sidebar-widgets-wrap">
                                       <!-- categories -->
                                       <div class="widget widget_links clearfix">
                                          <h4>Danh mục sản phẩm</h4>
                                          <ul class='sidebar_menu'>
                                             <li><a href="/">Trang chủ</a></li>
                                             <li><a href="/pages/gioi-thieu-mua-hang">Giới thiệu</a></li>
                                             <li><a href="/blogs/news">Tin tức</a></li>
                                             <li><a href="/blogs/news">Khuyến mại</a></li>
                                             <li><a href="/pages/thanh-toan">Thanh toán</a></li>
                                             <li><a href="/pages/lien-he-mua-hang">Liên hệ</a></li>
                                          </ul>
                                       </div>
                                       <!-- end categories -->
                                       <!-- recent article -->
                                       <div class="widget clearfix">
                                          <h4 style=''><a href=''>Hướng dẫn sử dụng</a></h4>
                                          <div class="tab-container sidebar_menu">
                                             <!--<div class="tab-content clearfix" id="tabs-1">-->
                                             @foreach($userManual->posts as $value)
                                             <div class="spost clearfix">
                                                <div class="entry-image">
                                                   <a href="{{route('wave.news.detail',$value->slug)}}" class="nobg a-circle"><img class="img-circle-custom" src="{{asset('storage/'.$value->image)}}" alt=""></a>
                                                </div>
                                                <div class="entry-c">
                                                   <div class="entry-title">
                                                      <h4><a href="{{route('wave.news.detail',$value->slug)}}">{{$value->title}}</a></h4>
                                                   </div>
{{--                                                   <ul class="entry-meta">--}}
{{--                                                      <li><a href='/blogs/news/lieu-co-an-toan-khi-uong-nuoc-truc-tiep-tu-may-loc-nuoc-hay-khong#comments'><i class="icon-comments-alt"></i> 0 bình luận</a></li>--}}
{{--                                                   </ul>--}}
                                                </div>
                                             </div>
                                             @endforeach
                                          </div>
                                       </div>
                                       <div class="widget clearfix" style='overflow:hidden;'>
                                          <div style="width: 100%;">
                                             <!-- Page plugin's width will be 180px -->
                                             <div class="fb-page" data-href="https://www.facebook.com/eganycom" data-width="320"></div>
                                          </div>
                                          <script>
                                             (function(d, s, id) {
                                             	var js, fjs = d.getElementsByTagName(s)[0];
                                             	if (d.getElementById(id)) return;
                                             	js = d.createElement(s); js.id = id;
                                             	js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=263266547210244&version=v2.0";
                                             	fjs.parentNode.insertBefore(js, fjs);
                                             }(document, 'script', 'facebook-jssdk'));
                                          </script>
                                       </div>
                                       <div class="widget clearfix">
                                          <h4>https://giadungnhat.vn/blogs/news</h4>
                                          <div class="tagcloud sidebar_menu" style='border: none; padding: 10px 0;'>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- .sidebar end -->
                              </div>
                           </div>
                        </div>
                     </section>
                     <!-- #content end -->
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
               </body>
@endsection