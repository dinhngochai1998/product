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
        <!-- #header end -->
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
                        <li class='active'>TỦ LẠNH NHẬT NỘI ĐỊA</li>
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
                                                    <a href="/products/tu-lanh-hitachi-r-wx74j-735l"><img src="{{asset('storage/' . $product->image)}}"  alt="Tủ lạnh Hitachi R-WX74J 735L" class="img-responsive"></a>
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
                                    <h4><a href='/collections/may-giat-nhat-noi-dia-nhat-bai'>Sản phẩm khuyến mãi</a></h4>
                                    <div id="post-list-footer" class='sidebar_menu'>
                                        <div class="item ">
                                            <div class="product pr-item clearfix  product_single">
                                                <div class="product-image">
                                                    <a href="/products/may-giat-toshiba-tw-g500l"><img  class="lazyload" data-src="//product.hstatic.net/1000227124/product/4416_p_1490409213220-removebg-preview1__1__de8c9858b9464186aaf34f082069d4f6_medium.jpg"src="//product.hstatic.net/1000227124/product/4416_p_1490409213220-removebg-preview1__1__de8c9858b9464186aaf34f082069d4f6_medium.jpg" alt="MÁY GIẶT SẤY NHIỆT TOSHIBA TW G500" class="img-responsive"></a>
                                                    <div class="product-overlay">
                                                        <a href="/products/may-giat-toshiba-tw-g500l" class="add-to-cart product_quick_add" data-toggle='tooltip' title='Thêm vào giỏ'><i class="icon-shopping-cart"></i><span class='hidden-md hidden-lg'> Thêm vào giỏ</span></a>
                                                        <a href="#product-pop-up" class="item-quick-view fancybox-fast-view hidden-sm hidden-xs" product_url="/products/may-giat-toshiba-tw-g500l" data-toggle='tooltip' title='Xem nhanh'><i class="icon-zoom-in2"></i><span class='hidden-md hidden-lg'> Xem nhanh</span></a>
                                                    </div>
                                                </div>
                                                <div class="product-desc">
                                                    <div class="product-title">
                                                        <h4><a href="/products/may-giat-toshiba-tw-g500l">MÁY GIẶT SẤY NHIỆT TOSHIBA TW G500</a></h4>
                                                    </div>
                                                </div>
                                                <div class="product-desc">
                                                    <div class="product-price">
                                                        <ins> 10,000,000₫ </ins>
                                                        <del>12,000,000₫</del>
                                                    </div>
                                                    <div class="haravan-product-reviews-badge" data-id="1020742272">  </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item ">
                                            <div class="product pr-item clearfix  product_single">
                                                <div class="product-image">
                                                    <a href="/products/may-giat-say-block-toshiba-tw-g510"><img  class="lazyload" data-src="//product.hstatic.net/1000227124/product/giat-toshiba-twg510l-inverter-giat-9kg-say-6kg-moi-95-removebg-preview_dc1a29f94c7543799a19e2eb33d5ea55_medium.jpg"src="//product.hstatic.net/1000227124/product/giat-toshiba-twg510l-inverter-giat-9kg-say-6kg-moi-95-removebg-preview_dc1a29f94c7543799a19e2eb33d5ea55_medium.jpg" alt="MÁY GIẶT SẤY NHIỆT TOSHIBA TW G510" class="img-responsive"></a>
                                                    <div class="product-overlay">
                                                        <a href="/products/may-giat-say-block-toshiba-tw-g510" class="add-to-cart product_quick_add" data-toggle='tooltip' title='Thêm vào giỏ'><i class="icon-shopping-cart"></i><span class='hidden-md hidden-lg'> Thêm vào giỏ</span></a>
                                                        <a href="#product-pop-up" class="item-quick-view fancybox-fast-view hidden-sm hidden-xs" product_url="/products/may-giat-say-block-toshiba-tw-g510" data-toggle='tooltip' title='Xem nhanh'><i class="icon-zoom-in2"></i><span class='hidden-md hidden-lg'> Xem nhanh</span></a>
                                                    </div>
                                                </div>
                                                <div class="product-desc">
                                                    <div class="product-title">
                                                        <h4><a href="/products/may-giat-say-block-toshiba-tw-g510">MÁY GIẶT SẤY NHIỆT TOSHIBA TW G510</a></h4>
                                                    </div>
                                                </div>
                                                <div class="product-desc">
                                                    <div class="product-price">
                                                        <ins> 10,500,000₫ </ins>
                                                    </div>
                                                    <div class="haravan-product-reviews-badge" data-id="1030609602">  </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item ">
                                            <div class="product pr-item clearfix  product_single">
                                                <div class="product-image">
                                                    <a href="/products/may-giat-say-block-toshiba-g520"><img  class="lazyload" data-src="//product.hstatic.net/1000227124/product/ay-6kg-inverter-chuyen-dong-truc-tiep-86-750x500-removebg-preview1__1__f7efca8f1c32422a97059f9a5cea3167_medium.jpg"src="//product.hstatic.net/1000227124/product/ay-6kg-inverter-chuyen-dong-truc-tiep-86-750x500-removebg-preview1__1__f7efca8f1c32422a97059f9a5cea3167_medium.jpg" alt="MÁY GIẶT SẤY NHIỆT TOSHIBA TW G520" class="img-responsive"></a>
                                                    <div class="product-overlay">
                                                        <a href="/products/may-giat-say-block-toshiba-g520" class="add-to-cart product_quick_add" data-toggle='tooltip' title='Thêm vào giỏ'><i class="icon-shopping-cart"></i><span class='hidden-md hidden-lg'> Thêm vào giỏ</span></a>
                                                        <a href="#product-pop-up" class="item-quick-view fancybox-fast-view hidden-sm hidden-xs" product_url="/products/may-giat-say-block-toshiba-g520" data-toggle='tooltip' title='Xem nhanh'><i class="icon-zoom-in2"></i><span class='hidden-md hidden-lg'> Xem nhanh</span></a>
                                                    </div>
                                                </div>
                                                <div class="product-desc">
                                                    <div class="product-title">
                                                        <h4><a href="/products/may-giat-say-block-toshiba-g520">MÁY GIẶT SẤY NHIỆT TOSHIBA TW G520</a></h4>
                                                    </div>
                                                </div>
                                                <div class="product-desc">
                                                    <div class="product-price">
                                                        <ins> 11,000,000₫ </ins>
                                                    </div>
                                                    <div class="haravan-product-reviews-badge" data-id="1030609644">  </div>
                                                </div>
                                            </div>
                                        </div>
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
                                        <div class="spost clearfix">
                                            <div class="entry-image">
                                                <a href="/collections/may-loc-khong-khi-nhat-bai/products/may-loc-khi-daikin-mck70p-nhat-noi-dia"><img src="//product.hstatic.net/1000227124/product/unnamed_63596c0ef4ed407baca6389c73be625c_medium.jpg" alt="MÁY LỌC KHÍ DAIKIN MCK70P NHẬT NỘI ĐỊA"></a>
                                            </div>
                                            <div class="entry-c">
                                                <div class="entry-title">
                                                    <h4><a href="/collections/may-loc-khong-khi-nhat-bai/products/may-loc-khi-daikin-mck70p-nhat-noi-dia">MÁY LỌC KHÍ DAIKIN MCK70P NHẬT NỘI ĐỊA</a></h4>
                                                </div>
                                                <ul class="entry-meta">
                                                    <li class="color">
                                                        <ins>3,500,000₫</ins>
                                                    </li>
                                                    <!--<li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i></li>-->
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="spost clearfix">
                                            <div class="entry-image">
                                                <a href="/collections/may-loc-khong-khi-nhat-bai/products/may-loc-khi-sharp-kc-f70"><img src="//product.hstatic.net/1000227124/product/thiet_ke_khong_ten_53981a257c654e8485a1242446938542_medium.jpg" alt="MÁY LỌC KHÍ SHARP KC F70"></a>
                                            </div>
                                            <div class="entry-c">
                                                <div class="entry-title">
                                                    <h4><a href="/collections/may-loc-khong-khi-nhat-bai/products/may-loc-khi-sharp-kc-f70">MÁY LỌC KHÍ SHARP KC F70</a></h4>
                                                </div>
                                                <ul class="entry-meta">
                                                    <li class="color">
                                                        <ins>3,200,000₫</ins>
                                                    </li>
                                                    <!--<li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i></li>-->
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="spost clearfix">
                                            <div class="entry-image">
                                                <a href="/collections/may-loc-khong-khi-nhat-bai/products/may-loc-khi-sharp-kc-d70"><img src="//product.hstatic.net/1000227124/product/thiet_ke_khong_ten_19715d5df853473290d65e9974453c86_medium.jpg" alt="MÁY LỌC KHÍ SHARP KC D70"></a>
                                            </div>
                                            <div class="entry-c">
                                                <div class="entry-title">
                                                    <h4><a href="/collections/may-loc-khong-khi-nhat-bai/products/may-loc-khi-sharp-kc-d70">MÁY LỌC KHÍ SHARP KC D70</a></h4>
                                                </div>
                                                <ul class="entry-meta">
                                                    <li class="color">
                                                        <ins>3,200,000₫</ins>
                                                    </li>
                                                    <!--<li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i></li>-->
                                                </ul>
                                            </div>
                                        </div>
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
        <footer id="footer" class='dark'>
            <div class="container">
                <!-- Footer Widgets
               ============================================= -->
                <div class="footer-widgets-wrap clearfix footer_wrap_2">
                    <div class="prefooter_one col-sm-3 col-xs-6">
                        <div class="widget clearfix">
                            <a href='' class='footer_logo'><img class="lazyload" src="//theme.hstatic.net/1000227124/1000685523/14/lazyload.jpg?v=21" data-src='//theme.hstatic.net/1000227124/1000685523/14/footer_logo.png?v=21' /></a>
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
                                <img src='//theme.hstatic.net/1000227124/1000685523/14/pre_footer_address_icon2.png?v=21' />
                                <span>Số 2 ngõ 603 Lạc Long Quân -Quận Tây Hồ , Hà Nội</span> <br>
                                <img src='//theme.hstatic.net/1000227124/1000685523/14/pre_footer_phone_icon2.png?v=21' />
                                <a href='tel:098 888 8642'>098 888 8642</a> <br>
                                <img src='//theme.hstatic.net/1000227124/1000685523/14/pre_footer_email_icon2.png?v=21' />
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
                    <img class="lazyload" src="//theme.hstatic.net/1000227124/1000685523/14/lazyload.jpg?v=21" data-src='//theme.hstatic.net/1000227124/1000685523/14/payment_img.png?v=21' />
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
                        © Bản quyền thuộc về <a href="https://giadungnhat.vn" target="_blank">Giadungnhat</a>.
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