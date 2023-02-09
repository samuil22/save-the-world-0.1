{{-- not need this file , this is a demo in past , just for watching --}}
@extends('layouts.app')
@section('title','sav')
@section('content')

   <!-- banner slider Arae -->
   <section id="home_top_banner">
    <div class="home_top_slider_box owl-theme owl-carousel">
        <div class="home_top_slider background_bg"
            style="background-image: url('{{asset('assets/front-end-image/banner-04.jpg')}}');">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-6 col-md-8 col-sm-12 col-12">
                        <div class="home_top_slider_content">
                            <h5>Let's Start</h5>
                            <h2 class="text-white">Save The World Together <span >There Is No Planet 'B'</span></h2>
                            {{-- <h4>Introducing Apple Watch Series 4</h4> --}}
                            <a href="#" class="theme-btn-one bg-dark text-white">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="home_top_slider background_bg"
            style="background-image: url('{{asset('assets/front-end-image/banner-05.jpg')}}');">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-4">
                        <div class="home_top_slider_content">
                            <h5>Let's Save</h5>
                            <h2 class="text-white">The <span class="text-warning">Ocean</span> <br>Save The <br> <span class="text-warning">Planet</span> </h2>
                            {{-- <h4>Anti-Falling Of Design Sweatproof</h4> --}}
                            <a href="#" class="theme-btn-one bg-dark text-white">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="home_top_slider background_bg"
            style="background-image: url('{{asset('assets/front-end-image/banner-08.jpg')}}');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="home_top_slider_content">
                            <h5>We Are Working On</h5>
                            <h2>Plastic <br> <span>Recycling</span></h2>
                            <h4>Technology</h4>
                            <a href="#" class="theme-btn-one bg-dark text-white">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
<!-- Did you Know -->
<section>
  <div class="container p-5">
    <div class="text-center">
      <h2 class="text-uppercase text-warning">DID YOU KNOW <img class="you-know-logo" src="{{asset('assets/front-end-image/you-know/idea.png')}}" alt=""></h2>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="d-flex">
          <div class="know-img">
            <img src="{{asset('assets/front-end-image/you-know/tons.png')}}" alt="">
          </div>
          <div class="know-text d-flex align-items-center">
            <p class="m-0"><span class="fw-bold"> 3000 </span>  Tons of plastic waste is generated every day.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="d-flex">
          <div class="know-img">
            <img src="{{asset('assets/front-end-image/you-know/plastic-bag.png')}}" alt="">
          </div>
          <div class="know-text d-flex align-items-center">
            <p class="m-0">Nearly <span class="fw-bold"> 14 million </span> polythene bags are used in <span class="fw-bold"> Dhaka </span> every day.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="d-flex">
          <div class="know-img">
            <img src="{{asset('assets/front-end-image/you-know/save-ocean.png')}}" alt="">
          </div>
          <div class="know-text d-flex align-items-center">
            <p class="m-0">Bangladesh ranked <span class="fw-bold"> 10th </span> in polluting the oceans in <span class="fw-bold">2010</span></p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="d-flex">
          <div class="know-img">
            <img src="{{asset('assets/front-end-image/you-know/seven.png')}}" alt="">
          </div>
          <div class="know-text d-flex align-items-center">
            <p class="m-0">Bangladesh is <span class="fw-bold"> 7th </span>among the top <span class="fw-bold">10</span> plastic consuming countries in world.</p>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>
