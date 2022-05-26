@extends('frontend.master')

@push('css')
    <link href="{{asset('/')}}assets/backend/lightbox.css" rel="stylesheet" />
@endpush

@section('content')
    <section id="gallery-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h1>Welcome To Our Gallery Section</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus et inventore ipsa iusto laborum quasi rerum sunt voluptas? Aliquam blanditiis distinctio, eligendi est magnam mollitia repellat? Aut et ullam veritatis.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery-content" class="py-5">
        <div class="container gallery-content-bg outdorBG">
            <div class="card border-0 outdorBG">
                <div class="card-header outdoorPhoto">
                    <h3>Outdoor Photo</h3>
                </div>

                <div class="card-body">

                    <div class="row mx-auto">
                        @foreach($out as $key => $val)
                            <div class="col-md-3">
                                <div class="card">
                                    <a class="yBox" data-ybox-group="group1" href="{{asset('/uploads/gallery/'. $val->image)}}">
                                        <img style="width: 100%;height: 300px;" class="img-fluid" src="{{ asset('/uploads/gallery/'. $val->image) }}" alt="">
                                        <div class="card-boyd card-img-overlay ">
                                            <div class="gallery-con-overlay">
                                                <h6>Image title</h6>
                                                <small><i class="fa fa-camera"></i> click by jugol kumar in 5 jun 2022</small>
                                            </div>

                                            <div class="sosalite">
                                                <a class="btn btn-light" href=""><i class="fa fa-eye"></i>2100</a>
                                                <a class="btn btn-light" href=""><i class="fa fa-heart-o"></i>100</a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="card-footer">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination pagination-circle pg-blue">
                            {{$out->links()}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>


    <section id="collage-gallery" class="py-5">
        <div class="container gallery-content-bg outdorBG" >
            <div class="card border-0 outdorBG">
                <div class="card-header collage-gallery">
                    <h3>Collage Gallery Photo</h3>
                </div>
                <div class="card-body">
                    <div class="row mx-auto">
                        @foreach($col as $key => $val)
                        <div class="col-md-3">
                            <div class="card">
                                <a class="yBox" data-ybox-group="group1" href="{{asset('/uploads/gallery/'. $val->image)}}">
                                    <img style="width: 100%;height: 300px;" class="img-fluid" src="{{ asset('/uploads/gallery/'. $val->image) }}" alt="">
                                    <div class="card-boyd card-img-overlay ">
                                        <div class="gallery-con-overlay">
                                            <h6>Image title</h6>
                                            <small><i class="fa fa-camera"></i> click by jugol kumar in 5 jun 2022</small>
                                        </div>

                                        <div class="sosalite">
                                            <a class="btn btn-light" href=""><i class="fa fa-eye"></i>2100</a>
                                            <a class="btn btn-light" href=""><i class="fa fa-heart-o"></i>100</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="card-footer">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination pagination-circle pg-blue">
                            {{$col->links()}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section id="family-photo" class="py-5">
        <div class="container gallery-content-bg outdorBG">
            <div class="card border-0 outdorBG">
                <div class="card-header family-gallery">
                    <h3>Family Photo</h3>
                </div>
                <div class="card-body">
                    <div class="row mx-auto">
                        @foreach($fam as $key => $val)
                            <div class="col-md-3">
                                <div class="card">
                                    <a class="yBox" data-ybox-group="group1" href="{{asset('/uploads/gallery/'. $val->image)}}">
                                        <img style="width: 100%;height: 300px;" class="img-fluid" src="{{ asset('/uploads/gallery/'. $val->image) }}" alt="">
                                        <div class="card-boyd card-img-overlay ">
                                            <div class="gallery-con-overlay">
                                                <h6>Image title</h6>
                                                <small><i class="fa fa-camera"></i> click by jugol kumar in 5 jun 2022</small>
                                            </div>

                                            <div class="sosalite">
                                                <a class="btn btn-light" href=""><i class="fa fa-eye"></i>2100</a>
                                                <a class="btn btn-light" href=""><i class="fa fa-heart-o"></i>100</a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="card-footer">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination pagination-circle pg-blue">
                            {{$fam->links()}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection


@push('js')
    <script src="{{asset('/')}}assets/backend/lightbox.js"></script>
@endpush
