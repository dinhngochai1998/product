@extends('themes.layouts.app')
@section('content')
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
                <!-- Google Map
                   ============================================= -->
                <section class='container' style='margin-bottom: 40px'>
                    <div class='google-maps'>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14892.559690241165!2d105.81055100000002!3d21.067073!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x160026bc6e678199!2zR2lhIEThu6VuZyBOaOG6rXQgLSBLaG8gSMOgbmcgTmjhuq10IELDo2kgTuG7mWkgxJDhu4thICwgQ8O0bmcgTmdo4buHIE5o4bqtdA!5e0!3m2!1svi!2sus!4v1543671234286" width="100%" height="411" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </section>
                <!-- Google Map End -->
                <!-- Postcontent
                   ============================================= -->
                <div class="postcontent nobottommargin">
                    <h3>Viết nhận xét</h3>
                    <div id="contact-form-result" data-notify-type="success" data-notify-msg="<i class=icon-ok-sign></i> Message Sent Successfully!"></div>
                    <!--<form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">-->
                    <form accept-charset='UTF-8' action='{{route('wave.create.contact')}}' class='contact-form' method='post'>
                        @csrf
                        <input name='form_type' type='hidden' value='contact'>
                        <input name='utf8' type='hidden' value='✓'>
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
                            <input required type="text" id="template-contactform-phone" name="number" value="" placeholder='Nhập số điện thoại của bạn' class="sm-form-control" />
                        </div>
                        <div class="clear"></div>
                        <div class="col_full">
                            <label for="template-contactform-message">Viết bình luận <small class='require_symbol'>*</small></label>
                            <textarea required class="required sm-form-control" id="comment" name="comment" rows="6" cols="30"></textarea>
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
                    <h3>phục vụ bạn là niềm hành phúc</h3>
                    <address>
                        <strong>shop {{strtoupper($config->name) ?? null}}</strong><br>
                        {{$config->address ?? null}}
                    </address>
                    <abbr title="Phone Number"><strong>Số điện thoại:</strong></abbr> {{$config->number_phone ?? null}}<br>
                    <abbr title="Email Address"><strong>Email:</strong></abbr> {{$config->email ?? null}}
                </div>
                <!-- .sidebar end -->
            </div>
        </div>
    </section>
    <!-- #content end -->

</body>
@endsection