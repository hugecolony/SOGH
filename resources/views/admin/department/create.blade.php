@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4> Add Department
                    <a href="{{url('admin/department')}}" class="btn btn-primary btn-sm text-white float-end"> BACK</a>
                </h4>
            </div>
            <div class="card-body">
                    <form method ="POST" action="{{url('admin/department')}}" enctype="multipart/form-data">
                      @csrf
                        <div class="row">
                            
                          
                            <div class="col-md-6 mb-3">
                                <label>Name</label>
                                <input type="text" name="Name" id="Name" class="form-control"/>
                                @error('Name') <small class="text-danger">{{$message}} </small>@enderror
                            </div>
                             <div class="col-md-12 mb-3">
                                <label>Description</label>
                                <input type="text" name="Description" id="Description" class="form-control" rows="3"/>
                                @error('Description') <small class="text-danger">{{$message}} </small>@enderror
                            
                            </div>
                            {{-- <div class="col-md-6 mb-3">
                                <label>Images</label>
                                <input type="file" name="Images" class="form-control"/>
                            </div> --}}
                            <div class="col-md-6 mb-3">
                                <label>Services</label>
                                <input type="text" name="Services" id="Services" class="form-control"/>
                                @error('Services') <small class="text-danger">{{$message}} </small>@enderror
                            
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Image</label>
                                <input class="form-control" name="Image" type="file" id="Image">
                                @error('Image') <small class="text-danger">{{$message}} </small>@enderror
                            
                            </div>
                            {{--
                            <div class="col-md-6 mb-3">
                                <label>Status</label>
                                <input type="checkbox" name="STATUS" id="STATUS" class="form-control"/>
                                
                            </div>
                             <div class="col-md-12 mb-3">
                                <h4>SEO TAGS</h4>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Meta Title</label>
                                <input type="meta-title" name="meta-title" id="meta-title" class="form-control"/>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Meta Keyword</label>
                                <input type="meta-keyword" name="meta-keyword"  id="meta-keyword" class="form-control"/>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Meta Description</label>
                                <input type="meta-description" name="meta-description" id="meta-description"  class="form-control"/>
                            </div> --}}
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