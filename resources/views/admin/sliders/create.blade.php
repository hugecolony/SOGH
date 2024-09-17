@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4> Add Sliders
                    <a href="{{url('admin/sliders')}}" class="btn btn-primary btn-sm text-white float-end"> BACK</a>
                </h4>
            </div>
            <div class="card-body">
                        <form action="{{url('admin/sliders')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                        <div class="row">
                            
                          
                            <div class="col-md-6 mb-3">
                                <label>Title</label>
                                <input type="text" name="title" id="title" class="form-control"/>
                                @error('Title') <small class="text-danger">{{$message}} </small>@enderror
                            </div>
                             <div class="col-md-12 mb-3">
                                <label>Description</label>
                                <input type="text" name="description" id="description" class="form-control" rows="3"/>
                                @error('description') <small class="text-danger">{{$message}} </small>@enderror
                            
                            </div>
                           
                            <div class="col-md-6 mb-3">
                                <label>Image</label>
                                <input class="form-control" name="image" type="file" id="Image">
                                @error('image') <small class="text-danger">{{$message}} </small>@enderror
                            
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Status</label>
                                <input type="checkbox" name="stauts" id="status" class="width:30px; height:30px"/>
                                Checked=Hidden,Unchecked=Visible
                                
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
                                <button type="submit" name="submit" value="Save" class="btn btn-primary float-end">Save </button>

                            </div>
                        </div> 
                    </form>
            </div>
        </div>
    </div>
</div>    
@endsection