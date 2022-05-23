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
                    <h4 class="page-title">All Services Items</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('backend.home')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Services
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
                            <div>
                                <h5 class="card-title d-inline">Services Item</h5>
                                <a class="btn btn-success btn-sm float-end" href="{{route('backend.services.create')}}"><i class="fa fa-plus">&nbsp;&nbsp;&nbsp;</i>Add new</a>
                            </div>
                            <div class="table">
                                <table
                                    id="zero_config"
                                    class="table table-striped table-bordered"
                                >
                                    <thead>
                                    <tr class="">
                                        <th>Sl</th>
                                        <th>Title</th>
                                        <th>Create By</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($services as $key => $service)
                                        <tr>
                                            <td>{{$key +1 }}</td>
                                            <td>{{Str::limit($service->title,10)}}</td>
                                            <td>{{$service->user->name}}</td>
                                            <td>
                                                @if($service->image)
                                                    <img style="width: 80px;height: 50px;" src="{{asset('uploads/services/'.$service->image)}}" alt="{{Str::limit($service->slug,4)}}">
                                                @else
                                                    <img style="width: 80px;height: 50px;" src="{{asset('assets/backend/loader.gif')}}" alt="{{Str::limit($service->slug,4)}}">
                                                @endif
                                            </td>
                                            <td>{!! Str::limit($service->body,10) !!}</td>
                                            <td>
                                                @if($service->status == 1)
                                                    <a href="{{route('backend.services.unpublished',$service->id)}}" class="badge rounded-pill bg-success">Published</a>
                                                @else
                                                    <a href="{{route('backend.services.published',$service->id)}}" id="published" class="badge rounded-pill bg-danger">Unpublished</a>
                                                @endif
                                            </td>
                                            <td>
                                                <a class="btn btn-success" href="{{route('backend.services.show',$service->id)}}"><i class="fa fa-eye"></i></a>
                                                <a class="btn btn-warning" href="{{route('backend.services.edit',$service->id)}}"><i class="fa fa-edit"></i></a>
                                                <a class="btn btn-danger deleteServices" id="{{$service->id}}"><i class="fa fa-trash"></i></a>
                                                <form action="{{route('backend.services.destroy',$service->id)}}" id="delteForm{{$service->id}}" method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>

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

    <script>
        $('.deleteServices').click(function (e) {
            e.preventDefault();
            const id = $(this).attr('id');

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                $('#delteForm'+id).submit();
            })

        });


        $("#zero_config").DataTable();
    </script>
@endpush
