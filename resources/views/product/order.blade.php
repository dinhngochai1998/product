@extends('themes.layouts.app')
@section('content')
    @php
        $address = (new App\Helper\ConfigConstant())->getConfig('address');
        $phoneNumber = (new App\Helper\ConfigConstant())->getConfig('phone-number');
        $email = (new App\Helper\ConfigConstant())->getConfig('email');
        $contact = (new App\Helper\ConfigConstant())->getConfig('lien-he');
        $title = (new App\Helper\ConfigConstant())->getConfig('tieu-de-page');
    @endphp
    <body  class="stretched no-transition page-contact" >
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
                        <li class='active'>Liên hệ</li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- #page-title end -->
        <!-- Content
           ============================================= -->
        <section id="content">
            <div class="content-wrap">
                <div class="container clearfix">
                    <!-- Google Map End -->
                    <!-- Postcontent
                       ============================================= -->
                    <div class="postcontent nobottommargin">
                        <h3>Viết nhận xét</h3>
                        <div id="contact-form-result" data-notify-type="success" data-notify-msg="<i class=icon-ok-sign></i> Message Sent Successfully!"></div>
                        <!--<form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">-->
                        <form accept-charset='UTF-8' action='{{route('wave.add.cart')}}' class='contact-form' method='post'>
                            @csrf
                            <input name='form_type' type='hidden' value='contact'>
                            <input name='utf8' type='hidden' value='✓'>
                            <input name='product_id' type='hidden' value='{{$getCart['id']}}'>
                            <input name='quantity' type='hidden' value='{{$getCart['quantity']}}'>
                            <div class="form-process"></div>
                            <div class="col_one_third">
                                <label for="template-contactform-name">Tên <small class='require_symbol'>*</small></label>
                                <input required type="text" id="template-contactform-name" name="name" value="" placeholder='Họ tên của bạn' class="sm-form-control required" />
                            </div>
                            <div class="col_one_third">
                                <label for="template-contactform-email">Email <small class='require_symbol'>*</small></label>
                                <input required type="email" id="template-contactform-email" name="email" value="" placeholder='Nhập email của bạn' class="required email sm-form-control" />
                            </div>
                            <div class="col_one_third col_last">
                                <label for="template-contactform-phone">Số điện thoại<small class='require_symbol'>*</small></label>
                                <input required type="text" id="template-contactform-phone" name="number_phone" value="" placeholder='Nhập số điện thoại của bạn' class="sm-form-control" />
                            </div>
                            <div class="clear"></div>
                            <div class="col_full">
                                <label for="template-contactform-message">Địa chỉ<small class='require_symbol'>*</small></label>
                                <input required class="required sm-form-control" id="address" name="address" >
                            </div>
                            <div class="col_full">
                                <label for="template-contactform-message">Ghi chú<small class='require_symbol'>*</small></label>
                                <textarea  class="required sm-form-control" id="note" name="note" rows="6" cols="30"></textarea>
                            </div>
                            <div class="col_full hidden">
                                <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                            </div>
                            <div class="col_full">
                                <button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Gửi liên hệ</button>
                            </div>
                            <input id='978056bdee4d4c9fae5ab9d814cd0f7c' name='g-recaptcha-response' type='hidden'><script src='https://www.google.com/recaptcha/api.js?render=6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-'></script><script>grecaptcha.ready(function() {grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-', {action: 'submit'}).then(function(token) {document.getElementById('978056bdee4d4c9fae5ab9d814cd0f7c').value = token;});});</script>
                        </form>

                    </div>
                    <!-- .postcontent end -->
                    <!-- Sidebar
                       ============================================= -->
                    <div class="sidebar col_last nobottommargin">
                        <img src="{{asset('storage/'. $getCart['image'])}}" />
                        <address>
                            <strong>Giá: {{$getCart['price'] ?? null}}</strong><br>

                        </address>
                        <address>
                            <strong>Số lượng: {{$getCart['quantity'] ?? null}}</strong><br>

                        </address>
                    </div>
                    <!-- .sidebar end -->
                </div>
            </div>
        </section>
        <!-- #content end -->

    </body>
@endsection