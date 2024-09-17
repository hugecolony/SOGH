
<div class="bg-white">
  <div class="pt-6">
    <nav aria-label="Breadcrumb">
      <ol role="list" class="mx-auto flex max-w-2xl items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
        <li>
          <div class="flex items-center">
            <a href="{{'/'}}" class="mr-2 text-sm font-bold text-blue-900">Home</a>
            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-blue-300">
              <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
            </svg>
          </div>
        </li>
        <li>
          <div class="flex items-center">
            <a href="{{'/departments/'.$department->Name}}" class="mr-2 text-sm font-bold text-blue-900">{{$department->Name}}</a>
            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-blue-300">
              <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
            </svg>
          </div>
        </li>
        <li>
          <div class="flex items-center">
            <a href="{{'/departments/'.$doctors->Name}}" class="mr-2 text-sm font-bold text-blue-900">{{$doctors->Name}}</a>
            {{-- <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-blue-300">
              <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
            </svg> --}}
          </div>
        </li>
        </ol>
      </nav>
    
    <!-- Image gallery -->

    <div class="bg-white py-6 sm:py-8 lg:py-12">
  <div class="mx-auto max-w-screen-lg px-4 md:px-8">
    <div class="grid gap-8 md:grid-cols-2">
             <!-- images - start -->
             <div class="space-y-4">
              <div class="relative overflow-hidden rounded-lg bg-gray-100">
                
                @if ($doctors)
                <img src="{{asset($doctors->doctorImages[0]->image)}}" loading="lazy" alt="Photo by Himanshu Dewangan" class="h-full w-full object-cover object-center" />
                @else 
                    No Image Added
                @endif
                <span class="absolute left-0 top-0 rounded-br-lg bg-blue-500 px-3 py-1.5 text-sm uppercase tracking-wider text-white">{{$doctors->Designation}}</span>
              </div>
      
             
            </div>
            <!-- images - end -->
    <!-- content - start -->
    <div class="md:py-8">
      <!-- name - start -->
      <div class="mb-2 md:mb-3">
        <h1 class="text-2xl font-bold text-gray-800 lg:text-5xl">{{$doctors->Name}}</h1>
      </div>
      <!-- name - end -->

      <!-- rating - start -->
      <div class="mb-6 flex items-center md:mb-10">
        

        <span class="ml-2 text-sm  lg:text-3xl text-blue-500 font-semibold transition duration-100 hover:text-blue-600 active:text-blue-700">{{$doctors->Designation}}</span>

        {{-- <a href="#" class="ml-4 text-sm font-semibold text-indigo-500 transition duration-100 hover:text-indigo-600 active:text-indigo-700">view all 47 reviews</a> --}}
      </div>
      <!-- rating - end -->

      {{-- <!-- color - start -->
      <div class="mb-4 md:mb-6">
        <span class="mb-3 inline-block text-sm font-semibold text-gray-500 md:text-base">Color</span>

        <div class="flex flex-wrap gap-2">
          <span class="h-8 w-8 rounded-full border bg-gray-800 ring-2 ring-gray-800 ring-offset-1 transition duration-100"></span>
         
          
        </div>
      </div>
      <!-- color - end --> --}}

      {{-- <!-- size - start -->
      <div class="mb-8 md:mb-10">
        <span class="mb-3 inline-block text-sm font-semibold text-gray-500 md:text-base">Size</span>

        <div class="flex flex-wrap gap-3">
          <button type="button" class="flex h-8 w-12 items-center justify-center rounded-md border bg-white text-center text-sm font-semibold text-gray-800 transition duration-100 hover:bg-gray-100 active:bg-gray-200">Timing</button>
          <button type="button" class="flex h-8 w-12 items-center justify-center rounded-md border bg-white text-center text-sm font-semibold text-gray-800 transition duration-100 hover:bg-gray-100 active:bg-gray-200">S</button>
          <span class="flex h-8 w-12 cursor-default items-center justify-center rounded-md border border-indigo-500 bg-indigo-500 text-center text-sm font-semibold text-white">M</span>
          <button type="button" class="flex h-8 w-12 items-center justify-center rounded-md border bg-white text-center text-sm font-semibold text-gray-800 transition duration-100 hover:bg-gray-100 active:bg-gray-200">L</button>
          <span class="flex h-8 w-12 cursor-not-allowed items-center justify-center rounded-md border border-transparent bg-white text-center text-sm font-semibold text-gray-400">XL</span>
        </div>
      </div>
      <!-- size - end --> --}}
{{-- 
      <!-- price - start -->
      <div class="mb-4">
        <div class="flex items-end gap-2">
          <span class="text-xl font-bold text-gray-800 md:text-2xl">$15.00</span>
          <span class="mb-0.5 text-red-500 line-through">$30.00</span>
        </div>

        <span class="text-sm text-gray-500">incl. VAT plus shipping</span>
      </div>
      <!-- price - end -->

      <!-- shipping notice - start -->
      <div class="mb-6 flex items-center gap-2 text-gray-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
        </svg>

        <span class="text-sm">2-4 day shipping</span>
      </div>
      <!-- shipping notice - end -->

      <!-- buttons - start -->
      <div class="flex gap-2.5">
        <a href="#" class="inline-block flex-1 rounded-lg bg-indigo-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-indigo-600 focus-visible:ring active:bg-indigo-700 sm:flex-none md:text-base">Add to cart</a>

        <a href="#" class="inline-block rounded-lg bg-gray-200 px-4 py-3 text-center text-sm font-semibold text-gray-500 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-300 focus-visible:ring active:text-gray-700 md:text-base">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
          </svg>
        </a>
      </div>
      <!-- buttons - end --> --}}

      <!-- description - start -->
      <div class="mt-10 md:mt-16 lg:mt-20">
        <div class="mb-3 text-sm font-bold text-gray-800">{{$doctors->Description}}</div>

        {{-- <p class="text-gray-500">
          This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text but is random or otherwise generated. It may be used to display a sample of fonts or generate text for testing.<br /><br />

          This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text but is random or otherwise generated.
        </p> --}}
      </div>
      <div class="mt-10 md:mt-16 lg:mt-20">
        <div class="mb-3 text-sm font-bold text-gray-800">{{$doctors->Expertise}}</div>

        {{-- <p class="text-gray-500">
          This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text but is random or otherwise generated. It may be used to display a sample of fonts or generate text for testing.<br /><br />

          This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text but is random or otherwise generated.
        </p> --}}
      </div>
      <div class="mt-10 md:mt-16 lg:mt-20">
        <div class="mb-3 text-sm font-bold text-gray-800">{{$doctors->Qualification}}</div>

        {{-- <p class="text-gray-500">
          This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text but is random or otherwise generated. It may be used to display a sample of fonts or generate text for testing.<br /><br />

          This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text but is random or otherwise generated.
        </p> --}}
      </div>
      <!-- description - end -->
    </div>
    <!-- content - end -->
    </div>
  </div>
