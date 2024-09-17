@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4> Add Blogs
                    <a href="{{url('admin/blogs')}}" class="btn btn-primary btn-sm text-white float-end"> BACK</a>
                </h4>
            </div>
            <div class="card-body">
                    <form method ="POST" action="{{url('admin/blogs')}}" enctype="multipart/form-data">
                      @csrf
                        <div class="row">
                            
                          
                            <div class="col-md-6 mb-3">
                                <label>Title</label>
                                <input type="text" name="Title" id="Title" class="form-control"/>
                                @error('Title') <small class="text-danger">{{$message}} </small>@enderror
                            </div>
                             <div class="col-md-12 mb-3">
                                <label>Description</label>
                                <input type="text" name="Description" id="Description" class="form-control" rows="3"/>
                                @error('Description') <small class="text-danger">{{$message}} </small>@enderror
                            
                            </div>

                            <div class="col-md-12 mb-3">
                                <label>Date</label>
                                <input type="date" name="Date" id="Date" class="form-control" />
                                @error('Date') <small class="text-danger">{{$message}} </small>@enderror
                            
                            </div>
                           
                            <div class="col-md-6 mb-3">
                                <label>Cover Image</label>
                                <input class="form-control" name="CoverImage" type="file" id="CoverImage">
                                @error('CoverImage') <small class="text-danger">{{$message}} </small>@enderror
                            
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="col-md-6 mb-3">
                                    <label>Upload Blogs Gallery Images</label>
                                    <input class="form-control" name="images[]" type="file" multiple>
                                 
                                
                                </div>
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