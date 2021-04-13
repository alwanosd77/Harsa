@extends('landing.layout.template')
@section('title')
    Harsa
@endsection
@section('content')
    <section id="content">
        <div class="content-wrap">

            <section id="section-about" class="page-section">

                <div class="container clearfix">

                    <div class="heading-block center">
                        <h2>We are <span>Harsa</span></h2>
                        <span>One of the most Versatile Theme on Themeforest</span>
                    </div>

                    <div class="row justify-content-center col-mb-50">
                        <div class="col-sm-6 col-lg-4">
                            <div class="feature-box media-box">
                                <div class="fbox-media">
                                    <img src="{{ asset('front/images/services/1.jpg') }}" alt="Why choose Us?">
                                </div>
                                <div class="fbox-content px-0">
                                    <h3>Why choose Us.<span class="subtitle">Because we are Reliable.</span></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem,
                                        facilis nobis voluptatum est voluptatem accusamus molestiae eaque
                                        perspiciatis mollitia.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="feature-box media-box">
                                <div class="fbox-media">
                                    <img src="{{ asset('front/images/services/2.jpg') }}" alt="Why choose Us?">
                                </div>
                                <div class="fbox-content px-0">
                                    <h3>Our Mission.<span class="subtitle">To Redefine your Brand.</span></h3>
                                    <p>Quos, non, esse eligendi ab accusantium voluptatem. Maxime eligendi beatae,
                                        atque tempora ullam. Vitae delectus quia, consequuntur rerum molestias quo.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="feature-box media-box">
                                <div class="fbox-media">
                                    <img src="{{ asset('front/images/services/3.jpg') }}" alt="Why choose Us?">
                                </div>
                                <div class="fbox-content px-0">
                                    <h3>What we Do.<span class="subtitle">Make our Customers Happy.</span></h3>
                                    <p>Porro repellat vero sapiente amet vitae quibusdam necessitatibus consectetur,
                                        labore totam. Accusamus perspiciatis asperiores labore esse ab accusantium
                                        ea modi ut.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="section dark parallax mb-0"
                    style="padding: 80px 0;background-image: url('{{ asset('front/images/parallax/1.jpg') }}');"
                    data-bottom-top="background-position:0px 100px;" data-top-bottom="background-position:0px -300px;">
                    <div class="container clearfix">

                        <div class="row col-mb-50">
                            <div class="col-sm-6 col-lg-3 text-center" data-animate="bounceIn">
                                <i class="i-plain i-xlarge mx-auto mb-0 icon-code"></i>
                                <div class="counter counter-lined"><span data-from="100" data-to="846"
                                        data-refresh-interval="50" data-speed="2000"></span>K+</div>
                                <h5>Lines of Codes</h5>
                            </div>

                            <div class="col-sm-6 col-lg-3 text-center" data-animate="bounceIn" data-delay="200">
                                <i class="i-plain i-xlarge mx-auto mb-0 icon-magic"></i>
                                <div class="counter counter-lined"><span data-from="3000" data-to="15360"
                                        data-refresh-interval="100" data-speed="2500"></span>+</div>
                                <h5>KBs of HTML Files</h5>
                            </div>

                            <div class="col-sm-6 col-lg-3 text-center" data-animate="bounceIn" data-delay="400">
                                <i class="i-plain i-xlarge mx-auto mb-0 icon-file-text"></i>
                                <div class="counter counter-lined"><span data-from="10" data-to="386"
                                        data-refresh-interval="25" data-speed="3500"></span>*</div>
                                <h5>No. of Templates</h5>
                            </div>

                            <div class="col-sm-6 col-lg-3 text-center" data-animate="bounceIn" data-delay="600">
                                <i class="i-plain i-xlarge mx-auto mb-0 icon-time"></i>
                                <div class="counter counter-lined"><span data-from="60" data-to="1200"
                                        data-refresh-interval="30" data-speed="2700"></span>+</div>
                                <h5>Hours of Coding</h5>
                            </div>
                        </div>

                    </div>
                </div>

            </section>

            <section id="section-work" class="page-section topmargin-lg">

                <div class="heading-block center">
                    <h2>Our Projects</h2>
                    <span>Some of the Awesome Projects we've worked on.</span>
                </div>

                <div class="container">

                    <!-- Portfolio Items============================================= -->
                    <div id="portfolio" class="portfolio row grid-container no-gutters text-center" data-layout="fitRows">

                        <!-- Portfolio Item: Start -->
                        <article class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-12 pf-media pf-icons">
                            <!-- Grid Inner: Start -->
                            <div class="grid-inner">
                                <!-- Image: Start -->
                                <div class="portfolio-image">
                                    <a href="portfolio-single.html">
                                        <img src="{{ asset('front/images/portfolio/4/1.jpg') }}" alt="Open Imagination">
                                    </a>
                                    <!-- Overlay: Start -->
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                            <a href="{{ asset('front/images/portfolio/full/1.jpg') }}"
                                                class="overlay-trigger-icon bg-light text-dark"
                                                data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall"
                                                data-hover-speed="350" data-lightbox="image" title="Image"><i
                                                    class="icon-line-plus"></i></a>
                                            <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark"
                                                data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall"
                                                data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                    </div>
                                    <!-- Overlay: End -->
                                </div>
                                <!-- Image: End -->
                                <!-- Decription: Start -->
                                <div class="portfolio-desc">
                                    <h3><a href="portfolio-single.html">Open Imagination</a></h3>
                                    <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                                </div>
                                <!-- Description: Start -->
                            </div>
                            <!-- Grid Inner: End -->
                        </article>
                        <!-- Portfolio Item: End -->

                        <article class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-12 pf-illustrations">
                            <div class="grid-inner">
                                <div class="portfolio-image">
                                    <a href="portfolio-single.html">
                                        <img src="{{ asset('front/images/portfolio/4/2.jpg') }}" alt="Locked Steel Gate">
                                    </a>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                            <a href="{{ asset('front/images/portfolio/full/2.jpg') }}"
                                                class="overlay-trigger-icon bg-light text-dark"
                                                data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall"
                                                data-hover-speed="350" data-lightbox="image" title="Image"><i
                                                    class="icon-line-plus"></i></a>
                                            <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark"
                                                data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall"
                                                data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="portfolio-single.html">Locked Steel Gate</a></h3>
                                    <span><a href="#">Illustrations</a></span>
                                </div>
                            </div>
                        </article>

                        <article class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-12 pf-graphics pf-uielements">
                            <div class="grid-inner">
                                <div class="portfolio-image">
                                    <a href="#">
                                        <img src="{{ asset('front/images/portfolio/4/3.jpg') }}" alt="Mac Sunglasses">
                                    </a>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                            <a href="https://vimeo.com/89396394"
                                                class="overlay-trigger-icon bg-light text-dark"
                                                data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall"
                                                data-hover-speed="350" data-lightbox="iframe"><i
                                                    class="icon-line-play"></i></a>
                                            <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark"
                                                data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall"
                                                data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
                                    <span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
                                </div>
                            </div>
                        </article>

                        <article class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-12 pf-icons pf-illustrations">
                            <div class="grid-inner">
                                <div class="portfolio-image">
                                    <div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
                                        <div class="flexslider">
                                            <div class="slider-wrap">
                                                <div class="slide"><a href="portfolio-single-gallery.html"><img
                                                            src="{{ asset('front/images/portfolio/4/4.jpg') }}"
                                                            alt="Morning Dew"></a>
                                                </div>
                                                <div class="slide"><a href="portfolio-single-gallery.html"><img
                                                            src="{{ asset('front/images/portfolio/4/4-1.jpg') }}"
                                                            alt="Morning Dew"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-overlay" data-lightbox="gallery">
                                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                            <a href="{{ asset('front/images/portfolio/full/4.jpg') }}"
                                                class="overlay-trigger-icon bg-light text-dark"
                                                data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall"
                                                data-hover-speed="350" data-lightbox="gallery-item"><i
                                                    class="icon-line-stack-2"></i></a>
                                            <a href="{{ asset('front/images/portfolio/full/4-1.jpg') }}" class="d-none"
                                                data-lightbox="gallery-item"></a>
                                            <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark"
                                                data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall"
                                                data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="portfolio-single-gallery.html">Morning Dew</a></h3>
                                    <span><a href="#">Icons</a>, <a href="#">Illustrations</a></span>
                                </div>
                            </div>
                        </article>

                        <article class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-12 pf-uielements pf-media">
                            <div class="grid-inner">
                                <div class="portfolio-image">
                                    <a href="portfolio-single.html">
                                        <img src="{{ asset('front/images/portfolio/4/5.jpg') }}" alt="Console Activity">
                                    </a>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                            <a href="{{ asset('front/images/portfolio/full/5.jpg') }}"
                                                class="overlay-trigger-icon bg-light text-dark"
                                                data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall"
                                                data-hover-speed="350" data-lightbox="image" title="Image"><i
                                                    class="icon-line-plus"></i></a>
                                            <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark"
                                                data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall"
                                                data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="portfolio-single.html">Console Activity</a></h3>
                                    <span><a href="#">UI Elements</a>, <a href="#">Media</a></span>
                                </div>
                            </div>
                        </article>

                        <article class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-12 pf-graphics pf-illustrations">
                            <div class="grid-inner">
                                <div class="portfolio-image">
                                    <div class="fslider" data-arrows="false">
                                        <div class="flexslider">
                                            <div class="slider-wrap">
                                                <div class="slide"><a href="portfolio-single-gallery.html"><img
                                                            src="{{ asset('front/images/portfolio/4/6.jpg') }}"
                                                            alt="Shake It"></a></div>
                                                <div class="slide"><a href="portfolio-single-gallery.html"><img
                                                            src="{{ asset('front/images/portfolio/4/6-1.jpg') }}"
                                                            alt="Shake It"></a>
                                                </div>
                                                <div class="slide"><a href="portfolio-single-gallery.html"><img
                                                            src="{{ asset('front/images/portfolio/4/6-2.jpg') }}"
                                                            alt="Shake It"></a>
                                                </div>
                                                <div class="slide"><a href="portfolio-single-gallery.html"><img
                                                            src="{{ asset('front/images/portfolio/4/6-3.jpg') }}"
                                                            alt="Shake It"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-overlay" data-lightbox="gallery">
                                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                            <a href="{{ asset('front/images/portfolio/full/6.jpg') }}"
                                                class="overlay-trigger-icon bg-light text-dark"
                                                data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall"
                                                data-hover-speed="350" data-lightbox="gallery-item"><i
                                                    class="icon-line-stack-2"></i></a>
                                            <a href="{{ asset('front/images/portfolio/full/6-1.jpg') }}" class="d-none"
                                                data-lightbox="gallery-item"></a>
                                            <a href="{{ asset('front/images/portfolio/full/6-2.jpg') }}" class="d-none"
                                                data-lightbox="gallery-item"></a>
                                            <a href="{{ asset('front/images/portfolio/full/6-3.jpg') }}" class="d-none"
                                                data-lightbox="gallery-item"></a>
                                            <a href="portfolio-single-gallery.html"
                                                class="overlay-trigger-icon bg-light text-dark"
                                                data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall"
                                                data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="portfolio-single-gallery.html">Shake It!</a></h3>
                                    <span><a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
                                </div>
                            </div>
                        </article>

                        <article class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-12 pf-uielements pf-icons">
                            <div class="grid-inner">
                                <div class="portfolio-image">
                                    <a href="portfolio-single-video.html">
                                        <img src="{{ asset('front/images/portfolio/4/7.jpg') }}" alt="Backpack Contents">
                                    </a>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                            <a href="https://www.youtube.com/watch?v=kuceVNBTJio"
                                                class="overlay-trigger-icon bg-light text-dark"
                                                data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall"
                                                data-hover-speed="350" data-lightbox="iframe"><i
                                                    class="icon-line-play"></i></a>
                                            <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark"
                                                data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall"
                                                data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="portfolio-single-video.html">Backpack Contents</a></h3>
                                    <span><a href="#">UI Elements</a>, <a href="#">Icons</a></span>
                                </div>
                            </div>
                        </article>

                        <article class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-12 pf-graphics">
                            <div class="grid-inner">
                                <div class="portfolio-image">
                                    <a href="portfolio-single.html">
                                        <img src="{{ asset('front/images/portfolio/4/8.jpg') }}" alt="Sunset Bulb Glow">
                                    </a>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                            <a href="{{ asset('front/images/portfolio/full/8.jpg') }}"
                                                class="overlay-trigger-icon bg-light text-dark"
                                                data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall"
                                                data-hover-speed="350" data-lightbox="image" title="Image"><i
                                                    class="icon-line-plus"></i></a>
                                            <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark"
                                                data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall"
                                                data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="portfolio-single.html">Sunset Bulb Glow</a></h3>
                                    <span><a href="#">Graphics</a></span>
                                </div>
                            </div>
                        </article>

                        <article class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-12 pf-illustrations pf-icons">
                            <div class="grid-inner">
                                <div class="portfolio-image">
                                    <div class="fslider" data-arrows="false" data-speed="650" data-pause="3500"
                                        data-animation="fade">
                                        <div class="flexslider">
                                            <div class="slider-wrap">
                                                <div class="slide"><a href="portfolio-single-gallery.html"><img
                                                            src="{{ asset('front/images/portfolio/4/9.jpg') }}"
                                                            alt="Bridge Side"></a>
                                                </div>
                                                <div class="slide"><a href="portfolio-single-gallery.html"><img
                                                            src="{{ asset('front/images/portfolio/4/9-1.jpg') }}"
                                                            alt="Bridge Side"></a>
                                                </div>
                                                <div class="slide"><a href="portfolio-single-gallery.html"><img
                                                            src="{{ asset('front/images/portfolio/4/9-2.jpg') }}"
                                                            alt="Bridge Side"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-overlay" data-lightbox="gallery">
                                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                            <a href="{{ asset('front/images/portfolio/full/9.jpg') }}"
                                                class="overlay-trigger-icon bg-light text-dark"
                                                data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall"
                                                data-hover-speed="350" data-lightbox="gallery-item"><i
                                                    class="icon-line-stack-2"></i></a>
                                            <a href="{{ asset('front/images/portfolio/full/9-1.jpg') }}" class="d-none"
                                                data-lightbox="gallery-item"></a>
                                            <a href="{{ asset('front/images/portfolio/full/9-2.jpg') }}" class="d-none"
                                                data-lightbox="gallery-item"></a>
                                            <a href="portfolio-single-gallery.html"
                                                class="overlay-trigger-icon bg-light text-dark"
                                                data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall"
                                                data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="portfolio-single.html">Bridge Side</a></h3>
                                    <span><a href="#">Illustrations</a>, <a href="#">Icons</a></span>
                                </div>
                            </div>
                        </article>

                        <article
                            class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-12 pf-graphics pf-media pf-uielements">
                            <div class="grid-inner">
                                <div class="portfolio-image">
                                    <a href="portfolio-single-video.html">
                                        <img src="{{ asset('front/images/portfolio/4/10.jpg') }}" alt="Study Table">
                                    </a>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                            <a href="https://vimeo.com/91973305"
                                                class="overlay-trigger-icon bg-light text-dark"
                                                data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall"
                                                data-hover-speed="350" data-lightbox="iframe"><i
                                                    class="icon-line-play"></i></a>
                                            <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark"
                                                data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall"
                                                data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="portfolio-single-video.html">Study Table</a></h3>
                                    <span><a href="#">Graphics</a>, <a href="#">Media</a></span>
                                </div>
                            </div>
                        </article>

                        <article class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-12 pf-media pf-icons">
                            <div class="grid-inner">
                                <div class="portfolio-image">
                                    <a href="portfolio-single.html">
                                        <img src="{{ asset('front/images/portfolio/4/11.jpg') }}" alt="Workspace Stuff">
                                    </a>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                            <a href="{{ asset('front/images/portfolio/full/11.jpg') }}"
                                                class="overlay-trigger-icon bg-light text-dark"
                                                data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall"
                                                data-hover-speed="350" data-lightbox="image" title="Image"><i
                                                    class="icon-line-plus"></i></a>
                                            <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark"
                                                data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall"
                                                data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="portfolio-single.html">Workspace Stuff</a></h3>
                                    <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                                </div>
                            </div>
                        </article>

                        <article class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-12 pf-illustrations pf-graphics">
                            <div class="grid-inner">
                                <div class="portfolio-image">
                                    <div class="fslider" data-arrows="false" data-speed="700" data-pause="7000">
                                        <div class="flexslider">
                                            <div class="slider-wrap">
                                                <div class="slide"><a href="portfolio-single-gallery.html"><img
                                                            src="{{ asset('front/images/portfolio/4/12.jpg') }}"
                                                            alt="Fixed Aperture"></a></div>
                                                <div class="slide"><a href="portfolio-single-gallery.html"><img
                                                            src="{{ asset('front/images/portfolio/4/12-1.jpg') }}"
                                                            alt="Fixed Aperture"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-overlay" data-lightbox="gallery">
                                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                            <a href="{{ asset('front/images/portfolio/full/12.jpg') }}"
                                                class="overlay-trigger-icon bg-light text-dark"
                                                data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall"
                                                data-hover-speed="350" data-lightbox="gallery-item"><i
                                                    class="icon-line-stack-2"></i></a>
                                            <a href="{{ asset('front/images/portfolio/full/12-1.jpg') }}" class="d-none"
                                                data-lightbox="gallery-item"></a>
                                            <a href="portfolio-single-gallery.html"
                                                class="overlay-trigger-icon bg-light text-dark"
                                                data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall"
                                                data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="portfolio-single-gallery.html">Fixed Aperture</a></h3>
                                    <span><a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
                                </div>
                            </div>
                        </article>

                    </div><!-- #portfolio end -->

                </div>
            </section>

            <section id="section-team" class="page-section topmargin-lg">

                <div class="heading-block center">
                    <h2>Our Team</h2>
                    <span>People who have contributed enormously to our Company.</span>
                </div>

                <div class="container clearfix">

                    <div class="row col-mb-50 mb-0">
                        <div class="col-lg-6">

                            <div class="team team-list row align-items-center">
                                <div class="team-image col-sm-6">
                                    <img src="{{ asset('front/images/team/3.jpg') }}" alt="John Doe">
                                </div>
                                <div class="team-desc col-sm-6">
                                    <div class="team-title">
                                        <h4>John Doe</h4><span>CEO</span>
                                    </div>
                                    <div class="team-content">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Quaerat assumenda similique unde mollitia.</div>
                                    <a href="#" class="social-icon si-rounded si-small si-facebook">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="#" class="social-icon si-rounded si-small si-twitter">
                                        <i class="icon-twitter"></i>
                                        <i class="icon-twitter"></i>
                                    </a>
                                    <a href="#" class="social-icon si-rounded si-small si-gplus">
                                        <i class="icon-gplus"></i>
                                        <i class="icon-gplus"></i>
                                    </a>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6">

                            <div class="team team-list row align-items-center">
                                <div class="team-image col-sm-6">
                                    <img src="{{ asset('front/images/team/4.jpg') }}" alt="Nix Maxwell">
                                </div>
                                <div class="team-desc col-sm-6">
                                    <div class="team-title">
                                        <h4>Nix Maxwell</h4><span>Co-Founder</span>
                                    </div>
                                    <div class="team-content">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Quaerat assumenda similique unde mollitia.</div>
                                    <a href="#" class="social-icon si-rounded si-small si-forrst">
                                        <i class="icon-forrst"></i>
                                        <i class="icon-forrst"></i>
                                    </a>
                                    <a href="#" class="social-icon si-rounded si-small si-skype">
                                        <i class="icon-skype"></i>
                                        <i class="icon-skype"></i>
                                    </a>
                                    <a href="#" class="social-icon si-rounded si-small si-flickr">
                                        <i class="icon-flickr"></i>
                                        <i class="icon-flickr"></i>
                                    </a>
                                </div>
                            </div>

                        </div>

                        <div class="w-100"></div>

                        <div class="col-lg-6">

                            <div class="team team-list row align-items-center">
                                <div class="team-image col-sm-6">
                                    <img src="{{ asset('front/images/team/2.jpg') }}" alt="Josh Clark">
                                </div>
                                <div class="team-desc col-sm-6">
                                    <div class="team-title">
                                        <h4>Josh Clark</h4><span>Developer</span>
                                    </div>
                                    <div class="team-content">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Quaerat assumenda similique unde mollitia.</div>
                                    <a href="#" class="social-icon si-rounded si-small si-dribbble">
                                        <i class="icon-dribbble"></i>
                                        <i class="icon-dribbble"></i>
                                    </a>
                                    <a href="#" class="social-icon si-rounded si-small si-twitter">
                                        <i class="icon-twitter"></i>
                                        <i class="icon-twitter"></i>
                                    </a>
                                    <a href="#" class="social-icon si-rounded si-small si-github">
                                        <i class="icon-github"></i>
                                        <i class="icon-github"></i>
                                    </a>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6">

                            <div class="team team-list row align-items-center">
                                <div class="team-image col-sm-6">
                                    <img src="{{ asset('front/images/team/8.jpg') }}" alt="Mary Jane">
                                </div>
                                <div class="team-desc col-sm-6">
                                    <div class="team-title">
                                        <h4>Mary Jane</h4><span>Support</span>
                                    </div>
                                    <div class="team-content">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Quaerat assumenda similique unde mollitia.</div>
                                    <a href="#" class="social-icon si-rounded si-small si-facebook">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="#" class="social-icon si-rounded si-small si-linkedin">
                                        <i class="icon-linkedin"></i>
                                        <i class="icon-linkedin"></i>
                                    </a>
                                    <a href="#" class="social-icon si-rounded si-small si-twitter">
                                        <i class="icon-twitter"></i>
                                        <i class="icon-twitter"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="clear"></div>

                    <div class="fancy-title title-border title-center topmargin-sm">
                        <h4>Skills we are Perfect in</h4>
                    </div>

                    <div class="row col-mb-50">
                        <div class="col-sm-6 col-lg-3 text-center">
                            <div class="rounded-skill" data-color="#D01C1C" data-size="150" data-percent="90" data-width="2"
                                data-animate="3000">
                                <div class="counter counter-inherit"><span data-from="1" data-to="90"
                                        data-refresh-interval="50" data-speed="3000"></span>%</div>
                            </div>
                            <h5>HTML5</h5>
                        </div>

                        <div class="col-sm-6 col-lg-3 text-center">
                            <div class="rounded-skill" data-color="#1770A4" data-size="150" data-percent="75" data-width="2"
                                data-animate="3000">
                                <div class="counter counter-inherit"><span data-from="1" data-to="75"
                                        data-refresh-interval="50" data-speed="3000"></span>%</div>
                            </div>
                            <h5>CSS3</h5>
                        </div>

                        <div class="col-sm-6 col-lg-3 text-center">
                            <div class="rounded-skill" data-color="#6A89AA" data-size="150" data-percent="85" data-width="2"
                                data-animate="3000">
                                <div class="counter counter-inherit"><span data-from="1" data-to="85"
                                        data-refresh-interval="50" data-speed="3000"></span>%</div>
                            </div>
                            <h5>PHP</h5>
                        </div>

                        <div class="col-sm-6 col-lg-3 text-center">
                            <div class="rounded-skill" data-color="#248673" data-size="150" data-percent="80" data-width="2"
                                data-animate="3000">
                                <div class="counter counter-inherit"><span data-from="1" data-to="80"
                                        data-refresh-interval="50" data-speed="3000"></span>%</div>
                            </div>
                            <h5>jQuery</h5>
                        </div>
                    </div>

                </div>

                <div class="section parallax"
                    style="background-image: url('{{ asset('front/images/parallax/3.jpg') }}'); padding: 100px 0;"
                    data-bottom-top="background-position:0px 100px;" data-top-bottom="background-position:0px -100px;">
                    <div class="heading-block center border-bottom-0 mb-0">
                        <h2>"Everything is designed, but some things are designed well."</h2>
                    </div>
                </div>

            </section>

            <section id="section-services" class="page-section topmargin-lg">

                <div class="heading-block center bottommargin-lg">
                    <h2>Services</h2>
                    <span>List of some features included in Canvas.</span>
                </div>

                <div class="container clearfix">

                    <div class="row justify-content-center col-mb-50">
                        <div class="col-sm-6 col-lg-4">
                            <div class="feature-box fbox-center fbox-effect border-bottom-0" data-animate="fadeIn">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-phone2"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>Responsive Layout</h3>
                                    <p>Powerful Layout with Responsive functionality that can be adapted to any
                                        screen size.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="feature-box fbox-center fbox-effect border-bottom-0" data-animate="fadeIn"
                                data-delay="200">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-eye"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>Retina Ready Graphics</h3>
                                    <p>Looks beautiful &amp; ultra-sharp on Retina Displays with Retina Icons, Fonts
                                        &amp; Images.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="feature-box fbox-center fbox-effect border-bottom-0" data-animate="fadeIn"
                                data-delay="400">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-star2"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>Powerful Performance</h3>
                                    <p>Optimized code that are completely customizable and deliver unmatched fast
                                        performance.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="feature-box fbox-center fbox-effect border-bottom-0" data-animate="fadeIn"
                                data-delay="600">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-video"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>HTML5 Video</h3>
                                    <p>Canvas provides support for Native HTML5 Videos that can be added to a Full
                                        Width Background.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="feature-box fbox-center fbox-effect border-bottom-0" data-animate="fadeIn"
                                data-delay="800">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-params"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>Parallax Support</h3>
                                    <p>Display your Content attractively using Parallax Sections that have unlimited
                                        customizable areas.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="feature-box fbox-center fbox-effect border-bottom-0" data-animate="fadeIn"
                                data-delay="1000">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-fire"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>Endless Possibilities</h3>
                                    <p>Complete control on each &amp; every element that provides endless
                                        customization possibilities.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="feature-box fbox-center fbox-effect border-bottom-0" data-animate="fadeIn"
                                data-delay="1200">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-bulb"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>Light &amp; Dark Color Schemes</h3>
                                    <p>Change your Website's Primary Scheme instantly by simply adding the dark
                                        class to the body.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="feature-box fbox-center fbox-effect border-bottom-0" data-animate="fadeIn"
                                data-delay="1400">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-heart2"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>Boxed &amp; Wide Layouts</h3>
                                    <p>Stretch your Website to the Full Width or make it boxed to surprise your
                                        visitors.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="feature-box fbox-center fbox-effect border-bottom-0" data-animate="fadeIn"
                                data-delay="1600">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-note"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>Extensive Documentation</h3>
                                    <p>We have covered each &amp; everything in our Documentation including Videos
                                        &amp; Screenshots.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="divider divider-sm divider-center topmargin-lg"><i class="icon-star3"></i></div>

            </section>
            <section id="section-client">
                <div class="heading-block center bottommargin-lg">
                    <h2>Clients</h2>
                    <span>List of some features included in Canvas.</span>
                </div>
                <div class="container clearfix">


                    <ul class="clients-grid grid-2 grid-sm-3 grid-md-5 mb-0">
                        <li class="grid-item"><a href="#"><img src="{{ asset('front/images/clients/1.png') }}"
                                    alt="Clients"></a></li>
                        <li class="grid-item"><a href="#"><img src="{{ asset('front/images/clients/2.png') }}"
                                    alt="Clients"></a></li>
                        <li class="grid-item"><a href="#"><img src="{{ asset('front/images/clients/3.png') }}"
                                    alt="Clients"></a></li>
                        <li class="grid-item"><a href="#"><img src="{{ asset('front/images/clients/4.png') }}"
                                    alt="Clients"></a></li>
                        <li class="grid-item"><a href="#"><img src="{{ asset('front/images/clients/5.png') }}"
                                    alt="Clients"></a></li>
                        <li class="grid-item"><a href="#"><img src="{{ asset('front/images/clients/6.png') }}"
                                    alt="Clients"></a></li>
                        <li class="grid-item"><a href="#"><img src="{{ asset('front/images/clients/7.png') }}"
                                    alt="Clients"></a></li>
                        <li class="grid-item"><a href="#"><img src="{{ asset('front/images/clients/8.png') }}"
                                    alt="Clients"></a></li>
                        <li class="grid-item"><a href="#"><img src="{{ asset('front/images/clients/9.png') }}"
                                    alt="Clients"></a></li>
                        <li class="grid-item"><a href="#"><img src="{{ asset('front/images/clients/10.png') }}"
                                    alt="Clients"></a></li>
                    </ul>
                </div>
                <div class="divider divider-sm divider-center topmargin-lg"><i class="icon-star3"></i></div>

            </section>


            <section id="section-testimonials" class="page-section section parallax dark"
                style="background-image: url('{{ asset('front/images/about/me-parallax.jpg') }}'); padding: 200px 0;"
                data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
                <div class="container clearfix">

                    <div class="row col-mb-50">
                        <div class="col-md-6">&nbsp;</div>

                        <div class="col-md-6">

                            <div class="heading-block center">
                                <h4>What Clients say?</h4>
                                <span>Some of our Clients love us &amp; so we do!</span>
                            </div>

                            <div class="fslider testimonial testimonial-full bg-transparent border-0 shadow-none p-0"
                                data-arrows="false">
                                <div class="flexslider">
                                    <div class="slider-wrap">
                                        <div class="slide">
                                            <div class="testi-content">
                                                <p>Similique fugit repellendus expedita excepturi iure perferendis
                                                    provident quia eaque. Repellendus, vero numquam?</p>
                                                <div class="testi-meta">
                                                    Steve Jobs
                                                    <span>Apple Inc.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="testi-content">
                                                <p>Natus voluptatum enim quod necessitatibus quis expedita harum
                                                    provident eos obcaecati id culpa corporis molestias.</p>
                                                <div class="testi-meta">
                                                    Collis Ta'eed
                                                    <span>Envato Inc.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="testi-content">
                                                <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur
                                                    ullam quibusdam cum libero illo rerum!</p>
                                                <div class="testi-meta">
                                                    John Doe
                                                    <span>XYZ Inc.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </section>



            <section id="section-contact" class="page-section">

                <div class="heading-block text-center">
                    <h2>Get in Touch with us</h2>
                    <span>Still have Questions? Contact Us using the Form below.</span>
                </div>

                <div class="container clearfix">

                    <div class="row align-items-stretch col-mb-50 mb-0">
                        <!-- Contact Form============================================= -->
                        <div class="col-lg-6">

                            <div class="fancy-title title-border">
                                <h3>Send us an Email</h3>
                            </div>

                            <div class="form-widget">
                                <div class="form-result"></div>

                                <form class="mb-0" id="template-contactform" name="template-contactform"
                                    action="http://themes.semicolonweb.com/html/canvas/include/form.php" method="post">
                                    <div class="form-process">
                                        <div class="css3-spinner">
                                            <div class="css3-spinner-scaler"></div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 form-group">
                                            <label for="template-contactform-name">Name <small>*</small></label>
                                            <input type="text" id="template-contactform-name"
                                                name="template-contactform-name" value=""
                                                class="sm-form-control required" />
                                        </div>

                                        <div class="col-md-4 form-group">
                                            <label for="template-contactform-email">Email <small>*</small></label>
                                            <input type="email" id="template-contactform-email"
                                                name="template-contactform-email" value=""
                                                class="required email sm-form-control" />
                                        </div>

                                        <div class="col-md-4 form-group">
                                            <label for="template-contactform-phone">Phone</label>
                                            <input type="text" id="template-contactform-phone"
                                                name="template-contactform-phone" value="" class="sm-form-control" />
                                        </div>

                                        <div class="w-100"></div>

                                        <div class="col-md-8 form-group">
                                            <label for="template-contactform-subject">Subject
                                                <small>*</small></label>
                                            <input type="text" id="template-contactform-subject" name="subject" value=""
                                                class="required sm-form-control" />
                                        </div>

                                        <div class="col-md-4 form-group">
                                            <label for="template-contactform-service">Services</label>
                                            <select id="template-contactform-service" name="template-contactform-service"
                                                class="sm-form-control">
                                                <option value="">-- Select One --</option>
                                                <option value="Wordpress">Wordpress</option>
                                                <option value="PHP / MySQL">PHP / MySQL</option>
                                                <option value="HTML5 / CSS3">HTML5 / CSS3</option>
                                                <option value="Graphic Design">Graphic Design</option>
                                            </select>
                                        </div>

                                        <div class="w-100"></div>

                                        <div class="col-12 form-group">
                                            <label for="template-contactform-message">Message
                                                <small>*</small></label>
                                            <textarea class="required sm-form-control" id="template-contactform-message"
                                                name="template-contactform-message" rows="6" cols="30"></textarea>
                                        </div>

                                        <div class="col-12 form-group d-none">
                                            <input type="text" id="template-contactform-botcheck"
                                                name="template-contactform-botcheck" value="" class="sm-form-control" />
                                        </div>

                                        <div class="col-12 form-group">
                                            <button class="button button-3d m-0" type="submit"
                                                id="template-contactform-submit" name="template-contactform-submit"
                                                value="submit">Send Message</button>
                                        </div>
                                    </div>

                                    <input type="hidden" name="prefix" value="template-contactform-">

                                </form>
                            </div>

                        </div><!-- Contact Form End -->

                        <!-- Google Map============================================= -->
                        <div class="col-lg-6 min-vh-40">
                            <div class="gmap h-100" data-latitude="-37.813629" data-longitude="144.963058"
                                data-markers='[{latitude:-37.813629, longitude:144.963058, html: "<div class=\"p-2\" style=\"width: 300px;\"><h4 class=\"mb-2\">Hi! We are <span>Envato!</span></h4><p class=\"mb-0\" style=\"font-size:1rem;\">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day.</p></div>", icon:{ image: "images/icons/map-icon-red.png", iconsize: [32, 39], iconanchor: [32,39] } }]'
                                data-scrollwheel="false"></div>
                        </div><!-- Google Map End -->
                    </div>

                    <!-- Contact Info============================================= -->
                    <div class="w-100">

                        <div class="row col-mb-50">
                            <div class="col-sm-6 col-lg-3">
                                <div class="feature-box fbox-center fbox-bg fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="icon-map-marker2"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Our Headquarters<span class="subtitle">Melbourne, Australia</span></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="feature-box fbox-center fbox-bg fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="icon-phone3"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Speak to Us<span class="subtitle">(123) 456 7890</span></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="feature-box fbox-center fbox-bg fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="icon-skype2"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Make a Video Call<span class="subtitle">CanvasOnSkype</span></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="feature-box fbox-center fbox-bg fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="icon-twitter2"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Follow on Twitter<span class="subtitle">2.3M Followers</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- Contact Info End -->

                </div>
            </section>

        </div>
    </section>
@endsection
