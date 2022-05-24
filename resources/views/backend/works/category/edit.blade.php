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
                    <h4 class="page-title">categories Form</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('backend.home')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Edit categories
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
                            <h4 class="card-title d-inline">categories Info</h4>
                            <a class="btn btn-danger btn-sm float-end" href="{{route('backend.categories.index')}}"><i class="fa fa-backward">&nbsp;&nbsp;&nbsp;</i>Back</a>
                        </div>
                        <form action="{{route('backend.categories.update',$category->id)}}" method="post" class="form-horizontal">
                            @csrf
                            @method('put')
                            <div class="card-body">
                                <div class="form-group row">
                                    <label
                                        for="fname"
                                        class="col-sm-3 text-end control-label col-form-label"
                                    >Name</label
                                    >
                                    <div class="col-sm-9">
                                        <input
                                            type="text"
                                            class="form-control @error('name') is-invalid @enderror"
                                            name="name"
                                            id="fname"
                                            placeholder="Input name"
                                            value="{{$category->name}}"
                                        />
                                        @error('name')
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
                                            <option {{$category->status === 1 ? 'selected' : ''}} value="1">Published</option>
                                            <option {{$category->status === 0 ? 'selected' : ''}} value="0">Unpublished</option>
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
                                            {{$category->body}}
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
