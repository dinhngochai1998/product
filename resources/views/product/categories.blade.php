<div class='container slide_wrapper'>
    <div class="hidden-lg hidden-md fanpape_mobile">
        <h2>
            Truy cập fanpage
        </h2>
        <div class="fb-page" data-href="https://www.facebook.com/shophangnhatbainoidia" data-tabs="" data-width="480" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
            <blockquote cite="https://www.facebook.com/shophangnhatbainoidia" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/shophangnhatbainoidia">https://www.facebook.com/shophangnhatbainoidia</a></blockquote>
        </div>
    </div>
    <!-- left menu -->
    <div class="panel-group left_menu" id='left_menu'>
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapse1">DANH MỤC SẢN PHẨM <i class='icon-angle-down' ></i></a>
            </h4>
        </div>
        <div id="collapse1" class="panel-collapse collapse">
            <div class="panel-body">
                <ul class='nav nav-pills nav-stacked'>
                    @foreach($categories as $value)
                        <li class=' menu'>
                            <a class='menu' href="{{route('wave.category', $value->slug)}}">
                                <img src='{{asset('images/icons/leftmenu_icon_1.png')}}' data-toggle="tooltip" data-placement="right" title="MÁY GIẶT"/>
                                <span class="menu_title">{{strtoupper($value->name)}}</span>
                                <i class='icon-angle-right arrow'></i>
                            </a>
                            <ul class='submenu'>
                                <div class='submenu_padding'>
                                    @foreach($subCategories as $subCategory)
                                        @if($value->id == $subCategory->parent_id)
                                            <li class=''><a class='sub-menu' href="{{route('wave.category', $subCategory->slug)}}"><div>
                                                        {{strtoupper($subCategory->name)}}</div></a></li>
                                        @endif
                                    @endforeach
                                </div>
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            if($(window).width() > 991) {
                $('.left_menu #collapse1').addClass('in');
            }
        });

    </script>
    <!-- end left menu -->
    <div class='slider_wrap'>
        <nav id="primary-menu" class='style-5'>
            <ul>
            @foreach($categories as $value)
                <!-- normal sub menu -->
                    <li class=''>
                        <a class='menu' href="{{route('wave.category', $value->slug)}}">
                            <div>
                                {{strtoupper($value->name)}}
                            </div>
                        </a>
                        <i class='icon-angle-right hidden-lg hidden-md submenu_toggle' style='position:absolute; right: 0; font-size: 16px; width: 25px; margin:0;'></i>
                        <ul>

                            @foreach($subCategories as $subCategory)
                                @if($value->id == $subCategory->parent_id)
                                    <li class=''><a class='sub-menu' href="{{route('wave.category', $subCategory->slug)}}"><div>
                                                {{strtoupper($subCategory->name)}}</div></a></li>
                                @endif
                            @endforeach


                        </ul>
                    </li>
                @endforeach
            </ul>
        </nav>
        <script>
            $("#sidebar-wrapper ul li a span").click(function( event ) {
                event.preventDefault();
                var li = $(this).parents('li');
                li.children('ul').toggle('slow');
            });
        </script>
        <!-- Slider -->
        <section id="slider" class="revslider-wrap nopadding ohidden clearfix ">
            <!--
          #################################
          - THEMEPUNCH BANNER -
          #################################
          -->
            <script type="text/javascript">
                jQuery(document).ready(function() {

                    jQuery('.tp-banner').show().revolution(
                        {
                            dottedOverlay:"none",
                            delay:5000,
                            startwidth:776,
                            startheight:400,
                            hideThumbs:200,

                            thumbWidth:100,
                            thumbHeight:50,
                            thumbAmount:5,

                            navigationType:"none",
                            navigationArrows:"solo",
                            //navigationStyle:"preview2",

                            touchenabled:"on",
                            onHoverStop:"on",

                            swipe_velocity: 0.7,
                            swipe_min_touches: 1,
                            swipe_max_touches: 1,
                            drag_block_vertical: false,

                            parallax:"mouse",
                            parallaxBgFreeze:"on",
                            parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

                            keyboardNavigation:"off",

                            navigationHAlign:"center",
                            navigationVAlign:"bottom",
                            navigationHOffset:0,
                            navigationVOffset:20,

                            soloArrowLeftHalign:"left",
                            soloArrowLeftValign:"center",
                            soloArrowLeftHOffset:20,
                            soloArrowLeftVOffset:0,

                            soloArrowRightHalign:"right",
                            soloArrowRightValign:"center",
                            soloArrowRightHOffset:20,
                            soloArrowRightVOffset:0,

                            shadow:0,
                            fullWidth:"on",
                            fullScreen:"off",

                            spinner:"spinner4",

                            stopLoop:"off",
                            stopAfterLoops:-1,
                            stopAtSlide:-1,

                            shuffle:"off",

                            autoHeight:"on",
                            forceFullWidth:"off",



                            hideThumbsOnMobile:"off",
                            hideNavDelayOnMobile:1500,
                            hideBulletsOnMobile:"off",
                            hideArrowsOnMobile:"off",
                            hideThumbsUnderResolution:0,

                            hideSliderAtLimit:0,
                            hideCaptionAtLimit:0,
                            hideAllCaptionAtLilmit:0,
                            startWithSlide:0,
                            fullScreenOffsetContainer: ".header"
                        });




                }); //ready

            </script>
            <!-- END REVOLUTION SLIDER -->
        </section>
        <!-- end slider -->
    </div>
    <div class='clear'></div>
</div>