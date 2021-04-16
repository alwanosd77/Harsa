@extends('landing.layout.template')
@section('title')
    Harsa
@endsection
@section('content')
    <section id="content">

        <div class="content-wrap">
            <div class="heading-block center">
                <h2>Our Teams</h2>
                <span>Introducing our greatest Teammate.</span>
            </div>
            <div class="container clearfix">

                <div class="row col-mb-50 mb-0">
                    @forelse ($teams as $team)
                        <div class="col-lg-6">

                            <div class="team team-list row align-items-center">
                                <div class="team-image col-sm-6">
                                    <img src="{{ 'images/employee/cover/' . $team->cover }}" alt="John Doe">
                                </div>
                                <div class="team-desc col-sm-6">
                                    <div class="team-title">
                                        <h4>{{ $team->name }}</h4><span>{{ $team->position }}</span>
                                    </div>
                                    <div class="team-content">
                                        {!! $team->caption !!}
                                    </div>

                                </div>
                            </div>

                        </div>
                    @empty

                    @endforelse





                </div>

            </div>
        </div>
    </section>
@endsection
