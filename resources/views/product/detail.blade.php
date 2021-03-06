@extends('themes.layouts.app')

@section('content')
    <body  class="stretched no-transition product" >
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

    @include('product.categories')
        <!-- #header end -->
        <!-- Content
           ============================================= -->
        <!-- BK CSS -->
        <link rel="stylesheet" href="https://pc.baokim.vn/css/bk.css">
        <!-- END BK CSS -->
        <style>
            .bk-btn .bk-btn-paynow {
                width: 49%;
                margin-right: 6px;
            }
            @media only screen and (max-width: 320px) {
                .bk-btn .bk-btn-paynow {
                    width: 100%;
                }
                .bk-btn .bk-btn-installment {
                    width: 100%;
                    margin-right: 0px;
                }
            }
            @media only screen and (max-width:439px) and (min-width:321px) {
                .bk-btn .bk-btn-paynow {
                    width: 100%;
                }
                .bk-btn .bk-btn-installment {
                    width: 100%;
                    margin-right: 0px;
                }
            }
            @media only screen and (min-width: 414px) and (max-width: 667px) {
                .bk-btn .bk-btn-paynow {
                    width: 100%;
                }
                .bk-btn .bk-btn-installment {
                    width: 100%;
                    margin-right: 0px;
                }
            }
            @media only screen and (max-width:767px) and (min-width:576px) {
                .bk-btn .bk-btn-paynow {
                    width: 100%;
                }
                .bk-btn .bk-btn-installment {
                    width: 100%;
                    margin-right: 0px;
                }
            }
            @media only screen and (max-width:1023px) and (min-width:768px) {
                .bk-btn .bk-btn-paynow {
                    width: 49%;
                }
                .bk-btn .bk-btn-installment {
                    width: 49%;
                    margin-right: 0px;
                }
            }
        </style>
        <script>
            $(document).ready(function() {
                var current_product = {"available":true,"compare_at_price_max":0.0,"compare_at_price_min":0.0,"compare_at_price_varies":false,"compare_at_price":0.0,"content":null,"description":"<p>&nbsp; &nbsp; &nbsp;- B???o h??nh 12 th??ng, 1 ?????i 1 khi c?? l???i</p><p>&nbsp;&nbsp;&nbsp;&nbsp; - Free ship 15km</p><p>&nbsp;&nbsp;&nbsp;&nbsp; - T???ng ?????i ngu???n 220v sang 100v gi?? 200.000</p><p>####</p><p>&nbsp; &nbsp; &nbsp; &nbsp;???&nbsp;Website: <a href=\"https://l.facebook.com/l.php?u=https%3A%2F%2Fgiadungnhat.vn%2F%3Ffbclid%3DIwAR0TV2elalQ161HJWIe024AkqeoQqZcA-d2nzoPYAQAQE0EcGxzk46oFtSA&amp;h=AT3wu2fzjxrKdsifDzSiQXH1Th_55vMa82-NMHunfHl7BV_fAET2qyLGYwtvJWOvFrqqBlgC_KQRQTmrh-FmxYONrsO30jbGFT4oCgxRBCKEIKCvq4sL_sEKuklVyAVAeC9-vIar1UXsthSNCuI&amp;__tn__=-UK-R&amp;c%5b0%5d=AT0L2pHDbgammRuF55sVjZcelan_XqM4U2ZgCRdb1eUTt_1qny-SN9pCZ1mtXddwvbFEu2ivej1ABV27zt5dVDwBlv2LHC_5inFcwD1RsvZ81JDYhk2I7wCO4aHnJcjRyEbmhBpn-XXJ0XhOsDgafASLrqnDpf-Fx-Fp_yotEABM3eGNlpNCGbToK22kyfBp2g_kES6tmagbTHS9MwTDnKM\">https://giadungnhat.vn/</a></p><p>&nbsp; &nbsp; &nbsp; &nbsp;??? Youtube h?????ng d???n s???n ph???m&nbsp;(t??m t??? kh??a - H??ng nh???t Tu???n H??):&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href=\"https://www.youtube.com/channel/UCKllovasXdzf6CVnc-6PI3A?fbclid=IwAR0E6Hi0NnZn7wMjOGwX7SpWKRDsctKdfk9Vw36--ZDINSs4kjllUSxkNI4\">https://www.youtube.com/channel/UCKllovasXdzf6CVnc-6PI3A</a></p><p>&nbsp; &nbsp; &nbsp; &nbsp;??? Website h?????ng d???n s???a l???i s???n ph???m- c??ch s??? d???ng ti???ng Vi???t:&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href=\"https://hangnhattuanha.vn/\">https://hangnhattuanha.vn/</a></p><p>&nbsp; &nbsp; &nbsp; &nbsp;??? FANPAGE : <a href=\"https://www.facebook.com/shophangnhatbainoidia\">https://www.facebook.com/shophangnhatbainoidia</a></p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_________________________________________</p><p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"https://www.facebook.com/hashtag/h%C3%A0ng_nh%E1%BA%ADt_tu%E1%BA%A5n_h%C3%A0?__eep__=6&amp;__cft__%5b0%5d=AZWuDevcUnbJDh_vu7TW1RMkH4GQmYanPfo8LhjpFPfUqE4jfMm-3JF_OMmuuXQ-85wQE5cBPTg-nQUET-bFl8qOd9ntk9rdEqGeSHOCASFLx_5V95fg4P77nC8kj-SSNdLXVeEhxpCqswDq0ZOM1A-sGtbGyvF4xeMTrQL53jCRBvbsgs1mFqUwJwyg4M_Y52w&amp;__tn__=*NK-R\">#H??ng_nh???t_Tu???n_H??</a> lu??n r??? - lu??n ch???t l?????ng!</strong></p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; GIADUNGNHAT.VN: S??? 2/603 L???c Long Qu??n, T??y H???, H?? N???i</p><p>&nbsp; &nbsp; &nbsp; &nbsp;Hotline: 098 888 8642 - 098 888 4642</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B???o h??nh: 096666 2944</p><p>&nbsp; &nbsp; &nbsp; &nbsp;________________________________________</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; H??n h???nh ???????c ????n ti???p qu?? kh??ch!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><p>####</p><p><strong>T??nh n??ng n???i b???t:</strong><br><img class=\"lazyloading\" src=\"https://congnghenhat.com/wp-content/uploads/2017/10/tick.png\">&nbsp;C??ng ngh??? l??m l???nh Frost Recycling<br><img class=\"lazyloading\" src=\"https://congnghenhat.com/wp-content/uploads/2017/10/tick.png\">&nbsp;H??t ch??n kh??ng c??ng ngh??? Photocatalyst<br><img class=\"lazyloading\" src=\"https://congnghenhat.com/wp-content/uploads/2017/10/tick.png\">&nbsp;C??ng ngh??? kh??ng khu???n ??? kh??? m??i<br><img class=\"lazyloading\" src=\"https://congnghenhat.com/wp-content/uploads/2017/10/tick.png\">&nbsp;C???a ??i???n tr??? l???c<br><strong>B???o h??nh: 24 th??ng</strong><br><strong>Ch??? ????? sau b???o h??nh:&nbsp;</strong>Trong tr?????ng h???p s???n ph???m b??? tr???c tr???c k??? thu???t khi h???t th???i gian b???o h??nh ??? nh???n b???o tr?? c??ng nh?? s???a ch???a d??i h???n<br><strong>H??? tr???:</strong><br><img class=\"lazyloading\" src=\"https://congnghenhat.com/wp-content/uploads/2017/10/tick.png\">&nbsp;V??? sinh, b???o d?????ng t??? l???nh ?????nh k??? mi???n ph?? 1 n??m / 1 l???n, tr???n ?????i s???n ph???m</p><p>####</p><p><strong>Dung t??ch:</strong>&nbsp;735L<br><strong>Xu???t x???:</strong>&nbsp;Nh???t B???n<br><strong>T??nh tr???ng:</strong>&nbsp;H??ng m???i 100%<br><strong>M??u s???c:</strong>&nbsp;X??m pha l?? / G????ng pha l??<br><strong>C??ng ngh???:</strong>&nbsp;<a href=\"https://congnghenhat.com/tin-tuc/cong-nghe-inverter-la-gi.html\">Inverter</a>&nbsp;ti???t ki???m ??i???n<br><strong>??i???n ??p:</strong>&nbsp;100V</p>","featured_image":"https://product.hstatic.net/1000227124/product/thiet_ke_khong_ten_68c34684246947f8b390dca531651c9a.jpg","handle":"tu-lanh-hitachi-r-wx74j-735l","id":1017770762,"images":["https://product.hstatic.net/1000227124/product/thiet_ke_khong_ten_68c34684246947f8b390dca531651c9a.jpg"],"options":["Ti??u ?????"],"price":7850000000.0,"price_max":7850000000.0,"price_min":7850000000.0,"price_varies":false,"tags":["T??? l???nh Hitachi"],"template_suffix":null,"title":"T??? l???nh Hitachi R-WX74J 735L","type":"T??? l???nh","url":"/products/tu-lanh-hitachi-r-wx74j-735l","pagetitle":"T??? l???nh Hitachi R-WX74J 735L","metadescription":"Dung t??ch: 735LXu???t x???: Nh???t B???nT??nh tr???ng: H??ng m???i 100%M??u s???c: X??m pha l?? / G????ng pha l??C??ng ngh???: Inverter ti???t ki???m ??i???n??i???n ??p: 100VT??nh n??ng n???i b???t: C??ng ngh??? l??m l???nh Frost Recycling H??t ch??n kh??ng c??ng ngh??? Photocatalyst C??ng ngh??? kh??ng khu???n ??? kh??? m??i C???a ??i???n tr??? l???cB???o h??nh: 24 th??ngCh??? ????? sau b???o h??nh: Tr","variants":[{"id":1034599412,"barcode":null,"available":true,"price":7850000000.0,"sku":null,"option1":"t??? l???nh hitachi r wx74j","option2":"","option3":"","options":["t??? l???nh hitachi r wx74j"],"inventory_quantity":1,"old_inventory_quantity":1,"title":"t??? l???nh hitachi r wx74j","weight":0.0,"compare_at_price":0.0,"inventory_management":null,"inventory_policy":"deny","selected":false,"url":null,"featured_image":null}],"vendor":"Hitachi","published_at":"2018-11-21T03:02:08.365Z","created_at":"2018-11-21T03:02:08.451Z","not_allow_promotion":false};
                var strHTML = get_viewed_items_html(current_product);
                //console.log(current_product);
            });
        </script>
        <!-- Page Title
           ============================================= -->
        <section id="page-title">
            <div class="container clearfix">
                <div class="col-md-12">
                    <ol class="breadcrumb col-md-6 col-sm-6">
                        <li><a href="/">Trang ch???</a></li>
                        <li class='active'>T??? l???nh Hitachi R-WX74J 735L</li>
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
                    <div class="postcontent nobottommargin pull-right clearfix col-md-80 col-sm-9">
                        <div class='product-page'>
                            <div class="single-product">
                                <!--<form method="post" id="ProductDetailsForm" action="/???" crossorigin="anonymous">-->
                                <form method="post" id="ProductDetailsForm" action="/???" crossorigin="anonymous">
                                    <div class="product">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <!-- Product Single - Gallery
                                                   ============================================= -->
                                                <div class="product_image product-main-image">
                                                    <div id="surround" class="slider-wrap">
                                                        <img class="product-image-feature bk-product-image" src="{{asset('storage/' . $product->image ?? null)}}" alt="T??? l???nh Hitachi R-WX74J 735L">
                                                        <a data-fancybox="gallery" class="gallery_show" href="//product.hstatic.net/1000227124/product/thiet_ke_khong_ten_68c34684246947f8b390dca531651c9a_master.jpg"><img src="//theme.hstatic.net/1000227124/1000685523/14/zoom-directions.png?v=21" class="img-responsive"/></a>
                                                        <div id="sliderproduct" class="">

                                                            <ul class="slides" class="owl-carousel owl-theme">
                                                                @foreach($product->productImages ?? [] as $image)

                                                                    @php
                                                                        $images = json_decode($image->image) ?? [];
                                                                    @endphp
                                                                    @foreach($images ?? [] as $value)
                                                                <li class="product-thumb">
                                                                    <a href="javascript:" data-image="{{asset('storage/' . $value)}}" data-zoom-image="{{asset('storage/' . $value)}}">
                                                                        <img alt="T??? l???nh Hitachi R-WX74J 735L"  src="{{asset('storage/' . $value)}}" style="max-width: 100px; max-height: 100px">
                                                                    </a>
                                                                </li>
                                                                    @endforeach
                                                                @endforeach
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Single - Gallery End -->
                                            </div>
                                            <div class="col-sm-6 product-desc">
                                                <div class='page_title'>
                                                    <h1 class="bk-product-name">
                                                        {{$product->name}}
                                                    </h1>
                                                </div>
                                                <div class="short-review">
                                                    <ul class="list-inline">
                                                        <li>
                                                            <div class="haravan-product-reviews-badge" data-id="1017770762">  </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- Product Single - Price
                                                   ============================================= -->
                                                <div class="product-price col-sm-12 col-md-12 noleftpadding">
                                                    <ins class="bk-product-price"> {{ number_format($product->price) . '??'}}</ins>
                                                </div>
                                                <!-- Product Single - Price End -->
                                                <div class="product-gift col-md-12 col-xs-12" style="background-color: #f2dede">
                                                    <div class="title">
                                                        <span class="icon-gift" aria-hidden="true"></span> Qu?? T???ng
                                                    </div>
                                                    <p>&nbsp; &nbsp; {{$product->voucher}}</p>

                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12 short-desc">

                                                    <p>{{ $product->sub_discription . '??'}}</p>


                                                </div>
                                                <div class="clear"></div>
                                                <div class="line"></div>
                                                <!-- Product Single - Quantity & Cart Button
                                                   ============================================= -->
                                                <input type="hidden" class='unit_price_not_formated' value="7850000000" />
                                                <input type="hidden" class="product_url" value="/products/tu-lanh-hitachi-r-wx74j-735l"/>
                                                <input type="hidden" class="product_title_hd" value="T??? l???nh Hitachi R-WX74J 735L"/>
                                                <input type="hidden" class="product_img_small" value="//product.hstatic.net/1000227124/product/thiet_ke_khong_ten_68c34684246947f8b390dca531651c9a_master.jpg"/>
                                                <div class="hidden" style="">
                                                    <select id="product-select" name="id" >
                                                        <option value="1034599412" class="">t??? l???nh hitachi r wx74j - 78,500,000???</option>
                                                    </select>
                                                </div>
                                                <!-- variants -->
                                                <!-- end variant -->
                                                <!-- <form class="cart nobottommargin clearfix" method="post" enctype='multipart/form-data'>-->
                                                <div class=" col-xs-12 product-quantity clearfix noleftpadding">
                                                    <div class="quantity">
                                                        <label>S??? l?????ng:</label>
                                                        <input type="button" value="-" class="minus">
                                                        <input type="hidden" value="{{$product->id}}" class="id_product">
                                                        <input type="hidden" value="{{route('wave.order.product')}}" class="router">
                                                        <input type="hidden" value="{{route('wave.order')}}" class="order">
                                                        <input type="text" id='product_quantity' readonly step="1" min="1"  name="quantity" value="1" title="Qty" class="qty bk-product-qty" size="4" />
                                                        <input type="button" value="+" class="plus">
                                                    </div>
                                                </div>
                                                <!-- BK BUTTON -->
                                                <div class="bk-btn" id="click"><button class="bk-btn-paynow" style="display: inline-block;background-color: #e00 !important;color: #fff !important" type="button" onclick=""><strong>Mua ngay</strong><span>Giao t???n n??i ho???c nh???n t???i c???a h??ng</span></button></div>
                                                <!-- END BK BUTTON -->
                                                <script>
                                                    $('.bk-btn-paynow').click(function() {
                                                        console.log('1');
                                                        var id = $('.id_product').val();
                                                        var url = $('.router').val();
                                                        var urlOrder = $('.order').val();
                                                        var quantity = $('#product_quantity').val();
                                                        $.ajax({
                                                            type:'GET',
                                                            url: url,
                                                            data: {
                                                                id,
                                                                quantity
                                                            },
                                                            async: true,
                                                            success: function(data) {
                                                                window.location.replace(urlOrder)
                                                            }
                                                        });
                                                    });

                                                </script>
                                                <script>
                                                    var quantity = parseInt($('#ProductDetailsForm .product-quantity input.qty').val());

                                                    $('#ProductDetailsForm .minus').click(function() {
                                                        if (quantity > 0) {
                                                            if (quantity == 1) {


                                                                $('#addtocart').attr('disabled','disabled');
                                                            }
                                                            quantity -= 1;
                                                        }
                                                        else {
                                                            quantity = 0;
                                                        }
                                                        $('#ProductDetailsForm .product-quantity input.qty').val(quantity);
                                                    });
                                                    $('#ProductDetailsForm  .plus').click(function() {
                                                        $('.add-to-cart').removeAttr('disabled');
                                                        if (quantity < 100) {
                                                            quantity += 1;
                                                        }
                                                        else {
                                                            quantity = 100;
                                                        }
                                                        $('#ProductDetailsForm .product-quantity input.qty').val(quantity);
                                                    });

                                                </script>
                                                <div class="clear"></div>
                                                <div class="line"></div>
                                                <!-- Product Single - Meta
                                                   ============================================= -->
                                                <!-- Product Single - Meta End -->
                                                <!-- Product Single - Share
                                                   ============================================= -->
                                                <div class="si-share noborder clearfix">
                                                    <div class='socical-wrapper'>
                                                        <ul class="social-icons">
                                                            <!-- check null: == nill -->
                                                            <div class="fb-send" data-href="/products/tu-lanh-hitachi-r-wx74j-735l"></div>
                                                            <div class="item">
                                                                <div class="fb-like fix_top" data-href="/products/tu-lanh-hitachi-r-wx74j-735l" data-layout="button" data-action="like" data-show-faces="true" data-share="true" style='margin-right: 5px;'></div>
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
                                                <!-- Product Single - Share End -->
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- s???n ph???m b??n c??ng --
                                   <div class='clear'style='margin-bottom: 25px;'></div>
                                       <div class="col_full nobottommargin" >
                                           <div id="ovic_bundle_before_text" class="ovic_bundle-before-text ovic_bundle-text">S???n ph???m th?????ng ???????c mua c??ng:</div>
                                           <table id="ovic_bundle_products" class="ovic_bundle-table ovic_bundle-products">
                                               <thead>
                                                   <tr>
                                                       <th></th>
                                                       <th class="thumb"></th>
                                                       <th class="item-product">S???n ph???m</th>
                                                       <th class="qty">S??? l?????ng</th>
                                                       <th class="price-bundle">Gi??</th>
                                                       <th class="discount">Gi?? chi???t kh???u</th>
                                                   </tr>
                                               </thead>
                                               <tbody>
                                                   <tr class="ovic_bundle-product" data-id="1034599412" data-price="7850000000" data-qty="0" data-sale="0">
                                                       <td class="ovic_bundle-check">
                                                           <label>
                                                               <input type="checkbox" class="input-text check" checked=""  disabled="">
                                                           </label>
                                                       </td>
                                                       <td class="ovic_bundle-thumb">
                                                           <div class="ovic_bundle-thumb-ori">
                                                               <img alt="T??? l???nh Hitachi R-WX74J 735L" src="//product.hstatic.net/1000227124/product/thiet_ke_khong_ten_68c34684246947f8b390dca531651c9a_icon.jpg" alt="" />
                                                           </div>
                                                       </td>
                                                       <td class="ovic_bundle-title">
                                                           <div class="ovic_bundle-title-inner">
                                                               <a href="/products/tu-lanh-hitachi-r-wx74j-735l" target="_blank">T??? l???nh Hitachi R-WX74J 735L</a>
                                                           </div>
                                                       </td>
                                                       <td class="ovic_bundle-qty">
                                                           <label>
                                                               <input type="number" class="input-text qty text" value="1" min="0" max="">
                                                           </label>
                                                       </td>
                                                       <td class="ovic_bundle-price">
                                                           <div class="ovic_bundle-price-ori">
                                                               <ins>
                                                                   <span class="woocommerce-Price-amount amount">0???
                                                                   </span>
                                                               </ins>
                                                           </div>
                                                       </td>
                                                       <td class="ovic_bundle-total">
                                                           <div class="ovic_bundle-total-ori">
                                                               <span class="woocommerce-Price-amount amount">78,500,000???
                                                               </span>
                                                           </div>
                                                           <div class="hidden compare_row">
                                                               -78,500,000???
                                                           </div>
                                                           <div class="hidden total_row">
                                                               78,500,000???
                                                           </div>
                                                       </td>
                                                   </tr>



                                               </tbody>
                                           </table>
                                           <div class="col-md-6 col-sm-6 col-xs-12">
                                               <button id="add_all" class="single_add_to_cart_button button alt">?????t h??ng</button>
                                           </div>
                                           <div class="col-md-6 col-sm-6 col-xs-12">
                                               <div class="ovic-bundle-subtotal text-right">
                                                   <div id="ovic_bundle_total" class="ovic_bundle-total ovic_bundle-text">T???ng: <span>78,500,000??? </span> </div>
                                                   <div id="ovic_bundle_total_save" class="ovic_bundle-total-save ovic_bundle-text">Ti???t ki???m:<span> -78,500,000??? </span></div>
                                               </div>
                                           </div>
                                       </div>
                                   End s???n ph???m b??n c??ng -->
                                <div class='clear'style='margin-bottom: 25px;'></div>
                                <div class="col_full nobottommargin" >
                                    <div class="tabs clearfix nobottommargin " id="tab-1">
                                        <ul class="tab-nav clearfix">
                                            <li class=''><a href="#tabs-1"><span class=""> M?? t???</span></a></li>
                                            <li class='image_gallery_tab'><a href="#tabs-2"><span class=""> H??nh ???nh th???c t???</span></a></li>

                                            <li class='tab-review'><a href="#tabs-4"><span class=""> ????nh gi??</span></a></li>
                                        </ul>
                                        <div class="tab-container">
                                            <div class="tab-content clearfix " id="tabs-1">
                                                </p>
                                                <p>{{$product->discription}}</p>
                                                <p>
                                            </div>
                                            <div class="tab-content clearfix image_gallery_tab" id="tabs-2">
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                                        <a data-fancybox="gallery" href="{{route('wave.detail.product', $product->slug)}}" ><img src="{{asset('storage/' .$product->image)}}" class="img-responsive"/></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-content clearfix " id="tabs-3">
                                                <div id="fb-root"></div>
                                                <div class="fb-comments" data-href="" data-numposts="5" width="100%" data-colorscheme="light"></div>
                                                <!-- script comment fb -->
                                            </div>
                                            <div class="tab-content clearfix tab-review" id="tabs-4">
                                                <div id="hrv-product-reviews" class="hrv-product-reviews" data-id="1017770762">
                                                    <div class="title-bl">
                                                        <h2>????NH GI?? S???N PH???M</h2>
                                                    </div>
                                                    <div id="hrv-product-reviews-sub" style="width:100%">
                                                        <div class="hrv-product-reviews-summary" id="hrv-product-reviews-summary">
                                                        </div>
                                                        <div class="hrv-product-reviews-list" id="hrv-product-reviews-list">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-group hidden-lg hidden-sm hidden-xs hidden-md pd_description" id="accordion">
                                        <div class="panel panel-default ">
                                            <div class="panel-heading" role="tab" id="headingOne">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" style='width: 100%; display: block;'>
                                                        <i class="icon-align-justify2"></i><span class=""> M?? t???</span>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="panel-body">
                                                    </p>
                                                    <p><strong>T??nh n??ng n???i b???t:</strong><br><img class="lazyloading" src="https://congnghenhat.com/wp-content/uploads/2017/10/tick.png">&nbsp;C??ng ngh??? l??m l???nh Frost Recycling<br><img class="lazyloading" src="https://congnghenhat.com/wp-content/uploads/2017/10/tick.png">&nbsp;H??t ch??n kh??ng c??ng ngh??? Photocatalyst<br><img class="lazyloading" src="https://congnghenhat.com/wp-content/uploads/2017/10/tick.png">&nbsp;C??ng ngh??? kh??ng khu???n ??? kh??? m??i<br><img class="lazyloading" src="https://congnghenhat.com/wp-content/uploads/2017/10/tick.png">&nbsp;C???a ??i???n tr??? l???c<br><strong>B???o h??nh: 24 th??ng</strong><br><strong>Ch??? ????? sau b???o h??nh:&nbsp;</strong>Trong tr?????ng h???p s???n ph???m b??? tr???c tr???c k??? thu???t khi h???t th???i gian b???o h??nh ??? nh???n b???o tr?? c??ng nh?? s???a ch???a d??i h???n<br><strong>H??? tr???:</strong><br><img class="lazyloading" src="https://congnghenhat.com/wp-content/uploads/2017/10/tick.png">&nbsp;V??? sinh, b???o d?????ng t??? l???nh ?????nh k??? mi???n ph?? 1 n??m / 1 l???n, tr???n ?????i s???n ph???m</p>
                                                    <p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default ">
                                            <div class="panel-heading" id="headingTwo">
                                                <h4 class="panel-title">
                                                    <a style='width: 100%; display:block;' class="collapsed" data-toggle="collapse" href="#collapseTwo" >
                                                        <i class="icon-info-sign"></i><span class=""> B??nh lu???n</span>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse in " role="tabpanel">
                                                <div class="panel-body">
                                                    <div id="fb-root"></div>
                                                    <div class="fb-comments" data-href="" data-numposts="5" width="100%" data-colorscheme="light"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        // fb SDK v2.0
                                        (function(d, s, id) {
                                            var js, fjs = d.getElementsByTagName(s)[0];
                                            if (d.getElementById(id)) return;
                                            js = d.createElement(s); js.id = id;
                                            js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.0";
                                            fjs.parentNode.insertBefore(js, fjs);
                                        }(document, 'script', 'facebook-jssdk'));
                                    </script>
                                </div>
                                <div class='clear'style='margin-bottom: 25px;'></div>
                                <div class="col_full nobottommargin" >
                                    <div id="sale_index" class="clearfix">
                                        <h3 class="kuteshop-title">
                                            <span class="title">S???n ph???m n???i b???t</span>
                                        </h3>
                                        <div class="row">
                                            <div class='col-lg-12 col-sm-12'>
                                                <div id="pr_col" class="owl-carousel owl-theme">
                                                    @foreach($featuredProducts as $featuredProduct)
                                                    <div class="item ">
                                                        <div class="product pr-item clearfix  product_single">
                                                            <div class="product-image">
                                                                <a href="{{route('wave.detail.product', $featuredProduct->slug)}}"><img  class="lazyload" data-src="{{asset('storage/' . $featuredProduct->image)}}"src="{{asset('storage/' . $featuredProduct->image)}}" alt="" class="img-responsive"></a>
                                                                <div class="product-overlay">
                                                                    <a class="add-to-cart disabled" data-toggle='tooltip' title='H???t h??ng'><i class="icon-shopping-cart"></i><span class='hidden-lg hidden-md'> H???t h??ng</span></a>
                                                                    <a href="#product-pop-up" class="item-quick-view fancybox-fast-view hidden-sm hidden-xs" product_url="/products/ghe-massage-nhat-noi-dia-taijutsu-as-2020-phien-ban-tri-lieu-date-2021-new-nguyen-hop" data-toggle='tooltip' title='Xem nhanh'><i class="icon-zoom-in2"></i><span class='hidden-md hidden-lg'> Xem nhanh</span></a>
                                                                </div>
                                                            </div>
                                                            <div class="product-desc">
                                                                <div class="product-title">
                                                                    <h4><a href="/products/ghe-massage-nhat-noi-dia-taijutsu-as-2020-phien-ban-tri-lieu-date-2021-new-nguyen-hop">{{$featuredProduct->name}}</a></h4>
                                                                </div>
                                                            </div>
                                                            <div class="product-desc">
                                                                <div class="product-price">
                                                                    <ins>{{ number_format($featuredProduct->price) . '??'}}</ins>
                                                                </div>
                                                                <div class="haravan-product-reviews-badge" data-id="1036056943">  </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- related products -->
                        <!-- end related products -->
                    </div>
                    <div class="sidebar nobottommargin nopadding left-sidebar col-md-20 col-sm-3">
                        <div class="sidebar-widgets-wrap">
                            <!-- begin: filters -->
                            <div class='hidden-xs hidden-sm'>
                                <!-- categories -->
                                <div class="widget widget_links clearfix">
                                    <h4>Danh m???c s???n ph???m</h4>
                                    <ul class='sidebar_menu'>
                                        @foreach($categories as $category)
                                        <li>
                                            <a href="{{route('wave.category', $category->slug)}}">{{$category->name}}</a>
                                            <i class='icon-angle-down'></i>
                                            @foreach($subCategories as $subCategory)
                                                @if($category->id == $subCategory->parent_id)
                                            <ul class='sidebar_submenu'>
                                                <li>
                                                    <a href="{{route('wave.category', $category->slug)}}">{{$subCategory->name}}</a>
                                                </li>
                                            </ul>
                                                @endif
                                            @endforeach
                                        </li>
                                        @endforeach
                                    </ul>

                                </div>
                                <!-- end categories -->
                                <!-- recent product -->
                                <div class="widget clearfix">
                                    <h4><a href='/collections/may-giat-nhat-noi-dia-nhat-bai'>S???n ph???m khuy???n m??i</a></h4>
                                    <div id="post-list-footer" class='sidebar_menu'>
                                        @foreach($promotionalProducts as $value)
                                        <div class="item ">
                                            <div class="product pr-item clearfix  product_single">
                                                <div class="product-image">
                                                    <a href="{{route('wave.detail.product', $value->slug)}}"><img  class="lazyload" data-src="{{asset('storage/' . $value->image)}}"src="{{asset('storage/' . $value->image)}}" alt="M??Y GI???T S???Y NHI???T TOSHIBA TW G500" class="img-responsive"></a>
                                                    <div class="product-overlay">
{{--                                                        <a href="/products/may-giat-toshiba-tw-g500l" class="add-to-cart product_quick_add" data-toggle='tooltip' title='Th??m v??o gi???'><i class="icon-shopping-cart"></i><span class='hidden-md hidden-lg'> Th??m v??o gi???</span></a>--}}
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
                                                        <ins> {{number_format($value->sub_price) . '??'}} </ins>
                                                        <del>{{number_format($value->price) . '??'}} </del>
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
                                    <h4><a href='/blogs/news'>h?????ng d???n s??? d???ng s???n ph???m</a></h4>
                                    @foreach($userManual->posts as $value)
                                    <div id="post-list-footer" class='sidebar_menu'>

                                        <div class="spost clearfix">
                                            <div class="entry-image">
                                                <a href="{{route('wave.news.detail', $value->slug)}}"><img src="{{asset('storage/' .$value->image)}}" alt="Li???u c?? an to??n khi u???ng n?????c tr???c ti???p t??? m??y l???c n?????c hay kh??ng?"></a>
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
                                <!-- end recent product -->
                                <!-- most popular -->
                                <div class="widget clearfix">
                                    <h4><a href='/collections/may-loc-khong-khi-nhat-bai'>S???n ph???m n???i b???t</a></h4>
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
                                                        <ins>{{ number_format($featuredProduct->price) . '??'}}</ins>
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
                                    <h4>S???n ph???m v???a xem</h4>
                                    <div class="widget-last-view sidebar_menu">
                                    </div>
                                </div>
                                <script>
                                    var $strHTML = get_viewed_items_html('');
                                    $('.widget .widget-last-view').html($strHTML);

                                </script>
                                <!-- end recent view -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script>
            $(".product-thumb img").click(function(){
                $(".product-thumb").removeClass('active');
                $(this).parents('li').addClass('active');
                $(".product-image-feature").attr("src",$(this).attr("data-image"));
                $(".gallery_show").attr("href",$(this).attr("data-image"));
                $(".product-image-feature").attr("data-zoom-image",$(this).attr("data-zoom-image"));
            });

            $(".product-thumb").first().addClass('active');

        </script>
        <script>
            $(document).ready(function(){
                $('#sliderproduct .slides').owlCarousel({
                    items: 5,
                    nav: true,
                    dots: false,
                    margin: 5,
                    slideSpeed: 1000,
                    navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>']
                });
                $('#pr_col').owlCarousel({
                    items: 4,
                    nav: true,
                    dots: false,
                    margin: 15,
                    responsive : {
                        // breakpoint from 0 up
                        0 : {
                            items: 2
                        },
                        768 : {
                            items: 2
                        },
                        1200 : {
                            items: 4
                        }
                    },
                    slideSpeed: 1000,
                    navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>']
                });
                if($(window).width() > 960){

                    $(".product-image-feature").elevateZoom({
                        zoomType				: "inner",
                        cursor: "default",
                        gallery:'sliderproduct'
                    });
                } else {

                }
                $('.slide-next').click(function(){
                    if($(".product-thumb.active").prev().length>0){
                        $(".product-thumb.active").prev().find('img').click();
                    }
                    else{
                        $(".product-thumb:last img").click();
                    }
                });
                $('.slide-prev').click(function(){
                    if($(".product-thumb.active").next().length>0){
                        $(".product-thumb.active").next().find('img').click();
                    }
                    else{
                        $(".product-thumb:first img").click();
                    }
                });
                $("#scroll_review").click(function(){
                    var height = $("div#tab-1").offset().top - 100;
                    $('html,body').animate({scrollTop: height}, 1000);
                    $("a#ui-id-3").trigger("click");
                });


            });

        </script>
        <script>
            $(document).ready(function(){
                function subPrice() {
                    var total_all = 0;
                    var compare_all = 0;
                    $("#ovic_bundle_products .ovic_bundle-product").each(function(){
                        if ($(this).find('.ovic_bundle-check input').is(':checked')  ){
                            var text = $(this).find(".ovic_bundle-total .total_row").html().replace(/\D/g, '');
                            var text_com = $(this).find(".ovic_bundle-total .compare_row").html().replace(/\D/g, '');
                            total_all = total_all + parseInt(text);
                            compare_all = compare_all + parseInt(text_com);
                        }
                    });
                    $(".ovic-bundle-subtotal div#ovic_bundle_total span").html(Haravan.formatMoney(total_all * 100));
                    $(".ovic-bundle-subtotal div#ovic_bundle_total_save span").html(Haravan.formatMoney(compare_all * 100));
                };
                subPrice();
                $(document).on('change', 'td.ovic_bundle-qty .qty', function () {
                    clearTimeout(200);
                    if ($(this).parent().parent().parent().find('.ovic_bundle-check input').is(':checked')  ){
                        var qty = parseInt($(this).val().replace(/\D/g, ''));
                        var price = $(this).parent().parent().parent().find(".ovic_bundle-price-ori span").text().replace(/\D/g, '');
                        var compare_price = $(this).parent().parent().parent().find(".ovic_bundle-total-ori span").text().replace(/\D/g, '');
                        var total = qty * price *100;
                        var com = compare_price * qty * 100;
                        $(this).parent().parent().parent().find(".total_row").html(Haravan.formatMoney(total));
                        $(this).parent().parent().parent().find(".compare_row").html(Haravan.formatMoney(total - com));
                    }else{
                        $(this).parent().parent().parent().find(".total_row").html(Haravan.formatMoney(0));
                        $(this).parent().parent().parent().find(".compare_row").html(Haravan.formatMoney(0));
                    }
                    subPrice();
                });
                $(document).on('change', 'td.ovic_bundle-check input', function () {
                    clearTimeout(200);
                    if ($(this).parent().parent().parent().find('.ovic_bundle-check input').is(':checked')  ){
                    }else{
                        $(this).parent().parent().parent().find(".total_row").html(Haravan.formatMoney(0));
                        $(this).parent().parent().parent().find(".compare_row").html(Haravan.formatMoney(0));
                    }
                    subPrice();
                });
                $(document).on('click', '#add_all', function () {
                    $("#ovic_bundle_products .ovic_bundle-product").each(function(){
                        if ($(this).find('.ovic_bundle-check input').is(':checked')  ){
                            var id = $(this).attr("data-id");
                            var quantity = $(this).find("td.ovic_bundle-qty input").val();
                            var params = {
                                type: 'POST',
                                url: '/cart/add.js',
                                data: 'quantity=' + quantity + '&id=' + id,
                                dataType: 'json',
                                success: function(line_item) {
                                    var currentIMG = '';
                                    currentIMG = $(this).find('td.ovic_bundle-thumb img');
                                    quickAddProduct($(this).find(".ovic_bundle-title a").attr('href'));
                                    window.location = '/cart';
                                },
                                error: function(XMLHttpRequest, textStatus) {
                                    Haravan.onError(XMLHttpRequest, textStatus);
                                }
                            };
                            jQuery.ajax(params);
                        }
                    });
                });
            });

        </script>

        <!-- #content end -->
    </body>
@endsection