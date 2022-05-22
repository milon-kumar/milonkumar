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
                    <h4 class="page-title">Gallery Photo Form</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('backend.home')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Add Gallery Photo
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
                    @if($photo->image)
                        <img class="img-fluid" src="{{asset('uploads/gallery/'.$photo->image)}}" alt="">
                    @endif

                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <table class="table">
                                <tr>
                                    <th>Title</th>
                                    <td>{{$photo->title}}</td>
                                </tr>
                                <tr>
                                    <th>Photo Category</th>
                                    <td>
                                        @if($photo->cat_status == "out")
                                            <span class="badge rounded-pill bg-secondary">Outdor</span>
                                        @elseif($photo->cat_status === 'fam')
                                            <span class="badge rounded-pill bg-success">Family</span>
                                        @elseif($photo->cat_status === 'col')
                                            <span class="badge rounded-pill bg-danger">Collage</span>
                                        @else
                                            <span class="badge rounded-pill bg-warning">Others</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>
                                        @if($photo->status == 1)
                                            <a class="badge rounded-pill bg-success" href="">Published</a>
                                        @else
                                            <a class="badge rounded-pill bg-danger" href="">Unpublished</a>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Created At</th>
                                    <td>{{$photo->created_at->diffForHumans()}}</td>
                                </tr>
                                <tr>
                                    <th>Updated At</th>
                                    <td>{{$photo->updated_at->diffForHumans()}}</td>
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
