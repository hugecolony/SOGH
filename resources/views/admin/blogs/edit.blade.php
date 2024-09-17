@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4> Edit blogs
                    <a href="{{url('admin/blogs')}}" class="btn btn-primary btn-sm text-white float-end"> Back</a>
                </h4>
            </div>
            <div class="card-body">

                <div class="row">
                    <p> Cover : </p>
                    <form action="deletecover/{{$blogs->id}}" method="post">
                        <button class="btn btn-danger">X </button>
                        @csrf
                        @method("delete")
                    </form>
                    <img src={{asset($blogs->CoverImage)}}   style="max-width:100px; max-height:100px"  class="img img-responsive"/>
                    <br/>
                    @if(count($blogs->images)>0)
                    <p> Images : </p>
                    @foreach($blogs->images as $img)
                    <form action="deleteimage/{{$img->id}}" method="post">
                        <button class="btn btn-danger">X </button>
                        @csrf
                        @method("delete")
                    </form>
                    <img src="{{asset('uploads/Images/'.$img->image)}}"   style="max-width:100px; max-height:100px" class="img img-responsive"/>
                       
                    @endforeach
                    @endif
                </div> 


                <h1 class="text-center">Update Blogs </h1>

                <form method ="POST" action="{{url('admin/blogs/edit/'.$blogs->id)}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="row">
                        
                       
                        <div class="col-md-6 mb-3">
                            <strong>Title</strong>
                            <input type="text" name="Title" id="Title" value={{$blogs->Title}} placeholder="Title" class="form-control"/>
                            @error('Title') <small class="text-danger">{{$message}} </small>@enderror
                        </div>
                         <div class="col-md-12 mb-3">
                            <label>Description</label>
                            <input type="text" name="Description" value="{{$blogs->Description}}" id="Description" class="form-control" rows="3"/>
                            @error('Description') <small class="text-danger">{{$message}} </small>@enderror
                        
                        </div>
                        
                        {{-- <div class="col-md-6 mb-3">
                            <label>Images</label>
                            <input type="file" name="Images" class="form-control"/>
                        </div> --}}
                        <div class="col-md-6 mb-3">
                            <label>Date</label>
                            <input type="date" name="Date" id="Date" value="{{$blogs->Date}}" class="form-control"/>
                            @error('Date') <small class="text-danger">{{$message}} </small>@enderror
                        
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Cover Image</label>
                            <input class="form-control" name="CoverImage" value="{{$blogs->CoverImage}}" type="file" id="Image">
                            @error('CoverImage') <small class="text-danger">{{$message}} </small>@enderror
                        
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Gallery Images</label>
                            <input class="form-control" name="images[]" type="file" multiple>
                            @error('Gellery Images') <small class="text-danger">{{$message}} </small>@enderror
                        
                        </div>
                        
                        <div class="col-md-12 mb-3">
                            <button type="submit" name="submit" value="Save" class="btn btn-primary float-end">Save Data</button>

                        </div>
                    </div> 
                </form>
                
        </div>
        </div>
    </div>
</div>    



@endsection

