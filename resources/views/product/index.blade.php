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
					@php
						$title = (new App\Helper\ConfigConstant())->getConfig('tieu-de-page');

					@endphp
					<div class="hidden-xs fanepage_pc">
						<span>Truy cập fanpage:</span>
						<a target="_blank" href="https://www.facebook.com/shophangnhatbainoidia">{{strtoupper($title->value) ?? null}}</a>
					</div>
					<!-- Top Search
                  ============================================= -->
					<div class='top_search col-md-9 col-xs-12'>
						<form action="{{route('wave.search.product')}}"class='col-sm-8 form-inline nopadding nomargin' method="get">
							<input type="hidden" name="search"  />
							<input type="text" name="search"  class="form-control col-md-8 search_input" placeholder="Tìm kiếm sản phẩm bạn muốn mua">
							<button class='button'>Tìm kiếm</button>
						</form>
						<div id="top-cart" class='top-cart-block col-md-1 nopadding'>
{{--							<a href="/cart" id="top-cart-trigger"><img src='{{ asset('images/icons/cart_bg.png')}}' ><span class='top_cart_qty'>0</span>--}}
{{--							</a>--}}
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
	@include('product.header')
		<!-- #header end -->
		<!-- Content
         ============================================= -->
		@php
			$icon1 = (new App\Helper\ConfigConstant())->getConfig('100-san-pham-xuat-xu-nhat-ban') ?? null;
            $icon2 = (new App\Helper\ConfigConstant())->getConfig('chat-luong-tot-gia-thanh-hop-ly') ?? null;
            $icon3 = (new App\Helper\ConfigConstant())->getConfig('ho-tro-khach-hang-24-7') ?? null;
            $body = (new App\Helper\ConfigConstant())->getConfig('giadungnhat-vn-luon-tan-tam') ?? null;
		@endphp
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">
					<div class="index-about">
						<div class="w-author">
							<div class="w-author-img">
								<a href="#" rel="author external" target="_blank">
									<img alt="" height="90" src="{{asset('storage/'.$body->icon ?? null) ?? null}}" width="150" />
								</a>
							</div>

							<div class="w-author-name"><a href="#" title="">{{$body->name ?? null}}</a></div>
							<div class="w-author-bio">
								Chúng tôi là <span style="color: #ff0000;"><strong></strong> {{$body->value ?? null}}</span>
							</div>

							<ul class="uu-the">
								<li><span class="uu-the-icon"><img src="{{asset('storage/'. $icon1->icon ?? null) ?? null}}" /></span><span><strong>{{$icon1->value ?? null}}<span style="color:#ff0000">Nhật Bản</span style="color: #ff0000;"></span></li>
								<li><span class="uu-the-icon"><img src="{{asset('storage/'. $icon2->icon ?? null) ?? null}}" /></span><span>{{$icon2->value ?? null}}</span></li>
								<li><span class="uu-the-icon"><img src="{{asset('storage/'. $icon3->icon ?? null) ?? null}}" /></span><span>{{$icon3->value ?? null}}</span></li>
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
					<!-- end collection group --><span style="color: white">.</span>
					<div id="blog_index" class="clearfix">
						<h3 class="kuteshop-title"> <span class="title">Tin tức</span></h3>
						<div class="row">
							<div class='col-lg-12 nopadding col-sm-12'>
								@foreach($news->posts as $value)
									<div class="col-sm-3 col-xs-6 ">
										<article class="blog-item left post type-post status-publish format-standard has-post-thumbnail hentry " >
											<div class="blog-inner">
												<div class="blog-thumb">
													<a href="{{route('wave.news.detail', $value->slug)}}" tabindex="0">

														<figure><img class="img-responsive" src="{{asset('storage/'.$value->image)}}" alt="Liệu có an toàn khi uống nước trực tiếp từ máy lọc nước hay không?"></figure>
													</a>
												</div>
												<div class="blog-info equal-elem">
													<h4 class="blog-title">
														<a href="{{route('wave.news.detail', $value->slug)}}" >{{$value->title}}</a>
													</h4>

													<div class="blog-readmore">
														<a class=" read-more screen-reader-text" href="{{route('wave.news.product')}}"> Xem thêm <span class="icon-angle-right"></span>
														</a>
													</div>
												</div>
											</div>
										</article>
									</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- #content end -->
		<!-- Footer
         ============================================= -->
	</body>
@endsection