@extends('layouts.master')
@section('title','email view')
@section('content')
{{-- this is an email template , bootstrap doesn't work here --}}
        <section id="about_top_banner">
            <div class="about_top_slider_box ">
                <div class="home_top_slider background_bg"
                    style="background-image: url('{{asset('assets/front-end-image/banner-04.jpg')}}');">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-12 col-12">
                                <div class="about_top_slider_content">
                                    <h5> </h5>
                                    <h2>contact view</h2> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <h1>contact message</h1>
                        <p>Name: {{$details['name']}}</p>
                        <p>Email: {{$details['email']}}</p>
                        <p>Phone: {{$details['phone']}}</p>
                        <p>Message: {{$details['message']}}</p>
                    </div>
                </div>
            </div>
        </section>
@endsection