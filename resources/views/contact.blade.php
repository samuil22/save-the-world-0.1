@extends('layouts.master')
@section('title','contact us')
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
                            <h2>contact Us</h2>
                            <h4>Introducing Apple Watch Series 4</h4>
                            <a href="#" class="theme-btn-one bg-dark text-white">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="contact-form">
    <div class="container p-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h4 class="text-center">Contact Form</h4>
                @if(Session::get('message_send'))
                    <div class="alert alert-success">
                        {{Session::get('message_send')}}
                    </div>
                @endif
                <form action="{{route('contact.send')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Name</label>
                      <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">message</label>
                        <textarea class="form-control" name="message" placeholder="Leave a message here" id="message" style="height: 100px"></textarea> 
                      </div>
                    
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection