@extends('landing.layout.template')
@section('title')
    Harsa
@endsection
@section('content')
    <section id="content">

        <div class="content-wrap">
            <div class="heading-block center">
                <h2>{{ $about->title }}</h2>
                <span>Introducing our photo activities.</span>
            </div>
            <div class="container clearfix">
                {!! $about->content !!}



            </div>
        </div>
    </section>
@endsection
