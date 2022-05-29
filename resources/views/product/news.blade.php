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
                                       @foreach($news as $value)
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
                                 {!! $news->links() !!}
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