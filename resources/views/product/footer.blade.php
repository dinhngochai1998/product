@php
	$address = (new App\Helper\ConfigConstant())->getConfig('address');
    $phoneNumber = (new App\Helper\ConfigConstant())->getConfig('phone-number');
    $email = (new App\Helper\ConfigConstant())->getConfig('email');
    $contact = (new App\Helper\ConfigConstant())->getConfig('lien-he');
    $householdBusiness = (new App\Helper\ConfigConstant())->getConfig('hoi-kinh-doanh');
    $footer = (new App\Helper\ConfigConstant())->getConfig('footer-logo');
@endphp
		<footer id="footer" class='dark'>
			<div class="container">
				<!-- Footer Widgets
               ============================================= -->
				<div class="footer-widgets-wrap clearfix footer_wrap_2">
					<div class="prefooter_one col-sm-3 col-xs-6">
						<div class="widget clearfix">
							<a href='' class='footer_logo'><img class="lazyload" src="{{ (asset('storage/' .$footer->icon)) ?? null }}" data-src='' /></a>
							<p>
							<p>{{$footer->value}}</p>
							</p>
						</div>
					</div>
					<div class="prefooter_one col-sm-3 col-xs-6">
						<div class="widget widget_links clearfix">
							<h4>LIÊN HỆ VỚI CHÚNG TÔI NHÉ</h4>
							<ul>
								<li><a href="{{route('wave.home')}}">QUAY LẠI TRANG CHÍNH</a></li>
								<li><a href="{{route('wave.news.product')}}">HƯỚNG DẪN SỬ DỤNG SẢN PHẨM</a></li>
								<li><a href="{{route('wave.all.product')}}">TẤT CẢ SẢN PHẨM</a></li>
							</ul>
						</div>
						<div class='marginbottom hidden-lg hidden-md hidden-sm'>
						</div>
					</div>
					<div class="prefooter_one col-sm-3 col-xs-6">
						<div class="widget widget_links clearfix">
							<h4>Đia chỉ cửa hàng </h4>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.1050987123454!2d105.8076452144067!3d20.988423794531137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135adb501855209%3A0xd1b16ad11c86f149!2zUXXDoW4g4buQYyAyOA!5e0!3m2!1sen!2s!4v1657291909893!5m2!1sen!2s" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
						<div class='marginbottom hidden-lg hidden-md hidden-sm'>
						</div>
					</div>
					<div class="prefooter_one col-sm-3 col-xs-6">
						<div class="widget widget_links clearfix">
							<h4>LIÊN HỆ {{$phoneNumber->value ?? null}}</h4>
							<p>{{$contact->value ?? null}}</p>
							<address>
								<img src='{{asset('images/icons/pre_footer_address_icon2.png')}}' />
								<span>{{$address->value ?? null}}</span> <br>
								<img src='{{asset('images/icons/pre_footer_phone_icon2.png')}}' />
								<a href='tel:098 888 8642'>{{$phoneNumber->value ?? null}}</a> <br>
								<img src='{{asset('images/icons/pre_footer_email_icon2.png')}}' />
								<a href='#'>{{$email->value ?? null}}</a>
							</address>
							<div class="footer_more_info">
								{{$householdBusiness->value ?? null}}
							</div>
						</div>
						<div class='marginbottom hidden-lg hidden-md hidden-sm'>
						</div>
					</div>
				</div>
				<!-- .footer-widgets-wrap end -->

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
						© Bản quyền thuộc về <a href="" target="_blank">Thegioidienmay</a>.
						<a href="http://online.gov.vn/CustomWebsiteDisplay.aspx?DocId=60878" target="_blank" rel="noopener noreferrer">
							<noscript data-img="https://simdulich.com.vn/wp-content/uploads/2019/09/BCT-simdulich.png" data-webp="https://simdulich.com.vn/wp-content/uploads/2019/09/BCT-simdulich.png.webp" data-alt="bct-simdulich" data-title="Simdulich.com.vn Đã thông báo Bộ Công Thương" class=""><img src="https://simdulich.com.vn/wp-content/uploads/2019/09/BCT-simdulich.png" alt="bct-simdulich" title="Simdulich.com.vn Đã thông báo Bộ Công Thương"></noscript>
							<img src="https://simdulich.com.vn/wp-content/uploads/2019/09/BCT-simdulich.png.webp" alt="bct-simdulich" title="Thegioidienmay Đã thông báo Bộ Công Thương" style="width: 117px;">
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
		<div class="fancybox" onclick="window.location='tel: '.$value->phone.' ' ">
			<div class="coccoc-alo-phone coccoc-alo-green coccoc-alo-show" id="coccoc-alo-phoneIcon" style="right: 5%; top: 10%;">
				<div class="coccoc-alo-ph-circle">&nbsp;</div>
				<div class="coccoc-alo-ph-circle-fill">&nbsp;</div>
				<div class="coccoc-alo-ph-img-circle">&nbsp;</div>
			</div>
		</div>
		@foreach($phoneGifs as $value)
		<div class="clicktocall">
			<a class="call" href="tel:098 888 8642">
				{{$value->name}}<br />
				<b>{{$value->phone}}</b>
			</a>
		</div>
		@endforeach
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
