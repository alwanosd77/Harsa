@extends('landing.layout.template')
@section('title')
    Harsa
@endsection
@section('content')
    <section id="content">
        <div class="content-wrap">
            <div class="heading-block center">
                <h2>Our News</h2>
                <span>Some of the Awesome Projects we've worked on.</span>
            </div>
            <div class="container clearfix">

                <!-- Posts
                                                                                                                            ============================================= -->
                <div id="posts" class="row grid-container gutter-40">

                    @forelse ($blogs as $blog)
                        <div class="entry col-12">
                            <div class="grid-inner row no-gutters">
                                <div class="entry-image col-md-4">
                                    <a href="{{ asset('images/posts/cover/' . $blog->cover) }}" data-lightbox="image"><img
                                            src="{{ asset('images/posts/cover/' . $blog->cover) }}"
                                            alt="Standard Post with Image"></a>
                                </div>
                                <div class="col-md-8 pl-md-4">
                                    <div class="entry-title title-sm">
                                        <h2><a href="{{ route('landing.blog.detail', $blog->slug) }}">{{ $blog->title }}</a>
                                        </h2>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><i class="icon-calendar3"></i> {{ $blog->created_at->format('d M Y') }}</li>
                                            <li><a href="#"><i class="icon-user"></i>admin</a></li>
                                            <li><i class="icon-folder-open"></i> <a
                                                    href="#">{{ $blog->genre->genre_name }}</a>
                                            </li>
                                            <li><i class="icon-globe"></i> {{ $blog->tags }}</li>
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        <a href="{{ route('landing.blog.detail', $blog->slug) }}" class="more-link">Read
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty

                    @endforelse





                </div><!-- #posts end -->

                <!-- Pager
                                                                                                                            ============================================= -->
                <div class="d-flex justify-content-between mt-5">
                    <a href="#" class="btn btn-outline-secondary">&larr; Older</a>
                    <a href="#" class="btn btn-outline-dark">Newer &rarr;</a>
                </div>
                <!-- .pager end -->

            </div>
        </div>
    </section>

@endsection
