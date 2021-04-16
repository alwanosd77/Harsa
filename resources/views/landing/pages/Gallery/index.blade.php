@extends('landing.layout.template')
@section('title')
    Harsa
@endsection
@section('content')
    <section id="content">

        <div class="content-wrap">
            <div class="heading-block center">
                <h2>Our Gallery</h2>
                <span>Introducing our photo activities.</span>
            </div>
            <div class="container clearfix">
                <div class="masonry-thumbs grid-container grid-3" data-lightbox="gallery">
                    @forelse ($galleries as $gallery)
                        <a class="grid-item" href="{{ asset('images/gallery/' . $gallery->cover) }}"
                            data-lightbox="gallery-item">
                            <img class="lazy"
                                src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 3'%3E%3C/svg%3E"
                                width="800" height="600" data-src="{{ asset('images/gallery/' . $gallery->cover) }}"
                                alt="Gallery Thumb 1">
                        </a>


                    @empty
                    @endforelse
                </div>



            </div>
        </div>
    </section>
@endsection
