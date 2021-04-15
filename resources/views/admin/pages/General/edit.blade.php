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
                <h1>Edit General Information</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Edit {{ $backUrl }}</div>
                </div>
            </div>

            <div class="section-body">

                <div class="card">
                    <div class="card-header">
                        <h4>Edit {{ $backUrl }} Information</h4>
                    </div>
                    <div class="card-body">

                        <form method="post" action="{{ route($backUrl . '.update') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="section-title">Contact</div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label>Phone Number</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            +62
                                                        </div>
                                                    </div>
                                                    <input type="tel" class="form-control phone-number"
                                                        value="{{ $general->phone }}" name="phone">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label>Fax</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            +62
                                                        </div>
                                                    </div>
                                                    <input type="tel" class="form-control phone-number" name="fax"
                                                        value="{{ $general->fax }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label class="form-label text-md-left ">Email</label>
                                                <input type="email" class="form-control" name="email"
                                                    value="{{ $general->email }}">
                                                @error('email')
                                                    <span class=" text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label class="form-label text-md-left ">Gmaps</label>
                                                <input type="url" class="form-control" name="gmaps"
                                                    value="{{ $general->gmaps }}">
                                                @error('gmaps')
                                                    <span class=" text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group mb-4">
                                                <label class="form-label text-md-left">Address</label>
                                                <textarea class="form-control" name="address" style="height: 100%"
                                                    rows="3">{{ $general->address }}</textarea>
                                                @error('address')
                                                    <span class=" text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>

                                    <hr>
                                    <div class="section-title">Social Media</div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label>Whatsapp</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            +62
                                                        </div>
                                                    </div>
                                                    <input type="tel" class="form-control phone-number" name="whatsapp"
                                                        value="{{ $general->whatsapp }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label class="form-label text-md-left ">LinkedIn</label>
                                                <input type="url" class="form-control" name="linkedin"
                                                    value="{{ $general->linkedin }}">
                                                @error('linkedin')
                                                    <span class=" text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label class="form-label text-md-left ">Facebook</label>
                                                <input type="url" class="form-control" name="facebook"
                                                    value="{{ $general->facebook }}">
                                                @error('facebook')
                                                    <span class=" text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label class="form-label text-md-left ">Twitter</label>
                                                <input type="url" class="form-control" name="twitter"
                                                    value="{{ $general->twitter }}">
                                                @error('twitter')
                                                    <span class=" text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label class="form-label text-md-left ">Instagram</label>
                                                <input type="url" class="form-control" name="instagram"
                                                    value="{{ $general->instagram }}">
                                                @error('instagram')
                                                    <span class=" text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label class="form-label text-md-left ">Youtube</label>
                                                <input type="url" class="form-control" name="youtube"
                                                    value="{{ $general->youtube }}">
                                                @error('youtube')
                                                    <span class=" text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-title">Content</div>

                                    <hr>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group mb-4">
                                                <label class="form-label text-md-left">Quote</label>
                                                <textarea class="form-control" name="quote" style="height: 100%"
                                                    rows="3">{{ $general->quote }}</textarea>
                                                @error('quote')
                                                    <span class=" text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
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
