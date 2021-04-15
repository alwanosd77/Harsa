@extends('admin.layout.template')
@section('css')


    <link rel="stylesheet" href="{{ asset('stisla-master/modules/chocolat/dist/css/chocolat.css') }}">

    <style>
        .overlay-gallery {
            position: absolute;
            top: 50%;
            left: 50%;
            background-color: rgba(202, 202, 202, 0.3);
            height: 100%;
            width: 100%;
            opacity: 0;
            transition: .7s ease;
        }

        .ctr {
            position: absolute;
            transform: translate(-50%, -50%);
            text-align: center;
            padding-top: 40%
        }

        .gallery-item:hover .overlay-gallery {
            opacity: 1;
        }

    </style>
@endsection

@section('title')
    {{ $backUrl }}
@endsection
@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{ $backUrl }}</h1>

                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">{{ $backUrl }}</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="section-header-button">
                                    <a href="{{ route($backUrl . '.create') }}" class="btn btn-primary">Tambah</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="gallery">
                                    @forelse ($galleries as $gallery)
                                        <div class="gallery-item"
                                            data-image="{{ asset('images/gallery/' . $gallery->cover) }}" data-title="Image 1"
                                            href="{{ asset('images/gallery/' . $gallery->cover) }}" title="Image 1"
                                            style="background-image: url(&quot;{{ asset('images/gallery/' . $gallery->cover) }}&quot;);width: 150px;height:150px;">
                                            <div class="overlay-gallery ctr">
                                                <a href="{{ asset('images/gallery/' . $gallery->cover) }}"
                                                    class="btn btn-primary look">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="#" class="btn btn-danger delete" data-id="{{ $gallery->id }}">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </div>
                                        </div>

                                    @empty

                                    @endforelse

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('libraryJS')
<script src="{{ asset('stisla-master/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@endsection

@section('script')
<script>
    $(document).ready(function() {
        $(".delete").click(function() {
            var backUrl = '{{ $backUrl }}';
            var id = $(this).data('id');
            swal({
                    title: 'Are you sure?',
                    text: 'Once deleted, you will not be able to recover this post!',
                    icon: 'warning',
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        console.log('id :' + id);
                        $.ajax({
                            type: 'DELETE',
                            url: '/admin/' + backUrl + '/' + id,
                            data: {
                                _token: '{{ csrf_token() }}',
                            },
                            success: function(response) {
                                if (response.success) {
                                    swal({
                                        title: "Deleted!",
                                        text: response.success,
                                        buttonsStyling: false,
                                        confirmButtonClass: "btn btn-success",
                                        icon: "success"
                                    }).then((result) => {
                                        location.reload();
                                    });
                                }
                            }
                        });
                    } else {
                        swal('Data anda tidak jadi dihapus');
                    }
                });

        });
    });

</script>
@endsection
