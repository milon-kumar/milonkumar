@extends('frontend.master')

@section('content')

    <div id="hero">
        @include('frontend.includes.elipesone')
        @include('frontend.includes.herosection')
    </div>


    @include('frontend.includes.aboutSection')
    @include('frontend.includes.services')
    @include('frontend.includes.addBanner')

    @include('frontend.includes.workSection')

    @include('frontend.includes.counter')

    @include('frontend.includes.testimonial')
@endsection
