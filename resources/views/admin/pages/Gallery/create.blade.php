@extends('admin.layout.template')
@section('title')
    POST
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('stisla-master/modules/dropzonejs/dropzone.css') }}">
@endsection




@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <div class="section-header-back">
                    <a href="{{ route($backUrl) }}" class="btn btn-icon">
                        <i class="fas fa-arrow-left"></i>
                    </a>
                </div>
                <h1>Create New {{ $backUrl }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route($backUrl) }}">{{ $backUrl }}</a></div>
                    <div class="breadcrumb-item">Create New {{ $backUrl }}</div>
                </div>
            </div>

            <div class="section-body">


                <div class="card">
                    <div class="card-header">
                        <h4>
                            Upload Gambar
                        </h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('Gallery.save') }}" class="dropzone dz-clickable" id="upload-gallery"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
                        </form>
                    </div>

                </div>


            </div>
        </section>
    </div>
@endsection
@section('script')
    <script src="{{ asset('stisla-master/modules/dropzonejs/min/dropzone.min.js') }}"></script>
    <script>
        Dropzone.autoDiscover = false;
        $("#upload-gallery").dropzone({
            url: "{{ route('Gallery.save') }}",
            maxFilesize: 2, // MB

        });

    </script>
@endsection