<!-- Some Statistics  -->
<section>
  <div class="container p-5 pt-0">
    <div class="text-center pb-3">
      <h2 class="text-uppercase text-warning">Some Statistics about plastic in Bangladesh</h2>
    </div>
    <div class="row justify-content-center pt-3">  
      <div class="col-md-4 p-3 test"> 
        <div class="statistics-text"> 
          <div class="statistics-icon pb-3 text-center"> 
            <i style="color: #00806c;" class="fa-sharp fa-solid fa-map-location-dot"></i>
          </div> 
           <h4>Plastic industry locations</h4>
            <p class="fw-bold">
            65% <span class="stat_span"> in Dhaka</span> <br>
            20% <span class="stat_span"> in Chattogram </span><br>
            10% <span class="stat_span"> in Narayanganj</span> <br>
            5%  <span class="stat_span"> in Other cities</span>
          </p>  
        </div>
      </div> 
      <div class="col-md-4 p-3 test">
        <div class="statistics-text"> 
          <div class="statistics-icon pb-3 text-center">
            <i style="color: #24ba08;" class="fa-solid fa-users-rays"></i>
          </div>  
          <h4>Consumption by age group in Dhaka</h4>
          <p class="fw-bold">7% <span class="stat_span">by 10-14 years</span><br>
            35% <span class="stat_span">by 15-25 years</span> <br>
            33%  <span class="stat_span">by 26-35 years</span><br>
            25%  <span class="stat_span">by 36-45 years</span>
          </p>  
        </div>
      </div>  
      <div class="col-md-4 p-3 test">
        <div class="statistics-text"> 
          <div class="statistics-icon pb-3 text-center">
            <i style="color: #0d88a9;" class="fa-regular fa-bottle-water"></i>
          </div> 
          <h4> Earning from plastic exporting by Bangladesh</h4>
          <p class="fw-bold">52$ <span class="stat_span">million in 2008-09</span><br>
            50$ <span class="stat_span">million in 2009-10</span><br>
            68$ <span class="stat_span">million in 2010-11</span><br>
          </p>  
        </div>
      </div> 
      <div class="col-md-4 p-3 test">
        <div class="statistics-text"> 
          <div class="statistics-icon pb-3 text-center">
            <i style="color: darkblue;" class="fa-solid fa-industry"></i>
          </div> 
          <h4>Plastic production companies</h4>
          <p class="fw-bold">65% <span class="stat_span">companies are small</span><br>
            33%<span class="stat_span"> companies are medium</span><br>
            2% <span class="stat_span"> companies are large</span><br>
            </p>  
        </div>
      </div> 
      <div class="col-md-4 p-3 test">
        <div class="statistics-text"> 
          <div class="statistics-icon pb-3 text-center">
            <i style="color: gray;" class="fa-solid fa-trash"></i>
          </div>  
          <h4>Single use plastic waste generation</h4>
          <p class="fw-bold">78% <span class="stat_span">in urban area</span><br>
            22% <span class="stat_span">in rural area</span><br> 
          </p>  
        </div>
      </div> 
    </div>
  </div>
</section>
<!-- history of plastic in bangladesh-->
<section>
  <div class="container p-5 pt-0">
    <div class="text-center pb-3">
      <h2 class="text-uppercase text-warning">HISTORY OF PLASTIC WASTE INCREASE IN DHAKA</h2>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="info-img">
          <img src="{{asset('assets/front-end-image/bangladesh-plastic.png')}}" alt="">
        </div>
      </div>
      <div class="col-md-6 d-flex align-items-center">
        <div class="info-text"> 
          <h4> Are you going to use more plastic tomorrow or less?</h4>
          <p class="m-0">What can we not do with plastics? We can cloth, travel, eat, carry, play, sleep, even try to deal with pandemic! Can we plan for a day without it? How much plastic you have thrown yesterday? Where did you throw it? Is it now in the land/ocean/or in your stomach? Can we not prefer a ceramic mug over a plastic cup? Plastic cups are light and cheap!!!</p>
        </div>
      </div>
      
    </div>
  </div>
</section>
<!-- information area one -->
<section>
  <div class="container p-5">
    <div class="text-center pb-5">
      <h2 class="text-uppercase text-warning">RISE IN PLASTIC POLLUTION DURING COVID-19</h2>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="info-img">
          <img src="{{asset('assets/front-end-image/rise-in-plastic-population-during-covid-19.webp')}}" alt="">
        </div>
      </div>
      <div class="col-md-6 d-flex align-items-center">
        <div class="info-text"> 
          <p class="m-0">Plastic is surrounding us everywhere we look. Food containers, water bottle, household product even our phone cover is also made of plastic and this list is endless. Majority of people around the world and in our country don’t know about the effects of plastic on our health. We are very much dependent on plastic product yet we don’t know about the effects it causes to our health, to improve plastic properties many toxic additives are often added that can be released in the environment. We consume these additives by the skin, inhale these via the air or the food or drink we have as an intake. Several studies found link between plastic pollution and health hazards in human body such as cancer, diabetes, chronic inflammation, and various immune diseases. And, these are just a few examples of severe issues potentially caused by plastic and its toxic components.</p>
        </div>
      </div>
      
    </div>
  </div>
</section>
<!-- information area two -->
<section>
  <div class="container p-5">
    <div class="text-center pb-5">
      <h2 class="text-uppercase text-warning">Microplastic effect on Human Health</h2>
    </div>
    <div class="row"> 
      <div class="col-md-6 d-flex align-items-center">
        <div class="info-text"> 
          <p class="m-0" >Plastic is surrounding us everywhere we look. Food containers, water bottle, household product even our phone cover is also made of plastic and this list is endless. Majority of people around the world and in our country don’t know about the effects of plastic on our health. We are very much dependent on plastic product yet we don’t know about the effects it causes to our health, to improve plastic properties many toxic additives are often added that can be released in the environment. We consume these additives by the skin, inhale these via the air or the food or drink we have as an intake. Several studies found link between plastic pollution and health hazards in human body such as cancer, diabetes, chronic inflammation, and various immune diseases. And, these are just a few examples of severe issues potentially caused by plastic and its toxic components.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="info-img">
          <img src="{{asset('assets/front-end-image/Microplastic-effect-on-Human-Health.png')}}" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- information area three -->
