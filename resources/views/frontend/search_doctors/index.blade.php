@extends('layouts.app')
@section('title' , 'All Departments')
@section('content')

<!DOCTYPE html>
    <html lang="en">
     
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>SOGH Orthopaedic And General Hospital</title>
  <script src="./node_modules/preline/dist/preline.js"></script>
  <!-- FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
      rel="stylesheet">
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== REMIXICONS ===============-->
      <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
      <link href="{{asset('/assets/css/app.css')}}" rel="stylesheet">
      <!--=============== CSS ===============-->
    
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</head>
<body>
    <h1 class="text-9xl text-center" >Search Doctors </h1>

    <!-- Hero -->
<div class="relative overflow-hidden">
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-24">
      <div class="text-center">
        <h1 class="text-4xl sm:text-6xl font-bold text-gray-800 dark:text-neutral-200">
          Insights
        </h1>
  
        <p class="mt-3 text-gray-600 dark:text-neutral-400">
          Stay in the know with insights from industry experts.
        </p>
  
        <div class="mt-7 sm:mt-12 mx-auto max-w-xl relative">
          <!-- Form --><div class="header-search">
            
          <form action="{{url('/search')}}" method="GET">
            <select class="input-select" name="departments">
                <option value="ALL" {{request('department' == 'ALL' ? 'selected' : '' )}}>All Departments </option>
             
                @foreach ($departments as $department)
                    <option  value="{{$department->id}}" {{request('item')== $department->id ? 'selected' : ''}}> {{$department->Name}}</option>
                @endforeach
            </select>
            <input class="input" name="search" placeholder="search here" value="{{request('search')}}"/>
            <button class="search-btn"> Search </button>
          </form>
        </div>
          <!-- End Form -->
        
          <div>
            
          </div>
          {{-- {{$doctors->appends(['search' => request()->query('search')])->links()}} --}}
          <!-- SVG Element -->
          <div class="hidden md:block absolute top-0 end-0 -translate-y-12 translate-x-20">
            <svg class="w-16 h-auto text-orange-500" width="121" height="135" viewBox="0 0 121 135" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M5 16.4754C11.7688 27.4499 21.2452 57.3224 5 89.0164" stroke="currentColor" stroke-width="10" stroke-linecap="round"/>
              <path d="M33.6761 112.104C44.6984 98.1239 74.2618 57.6776 83.4821 5" stroke="currentColor" stroke-width="10" stroke-linecap="round"/>
              <path d="M50.5525 130C68.2064 127.495 110.731 117.541 116 78.0874" stroke="currentColor" stroke-width="10" stroke-linecap="round"/>
            </svg>
          </div>
          <!-- End SVG Element -->
  
          <!-- SVG Element -->
          <div class="hidden md:block absolute bottom-0 start-0 translate-y-10 -translate-x-32">
            <svg class="w-40 h-auto text-cyan-500" width="347" height="188" viewBox="0 0 347 188" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4 82.4591C54.7956 92.8751 30.9771 162.782 68.2065 181.385C112.642 203.59 127.943 78.57 122.161 25.5053C120.504 2.2376 93.4028 -8.11128 89.7468 25.5053C85.8633 61.2125 130.186 199.678 180.982 146.248L214.898 107.02C224.322 95.4118 242.9 79.2851 258.6 107.02C274.299 134.754 299.315 125.589 309.861 117.539L343 93.4426" stroke="currentColor" stroke-width="7" stroke-linecap="round"/>
            </svg>
          </div>
          <!-- End SVG Element -->
        </div>

      </div>
    </div>
  </div>
  <!-- End Hero -->

        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            <!-- product - start -->
            @forelse($doctors as $doctorItem)
            
            <div class="col-md-3">
              <a href="{{url('/departments/'.$doctorItem->department->Name.'/'.$doctorItem->Name)}}"  class="group relative block h-96 overflow-hidden rounded-t-lg bg-gray-100">
                
                @if($doctorItem->doctorImages->count() > 0)
                    <img src="{{asset(''. $doctorItem->doctorImages[0]->image)}}" loading="lazy" alt="{{$doctorItem->Name}}" class="h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                @endif
                <span class="absolute left-0 top-3 rounded-r-lg bg-red-500 px-3 py-1.5 text-sm font-semibold uppercase tracking-wider text-white">-50%</span>
              </a>
      
              <div class="flex items-start justify-between gap-2 rounded-b-lg bg-gray-100 p-4">
                <div class="flex flex-col">
                  <a href="{{url('/departments/'.$doctorItem->department->Name.'/'.$doctorItem->Name)}}" class="font-bold text-gray-800 transition duration-100 hover:text-gray-500 lg:text-lg">
                    {{$doctorItem->Name}}
                </a>
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
            <h5> No Doctors Available for  {{$doctors}}</h5>
          </div>
            @endforelse
     
        </div>
    
    
  </body>

</html>
@endsection