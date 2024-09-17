@extends('download.layout')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4> Edit Downloads
                    <a href="{{url('/admin/download')}}" class="btn btn-primary btn-sm text-white float-end"> BACK</a>
                </h4>
            </div>
            <div class="card-body">
                <form method ="POST" action="{{url('/admin/download/edit/'.$id->id)}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="row">
                        
                       
                        <div class="col-md-6 mb-3">
                            <strong>File</strong>
                            <input type="text" name="File" id="File" value={{$id->File}} placeholder="Text" class="form-control"/>
                            @error('File') <small class="text-danger">{{$message}} </small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>FileName</strong>
                            <input type="text" name="FileName" id="FileName" value={{$id->FileName}} placeholder="Text" class="form-control"/>
                            @error('FileName') <small class="text-danger">{{$message}} </small>@enderror
                        </div>
                   
                        <div class="col-md-6 mb-3">
                            <strong>Image</strong>
                            <input class="form-control" name="Image" value="{{$id->Image}}" type="file" id="Image">
                            @error('Image') <small class="text-danger">{{$message}} </small>@enderror
                        
                        </div>
                        <div class="col-md-12 mb-3">
                            <input type="submit" value="Save" class="btn btn-success"></br>
                
                        </div>
                    </div> 
                </form>
        </div>
        </div>
    </div>
</div>    
@endsection

