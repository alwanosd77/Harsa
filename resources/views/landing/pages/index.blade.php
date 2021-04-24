@extends('landing.layout.template')
@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css"
        integrity="sha512-DIW4FkYTOxjCqRt7oS9BFO+nVOwDL4bzukDyDtMO7crjUZhwpyrWBFroq+IqRe6VnJkTpRAS6nhDvf0w+wHmxg=="
        crossorigin="anonymous" />
@endsection
@section('title')
    Harsa
@endsection
@section('slider')
    @include('landing.layout.slider')

@endsection
@section('content')
    <section id="content">
        <div class="content-wrap">

            <section id="section-about" class="page-section">

                <div class="container clearfix">

                    <div class="heading-block center">
                        <h2>Selamat Datang Di Website Kami</h2>
                        <span>Perusahaan ...</span>
                    </div>

                    <div class="row justify-content-center col-mb-50">
                        @forelse ($abouts as $about)
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="feature-box media-box">
                                    <div class="fbox-media">
                                        <img src="{{ asset('images/About/cover/' . $about->cover) }}"
                                            alt="{{ $about->title }}">
                                    </div>
                                    <div class="fbox-content px-0">
                                        <h3>{{ $about->title }}
                                        </h3>
                                        <p>{{ $about->shortText }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @empty

                        @endforelse






                    </div>

                </div>

                <div class="divider divider-sm divider-center topmargin-lg"><i class="icon-star3"></i></div>

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
                            @if ($loop->index == 8)
                            @break
                        @endif
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
                    <a href="{{ route('landing.project') }}"
                        class="button button-rounded button-reveal button-large button-border text-right float-right">
                        <i class="icon-line-arrow-right"></i>
                        <span>See More</span>
                    </a>

                </div>
                <div class="divider divider-sm divider-center topmargin-lg"><i class="icon-star3"></i></div>
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
                                        <img src="{{ asset('images/employee/cover/' . $employee->cover) }}"
                                            alt="John Doe">
                                    </div>
                                    <div class="team-desc col-sm-6">
                                        <div class="team-title">
                                            <h4>{{ $employee->name }}</h4><span>{{ $employee->position }}</span>
                                        </div>
                                        <div class="team-content">{!! $employee->caption !!}</div>

                                    </div>
                                </div>

                            </div>
                        @empty

                        @endforelse

                    </div>
                    <a href="{{ route('landing.team') }}"
                        class="button button-rounded button-reveal button-large button-border text-right float-right">
                        <i class="icon-line-arrow-right"></i>
                        <span>See More</span>
                    </a>
                    <div class="clear"></div>



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
                                <a href="{{ $partner->url }}" target="__blank">
                                    <img src="{{ asset('images/partner/cover/' . $partner->cover) }}" alt="Clients">
                                </a>
                            </li>
                        @empty

                        @endforelse


                    </ul>
                </div>
                <div class="divider divider-sm divider-center topmargin-lg"><i class="icon-star3"></i></div>

            </section>


            {{-- <section id="section-testimonials" class="page-section section parallax dark"
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
                </section> --}}



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

                                <form class="mb-0" id="template-contactform" name="template-contactform" action=""
                                    method="post">
                                    <div class="form-process">
                                        <div class="css3-spinner">
                                            <div class="css3-spinner-scaler"></div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="template-contactform-name">Name<small>*</small></label>
                                            <input type="text" id="template-contactform-name" name="name" value=""
                                                class="sm-form-control required" />
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="template-contactform-service">Services</label>
                                            <select id="template-contactform-service" name="subject"
                                                class="sm-form-control">
                                                <option value="">-- Select One --</option>
                                                @forelse ($services as $service2)
                                                    <option value="{{ $service2->title }}">{{ $service2->title }}
                                                    </option>
                                                @empty

                                                @endforelse
                                            </select>
                                        </div>



                                        <div class="w-100"></div>

                                        <div class="col-md-6 form-group">
                                            <label for="template-contactform-email">Email<small>*</small></label>
                                            <input type="email" id="template-contactform-email" name="email" value=""
                                                class="required email sm-form-control" />
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label for="template-contactform-phone">Phone</label>
                                            <input type="text" id="template-contactform-phone" name="phone" value=""
                                                class="sm-form-control" />
                                        </div>



                                        <div class="w-100"></div>

                                        <div class="col-12 form-group">
                                            <label for="template-contactform-message">Message
                                                <small>*</small></label>
                                            <textarea class="required sm-form-control" id="template-contactform-message"
                                                name="message" rows="6" cols="30"></textarea>
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
                            <div class="gmap h-100">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d997.424420749931!2d117.15394728286138!3d-0.4455567699954903!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df679a48ca52b45%3A0xf073ca5028c355df!2sPT%20HARSA%20KONSULTAN%20INDONESIA!5e0!3m2!1sen!2sid!4v1619195308018!5m2!1sen!2sid"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
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
                                        <h3>Our Headquarters<span class="subtitle">{!! $general->address !!}</span></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="feature-box fbox-center fbox-bg fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="icon-phone3"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Speak to Us<span class="subtitle">(+62) {{ $general->phone }}</span></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="feature-box fbox-center fbox-bg fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="icon-facebook2"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Add us On Facebook
                                            <span class="subtitle">
                                                <a href="{{ $general->facebook }}">Click Here</a>
                                            </span>
                                        </h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="feature-box fbox-center fbox-bg fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="icon-instagram"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Follow on Instagram
                                            <span class="subtitle">
                                                <a href="{{ $general->instagram }}">Click Here</a>
                                            </span>
                                        </h3>
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


@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"
        integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA=="
        crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        $(document).ready(function() {
            $('#template-contactform-submit').click(function(e) {
                e.preventDefault();
                var name = $('#template-contactform-name').val();
                var subject = $('#template-contactform-service').val();
                var email = $('#template-contactform-email').val();
                var phone = $('#template-contactform-phone').val();
                var message = $('#template-contactform-message').val();
                if (name == '' || subject == '' || email == '' || phone == '' || message == '') {
                    iziToast.error({
                        title: 'Field Kosong',
                        message: 'Tolong Lengkapi Form Terlebih dahulu',
                        position: 'topRight'
                    });
                } else {
                    var param = {
                        name: name,
                        subject: subject,
                        email: email,
                        phone: phone,
                        message: message,
                    }
                    $.ajax({
                        type: "POST",
                        url: "{{ route('landing.email-us') }}",
                        data: {
                            _token: '{{ csrf_token() }}',
                            isi: param,
                        },
                        dataType: "JSON",
                        success: function(response) {
                            Swal.fire(
                                'Email Terkirim!',
                                'Mohon tunggu balasan dari kami di email anda!',
                                'success'
                            )
                        }
                    });
                }


            });
        });

    </script>
@endsection
