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
                        @forelse ($projects as $project)
                            <article class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-12 pf-media pf-icons">
                                <!-- Grid Inner: Start -->
                                <div class="grid-inner">
                                    <!-- Image: Start -->
                                    <div class="portfolio-image">
                                        <a href="{{ route('landing.project.detail', ['slug' => $project->slug]) }}">
                                            <img src="{{ asset('images/project/cover/' . $project->cover) }}"
                                                alt="Open Imagination">
                                        </a>
                                        <!-- Overlay: Start -->
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                                <a href="{{ asset('images/project/cover/' . $project->cover) }}"
                                                    class="overlay-trigger-icon bg-light text-dark"
                                                    data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall"
                                                    data-hover-speed="350" data-lightbox="image"
                                                    title="{{ $project->name }}"><i class="icon-line-stack-2"></i></a>
                                                <a href="{{ route('landing.project.detail', ['slug' => $project->slug]) }}"
                                                    class="overlay-trigger-icon bg-light text-dark"
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
                                        <h3><a
                                                href="{{ route('landing.project.detail', ['slug' => $project->slug]) }}">{{ $project->name }}</a>
                                        </h3>
                                    </div>
                                    <!-- Description: Start -->
                                </div>
                                <!-- Grid Inner: End -->
                            </article>
                        @empty

                        @endforelse

                        <!-- Portfolio Item: End -->



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
                        @forelse ($employees as $employee)
                            <div class="col-lg-6">

                                <div class="team team-list row align-items-center">
                                    <div class="team-image col-sm-6">
                                        <img src="{{ asset('images/employee/cover/' . $employee->cover) }}" alt="John Doe">
                                    </div>
                                    <div class="team-desc col-sm-6">
                                        <div class="team-title">
                                            <h4>{{ $employee->name }}</h4><span>{{ $employee->position }}</span>
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
                        @empty

                        @endforelse





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
                        <h2>"{{ $general->quote }}"</h2>
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

                        @forelse ($services as $service)
                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-center fbox-effect border-bottom-0" data-animate="fadeIn"
                                    data-delay="400">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="icon-star2"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>{{ $service->title }}</h3>
                                        {!! $service->description !!}
                                    </div>
                                </div>
                            </div>
                        @empty

                        @endforelse



                    </div>

                </div>

                <div class="divider divider-sm divider-center topmargin-lg"><i class="icon-star3"></i></div>

            </section>
            <section id="section-client">
                <div class="heading-block center bottommargin-lg">
                    <h2>Partners</h2>
                    <span>List of some partners we connect with.</span>
                </div>
                <div class="container clearfix">


                    <ul class="clients-grid grid-2 grid-sm-3 grid-md-5 mb-0">
                        @forelse ($partners as $partner)
                            <li class="grid-item">
                                <a href="{{ $partner->url }}"><img
                                        src="{{ asset('images/partner/cover/' . $partner->cover) }}" alt="Clients"></a>
                            </li>
                        @empty

                        @endforelse


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
                                                @forelse ($services as $service2)
                                                    <option value="{{ $service2->title }}">{{ $service2->title }}</option>
                                                @empty

                                                @endforelse
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
                                        <h3>Our Headquarters<span class="subtitle">{{ $general->address }}</span></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="feature-box fbox-center fbox-bg fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="icon-phone3"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Speak to Us<span class="subtitle">{{ $general->phone }}</span></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="feature-box fbox-center fbox-bg fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="icon-facebook2"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Add us On Facebook<span class="subtitle">{{ $general->facebook }}</span></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="feature-box fbox-center fbox-bg fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="icon-twitter2"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Follow on Twitter<span class="subtitle">{{ $general->twitter }}</span></h3>
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
