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
                    <h4 class="page-title">Services Form</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('backend.home')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Edit Services
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
                <div class="col-md-8 offset-2">
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            <h4 class="card-title d-inline">Services Info</h4>
                            <a class="btn btn-danger btn-sm float-end" href="{{route('backend.services.index')}}"><i class="fa fa-backward">&nbsp;&nbsp;&nbsp;</i>Back</a>
                        </div>
                        <form action="{{route('backend.services.update',$service->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            @method('put')
                            <div class="card-body">
                                <div class="form-group row">
                                    <label
                                        for="fname"
                                        class="col-sm-3 text-end control-label col-form-label"
                                    >Title</label
                                    >
                                    <div class="col-sm-9">
                                        <input
                                            type="text"
                                            class="form-control @error('title') is-invalid @enderror"
                                            name="title"
                                            id="fname"
                                            value="{{$service->title}}"
                                            placeholder="Image Title"
                                        />
                                        @error('title')
                                        <small class="text-danger"> {{$message}} </small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label
                                        for="fname"
                                        class="col-sm-3 text-end control-label col-form-label"
                                    >Button Name</label
                                    >
                                    <div class="col-sm-9">
                                        <input
                                            type="text"
                                            class="form-control @error('btn') is-invalid @enderror"
                                            name="btn"
                                            id="fname"
                                            placeholder="Image Title"
                                            value="{{$service->btn ?? "View Details"}}"
                                        />
                                        @error('btn')
                                        <small class="text-danger"> {{$message}} </small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label
                                        for="fname"
                                        class="col-sm-3 text-end control-label col-form-label"
                                    >Upload Image </label
                                    >
                                    <div class="col-sm-9">
                                        <input
                                            type="file"
                                            name="image"
                                            class="custom-file-input @error('image')is-invalid @enderror"
                                            id="fname"
                                            placeholder="Image Title"
                                        />
                                        <img style="width: 80px;height: 50px;" src="{{asset('/uploads/services/'.$service->image)}}" alt="">
                                        @error('image')
                                        <small class="text-danger"> {{$message}} </small>
                                        @enderror
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label
                                        for="lname"
                                        class="col-sm-3 text-end control-label col-form-label"
                                    >Status</label
                                    >

                                    <div class="col-sm-9">
                                        <select name="status" id="" class="select2 form-select shadow-none @error('status') is-invalid @enderror">
                                            <option value="">~~~Select Status~~~</option>
                                            <option {{$service->status === 1 ? 'selected' : ''}} value="1">Published</option>
                                            <option {{$service->status === 0 ? 'selected' : ''}} value="0">Unpublished</option>
                                        </select>
                                        @error('status')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label
                                        for="cono1"
                                        class="col-sm-3 text-end control-label col-form-label"
                                    >Description</label
                                    >
                                    <div class="col-sm-9">
                                        <textarea name="body" class="form-control @error('body') is-invalid @enderror">
                                            {!! $service->body !!}
                                        </textarea>
                                        @error('body')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')

@endpush