</div>


<!-- Icon Blocks -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <div class="grid sm:grid-cols-2 lg:grid-cols-4 items-center gap-2">
    <!-- Icon Block -->
    <a class="group flex flex-col justify-center hover:bg-blue-50 rounded-xl p-4 md:p-7 dark:hover:bg-blue-100" href="#">
      <div class="flex justify-center items-center size-12 bg-gray-50 border border-gray-200 rounded-full mx-auto dark:bg-white-800 dark:border-white-700">
        <svg class="flex-shrink-0 size-5 text-gray-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 7h-9"/><path d="M14 17H5"/><circle cx="17" cy="17" r="3"/><circle cx="7" cy="7" r="3"/></svg>
      </div>
      <div class="mt-5 text-center">
        <h3 class="group-hover:text-blue-600 text-lg font-semibold text-blue-800 dark:text-black dark:group-hover:text-blue-400">Department of {{$doctors->Department->Name}}</h3>
      </div>
    </a>
    <!-- End Icon Block -->

    <!-- Icon Block -->
    <a class="group flex flex-col justify-center hover:bg-blue-50 rounded-xl p-4 md:p-7 dark:hover:bg-blue-100" href="#">
      <div class="flex justify-center items-center size-12 bg-gray-50 border border-gray-200 rounded-full mx-auto dark:bg-white-800 dark:border-white-700">
        <svg class="flex-shrink-0 size-5 text-gray-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 7h-9"/><path d="M14 17H5"/><circle cx="17" cy="17" r="3"/><circle cx="7" cy="7" r="3"/></svg>
      </div>
      <div class="mt-5 text-center">
        <h3 class="group-hover:text-blue-600 text-lg font-semibold text-blue-800 dark:text-black dark:group-hover:text-blue-400">{{$doctors->Incoming_Time}} - {{$doctors->Outgoing_Time}}</h3>
      </div>
    </a>
    <!-- End Icon Block -->

    <!-- Icon Block -->
    <a class="group flex flex-col justify-center hover:bg-blue-50 rounded-xl p-4 md:p-7 dark:hover:bg-blue-100" href="#">
      <div class="flex justify-center items-center size-12 bg-gray-50 border border-gray-200 rounded-full mx-auto dark:bg-white-800 dark:border-white-700">
        <svg class="flex-shrink-0 size-5 text-gray-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 7h-9"/><path d="M14 17H5"/><circle cx="17" cy="17" r="3"/><circle cx="7" cy="7" r="3"/></svg>
      </div>
      <div class="mt-5 text-center">
        <h3 class="group-hover:text-blue-600 text-lg font-semibold text-blue-800 dark:text-black dark:group-hover:text-blue-400">{{$doctors->Educational_Credentials}}</h3>
      </div>
    </a>
    <!-- End Icon Block -->

    <!-- Icon Block -->
    <a class="group flex flex-col justify-center hover:bg-blue-50 rounded-xl p-4 md:p-7 dark:hover:bg-blue-100" href="#">
      <div class="flex justify-center items-center size-12 bg-gray-50 border border-gray-200 rounded-full mx-auto dark:bg-white-800 dark:border-white-700">
        <svg class="flex-shrink-0 size-5 text-gray-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 7h-9"/><path d="M14 17H5"/><circle cx="17" cy="17" r="3"/><circle cx="7" cy="7" r="3"/></svg>
      </div>
      <div class="mt-5 text-center">
        <h3 class="group-hover:text-blue-600 text-lg font-semibold text-blue-800 dark:text-black dark:group-hover:text-blue-400">{{$doctors->Email}}</h3>
      </div>
    </a>
    <!-- End Icon Block -->
  </div>
</div>
<!-- End Icon Blocks -->
  </div>

{{-- 
Showing 2 doctors
dd({{$department->doctors}}) --}}
<div>
  <h1 class="text-6xl text-center"> Panel of Doctors </h1>
 
<div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
    @forelse($department->doctors as $doctorItem)
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
    <h5> No Doctors Available for  {{$department->Name}}</h5>
  </div>
    @endforelse

  </div>
</div>
</div>
</div>
</div>




