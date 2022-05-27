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
                            <input type="hidden" name="search" value="product" />
                            <input type="text" name="name"  class="form-control col-md-8 search_input" placeholder="Tìm kiếm sản phẩm bạn muốn mua">
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
                        <li><a href="/collections/all">Danh mục</a></li>
                        <li class='active'>{{$category->name}}</li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- #page-title end -->
        <!-- Content
         ============================================= -->
        <input type='hidden' id='collection_id' value='=1001360857'>
        <section id="content">
            <div class="content-wrap">
                <div class="container clearfix">
                    <div class="col_desc">
                        <p>-Hàng Nhật Tuấn Hà&nbsp; tại số 2/603 Lạc Long Quân , Tây Hồ , Hà Nội&nbsp;là nơi phân phối lớn nhất các sản phẩm TỦ LẠNH NHẬT NỘI ĐỊA, Nhật bãi tại Hà Nội&nbsp;</p>
                        <p>TỦ LẠNH NHẬT NỘI ĐỊA, Nhật&nbsp;bãi chúng tôi phân phối là dòng Toshiba , Panasonic , Sharp , Mitsu, Hitachi với công nghệ cao nhất hiện nay với giá tốt nhất</p>
                        <p><span><span dir="auto" class="style-scope yt-formatted-string">🚄 youtube hướng dẫn sp ( tìm từ khóa - Hàng nhật Tuấn Hà ):&nbsp;</span><a class="yt-simple-endpoint style-scope yt-formatted-string" spellcheck="false" href="https://www.youtube.com/channel/UCKllovasXdzf6CVnc-6PI3A" rel="nofollow" dir="auto" data-mce-href="https://www.youtube.com/channel/UCKllovasXdzf6CVnc-6PI3A">https://www.youtube.com/channel/UCKll...</a><span dir="auto" class="style-scope yt-formatted-string">​</span><span dir="auto" class="style-scope yt-formatted-string"></span></span></p>
                        <p><span><span dir="auto" class="style-scope yt-formatted-string">🏠 Web kinh nghiệm sửa lỗi và đánh giá sản phẩm :&nbsp;</span><a class="yt-simple-endpoint style-scope yt-formatted-string" spellcheck="false" href="https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbGRYbTNKYUdrZ2xWNHN3YzBvcmlaY2NBV2FXd3xBQ3Jtc0tsdmh4Um14bVhfWjRTeHdOcDk5N2Y1SUNxN1UxdENieC1ISUlRbEFiU0d1ejJmSHd6Wm5QSC00QUljZ1RkZmlqSEZYMjNOX0p5YmNHMWQ1Y254S3BDdXY3Nnc5Sll4UzlOalBCUXBodXhJZW1nb0hZdw&amp;q=https%3A%2F%2Fhangnhattuanha.vn%2F" rel="nofollow noopener noreferrer" target="_blank" dir="auto" data-mce-href="https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbGRYbTNKYUdrZ2xWNHN3YzBvcmlaY2NBV2FXd3xBQ3Jtc0tsdmh4Um14bVhfWjRTeHdOcDk5N2Y1SUNxN1UxdENieC1ISUlRbEFiU0d1ejJmSHd6Wm5QSC00QUljZ1RkZmlqSEZYMjNOX0p5YmNHMWQ1Y254S3BDdXY3Nnc5Sll4UzlOalBCUXBodXhJZW1nb0hZdw&amp;q=https%3A%2F%2Fhangnhattuanha.vn%2F">https://hangnhattuanha.vn/</a></span></p>
                        <p><span><span dir="auto" class="style-scope yt-formatted-string">​</span><span dir="auto" class="style-scope yt-formatted-string">&nbsp;_______________</span></span></p>
                        <p><span><span dir="auto" class="style-scope yt-formatted-string">🍃Hân hạnh được đón tiếp quý khách!</span></span></p>
                        <p><span><span dir="auto" class="style-scope yt-formatted-string">Hotline: 098 888 8642 - 098 888 4642 Bảo hành : 096666 2944</span></span></p>
                        <p><span><strong></strong></span><br></p>
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
                                                    <a href="{{route('wave.detail.product', $product->slug)}}"><img src="{{asset('storage/' . $product->image)}}"  alt="Tủ lạnh Hitachi R-WX74J 735L" class="img-responsive"></a>
                                                    <div class="product-overlay">
                                                        <a href="/products/tu-lanh-hitachi-r-wx74j-735l" class="add-to-cart product_quick_add" data-toggle='tooltip' title='Thêm vào giỏ'><i class="icon-shopping-cart"></i><span class='hidden-md hidden-lg'> Thêm vào giỏ</span></a>
                                                        <a href="#product-pop-up" class="item-quick-view fancybox-fast-view hidden-sm hidden-xs" product_url="/products/tu-lanh-hitachi-r-wx74j-735l" data-toggle='tooltip' title='Xem nhanh'><i class="icon-zoom-in2"></i><span class='hidden-md hidden-lg'> Xem nhanh</span></a>
                                                    </div>
                                                </div>
                                                <div class="product-desc">
                                                    <div class="product-title">
                                                        <h4><a href="/products/tu-lanh-hitachi-r-wx74j-735l">{{$product->name}}</a></h4>
                                                    </div>
                                                </div>
                                                <div class="product-desc">
                                                    <div class="product-price">
                                                        <ins>{{$product->price . 'đ' ?? null}}</ins>
                                                    </div>
                                                    <div class="haravan-product-reviews-badge" data-id="1017770762">  </div>
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
                                <div class='pagination_wrapper'>
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
                                    <h4><a href='#'>Sản phẩm khuyến mãi</a></h4>
                                    <div id="post-list-footer" class='sidebar_menu'>

                                        @foreach($promotionalProducts as $value)
                                            <div class="item ">
                                                <div class="product pr-item clearfix  product_single">
                                                    <div class="product-image">
                                                        <a href="{{route('wave.detail.product', $value->slug)}}"><img  class="lazyload" data-src="{{asset('storage/' . $value->image)}}"src="{{asset('storage/' . $value->image)}}" alt="MÁY GIẶT SẤY NHIỆT TOSHIBA TW G500" class="img-responsive"></a>
                                                        <div class="product-overlay">
                                                            {{--                                                        <a href="/products/may-giat-toshiba-tw-g500l" class="add-to-cart product_quick_add" data-toggle='tooltip' title='Thêm vào giỏ'><i class="icon-shopping-cart"></i><span class='hidden-md hidden-lg'> Thêm vào giỏ</span></a>--}}
                                                            {{--                                                        <a href="{{route('wave.detail.product', $value->slug)}}" class="item-quick-view fancybox-fast-view hidden-sm hidden-xs" product_url="/products/may-giat-toshiba-tw-g500l" data-toggle='tooltip' title='Xem nhanh'><i class="icon-zoom-in2"></i><span class='hidden-md hidden-lg'> Xem nhanh</span></a>--}}
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
                                    <h4><a href='#'>hướng dẫn sử dụng sản phẩm</a></h4>
                                    <div id="post-list-footer" class='sidebar_menu'>
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
         ============================================= -->

    </body>
@endsection