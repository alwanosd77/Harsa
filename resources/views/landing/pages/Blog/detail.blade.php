@extends('landing.layout.template')
@section('title')
    Harsa
@endsection
@section('content')
    <section id="page-title">

        <div class="container clearfix">
            <h1>{{ $blog->title }}</h1>
            <div id="portfolio-navigation">
                <a href="{{ route('landing.blog') }}"><i class="icon-line-grid"></i></a>
            </div>
        </div>



    </section>

    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">

                <div class="single-post mb-0">

                    <!-- Single Post
                                                                                        ============================================= -->
                    <div class="entry clearfix">

                        <!-- Entry Title
                                                                                            ============================================= -->
                        <div class="entry-title">
                            <h2>{{ $blog->title }}</h2>
                        </div><!-- .entry-title end -->

                        <!-- Entry Meta
                                                                                            ============================================= -->
                        <div class="entry-meta">
                            <ul>
                                <li><i class="icon-calendar3"></i> {{ $blog->created_at->format('d M Y') }}</li>
                                <li><a href="#"><i class="icon-user"></i>admin</a></li>
                                <li><i class="icon-folder-open"></i> <a href="#">{{ $blog->genre->genre_name }}</a>
                                </li>
                                <li><i class="icon-globe"></i> {{ $blog->tags }}</li>
                            </ul>
                        </div><!-- .entry-meta end -->

                        <!-- Entry Image
                                                                                            ============================================= -->
                        <div class="entry-image bottommargin">
                            <a href="#"><img src="{{ asset('images/posts/cover/' . $blog->cover) }}"
                                    alt="Blog Single"></a>
                        </div><!-- .entry-image end -->

                        <!-- Entry Content
                                                                                            ============================================= -->
                        <div class="entry-content mt-0">
                            {!! $blog->content !!}
                            <!-- Post Single - Content End -->

                            <!-- Tag Cloud
                                                                                                ============================================= -->
                            <div class="tagcloud clearfix bottommargin">
                                @foreach (explode(',', $blog->tags) as $tag)
                                    <a href="#">{{ $tag }}</a>
                                @endforeach

                            </div><!-- .tagcloud end -->

                            <div class="clear"></div>

                            <!-- Post Single - Share
                                                                                                ============================================= -->
                            <div class="si-share border-0 d-flex justify-content-between align-items-center">
                                <span>Share this Post:</span>
                                <div>
                                    <a href="#" class="social-icon si-borderless si-facebook">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-twitter">
                                        <i class="icon-twitter"></i>
                                        <i class="icon-twitter"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-email3">
                                        <i class="icon-email3"></i>
                                        <i class="icon-email3"></i>
                                    </a>
                                </div>
                            </div><!-- Post Single - Share End -->

                        </div>
                    </div><!-- .entry end -->

                    <!-- Post Navigation
                                                                                        ============================================= -->
                    <div class="row justify-content-between col-mb-30 post-navigation">
                        <div class="col-12 col-md-auto text-center">
                            <a href="#">&lArr; This is a Standard post with a Slider Gallery</a>
                        </div>

                        <div class="col-12 col-md-auto text-center">
                            <a href="#">This is an Embedded Audio Post &rArr;</a>
                        </div>
                    </div><!-- .post-navigation end -->

                    <div class="line"></div>

                    <!-- Post Author Info
                                                                                        ============================================= -->

                    <h4>Related Posts:</h4>

                    <div class="related-posts row posts-md col-mb-30">

                        <div class="entry col-12 col-md-6">
                            <div class="grid-inner row align-items-center gutter-20">
                                <div class="col-4 col-xl-5">
                                    <div class="entry-image">
                                        <a href="#"><img src="images/blog/small/10.jpg" alt="Blog Single"></a>
                                    </div>
                                </div>
                                <div class="col-8 col-xl-7">
                                    <div class="entry-title title-xs nott">
                                        <h3><a href="#">This is an Image Post</a></h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><i class="icon-calendar3"></i> 10th July 2021</li>
                                            <li><a href="#"><i class="icon-comments"></i> 12</a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-content d-none d-xl-block">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Mollitia nisi perferendis.</div>
                                </div>
                            </div>
                        </div>

                        <div class="entry col-12 col-md-6">
                            <div class="grid-inner row align-items-center gutter-20">
                                <div class="col-4 col-xl-5">
                                    <div class="entry-image">
                                        <a href="#"><img src="images/blog/small/20.jpg" alt="Blog Single"></a>
                                    </div>
                                </div>
                                <div class="col-8 col-xl-7">
                                    <div class="entry-title title-xs nott">
                                        <h3><a href="#">This is a Video Post</a></h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><i class="icon-calendar3"></i> 24th July 2021</li>
                                            <li><a href="#"><i class="icon-comments"></i> 16</a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-content d-none d-xl-block">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Mollitia nisi perferendis.</div>
                                </div>
                            </div>
                        </div>

                        <div class="entry col-12 col-md-6">
                            <div class="grid-inner row align-items-center gutter-20">
                                <div class="col-4 col-xl-5">
                                    <div class="entry-image">
                                        <a href="#"><img src="images/blog/small/21.jpg" alt="Blog Single"></a>
                                    </div>
                                </div>
                                <div class="col-8 col-xl-7">
                                    <div class="entry-title title-xs nott">
                                        <h3><a href="#">This is a Gallery Post</a></h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><i class="icon-calendar3"></i> 8th Aug 2021</li>
                                            <li><a href="#"><i class="icon-comments"></i> 8</a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-content d-none d-xl-block">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Mollitia nisi perferendis.</div>
                                </div>
                            </div>
                        </div>

                        <div class="entry col-12 col-md-6">
                            <div class="grid-inner row align-items-center gutter-20">
                                <div class="col-4 col-xl-5">
                                    <div class="entry-image">
                                        <a href="#"><img src="images/blog/small/22.jpg" alt="Blog Single"></a>
                                    </div>
                                </div>
                                <div class="col-8 col-xl-7">
                                    <div class="entry-title title-xs nott">
                                        <h3><a href="#">This is an Audio Post</a></h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><i class="icon-calendar3"></i> 22nd Aug 2021</li>
                                            <li><a href="#"><i class="icon-comments"></i> 21</a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-content d-none d-xl-block">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Mollitia nisi perferendis.</div>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>

            </div>
        </div>
    </section>

@endsection
