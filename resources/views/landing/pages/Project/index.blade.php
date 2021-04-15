@extends('landing.layout.template')
@section('title')
    Harsa
@endsection
@section('content')
    <section id="content">
        <div class="content-wrap">
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






        </div>
    </section>
@endsection
