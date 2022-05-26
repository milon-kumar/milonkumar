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

{{--    outdorr--}}
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
                                    <a class="" data-lightbox="image-1" data-title="{{$val->title}}" href="{{asset('storage/uploads/gallery/'. $val->image)}}">
                                        <img style="width: 100%;height: 300px;" class="img-fluid" src="{{ asset('storage/uploads/gallery/'. $val->image) }}" alt="">
                                        <div class="card-boyd card-img-overlay ">
                                            <div class="gallery-con-overlay">
                                                <h6>{{Str::limit($val->title,18)}}</h6>
                                                <small><i class="fa fa-camera"></i> {{Str::limit($val->text,20)}} </small>
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

{{--collage--}}
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
                                <a data-lightbox="image-2" data-title="{{$val->title}}" href="{{asset('storage/uploads/gallery/'. $val->image)}}">
                                    <img style="width: 100%;height: 300px;" class="img-fluid" src="{{ asset('storage/uploads/gallery/'. $val->image) }}" alt="">
                                    <div class="card-boyd card-img-overlay ">
                                        <div class="gallery-con-overlay">
                                            <h6>{{Str::limit($val->title,18)}}</h6>
                                            <small><i class="fa fa-camera"></i> {{Str::limit($val->text,20)}} </small>
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

{{--    familly--}}
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
                                    <a data-lightbox="image-3" data-title="{{$val->title}}" href="{{asset('storage/uploads/gallery/'. $val->image)}}">
                                        <img style="width: 100%;height: 300px;" class="img-fluid" src="{{ asset('storage/uploads/gallery/'. $val->image) }}" alt="">
                                        <div class="card-boyd card-img-overlay ">
                                            <div class="gallery-con-overlay">
                                                <h6>{{Str::limit($val->title,18)}}</h6>
                                                <small><i class="fa fa-camera"></i> {{Str::limit($val->text,20)}} </small>
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

{{--    others--}}
    <section id="family-photo" class="py-5">
        <div class="container gallery-content-bg outdorBG">
            <div class="card border-0 outdorBG">
                <div class="card-header family-gallery">
                    <h3>Others Photo</h3>
                </div>
                <div class="card-body">
                    <div class="row mx-auto">
                        @foreach($tra as $key => $val)
                            <div class="col-md-3">
                                <div class="card">
                                    <a data-lightbox="image-3" data-title="{{$val->title}}" href="{{asset('storage/uploads/gallery/'. $val->image)}}">
                                        <img style="width: 100%;height: 300px;" class="img-fluid" src="{{ asset('storage/uploads/gallery/'. $val->image) }}" alt="">
                                        <div class="card-boyd card-img-overlay ">
                                            <div class="gallery-con-overlay">
                                                <h6>{{Str::limit($val->title,18)}}</h6>
                                                <small><i class="fa fa-camera"></i> {{Str::limit($val->text,20)}} </small>
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

    <script>
        lightbox.option({
            'resizeDuration':500,
            'wrapAround': true
        })
    </script>

@endpush
