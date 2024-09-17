@include('layouts.inc.frontend.navbar')
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
 
<!-- Table Section -->
<div class="max-w-[85rem] px-4 py-10 sm:px-3 lg:px-3 lg:py-14 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
        <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">Carrers Portal</h1>
      </div>
  <!-- Card -->
  <div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
      <div class="p-1.5 min-w-full inline-block align-middle">
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-neutral-100 dark:border-neutral-900">
          <!-- Header -->
          <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700">
            <!-- Input -->
            <div class="sm:col-span-1">
              <label for="hs-as-table-product-review-search" class="sr-only">Search</label>
              <div class="relative">
                <input type="text" id="hs-as-table-product-review-search" name="hs-as-table-product-review-search" class="py-2 px-3 ps-11 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-100 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Search">
                <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4">
                  <svg class="size-4 text-gray-400 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                  </svg>
                </div>
              </div>
            </div>
            <!-- End Input -->

          </div>
          <!-- End Header -->
          <table class="min-w-full divide-4 divide-gray-200 dark:divide-neutral-100">
            <thead class="bg-gray-50 dark:bg-slate-100">
              <tr>
                <th scope="col" class="pe-6 py-3 text-start">
                    <div class="px-6 py-4 flex items-center gap-x-3">
                      <span class="text-xs font-semibold uppercase tracking-wide text-blue-600 dark:text-blue-900">
                        Job Title
                      </span>
                    </div>
                  </th>
                  <th scope="col" class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3 text-start">
                    <div class="px-6 py-4 flex items-center gap-x-3">
                      <span class="text-xs font-semibold uppercase tracking-wide text-blue-600 dark:text-blue-900">
                        Location
                      </span>
                    </div>
                  </th>

                <th scope="col" class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3 text-start">
                  <div class="flex items-center gap-x-2">
                   <span class="text-xs font-semibold uppercase tracking-wide text-blue-600 dark:text-blue-900">
                      Closing Date
                    </span>
                  </div>
                </th>

                <th scope="col" class="pe-6 py-3 text-start">
                    <div class="px-6 py-2 flex items-center gap-x-3">
                      <span class="text-xs font-semibold uppercase tracking-wide text-blue-600 dark:text-blue-900">
                        More Details
                      </span>
                    </div>
                  </th>
                  <th scope="col" class="pe-6 py-3 text-start"></th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                @foreach($carrers as $key => $data)
                <tr>
  
                  <td class="size-px whitespace-nowrap">
                    <div class="px-6 py-4 flex items-center gap-x-6">
                      <a class="text-sm text-blue-600 decoration-2 hover:underline dark:text-blue-500" href="#">{{$data->Title}}</a>
                    </div>
                  </td>

               
                </tr>
                @endforeach
            </tbody>
          </table>
          <!-- Table -->
          {{-- <table class="min-w-full divide-4 divide-gray-200 dark:divide-neutral-100">
            <thead class="bg-gray-50 dark:bg-slate-100">
              <tr>
                

                <th scope="col" class="pe-6 py-3 text-start">
                  <div class="px-6 py-2 flex items-center gap-x-3">
                    <span class="text-xs font-semibold uppercase tracking-wide text-blue-600 dark:text-blue-900">
                      Job Title
                    </span>
                  </div>
                </th>
                <th scope="col" class="pe-6 py-3 text-start">
                    <div class="px-6 py-2 flex items-center gap-x-3">
                      <span class="text-xs font-semibold uppercase tracking-wide text-blue-600 dark:text-blue-900">
                       Closing Date
                      </span>
                    </div>
                  </th>
                  <th scope="col" class="pe-6 py-3 text-start">
                    <div class="px-6 py-2 flex items-center gap-x-3">
                      <span class="text-xs font-semibold uppercase tracking-wide text-blue-600 dark:text-blue-900">
                       Location
                      </span>
                    </div>
                  </th>
                <th scope="col" class="px-6 py-3 text-start">
                  <div class="flex items-center gap-x-3">
                    <span class="text-xs font-semibold uppercase tracking-wide text-blue-600 dark:text-blue-900">
                      More Details
                    </span>
                  </div>
                </th>



                <th scope="col" class="px-6 py-3 text-end"></th>
              </tr>
            </thead>

            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
              @foreach($carrers as $key => $data)
              <tr>

                <td class="size-px whitespace-nowrap">
                  <div class="px-6 py-2 flex items-center gap-x-3">
                    <a class="text-sm text-blue-600 decoration-2 hover:underline dark:text-blue-500" href="#">{{$data->Title}}</a>
                  </div>
                </td>
                <td class="size-px whitespace-nowrap">
                  <div class="px-6 py-2">
                    <span class="text-sm text-gray-600 dark:text-neutral-400">{{$data->ClosingOn}}</span>
                  </div>
                </td>
                <td class="size-px whitespace-nowrap">
                    <div class="px-6 py-2">
                      <span class="text-sm text-gray-600 dark:text-neutral-400">{{$data->Location}}</span>
                    </div>
                  </td>
                <td class="size-px whitespace-nowrap">
                  <div class="px-6 py-1.5 flex justify-end">
                    <div class="group inline-flex items-center divide-x divide-gray-900 border border-gray-900 bg-blue-900 shadow-sm rounded-lg transition-all dark:divide-blue-700 dark:bg-blue-700 dark:border-blue-700">
                      <div class="hs-tooltip inline-block">
                        <a class="hs-tooltip-toggle py-1.5 px-2 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-s-md bg-black text-blue-600 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-blue-500 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800" href="{{asset($data->Attachment)}}">
                          <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                          </svg>
                          <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-neutral-700" role="tooltip">
                            Download PDF
                          </span>
                        </a>
                      </div>

                    </div>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <!-- End Table --> --}}


        </div>
      </div>
    </div>
  </div>
  <!-- End Card -->
</div>
<!-- End Table Section -->


  {{-- @foreach($id as $key => $data)                  
                  <!-- Card Section -->
<div class="max-w-5xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Grid -->
  <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-3 sm:gap-6">
    <!-- Card -->
    
        <div class="grow ms-5 p-4 md:p-5 group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition">
          
            <h3 class="group-hover:text-blue-600 font-semibold text-blue-600 dark:group-hover:text-blue-600 dark:text-neutral-900">
              <a href="{{asset($data->File)}}"  class="img img-responsive ">
                   {{$data->FileName}}
              </a>
            </h3>
            <p class="text-sm text-gray-500 dark:text-neutral-500">
               Download
            </p>
          </div>
        </div>
      </div>
    </a>
    <!-- End Card -->

  </div>
  <!-- End Grid -->
</div>
<!-- End Card Section -->
@endforeach --}}
</body>
</html>

@include('layouts.footer')