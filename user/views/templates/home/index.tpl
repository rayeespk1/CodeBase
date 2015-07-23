            <section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">

                <div class="swiper-container swiper-parent">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide dark" style="background-image: url('../../assets/images/slider/slider1.jpg');">
                            <div class="container clearfix">
                                <div class="slider-caption slider-caption-center">
                                    <h2 data-caption-animate="fadeInUp">Welcome to Canvas</h2>
                                    <p data-caption-animate="fadeInUp" data-caption-delay="200">Create just what you need for your Perfect Website. Choose from a wide range of Elements &amp; simply put them on your own Canvas.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide dark" style="background-image: url('../../assets/images/slider/slider2.jpg');">
                            <div class="container clearfix">
                                <div class="slider-caption slider-caption-center">
                                    <h2 data-caption-animate="fadeInUp">Beautifully Flexible</h2>
                                    <p data-caption-animate="fadeInUp" data-caption-delay="200">Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Powerful Layout with Responsive functionality that can be adapted to any screen size.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide dark" style="background-image: url('../../assets/images/slider/slider3.jpg'); background-position: center top;">
                            <div class="container clearfix">
                                <div class="slider-caption">
                                    <h2 data-caption-animate="fadeInUp">Great Performance</h2>
                                    <p data-caption-animate="fadeInUp" data-caption-delay="200">You'll be surprised to see the Final Results of your Creation &amp; would crave for more.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
                    <div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
                </div>

                <script>
                    jQuery(document).ready(function ($) {
                        var swiperSlider = new Swiper('.swiper-parent', {
                            paginationClickable: false,
                            slidesPerView: 1,
                            grabCursor: true,
                            loop: true,
                            onSwiperCreated: function (swiper) {
                                $('[data-caption-animate]').each(function () {
                                    var $toAnimateElement = $(this);
                                    var toAnimateDelay = $(this).attr('data-caption-delay');
                                    var toAnimateDelayTime = 0;
                                    if (toAnimateDelay) {
                                        toAnimateDelayTime = Number(toAnimateDelay) + 750;
                                    } else {
                                        toAnimateDelayTime = 750;
                                    }
                                    if (!$toAnimateElement.hasClass('animated')) {
                                        $toAnimateElement.addClass('not-animated');
                                        var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                                        setTimeout(function () {
                                            $toAnimateElement.removeClass('not-animated').addClass(elementAnimation + ' animated');
                                        }, toAnimateDelayTime);
                                    }
                                });
                                SEMICOLON.slider.swiperSliderMenu();
                            },
                            onSlideChangeStart: function (swiper) {
                                $('[data-caption-animate]').each(function () {
                                    var $toAnimateElement = $(this);
                                    var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                                    $toAnimateElement.removeClass('animated').removeClass(elementAnimation).addClass('not-animated');
                                });
                                SEMICOLON.slider.swiperSliderMenu();
                            },
                            onSlideChangeEnd: function (swiper) {
                                $('#slider').find('.swiper-slide').each(function () {
                                    if ($(this).find('video').length > 0) {
                                        $(this).find('video').get(0).pause();
                                    }
                                    if ($(this).find('.yt-bg-player').length > 0) {
                                        $(this).find('.yt-bg-player').pauseYTP();
                                    }
                                });
                                $('#slider').find('.swiper-slide:not(".swiper-slide-active")').each(function () {
                                    if ($(this).find('video').length > 0) {
                                        if ($(this).find('video').get(0).currentTime != 0)
                                            $(this).find('video').get(0).currentTime = 0;
                                    }
                                    if ($(this).find('.yt-bg-player').length > 0) {
                                        $(this).find('.yt-bg-player').getPlayer().seekTo($(this).find('.yt-bg-player').attr('data-start'));
                                    }
                                });
                                if ($('#slider').find('.swiper-slide.swiper-slide-active').find('video').length > 0) {
                                    $('#slider').find('.swiper-slide.swiper-slide-active').find('video').get(0).play();
                                }
                                if ($('#slider').find('.swiper-slide.swiper-slide-active').find('.yt-bg-player').length > 0) {
                                    $('#slider').find('.swiper-slide.swiper-slide-active').find('.yt-bg-player').playYTP();
                                }

                                $('#slider .swiper-slide.swiper-slide-active [data-caption-animate]').each(function () {
                                    var $toAnimateElement = $(this);
                                    var toAnimateDelay = $(this).attr('data-caption-delay');
                                    var toAnimateDelayTime = 0;
                                    if (toAnimateDelay) {
                                        toAnimateDelayTime = Number(toAnimateDelay) + 300;
                                    } else {
                                        toAnimateDelayTime = 300;
                                    }
                                    if (!$toAnimateElement.hasClass('animated')) {
                                        $toAnimateElement.addClass('not-animated');
                                        var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                                        setTimeout(function () {
                                            $toAnimateElement.removeClass('not-animated').addClass(elementAnimation + ' animated');
                                        }, toAnimateDelayTime);
                                    }
                                });
                            }
                        });

                        $('#slider-arrow-left').on('click', function (e) {
                            e.preventDefault();
                            swiperSlider.swipePrev();
                        });

                        $('#slider-arrow-right').on('click', function (e) {
                            e.preventDefault();
                            swiperSlider.swipeNext();
                        });
                    });
                </script>

            </section>

            <!-- Content
            ============================================= -->
            <section id="content">

                <div class="content-wrap">

                    <div class="promo promo-full promo-border header-stick bottommargin-lg">
                        <div class="container clearfix">
                            <h3>Call us today at <span>+91.22.57412541</span> or Email us at <span>support@canvas.com</span></h3>
                            <span>We strive to provide Our Customers with Top Notch Support to make their Theme Experience Wonderful</span>
                            <a href="#" class="button button-reveal button-xlarge button-rounded tright"><i class="icon-angle-right"></i><span>Browse Now</span></a>
                        </div>
                    </div>


                    <div class="section topmargin nobottommargin nobottomborder">
                        <div class="container clearfix">
                            <div class="heading-block center nomargin">
                                <h3>Our Latest Works</h3>
                            </div>
                        </div>
                    </div>

                    <div id="portfolio" class="portfolio-nomargin portfolio-notitle portfolio-full clearfix">

                        <article class="portfolio-item pf-media pf-icons">
                            <div class="portfolio-image">
                                <a href="portfolio-single.html">
                                    <img src="../../assets/images/portfolio/4/1.jpg" alt="Open Imagination">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="../../assets/images/portfolio/full/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                    <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single.html">Open Imagination</a></h3>
                                <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                            </div>
                        </article>

                        <article class="portfolio-item pf-illustrations">
                            <div class="portfolio-image">
                                <a href="portfolio-single.html">
                                    <img src="../../assets/images/portfolio/4/2.jpg" alt="Locked Steel Gate">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="../../assets/images/portfolio/full/2.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                    <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single.html">Locked Steel Gate</a></h3>
                                <span><a href="#">Illustrations</a></span>
                            </div>
                        </article>

                        <article class="portfolio-item pf-graphics pf-uielements">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src="../../assets/images/portfolio/4/3.jpg" alt="Mac Sunglasses">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="http://vimeo.com/89396394" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                    <a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
                                <span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
                            </div>
                        </article>

                        <article class="portfolio-item pf-icons pf-illustrations">
                            <div class="portfolio-image">
                                <a href="portfolio-single.html">
                                    <img src="../../assets/images/portfolio/4/4.jpg" alt="Open Imagination">
                                </a>
                                <div class="portfolio-overlay" data-lightbox="gallery">
                                    <a href="../../assets/images/portfolio/full/4.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                    <a href="../../assets/images/portfolio/full/4-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
                                    <a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single-gallery.html">Morning Dew</a></h3>
                                <span><a href="#"><a href="#">Icons</a>, <a href="#">Illustrations</a></span>
                            </div>
                        </article>

                        <article class="portfolio-item pf-uielements pf-media">
                            <div class="portfolio-image">
                                <a href="portfolio-single.html">
                                    <img src="../../assets/images/portfolio/4/5.jpg" alt="Console Activity">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="../../assets/images/portfolio/full/5.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                    <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single.html">Console Activity</a></h3>
                                <span><a href="#">UI Elements</a>, <a href="#">Media</a></span>
                            </div>
                        </article>

                        <article class="portfolio-item pf-graphics pf-illustrations">
                            <div class="portfolio-image">
                                <a href="portfolio-single.html">
                                    <img src="../../assets/images/portfolio/4/6.jpg" alt="Open Imagination">
                                </a>
                                <div class="portfolio-overlay" data-lightbox="gallery">
                                    <a href="../../assets/images/portfolio/full/6.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                    <a href="../../assets/images/portfolio/full/6-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
                                    <a href="../../assets/images/portfolio/full/6-2.jpg" class="hidden" data-lightbox="gallery-item"></a>
                                    <a href="../../assets/images/portfolio/full/6-3.jpg" class="hidden" data-lightbox="gallery-item"></a>
                                    <a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single-gallery.html">Shake It!</a></h3>
                                <span><a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
                            </div>
                        </article>

                        <article class="portfolio-item pf-uielements pf-icons">
                            <div class="portfolio-image">
                                <a href="portfolio-single-video.html">
                                    <img src="../../assets/images/portfolio/4/7.jpg" alt="Backpack Contents">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="http://www.youtube.com/watch?v=kuceVNBTJio" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                    <a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single-video.html">Backpack Contents</a></h3>
                                <span><a href="#">UI Elements</a>, <a href="#">Icons</a></span>
                            </div>
                        </article>

                        <article class="portfolio-item pf-graphics">
                            <div class="portfolio-image">
                                <a href="portfolio-single.html">
                                    <img src="../../assets/images/portfolio/4/8.jpg" alt="Sunset Bulb Glow">
                                </a>
                                <div class="portfolio-overlay">
                                    <a href="../../assets/images/portfolio/full/8.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                    <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="portfolio-single.html">Sunset Bulb Glow</a></h3>
                                <span><a href="#">Graphics</a></span>
                            </div>
                        </article>

                    </div>

                

                    <div class="clear"></div>

                    <a href="portfolio.html" class="button button-full button-dark center tright bottommargin-lg">
                        <div class="container clearfix">
                            More than 100+ predefined Portfolio Grid Layouts. <strong>See More</strong> <i class="icon-caret-right" style="top:4px;"></i>
                        </div>
                    </a>

                    <div class="container clearfix">

                        <div class="col_one_third bottommargin-sm center">
                            <img data-animate="fadeInLeft" src="../../assets/images/services/iphone6.png" alt="Iphone">
                        </div>

                        <div class="col_two_third bottommargin-sm col_last">

                            <div class="heading-block topmargin-sm">
                                <h3>Optimized for Mobile &amp; Touch Enabled Devices.</h3>
                            </div>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero quod consequuntur quibusdam, enim expedita sed quia nesciunt incidunt accusamus necessitatibus modi adipisci officia libero accusantium esse hic, obcaecati, ullam, laboriosam!</p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti vero, animi suscipit id facere officia. Aspernatur, quo, quos nisi dolorum aperiam fugiat deserunt velit rerum laudantium cum magnam.</p>

                            <a href="#" class="button button-border button-dark button-rounded button-large noleftmargin topmargin-sm">Learn more</a>

                        </div>

                    </div>

                    <div class="section notopmargin notopborder">
                        <div class="container clearfix">
                            <div class="heading-block center nomargin">
                                <h3>Latest from the Blog</h3>
                            </div>
                        </div>
                    </div>

                    <div class="container clear-bottommargin clearfix">
                        <div class="row">

                            <div class="col-md-3 col-sm-6 bottommargin">
                                <div class="ipost clearfix">
                                    <div class="entry-image">
                                        <a href="#"><img class="image_fade" src="../../assets/images/magazine/thumb/1.jpg" alt="Image"></a>
                                    </div>
                                    <div class="entry-title">
                                        <h3><a href="blog-single.html">Bloomberg smart cities; change-makers economic security</a></h3>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                        <li><i class="icon-calendar3"></i> 13th Jun 2014</li>
                                        <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 53</a></li>
                                    </ul>
                                    <div class="entry-content">
                                        <p>Prevention effect, advocate dialogue rural development lifting people up community civil society. Catalyst, grantees leverage.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 bottommargin">
                                <div class="ipost clearfix">
                                    <div class="entry-image">
                                        <a href="#"><img class="image_fade" src="../../assets/images/magazine/thumb/2.jpg" alt="Image"></a>
                                    </div>
                                    <div class="entry-title">
                                        <h3><a href="blog-single.html">Medicine new approaches communities, outcomes partnership</a></h3>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                        <li><i class="icon-calendar3"></i> 24th Feb 2014</li>
                                        <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 17</a></li>
                                    </ul>
                                    <div class="entry-content">
                                        <p>Cross-agency coordination clean water rural, promising development turmoil inclusive education transformative community.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 bottommargin">
                                <div class="ipost clearfix">
                                    <div class="entry-image">
                                        <a href="#"><img class="image_fade" src="../../assets/images/magazine/thumb/3.jpg" alt="Image"></a>
                                    </div>
                                    <div class="entry-title">
                                        <h3><a href="blog-single.html">Significant altruism planned giving insurmountable challenges liberal</a></h3>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                        <li><i class="icon-calendar3"></i> 30th Dec 2014</li>
                                        <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
                                    </ul>
                                    <div class="entry-content">
                                        <p>Micro-finance; vaccines peaceful contribution citizens of change generosity. Measures design thinking accelerate progress medical initiative.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 bottommargin">
                                <div class="ipost clearfix">
                                    <div class="entry-image">
                                        <a href="#"><img class="image_fade" src="../../assets/images/magazine/thumb/4.jpg" alt="Image"></a>
                                    </div>
                                    <div class="entry-title">
                                        <h3><a href="blog-single.html">Compassion conflict resolution, progressive; tackle</a></h3>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                        <li><i class="icon-calendar3"></i> 15th Jan 2014</li>
                                        <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 54</a></li>
                                    </ul>
                                    <div class="entry-content">
                                        <p>Community health workers best practices, effectiveness meaningful work The Elders fairness. Our ambitions local solutions globalization.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </section><!-- #content end -->