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
                    <div class="row mx-auto outdorBG" >
                        @foreach($out as $item)
                            <div class="col-md-3">
                                <img src="{{asset('/uploads/gallery/').$item->photo}}" alt="">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="card-footer">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination pagination-circle pg-blue">
                            <li class="page-item disabled"><a class="page-link">First</a></li>
                            <li class="page-item disabled">
                                <a class="page-link" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link">1</a></li>
                            <li class="page-item"><a class="page-link">2</a></li>
                            <li class="page-item"><a class="page-link">3</a></li>
                            <li class="page-item"><a class="page-link">4</a></li>
                            <li class="page-item"><a class="page-link">5</a></li>
                            <li class="page-item">
                                <a class="page-link" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link">Last</a></li>
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
                        @foreach($fam as $key => $val)
                        <div class="col-md-4">
                            <div class="card">
                                <a class="yBox" data-ybox-group="group1" href="{{asset('/uploads/gallery/'. $val->image)}}">
                                    <img class="img-fluid" src="{{ asset('/uploads/gallery/'. $val->image) }}" alt="">

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
                            <li class="page-item disabled"><a class="page-link">First</a></li>
                            <li class="page-item disabled">
                                <a class="page-link" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link">1</a></li>
                            <li class="page-item"><a class="page-link">2</a></li>
                            <li class="page-item"><a class="page-link">3</a></li>
                            <li class="page-item"><a class="page-link">4</a></li>
                            <li class="page-item"><a class="page-link">5</a></li>
                            <li class="page-item">
                                <a class="page-link" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link">Last</a></li>
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
                        <div class="col-md-4">
                            <div class="card">
                                <a class="yBox" data-ybox-group="group1" href="{{asset('/')}}assets/frontend/image/ux2.jpg">
                                    <img class="img-fluid" src="{{asset('/')}}assets/frontend/image/ux2.jpg" alt="">

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
                        <div class="col-md-4">
                            <div class="card">
                                <a class="yBox" data-ybox-group="group1" href="{{asset('/')}}assets/frontend/image/ux2.jpg">
                                    <img class="img-fluid" src="{{asset('/')}}assets/frontend/image/ux2.jpg" alt="">

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
                        <div class="col-md-4">
                            <div class="card">
                                <a class="yBox" data-ybox-group="group1" href="{{asset('/')}}assets/frontend/image/ux2.jpg">
                                    <img class="img-fluid" src="{{asset('/')}}assets/frontend/image/ux2.jpg" alt="">

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
                    </div>
                </div>
                <div class="card-footer">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination pagination-circle pg-blue">
                            <li class="page-item disabled"><a class="page-link">First</a></li>
                            <li class="page-item disabled">
                                <a class="page-link" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link">1</a></li>
                            <li class="page-item"><a class="page-link">2</a></li>
                            <li class="page-item"><a class="page-link">3</a></li>
                            <li class="page-item"><a class="page-link">4</a></li>
                            <li class="page-item"><a class="page-link">5</a></li>
                            <li class="page-item">
                                <a class="page-link" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link">Last</a></li>
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
