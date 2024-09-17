
<div>  
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
        <h5> No Doctors Available for  {{$department->Name}}</h5>
      </div>
        @endforelse
 
    </div>

</div>
