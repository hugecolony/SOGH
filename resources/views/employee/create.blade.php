@extends('employee.layout')
@section('content')
<div class="card" style="margin:20px">
    <div class="card" style="margin:20px">
        <div class="card-header">
            <a href="{{url('admin/employee')}}" class="btn btn-warning btn-sm float-end text-black "> Back</a>
            Create New Employee
        </div>
        <div class="card-body">
            <form action="{{url('admin/employee')}}" method="post" enctype="multipart/form-data">
                @csrf
                
                <label>Name</label></br>
                <input type="text" name="Name" id="Name" class="form-control"></br>
                @error('Name') <small class="text-danger">{{$message}} </small>@enderror
                <label>Description</label></br>
                <input type="text" name="Description" id="Description" class="form-control"></br>
                @error('Description') <small class="text-danger">{{$message}} </small>@enderror
                <input class="form-control" name="Image" type="file" id="Image">
                @error('Image') <small class="text-danger">{{$message}} </small>@enderror
                <label>SocialMedia</label></br>
                <input type="text" name="SocialMedia" id="SocialMedia" class="form-control"></br>
                @error('SocialMedia') <small class="text-danger">{{$message}} </small>@enderror
             
                
                
                
                <input type="submit" value="Save" class="btn btn-success"></br>
                
                
            </form>
        </div>
    </div>
</div>

@stop