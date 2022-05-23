@extends('backend.master')
@push('css')

@endpush
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Service service Form</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('backend.home')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    View Services service
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
                <div class="col-md-4">
                    @if($service->image)
                        <img class="img-fluid" src="{{asset('uploads/services/'.$service->image)}}" alt="{{$service->slug}}">
                    @else
                        <img style="width: 80px;height: 50px;" src="{{asset('assets/backend/loader.gif')}}" alt="{{$service->slug}}">
                    @endif



                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <a class="btn btn-danger btn-sm" href="{{route('backend.services.index')}}">Go Back</a>
                            <a class="btn btn-warning btn-sm" href="{{route('backend.services.edit',$service->id)}}">Edit Now</a>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <tr>
                                    <th>Title</th>
                                    <td>{{$service->title}}</td>
                                </tr>
                                <tr>
                                    <th>Create By</th>
                                    <td>{{$service->user->name}}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>
                                        @if($service->status == 1)
                                            <a class="badge rounded-pill bg-success" href="">Published</a>
                                        @else
                                            <a class="badge rounded-pill bg-danger" href="">Unpublished</a>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Created At</th>
                                    <td>{{$service->created_at->diffForHumans()}}</td>
                                </tr>
                                <tr>
                                    <th>Updated At</th>
                                    <td>{{$service->updated_at->diffForHumans()}}</td>
                                </tr>
                                <tr>
                                    <th>Updated At</th>
                                    <td>{!! $service->body !!}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')



@endpush
