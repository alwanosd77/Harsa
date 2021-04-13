@extends('admin.layout.template')
@section('title')
    {{ $backUrl }} EDIT
@endsection
@section('css')
@endsection




@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <div class="section-header-back">
                    <a href="{{ route($backUrl) }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
                </div>
                <h1>Edit {{ $backUrl }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route($backUrl) }}">{{ $backUrl }}</a></div>
                    <div class="breadcrumb-item">Edit {{ $backUrl }}</div>
                </div>
            </div>

            <div class="section-body">

                <div class="card">
                    <div class="card-header">
                        <h4>Edit {{ $backUrl }}</h4>
                    </div>
                    <div class="card-body">

                        <form method="post" action="{{ route($backUrl . '.update', $slider->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                    {{-- title --}}
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group mb-4">
                                                <label class="form-label text-md-left ">Judul</label>
                                                <input type="text" class="form-control" name="title"
                                                    value="{{ $slider->title }}">
                                                @error('title')
                                                    <span class=" text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    {{-- title --}}
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group mb-4">
                                                <label class="form-label text-md-left ">Sub Judul</label>
                                                <input type="text" class="form-control" name="subtitle"
                                                    value="{{ $slider->subtitle }}">
                                                @error('subtitle')
                                                    <span class=" text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>




                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">

                                    {{-- cover --}}
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group mb-4">
                                                <label class="form-label text-md-left ">Cover</label>
                                                <div class="">

                                                    <input type="file" name="cover" placeholder="Choose image" id="image">

                                                </div>
                                                @error('cover')
                                                    <span class=" text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <img id="preview-image-before-upload"
                                                src="{{ asset('images/slider/cover/' . $slider->cover) }}"
                                                alt="preview image" style="max-height: 250px;" class="img-fluid">
                                        </div>
                                    </div>

                                </div>
                            </div>

                    </div>
                    <div class="card-footer">
                        <div class="form-group mb-4">
                            <label class="form-label text-md-left "></label>
                            <div class="">
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>


            </div>
        </section>
    </div>
@endsection
@section('script')
    <script src="{{ asset('stisla-master\assets\js\upload\jquery.uploadPreview.min.js') }}"></script>
    <script src="{{ asset('stisla-master/assets/js/page/features-post-create.js') }}"></script>
    <script>
        $(document).ready(function(e) {
            $('#image').change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#preview-image-before-upload').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });
        });

    </script>
@endsection
