<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!---- favicon -->
    <link rel="shortcut icon" href="{{asset('assets/front-end-image/save-the-world-logo.png')}}" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}" />
    <!-- owl.theme.default css -->
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}" />
    <!-- fontawesome.all.min.css css -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.all.min.css')}}" />
      <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/fontawesome/css/fontawesome.min.css')}}"  media="print" onload="this.media='all'"/>
  <link rel="stylesheet" href="{{asset('assets/fontawesome/css/brands.css')}}"  media="print" onload="this.media='all'"/>
  <link rel="stylesheet" href="{{asset('assets/fontawesome/css/solid.css')}}"  media="print" onload="this.media='all'"/>
    <!--website full style-->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    
  </head>
  <body>

    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
   <!-- Option 1: Bootstrap Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
   <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
 
     <script>
     /*===========================================
             home_top Banner Slider
 =============================================*/
 $(".home_top_slider_box").owlCarousel({
         animateOut: "fadeOut",
         animateIn: "fadeIn",
         loop: true,
         margin: 0,
         dots:false,
         nav: true,
         singleItem: true,
         smartSpeed: 500,
         autoplay: false,
         autoplayTimeout: 6000,
         navText: [
           '<span class="fas fa-angle-left"></span>',
           '<span class="fas fa-angle-right"></span>'
         ],
         responsive: {
           0: {
             items: 1
           },
           600: {
             items: 1
           },
           1024: {
             items: 1
           }
         }
       });
 
     
     </script>
   </body>
 </html>