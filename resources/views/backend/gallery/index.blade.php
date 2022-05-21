@extends('backend.master')
@push('css')
    <link
        href="{{asset('/')}}assets/backend/libs/datatables.net-bs4/css/dataTables.bootstrap4.css"
        rel="stylesheet"
    />
@endpush
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">All Gallery Items</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('backend.home')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Gallery
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Basic Datatable</h5>
                            <div class="table-responsive">
                                <table
                                    id="zero_config"
                                    class="table table-striped table-bordered"
                                >
                                    <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($galleries as $key => $photo)
                                        <tr>
                                            <td>{{$key +1 }}</td>
                                            <td>{{$photo->title}}</td>
                                            <td>
                                                @if($photo->image)
                                                    <img style="width: 80px;height: 50px;" src="{{$photo->image}}" alt="{{$photo->slug}}">
                                                @else
                                                    <img src="{{asset('assets/backend/loader.gif')}}" alt="{{$photo->slug}}">
                                                @endif
                                            </td>
                                            <td>
                                                @if($photo->cat_status == "out")
                                                    <span class="badge badge-success">Outdor</span>
                                                @elseif($photo->cat_status === 'fam')
                                                    <span class="badge badge-primary">Family</span>
                                                @elseif($photo->cat_status === 'col')
                                                    <span class="badge badge-info">Collage</span>
                                                @else
                                                    <span class="badge badge-warning">Others</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($photo->status === 1)
                                                    <a href="">
                                                        <span class="badge badge-cyan">Published</span>
                                                    </a>
                                                @else
                                                    <a href="">
                                                        <span class="badge badge-cyan">Unpublished</span>
                                                    </a>
                                                @endif
                                            </td>
                                            <td>
                                                <a class="btn btn-success" href=""><i class="fa fa-eye"></i></a>
                                                <a class="btn btn-warning" href=""><i class="fa fa-edit"></i></a>
                                                <a class="btn btn-danger" href=""><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')

    <script src="{{asset('/')}}assets/backend/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="{{asset('/')}}assets/backend/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="{{asset('/')}}assets/backend/extra-libs/DataTables/datatables.min.js"></script>
    <script type="text/javascript">
        $("#zero_config").DataTable();
    </script>
@endpush
