
<section id="services" class="py-5">
    <div class="container servidesFullAre">
        <div class="row">
            <div class="col-md-12">
                <div class="servicesHeader pt-5">
                    <h1>Services Section</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias debitis delectus deleniti dignissimos dolores earum, id ipsam neque quisquam voluptates. Accusamus cumque impedit magni necessitatibus rem tempore tenetur voluptatibus? Ad architecto consequatur dignissimos doloremque et hic illo</p>
                </div>
            </div>
            <div class="row servicesContent">

                @foreach($services as $service)
                    <div class="col-md-4">
                        <div class="card" style="margin-bottom: 15px;">
                            <div class="servicesImgbox">
                                <img class="card-img" src="{{asset('storage/uploads/services/'.$service->image)}}"
                                     alt="{{$service->slug}}"
                                >
                            </div>
                            <div class="card-body text-center">
                                <h3>{{$service->title}}</h3>
                                <p>{{Str::limit($service->body,30)}}</p>
                                <a href="{{route('frontend.service',$service->slug)}}">{{$service->btn}}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
{{--                <div class="col-md-4">--}}
{{--                    <div class="card">--}}
{{--                        <div class="servicesImgbox">--}}
{{--                            <img class="card-img" src="{{asset('/')}}assets/frontend/image/s1.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="card-body text-center">--}}
{{--                            <h3>Web Design</h3>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam mollitia tenetur totam.</p>--}}
{{--                            <a href="">View Service</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="card">--}}
{{--                        <div class="servicesImgbox">--}}
{{--                            <img class="card-img" src="{{asset('/')}}assets/frontend/image/s1.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="card-body text-center">--}}
{{--                            <h3>Web Design</h3>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam mollitia tenetur totam.</p>--}}
{{--                            <a href="">View Service</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4 my-4">--}}
{{--                    <div class="card">--}}
{{--                        <div class="servicesImgbox">--}}
{{--                            <img class="card-img" src="{{asset('/')}}assets/frontend/image/s1.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="card-body text-center">--}}
{{--                            <h3>Web Design</h3>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam mollitia tenetur totam.</p>--}}
{{--                            <a href="">View Service</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4 my-4">--}}
{{--                    <div class="card">--}}
{{--                        <div class="servicesImgbox">--}}
{{--                            <img class="card-img" src="{{asset('/')}}assets/frontend/image/s1.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="card-body text-center">--}}
{{--                            <h3>Web Design</h3>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam mollitia tenetur totam.</p>--}}
{{--                            <a href="">View Service</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4 my-4">--}}
{{--                    <div class="card">--}}
{{--                        <div class="servicesImgbox">--}}
{{--                            <img class="card-img" src="{{asset('/')}}assets/frontend/image/s1.jpg" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="card-body text-center">--}}
{{--                            <h3>Web Design</h3>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam mollitia tenetur totam.</p>--}}
{{--                            <a href="">View Service</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</section>
