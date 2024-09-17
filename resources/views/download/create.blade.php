@extends('download.layout')
@section('content')
<div class="card" style="margin:20px">
    <div class="card" style="margin:20px">
        <div class="card-header">
            <a href="{{url('admin/download')}}" class="btn btn-warning btn-sm float-end text-black "> Back</a>
     
            Create New Download
        </div>
                
        <div class="card-body">
            <form action="{{url('admin/download')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6 mb-3">
                            
                <label>FileName</label></br>
                <input type="text" name="FileName" id="FileName" class="form-control"></br>
                @error('FileName') <small class="text-danger">{{$message}} </small>@enderror
                </div>
                <div class="col-md-6 mb-3">
                            
                <label>Image</label></br>
                <input class="form-control" name="File" type="file" id="File">
                @error('File') <small class="text-danger">{{$message}} </small>@enderror
                </div>
                                <div class="col-md-12 mb-3">

                <input type="submit" value="Save" class="btn btn-success"></br>
                </div>
                
            </form>
        </div>
    </div>
</div>

@stop