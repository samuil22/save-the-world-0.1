@extends('layouts.app')
@section('title','about us')
@section('content')
<section id="about_top_banner">
    <div class="about_top_slider_box ">
        <div class="home_top_slider background_bg"
            style="background-image: url('{{asset('assets/front-end-image/banner-04.jpg')}}');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12 col-12">
                        <div class="about_top_slider_content">
                            <h5> </h5>
                            <h2>About Us</h2>
                            <h4>Introducing Apple Watch Series 4</h4>
                            <a href="#" class="theme-btn-one bg-dark text-white">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection