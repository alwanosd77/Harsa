@extends('admin.layout.template')
@section('css')

    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs4/dt-1.10.23/b-1.6.5/r-2.2.7/sp-1.2.2/sl-1.3.1/datatables.min.css" />



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
                                @if (Session::has('post_success'))
                                    <div class="alert alert-success alert-dismissible show fade">
                                        <div class="alert-body">
                                            <button class="close" data-dismiss="alert">
                                                <span>&times;</span>
                                            </button>
                                            {{ Session::get('post_success') }}
                                        </div>
                                    </div>
                                @endif
                                <div class="table-responsive">
                                    <table class="table table-striped" id="table-2">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    #
                                                </th>
                                                <th>Cover</th>
                                                <th>Judul</th>
                                                <th>Teks Pendek</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($about as $item)
                                                <tr id="{{ $item->id }}">
                                                    <td class="align-middle">
                                                        {{ $loop->index + 1 }}
                                                    </td>
                                                    <td class="align-middle">
                                                        <img src="{{ asset('images/' . $backUrl . '/cover/' . $item->cover) }}"
                                                            alt="" class="img-fluid" style="max-width:200px;">
                                                    </td>
                                                    <td class="align-middle">
                                                        {{ $item->title }}
                                                    </td>
                                                    <td class="align-middle">
                                                        {{ $item->shortText }}
                                                    </td>


                                                    <td class="align-middle">
                                                        <a href="{{ route($backUrl . '.edit', $item->slug) }}"
                                                            class="btn btn-primary">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-danger delete">
                                                            <i class="fas fa-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
    <script type="text/javascript"
        src="https://cdn.datatables.net/v/bs4/dt-1.10.23/b-1.6.5/r-2.2.7/sp-1.2.2/sl-1.3.1/datatables.min.js"></script>
    <script src="{{ asset('stisla-master/assets/js/page/modules-datatables.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        $(document).ready(function() {
            $(".delete").click(function() {
                var backUrl = '{{ $backUrl }}';
                var id = $(this).parents("tr").attr("id");
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
