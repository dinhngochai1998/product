@extends('themes.layouts.app')
@section('content')
    <body  class="stretched no-transition article" >
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
                        <li><a href="/blogs/news">Tin tức</a></li>
                        <li class='active'>{{$newsDetail->title}}</li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- #page-title end -->
        <section id="content">
            <div class="content-wrap">
                <div class="container clearfix">
                    <!-- Post Content
                       ============================================= -->
                    <div class="postcontent nobottommargin clearfix col-sm-9">
                        <div class="single-post nobottommargin">
                            <!-- Single Post
                               ============================================= -->
                            <div class="entry clearfix">
                                <!-- Entry Title
                                   ============================================= -->
                                <div class="entry-title">
                                    <h2>{{$newsDetail->title}}</h2>
                                </div>
                                <!-- .entry-title end -->
                                <!-- Entry Meta
                                   ============================================= -->
                                <ul class="entry-meta clearfix">
                                    <li><i class="icon-calendar3"></i> 26 Tháng 1 2021</li>
                                    <li><i class="icon-user"></i> Phạm Nguyễn Tuấn</li>
                                    <li><a href="#comments"><i class="icon-comments"></i> 0 Bình luận</a></li>
                                    <!--<li><a href="#"><i class="icon-camera-retro"></i></a></li>-->
                                </ul>
                                <!-- .entry-meta end -->
                                <!-- Entry Content
                                   ============================================= -->
                                <div class="entry-content notopmargin">
                                    <p style="text-align: justify;"><em><span style="font-size:15px">{{$newsDetail->excerpt}}</span></em></p>

                                    <p style="text-align: justify;"><em><span style="font-size:15px">{!! $newsDetail->body !!}</span></em></p>
                                    <!-- Post Single - Content End -->
                                    <!-- Tag Cloud
                                       ============================================= -->
                                    <div class="clear"></div>
                                    <!-- Post Single - Share
                                       ============================================= -->
                                    <div class="si-share noborder clearfix">
                                        <span>Chia sẻ:</span>
                                        <div class='socical-wrapper'>
                                            <ul class="social-icons">
                                                <!-- check null: == nill -->
                                                <div class="item">
                                                    <div class="fb-like fix_top" data-href="" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
                                                </div>
                                                <div class="item ">
                                                    <g:plusone size="medium" annotation="none"></g:plusone>
                                                </div>
                                                <div class="item ">
                                                    <a href="//twitter.com/share" class="twitter-share-button" data-url="" data-count="none" data-via="">Tweet it!</a>
                                                    <script src="//platform.twitter.com/widgets.js"></script>
                                                </div>
                                                <div class="item ">
                                                    <a href="//pinterest.com/pin/create/button/?url=&media=//hstatic.net/0/0/global/noDefaultImage6_large.gif" class="pin-it-button" count-layout="horizontal">Pin it!</a>
                                                    <script src="//assets.pinterest.com/js/pinit.js"></script>
                                                </div>
                                                <div class="item ">
                                                    <a class="evernote fix_top" target="_blank" href="http://www.evernote.com/clip.action?url=https://giadungnhat.vn&title" count-layout="horizontal">Note it!</a>
                                                </div>
                                                <div class="item ">
                                                    <a class="tumblr-share-button" href="https://www.tumblr.com/share"></a>
                                                    <script id="tumblr-js" async src="https://assets.tumblr.com/share-button.js"></script>
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
                                    <!-- Post Single - Share End -->
                                </div>
                            </div>
                            <!-- .entry end -->
                            <!-- related post -->
                            <h4>Bài viết cùng danh mục:</h4>
                            <div class="related-posts clearfix">
                                <div class="col_half nobottommargin">
                                    <div class="mpost clearfix">
                                        <div class="entry-image related-posts-img">
                                            <a href="/blogs/news/viet-thu-nghiem"><img src="http://file.hstatic.net/1000227124/article/r-wx74j.jpg" alt="6 lý do vì sao nên mua tủ lạnh Hitachi R-F51M1"></a>
                                        </div>
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="/blogs/news/viet-thu-nghiem">6 lý do vì sao nên mua tủ lạnh Hitachi R-F51M1</a></h4>
                                            </div>
                                            <ul class="entry-meta clearfix">
                                                <li><i class="icon-calendar3"></i> 26 Tháng 1 2021</li>
                                                <li><a href="/blogs/news/viet-thu-nghiem#comments"><i class="icon-comments"></i> 0</a></li>
                                            </ul>
                                            <div class="entry-content">Nằm trong phân khúc tầm trung, mẫu tủ lạnh HITACHI R-F51M, vừa được ra mắt...</div>
                                        </div>
                                    </div>
                                    <div class="mpost clearfix">
                                        <div class="entry-image related-posts-img">
                                            <a href="/blogs/news/so-sanh-tu-lanh-nhat-hitachi-r-wx74j-va-r-wx7400g"><img src="http://file.hstatic.net/1000227124/article/top-5-tu-lanh-inverter-tot-nhat-hien-nay-1.jpg" alt="Tìm hiểu tủ lạnh Nhật với công nghệ Inverter"></a>
                                        </div>
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="/blogs/news/so-sanh-tu-lanh-nhat-hitachi-r-wx74j-va-r-wx7400g">Tìm hiểu tủ lạnh Nhật với công nghệ Inverter</a></h4>
                                            </div>
                                            <ul class="entry-meta clearfix">
                                                <li><i class="icon-calendar3"></i> 26 Tháng 1 2021</li>
                                                <li><a href="/blogs/news/so-sanh-tu-lanh-nhat-hitachi-r-wx74j-va-r-wx7400g#comments"><i class="icon-comments"></i> 0</a></li>
                                            </ul>
                                            <div class="entry-content">Tủ lạnh Hitachi luôn nổi lên nhờ khả năng tiết kiệm vượt trội từ 30...</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col_half nobottommargin col_last">
                                    <div class="mpost clearfix">
                                        <div class="entry-image related-posts-img">
                                            <a href="/blogs/news/nhung-thuong-hieu-tu-lanh-nhat-dang-lam-dien-dao-thi-truong"><img src="http://file.hstatic.net/1000227124/article/74j-vs-7400g.jpg" alt="Những thương hiệu tủ lạnh Nhật đang làm “điên đảo” thị trường"></a>
                                        </div>
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="/blogs/news/nhung-thuong-hieu-tu-lanh-nhat-dang-lam-dien-dao-thi-truong">Những thương hiệu tủ lạnh Nhật đang làm “điên đảo” thị trường</a></h4>
                                            </div>
                                            <ul class="entry-meta clearfix">
                                                <li><i class="icon-calendar3"></i> 26 Tháng 1 2021</li>
                                                <li><a href="/blogs/news/nhung-thuong-hieu-tu-lanh-nhat-dang-lam-dien-dao-thi-truong#comments"><i class="icon-comments"></i> 0</a></li>
                                            </ul>
                                            <div class="entry-content">Tủ lạnh Nhật hiện nay đang xuất hiện trong rất nhiều gia đình Việt Nam. Điều...</div>
                                        </div>
                                    </div>
                                    <div class="mpost clearfix">
                                        <div class="entry-image related-posts-img">
                                            <a href="/blogs/news/bep-tu-hitachi-ht-k6k-nhat-noi-dia-co-tot-khong"><img src="http://file.hstatic.net/1000227124/article/k6k.jpg" alt="Bếp từ Hitachi HT-K6K Nhật nội địa có tốt không"></a>
                                        </div>
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="/blogs/news/bep-tu-hitachi-ht-k6k-nhat-noi-dia-co-tot-khong">Bếp từ Hitachi HT-K6K Nhật nội địa có tốt không</a></h4>
                                            </div>
                                            <ul class="entry-meta clearfix">
                                                <li><i class="icon-calendar3"></i> 26 Tháng 1 2021</li>
                                                <li><a href="/blogs/news/bep-tu-hitachi-ht-k6k-nhat-noi-dia-co-tot-khong#comments"><i class="icon-comments"></i> 0</a></li>
                                            </ul>
                                            <div class="entry-content">Bếp từ Nhật đang là những sự ưu tiên hàng đầu khi chọn mua bếp với...</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end related post -->
                            <!-- Comments
                               ============================================= -->
                            <!-- #comments end -->
                        </div>
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