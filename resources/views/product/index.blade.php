@extends('themes.layouts.app')

@section('content')
	<body  class="stretched no-transition index" >
	<div class='body_overlay'></div>
	<!-- Document Wrapper
      ============================================= -->
	<div id="wrapper" class="clearfix">
		<!-- style="animation-duration: 1.5s; opacity: 1;"-->
		<script>
			/*** scroll menu ***/
			$(window).load(function() {

				$(this).scroll(function() {
					var height = $(window).scrollTop();
					if(height >= 400) {
						$('.scroll_menu').addClass('visible');
					}
					else {
						$('.scroll_menu').removeClass('visible');
					}
				});
			});
			/*** end scroll menu ***/
		</script>
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
							<a href="/cart" id="top-cart-trigger"><img src='../assets/images/icons/cart_bg.png' ><span class='top_cart_qty'>0</span>
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
						<a class='top_hotline col-sm-3 hidden-sm hidden-xs nopadding' href='tel:098 888 8642'><img src='../assets/images/icons/top_hotline.png' /></a>
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
{{--		<div class='container slide_wrapper'>--}}
{{--			<div class="hidden-lg hidden-md fanpape_mobile">--}}
{{--				<h2>--}}
{{--					Truy cập fanpage--}}
{{--				</h2>--}}
{{--				<div class="fb-page" data-href="https://www.facebook.com/shophangnhatbainoidia" data-tabs="" data-width="480" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">--}}
{{--					<blockquote cite="https://www.facebook.com/shophangnhatbainoidia" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/shophangnhatbainoidia">https://www.facebook.com/shophangnhatbainoidia</a></blockquote>--}}
{{--				</div>--}}
{{--			</div>--}}
{{--			<!-- left menu -->--}}
{{--			<div class="panel-group left_menu" id='left_menu'>--}}
{{--				<div class="panel-heading">--}}
{{--					<h4 class="panel-title">--}}
{{--						<a data-toggle="collapse" href="#collapse1">DANH MỤC SẢN PHẨM <i class='icon-angle-down' ></i></a>--}}
{{--					</h4>--}}
{{--				</div>--}}
{{--				<div id="collapse1" class="panel-collapse collapse">--}}
{{--					<div class="panel-body">--}}
{{--						<ul class='nav nav-pills nav-stacked'>--}}
{{--							@foreach($categories as $value)--}}
{{--							<li class=' menu'>--}}
{{--								<a class='menu' href="/collections/may-giat-nhat-noi-dia-nhat-bai">--}}
{{--									<img src='{{asset('images/icons/leftmenu_icon_1.png')}}' data-toggle="tooltip" data-placement="right" title="MÁY GIẶT"/>--}}
{{--									<span class="menu_title">{{strtoupper($value->name)}}</span>--}}
{{--									<i class='icon-angle-right arrow'></i>--}}
{{--								</a>--}}
{{--								<ul class='submenu'>--}}
{{--									<div class='submenu_padding'>--}}
{{--										@foreach($subCategories as $subCategory)--}}
{{--											@if($value->id == $subCategory->parent_id)--}}
{{--												<li class=''><a class='sub-menu' href="#"><div>--}}
{{--															{{strtoupper($subCategory->name)}}</div></a></li>--}}
{{--											@endif--}}
{{--										@endforeach--}}
{{--									</div>--}}
{{--								</ul>--}}
{{--							</li>--}}
{{--							@endforeach--}}
{{--						</ul>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</div>--}}
{{--			<script>--}}
{{--				$(document).ready(function() {--}}
{{--					if($(window).width() > 991) {--}}
{{--						$('.left_menu #collapse1').addClass('in');--}}
{{--					}--}}
{{--				});--}}

{{--			</script>--}}
{{--			<!-- end left menu -->--}}
{{--			<div class='slider_wrap'>--}}
{{--				<nav id="primary-menu" class='style-5'>--}}
{{--					<ul>--}}
{{--					@foreach($categories as $value)--}}
{{--						<!-- normal sub menu -->--}}
{{--							<li class=''>--}}
{{--								<a class='menu' href="/collections/may-giat-nhat-noi-dia-nhat-bai">--}}
{{--									<div>--}}
{{--										{{strtoupper($value->name)}}--}}
{{--									</div>--}}
{{--								</a>--}}
{{--								<i class='icon-angle-right hidden-lg hidden-md submenu_toggle' style='position:absolute; right: 0; font-size: 16px; width: 25px; margin:0;'></i>--}}
{{--								<ul>--}}

{{--									@foreach($subCategories as $subCategory)--}}
{{--										@if($value->id == $subCategory->parent_id)--}}
{{--											<li class=''><a class='sub-menu' href="/collections/may-giat-nhat-bai-ban-chay-nhat"><div>--}}
{{--														{{strtoupper($subCategory->name)}}</div></a></li>--}}
{{--										@endif--}}
{{--									@endforeach--}}


{{--								</ul>--}}
{{--							</li>--}}
{{--						@endforeach--}}
{{--					</ul>--}}
{{--				</nav>--}}
{{--				<script>--}}
{{--					$("#sidebar-wrapper ul li a span").click(function( event ) {--}}
{{--						event.preventDefault();--}}
{{--						var li = $(this).parents('li');--}}
{{--						li.children('ul').toggle('slow');--}}
{{--					});--}}
{{--				</script>--}}
{{--				<!-- Slider -->--}}
{{--				<section id="slider" class="revslider-wrap nopadding ohidden clearfix ">--}}
{{--					<!----}}
{{--                  #################################--}}
{{--                  - THEMEPUNCH BANNER ---}}
{{--                  #################################--}}
{{--                  -->--}}
{{--					<div class="tp-banner-container">--}}
{{--						<div class="tp-banner" >--}}
{{--							<ul>--}}
{{--								<!-- SLIDE  -->--}}
{{--								<li data-transition="random" data-slotamount="7" data-link="/collections/all"  data-title="" >--}}
{{--									<img  src="{{asset('images/slides/slideshow_1.jpg')}}">--}}
{{--									<div class="tp-caption customin lfl ltr tp-resizeme revo-slider-caps-text uppercase"--}}
{{--										 data-x="center"--}}
{{--										 data-y="center"--}}
{{--										 data-customin="x:-300px;y:0px;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:0% 0%;"--}}
{{--										 data-speed="700"--}}
{{--										 data-start="1000"--}}
{{--										 data-easing="easeOutBack"--}}
{{--										 data-splitin="none"--}}
{{--										 data-splitout="none"--}}
{{--										 data-elementdelay="0.01"--}}
{{--										 data-endelementdelay="0.1"--}}
{{--										 data-endspeed="1000"--}}
{{--										 data-endeasing="easeOutBack" style=" color: #fff; font-size: 50px"></div>--}}
{{--								</li>--}}
{{--								<li data-transition="random" data-slotamount="7" data-link=""  data-title="" >--}}
{{--									<img src="{{asset('images/slides/slideshow_2.jpg')}}" style='opacity: 0;'>--}}
{{--									<div class="tp-caption customin lfl ltr tp-resizeme revo-slider-caps-text uppercase"--}}
{{--										 data-x="center"--}}
{{--										 data-y="center"--}}
{{--										 data-customin="x:-300px;y:0px;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:0% 0%;"--}}
{{--										 data-speed="700"--}}
{{--										 data-start="1000"--}}
{{--										 data-easing="easeOutBack"--}}
{{--										 data-splitin="none"--}}
{{--										 data-splitout="none"--}}
{{--										 data-elementdelay="0.01"--}}
{{--										 data-endelementdelay="0.1"--}}
{{--										 data-endspeed="1000"--}}
{{--										 data-endeasing="easeOutBack" style=" color: #fff; font-size: 50px"></div>--}}
{{--								</li>--}}
{{--								<li data-transition="random" data-slotamount="7" data-link="/collections/may-giat"  data-title="" >--}}
{{--									<img src="{{asset('images/slides/slideshow_3.jpg')}}" style='opacity: 0;'>--}}
{{--									<div class="tp-caption customin lfl ltr tp-resizeme revo-slider-caps-text uppercase"--}}
{{--										 data-x="center"--}}
{{--										 data-y="center"--}}
{{--										 data-customin="x:-300px;y:0px;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:0% 0%;"--}}
{{--										 data-speed="700"--}}
{{--										 data-start="1000"--}}
{{--										 data-easing="easeOutBack"--}}
{{--										 data-splitin="none"--}}
{{--										 data-splitout="none"--}}
{{--										 data-elementdelay="0.01"--}}
{{--										 data-endelementdelay="0.1"--}}
{{--										 data-endspeed="1000"--}}
{{--										 data-endeasing="easeOutBack" style=" color: #fff; font-size: 50px"></div>--}}
{{--								</li>--}}
{{--							</ul>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--					<script type="text/javascript">--}}
{{--						jQuery(document).ready(function() {--}}

{{--							jQuery('.tp-banner').show().revolution(--}}
{{--									{--}}
{{--										dottedOverlay:"none",--}}
{{--										delay:5000,--}}
{{--										startwidth:776,--}}
{{--										startheight:400,--}}
{{--										hideThumbs:200,--}}

{{--										thumbWidth:100,--}}
{{--										thumbHeight:50,--}}
{{--										thumbAmount:5,--}}

{{--										navigationType:"none",--}}
{{--										navigationArrows:"solo",--}}
{{--										//navigationStyle:"preview2",--}}

{{--										touchenabled:"on",--}}
{{--										onHoverStop:"on",--}}

{{--										swipe_velocity: 0.7,--}}
{{--										swipe_min_touches: 1,--}}
{{--										swipe_max_touches: 1,--}}
{{--										drag_block_vertical: false,--}}

{{--										parallax:"mouse",--}}
{{--										parallaxBgFreeze:"on",--}}
{{--										parallaxLevels:[7,4,3,2,5,4,3,2,1,0],--}}

{{--										keyboardNavigation:"off",--}}

{{--										navigationHAlign:"center",--}}
{{--										navigationVAlign:"bottom",--}}
{{--										navigationHOffset:0,--}}
{{--										navigationVOffset:20,--}}

{{--										soloArrowLeftHalign:"left",--}}
{{--										soloArrowLeftValign:"center",--}}
{{--										soloArrowLeftHOffset:20,--}}
{{--										soloArrowLeftVOffset:0,--}}

{{--										soloArrowRightHalign:"right",--}}
{{--										soloArrowRightValign:"center",--}}
{{--										soloArrowRightHOffset:20,--}}
{{--										soloArrowRightVOffset:0,--}}

{{--										shadow:0,--}}
{{--										fullWidth:"on",--}}
{{--										fullScreen:"off",--}}

{{--										spinner:"spinner4",--}}

{{--										stopLoop:"off",--}}
{{--										stopAfterLoops:-1,--}}
{{--										stopAtSlide:-1,--}}

{{--										shuffle:"off",--}}

{{--										autoHeight:"on",--}}
{{--										forceFullWidth:"off",--}}



{{--										hideThumbsOnMobile:"off",--}}
{{--										hideNavDelayOnMobile:1500,--}}
{{--										hideBulletsOnMobile:"off",--}}
{{--										hideArrowsOnMobile:"off",--}}
{{--										hideThumbsUnderResolution:0,--}}

{{--										hideSliderAtLimit:0,--}}
{{--										hideCaptionAtLimit:0,--}}
{{--										hideAllCaptionAtLilmit:0,--}}
{{--										startWithSlide:0,--}}
{{--										fullScreenOffsetContainer: ".header"--}}
{{--									});--}}




{{--						}); //ready--}}

{{--					</script>--}}
{{--					<!-- END REVOLUTION SLIDER -->--}}
{{--				</section>--}}
{{--				<!-- end slider -->--}}
{{--			</div>--}}
{{--			<div class='clear'></div>--}}
{{--		</div>--}}
		<!-- Content
         ============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">
					<div class="index-about">
						<div class="w-author">
							<div class="w-author-img">
								<a href="#" rel="author external" target="_blank">
									<img alt="Giadungnhat.vn  luôn tận tâm" height="90" src="{{asset('images/icons/index_about_image.png')}}" width="150" />
								</a>
							</div>
							<div class="w-author-name"><a href="#" title="Bùi Huy - Kho Hàng Nhật Bãi">Giadungnhat.vn  luôn tận tâm</a></div>
							<div class="w-author-bio">
								Chúng tôi là <span style="color: #ff0000;"><strong>Giadungnhat.vn </strong></span>, hiện là <strong>nơi phân phối các sản phẩm điện máy hàng Nhật chất lượng số 1 tại Việt Nam</strong>. Với phương châm bán hàng là mang đến cho khách hàng những sản phẩm tốt nhất với giá tốt nhất. Địa chỉ tại <strong> Số 2 ngõ 603 Lạc Long Quân, Tây Hồ, Hà Nội </strong>. Chúng tôi luôn lấy tiêu chí phục vụ khách hàng tận tâm – trung thực và rõ ràng.			<span style="color: #ff0000;"><strong> Giadungnhat.vn – luôn rẻ luôn chất lượng</strong></span>
							</div>
							<ul class="uu-the">
								<li><span class="uu-the-icon"><img src="{{asset('images/icons/index_about_uuthe_icon_1.png')}}" /></span><span><strong>100% Sản phẩm xuất xứ<span style="color:#ff0000">Nhật Bản</span style="color: #ff0000;"></span></li>
								<li><span class="uu-the-icon"><img src="{{asset('images/icons/index_about_uuthe_icon_2.png')}}" /></span><span>Chất lượng tốt - Giá thành hợp lý</span></li>
								<li><span class="uu-the-icon"><img src="{{asset('images/icons/index_about_uuthe_icon_3.png')}}" /></span><span>Hỗ trợ khách hàng 24/7</span></li>
							</ul>
						</div>
					</div>
					<!-- popular brand -->
					<!-- end popular brand -->
					<!-- collection group -->
					<div id="sale_index" class="clearfix">
						<h3 class="kuteshop-title"> <span class="title"></span></h3>
						<div class="row">
							<div class='col-lg-12 nopadding col-sm-12'>
							</div>
						</div>
					</div>
					@foreach($products as $key => $product)
					<div class='index_col_group' id='index_col_group_8'>
						<div class="col-md-12 col-xs-12 nopad">
							<div class='col-md-20 nopadding col-sm-3 index_col_group_left'>
								<div class='index_col_title'>
									<h3 style='background: #ff4081;'>
										<!-- #ffffff -->
										<a href='{{route('wave.category', $product['category']->slug)}}'  style='color: #ffffff;'>{{$product['category']->name}}</a>
									</h3>
								</div>
							</div>
							<div class='col-md-80 nopadding index_col_main col-sm-9 col-xs-12'>
								<div class='index_col_list'>
									<ul>
										@foreach($product['subCategory'] as $subCategory)
										<li><a href="/collections/may-loc-nuoc-toshiba">{{strtoupper($subCategory->name)}}</a></li>
										@endforeach
										<li class="more"><a href="{{route('wave.category', $product['category']->slug)}}">Xem tất cả</a></li>
									</ul>
								</div>
							</div>
						</div>
{{--						// product--}}
						<div class="col-md-12 col-xs-12 nopad">
							<div class=' col-lg-12   nopadding index_col_main col-sm-12 col-xs-12'>
								@foreach($product['product'] as $value)
								<div class=" col-sm-5-col  col-xs-6 noleftpadding norightpadding product_single">
									<div class="product pr-item clearfix">
										<div class="product-image">
											<a href="{{route('wave.detail.product', $value->slug)}}"><img src="{{asset('storage/'. $value->image)}}"  alt="MÁY LỌC NƯỚC RO NÓNG LẠNH TOSHIBA TWP-W1643SV(W) NEW 100%" class="img-responsive"></a>
											<div class="product-overlay">
												<a href="{{route('wave.detail.product', $value->slug)}}" class="add-to-cart product_quick_add" data-toggle='tooltip' title='Thêm vào giỏ'><i class="icon-shopping-cart"></i><span class='hidden-md hidden-lg'> Thêm vào giỏ</span></a>
												<a href="{{route('wave.detail.product', $value->slug)}}" class="item-quick-view fancybox-fast-view hidden-sm hidden-xs" product_url="/products/may-loc-nuoc-ro-nong-lanh-toshiba-twp-w1643sv-w-new-100" data-toggle='tooltip' title='Xem nhanh'><i class="icon-zoom-in2"></i><span class='hidden-md hidden-lg'> Xem nhanh</span></a>
											</div>
										</div>
										<div class="product-desc">
											<div class="product-title">
												<h4><a href="{{route('wave.detail.product', $value->slug)}}">{{$value->name}}</a></h4>
											</div>
										</div>
										<div class="product-desc">
											<div class="product-price">
												<ins> {{$value->price . '₫' }}</ins>
											</div>
											<div class="haravan-product-reviews-badge" data-id="1030675101">  </div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
							<script type="text/javascript">
								jQuery(document).ready(function($) {

									var ocClients = $("#index_col_slide_8");

									ocClients.owlCarousel({
										items: 1,
										margin: 0,
										loop: true,
										nav: true,
										navText: ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],
										autoplay: true,
										dots: false,
										autoplayHoverPause: true,
										responsive:{
											0:{ items:2 },
											480:{ items:1 },
											768:{ items:1 },
											992:{ items:1 },
											1200:{ items:1 }
										}
									});

								});

							</script>
						</div>
					</div>
				@endforeach
					<!-- end collection group -->
					<div id="blog_index" class="clearfix">
						<h3 class="kuteshop-title"> <span class="title">Tin tức</span></h3>
						<div class="row">
							<div class='col-lg-12 nopadding col-sm-12'>
								<div class="col-sm-3 col-xs-6 ">
									<article class="blog-item left post type-post status-publish format-standard has-post-thumbnail hentry " >
										<div class="blog-inner">
											<div class="blog-thumb">
												<a href="/blogs/news/lieu-co-an-toan-khi-uong-nuoc-truc-tiep-tu-may-loc-nuoc-hay-khong" tabindex="0">
													<figure><img class="img-responsive" src="../assets/images/article/news.jpg" alt="Liệu có an toàn khi uống nước trực tiếp từ máy lọc nước hay không?"></figure>
												</a>
											</div>
											<div class="blog-info equal-elem">
												<h4 class="blog-title">
													<a href="/blogs/news/lieu-co-an-toan-khi-uong-nuoc-truc-tiep-tu-may-loc-nuoc-hay-khong" >Liệu có an toàn khi uống nước trực tiếp từ máy lọc nước hay không?</a>
												</h4>
												<ul class="blog-meta">
													<li class="date">
														<i class="fa fa-calendar" aria-hidden="true"></i> 26 Tháng 1 2021
													</li>
													<li class="comment">
														<i class="fa fa-comment-o" aria-hidden="true"></i> 0  Bình luận
													</li>
												</ul>
												<div class="blog-readmore">
													<a class=" read-more screen-reader-text" href=""> Xem thêm <span class="icon-angle-right"></span>
													</a>
												</div>
											</div>
										</div>
									</article>
								</div>
								<div class="col-sm-3 col-xs-6 ">
									<article class="blog-item left post type-post status-publish format-standard has-post-thumbnail hentry " >
										<div class="blog-inner">
											<div class="blog-thumb">
												<a href="/blogs/news/dung-may-khong-khi-ca-ngay-co-tot-khong" tabindex="0">
													<figure><img class="img-responsive" src="../assets/images/article/news.jpg" alt="Dùng máy không khí cả ngày có tốt không?"></figure>
												</a>
											</div>
											<div class="blog-info equal-elem">
												<h4 class="blog-title">
													<a href="/blogs/news/dung-may-khong-khi-ca-ngay-co-tot-khong" >Dùng máy không khí cả ngày có tốt không?</a>
												</h4>
												<ul class="blog-meta">
													<li class="date">
														<i class="fa fa-calendar" aria-hidden="true"></i> 26 Tháng 1 2021
													</li>
													<li class="comment">
														<i class="fa fa-comment-o" aria-hidden="true"></i> 0  Bình luận
													</li>
												</ul>
												<div class="blog-readmore">
													<a class=" read-more screen-reader-text" href=""> Xem thêm <span class="icon-angle-right"></span>
													</a>
												</div>
											</div>
										</div>
									</article>
								</div>
								<div class="col-sm-3 col-xs-6 ">
									<article class="blog-item left post type-post status-publish format-standard has-post-thumbnail hentry " >
										<div class="blog-inner">
											<div class="blog-thumb">
												<a href="/blogs/news/su-dung-may-loc-khong-khi-nhu-the-nao-cho-dung" tabindex="0">
													<figure><img class="img-responsive" src="../assets/images/article/news.jpg" alt="Sử dụng máy lọc không khí như thế nào cho đúng?"></figure>
												</a>
											</div>
											<div class="blog-info equal-elem">
												<h4 class="blog-title">
													<a href="/blogs/news/su-dung-may-loc-khong-khi-nhu-the-nao-cho-dung" >Sử dụng máy lọc không khí như thế nào cho đúng?</a>
												</h4>
												<ul class="blog-meta">
													<li class="date">
														<i class="fa fa-calendar" aria-hidden="true"></i> 26 Tháng 1 2021
													</li>
													<li class="comment">
														<i class="fa fa-comment-o" aria-hidden="true"></i> 0  Bình luận
													</li>
												</ul>
												<div class="blog-readmore">
													<a class=" read-more screen-reader-text" href=""> Xem thêm <span class="icon-angle-right"></span>
													</a>
												</div>
											</div>
										</div>
									</article>
								</div>
								<div class="col-sm-3 col-xs-6 ">
									<article class="blog-item left post type-post status-publish format-standard has-post-thumbnail hentry " >
										<div class="blog-inner">
											<div class="blog-thumb">
												<a href="/blogs/news/lam-nhu-the-nao-de-ve-sinh-may-loc-khong-khi-dung-cach-va-hieu-qua" tabindex="0">
													<figure><img class="img-responsive" src="../assets/images/article/news.jpg" alt="Làm như thế nào để vệ sinh máy lọc không khí đúng cách và hiệu quả?"></figure>
												</a>
											</div>
											<div class="blog-info equal-elem">
												<h4 class="blog-title">
													<a href="/blogs/news/lam-nhu-the-nao-de-ve-sinh-may-loc-khong-khi-dung-cach-va-hieu-qua" >Làm như thế nào để vệ sinh máy lọc không khí đúng cách và hiệu quả?</a>
												</h4>
												<ul class="blog-meta">
													<li class="date">
														<i class="fa fa-calendar" aria-hidden="true"></i> 25 Tháng 1 2021
													</li>
													<li class="comment">
														<i class="fa fa-comment-o" aria-hidden="true"></i> 0  Bình luận
													</li>
												</ul>
												<div class="blog-readmore">
													<a class=" read-more screen-reader-text" href=""> Xem thêm <span class="icon-angle-right"></span>
													</a>
												</div>
											</div>
										</div>
									</article>
								</div>
							</div>
						</div>
					</div>
					<!-- end collection group -->
				</div>
			</div>
		</section>
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
			</div>  <!-- END: row -->
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