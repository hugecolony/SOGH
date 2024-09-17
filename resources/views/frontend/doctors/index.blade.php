@extends('layouts.app')
@section('title' , 'All Doctors')
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
  <div class="bg-white py-6 sm:py-8 lg:py-12">
    <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
      <!-- text - start -->
      <div class="mb-10 md:mb-16">
    
        <h2 class="mb-4 text-center text-3xl font-bold text-blue-800 md:mb-6 lg:text-8xl">{{$departments->Name}}</h2>
        <p class="mx-auto max-w-screen-md text-center text-gray-500 md:text-lg">This is a sectiondd of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text but is random or otherwise generated.</p>
      </div>
      
        <livewire:frontend.doctor.index :doctors="$doctors" :department="$departments"/>
     
    </div>
  </div>
</body>
</html>
@endsection