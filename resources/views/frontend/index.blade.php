
@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>SOGH Orthopedic And General Hospital</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link href="{{asset('/assets/css/header.css')}}" rel="stylesheet">

</head>

<body>
  <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
 
        @foreach ($sliders as $key=>$sliderItem)
        <div class="swiper-slide" {{$key =="0" ? "active":""}}>
            @if($sliderItem->image)
                <img src="{{asset("$sliderItem->image")}}" alt="Executive" />

            
            @endif
        </div>
        @endforeach
     

    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>



      {{-- Departments --}}
      <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
          <!-- text - start -->
          <div class="mb-10 md:mb-16">
            <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">Departments</h2>
      
            <p class="mx-auto max-w-screen-md text-center text-gray-500 md:text-lg">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text but is random or otherwise generated.</p>
          </div>
          <!-- text - end -->
          
          
          <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            <!-- product - start -->
            @forelse($departments as $sliderItem)
            <div>
              <a href="{{url('/departments/'.$sliderItem->Name)}}" class="group relative block h-96 overflow-hidden rounded-t-lg bg-gray-100">
                <img src="{{asset(''. $sliderItem->Image)}}" loading="lazy" alt="Photo by Austin Wade" class="h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
      
                <span class="absolute left-0 top-3 rounded-r-lg bg-red-500 px-3 py-1.5 text-sm font-semibold uppercase tracking-wider text-white">-50%</span>
              </a>
      
              <div class="flex items-start justify-between gap-2 rounded-b-lg bg-gray-100 p-4">
                <div class="flex flex-col">
                  <a href="#" class="font-bold text-gray-800 transition duration-100 hover:text-gray-500 lg:text-lg">{{$sliderItem->Name}}</a>
                  <span class="text-sm text-gray-500 lg:text-base">by Fancy Brand</span>
                </div>
      
                <div class="flex flex-col items-end">
                  <span class="font-bold text-gray-600 lg:text-lg">$19.99</span>
                  <span class="text-sm text-red-500 line-through">$39.99</span>
                </div>
              </div>
            </div>
            <!-- product - end -->
          @empty
          <div class="col-md-12">
            <h5> No Departments Available</h5>
          </div>
            @endforelse
     
          </div>
        </div>
      </div>
      @include('layouts.layout')
</body>

</html>
@endsection