<section>
  <div class="container p-5">
    <div class="text-center pb-5">
      <h2 class="text-uppercase text-warning"> SOURCES OF SINGLE USE PLASTIC IN BANGLADESH</h2>
    </div>
    <div class="row"> 
      <div class="col-md-6">
        <div class="info-img">
          <img src="{{asset('assets/front-end-image/super-market.webp')}}" alt="">
        </div>
      </div>
      <div class="col-md-6 d-flex align-items-center">
        <div class="info-text"> 
          <p class="m-0" >Plastic is surrounding us everywhere we look. Food containers, water bottle, household product even our phone cover is also made of plastic and this list is endless. Majority of people around the world and in our country don’t know about the effects of plastic on our health. We are very much dependent on plastic product yet we don’t know about the effects it causes to our health, to improve plastic properties many toxic additives are often added that can be released in the environment. We consume these additives by the skin, inhale these via the air or the food or drink we have as an intake. Several studies found link between plastic pollution and health hazards in human body such as cancer, diabetes, chronic inflammation, and various immune diseases. And, these are just a few examples of severe issues potentially caused by plastic and its toxic components.</p>
        </div>
      </div> 
    </div>
  </div>
</section>
<!-- information area four -->
<section>
  <div class="container p-5">
    <div class="text-center pb-3">
      <h2 class="text-uppercase text-warning"> Effects of plastic on ecosystem</h2>
    </div>
    <div class="row"> 
      <div class="col-md-6 d-flex align-items-center">
        <div class="info-text"> 
          <p class="m-0" >Around the world, one million plastic bottles are purchased every minute, while up to five trillion plastic bags are used worldwide every year. In total, half of all plastic produced is designed for single-use purposes – used just once and then thrown away.</p>
        </div>
      </div> 
      <div class="col-md-6">
        <div class="info-carousel">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('assets/front-end-image/ecosystem-01.png')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('assets/front-end-image/ecosystem-02.webp')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('assets/front-end-image/ecosystem-03.png')}}" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="text-dark" style="font-size: 65px;" aria-hidden="true"><</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="text-dark" style="font-size: 65px;" aria-hidden="true">></span>
            </button>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>
<!-- information area five -->
<section>
  <div class="container p-5 pt-0">
    <div class="text-center pb-5">
      <h2 class="text-uppercase text-warning"> PLASTIC POLLUTION AND COXS BAZAR</h2>
    </div>
    <div class="row"> 
      <div class="col-md-6">
        <div class="info-carousel">
          <div id="coxs-carousel-home" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('assets/front-end-image/coxs-plastic-pollution-01.webp')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('assets/front-end-image/coxs-plastic-pollution-01.png')}}" class="d-block w-100" alt="...">
              </div>
               
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#coxs-carousel-home" data-bs-slide="prev">
              <span class="text-dark" style="font-size: 65px;" aria-hidden="true"><</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#coxs-carousel-home" data-bs-slide="next">
              <span class="text-dark" style="font-size: 65px;" aria-hidden="true">></span>
            </button>
          </div>
        </div>
      </div>
      <div class="col-md-6 d-flex align-items-center">
        <div class="info-text"> 
          <p class="m-0" >Almost 73,000 tonnes of plastic waste reach the Bay of Bengal through the Padma, Meghna, and Jamuna rivers, according to a report by the United Nations Environment Programme – which is only 40 percent of the total plastic waste in the Bay. The remaining 60 percent comes from other parts of the world. In Coxs Bazar among the collected waste from the ocean, approximately 63 percent of the waste are plastic and 13 percent are foamed plastic</p>
        </div>
      </div> 
    </div>
  </div>
</section>

<!-- be aware save environment  -->
<section>
  <div class="container p-5">
    <div class="text-center pb-3">
      <h2 class="text-uppercase text-warning">BE AWARE, SAVE ENVIRONMENT</h2>
    </div>
    <div class="row justify-content-center pt-3">  
      <div class="col-md-6">
        <div class="info-img text-center">
          <img src="{{asset('assets/front-end-image/4R-solution.jpg')}}" alt="">
        </div>
      </div>
      <div class="col-md-6 d-flex align-items-center">
        <div class="info-text"> 
          <h4 class="text-capitalize">save environment save our next generation</h4>
          <p class="m-0" >One of the main reasons behind plastic pollution is the lack of awareness. People throughout the world and our country are not aware of the consequences of plastic pollution. We have to become more aware and create more awareness around us as much as we can so that we can save our environment from plastic pollution and for a better future for our next generation.</p>
        </div>
      </div>
    </div> 
  </div>
</section>


@endsection