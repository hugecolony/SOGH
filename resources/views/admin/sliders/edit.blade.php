@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4> Edit Home Slider
                    <a href="{{url('admin/sliders')}}" class="btn btn-primary btn-sm text-white float-end"> BACK</a>
                </h4>
            </div>
            <div class="card-body">
                <form method ="POST" action="{{url('/admin/sliders/edit/'.$id->id)}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="row">
                        
                       
                        <div class="col-md-12 mb-3">
                            <strong>Title</strong>
                            <input type="text" name="title" id="title" value={{$id->title}} placeholder="title" class="form-control" rows="3"/>
                            @error('title') <small class="text-danger">{{$message}} </small>@enderror
                        </div>
                         <div class="col-md-12 mb-3">
                            <label>Description</label>
                            <input type="text" name="description" value="{{$id->description}}" id="description" class="form-control" rows="3"/>
                            @error('description') <small class="text-danger">{{$message}} </small>@enderror
                        
                        </div>
                        {{-- <div class="col-md-6 mb-3">
                            <label>Images</label>
                            <input type="file" name="Images" class="form-control"/>
                        </div> --}}
                        <div class="mb-3">
                            <label>Status</label></br>
                            <input type="checkbox" name="status"{{$id->status == '1' ? 'checked': '' }} id="status" style="width=30px ; height:50px"  alt="Slider"/>
                            Checked=Hidden,Unchecked=Visible
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Image</label>
                            <input class="form-control" name="image" value="{{$id->image}}" type="file" id="Image">
                            @error('image') <small class="text-danger">{{$message}} </small>@enderror
                        
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

