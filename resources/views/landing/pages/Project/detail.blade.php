@extends('landing.layout.template')
@section('title')
    Harsa
@endsection
@section('content')
    <section id="page-title">

        <div class="container clearfix">
            <h1>{{ $project->name }}</h1>
            <div id="portfolio-navigation">
                <a href="{{ route('landing.project') }}"><i class="icon-line-grid"></i></a>
            </div>
        </div>

    </section>
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">

                <div class="row">


                    <div class="col-lg-8 portfolio-single-image">
                        <a href="#"><img src="{{ asset('images/project/cover/' . $project->cover) }}" alt="Image"></a>
                    </div><!-- .portfolio-single-image end -->


                    <div class="col-lg-4 portfolio-single-content">


                        <div class="fancy-title title-bottom-border">
                            <h2>Project Info:</h2>
                        </div>
                        {!! $project->description !!}

                        <div class="line"></div>


                        <ul class="portfolio-meta bottommargin">
                            <li>
                                <span>
                                    <i class="icon-user"></i>
                                    Created by:
                                </span>
                                {{ $project->employee->name }}
                            </li>
                            <li>
                                <span>
                                    <i class="icon-calendar3"></i>
                                    Completed on:
                                </span>
                                {{ $project->completed_at->format('d M Y') }}
                            </li>
                            <li>
                                <span>
                                    <i class="icon-link"></i>
                                    Client:
                                </span>
                                <a href="{{ $project->partner->url }}">{{ $project->partner->name }}</a>
                            </li>
                        </ul>


                        <!-- Portfolio Single - Share End -->

                    </div><!-- .portfolio-single-content end -->

                </div>

                <div class="divider divider-center"><i class="icon-circle"></i></div>
                <h4>Related Projects:</h4>

                <div id="related-portfolio" class="owl-carousel portfolio-carousel carousel-widget" data-margin="20"
                    data-pagi="false" data-autoplay="5000" data-items-xs="1" data-items-sm="2" data-items-md="3"
                    data-items-lg="4">

                    @forelse ($projects as $item)
                        <div class="oc-item">
                            <div class="portfolio-item">
                                <div class="portfolio-image">
                                    <a href="{{ route('landing.project.detail', $item->slug) }}">
                                        <img src="{{ asset('images/project/cover/' . $item->cover) }}" alt="Open Imagination">
                                    </a>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="350">
                                            <a href="{{ asset('images/project/cover/' . $item->cover) }}"
                                                class="overlay-trigger-icon bg-light text-dark"
                                                data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeInUpSmall"
                                                data-hover-speed="350" data-lightbox="image"><i
                                                    class="icon-line-stack-2"></i></a>
                                            <a href="{{ route('landing.project.detail', $item->slug) }}"
                                                class="overlay-trigger-icon bg-light text-dark"
                                                data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeInUpSmall"
                                                data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="350">
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="{{ route('landing.project.detail', $item->slug) }}">{{ $item->name }}</a>
                                    </h3>

                                </div>
                            </div>
                        </div>
                    @empty

                    @endforelse



                </div><!-- .portfolio-carousel end -->

            </div>
        </div>
    </section>
@endsection
