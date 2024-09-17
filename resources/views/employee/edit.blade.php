@extends('employee.layout')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4> Edit Employee
                    <a href="{{url('/admin/employee')}}" class="btn btn-primary btn-sm text-white float-end"> BACK</a>
                </h4>
            </div>
            <div class="card-body">
                <form method ="POST" action="{{url('/admin/employee/edit/'.$id->id)}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="row">
                        
                       
                        <div class="col-md-6 mb-3">
                            <strong>Name</strong>
                            <input type="text" name="Name" id="Name" value={{$id->Name}} placeholder="Name" class="form-control"/>
                            @error('Name') <small class="text-danger">{{$message}} </small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Description</strong>
                            <input type="text" name="Description" id="Description" value={{$id->Description}} placeholder="Description" class="form-control"/>
                            @error('Description') <small class="text-danger">{{$message}} </small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong>Social Media</strong>
                            <input type="text" name="SocialMedia" id="SocialMedia" value={{$id->SocialMedia}} placeholder="SocialMedia" class="form-control"/>
                            @error('SocialMedia') <small class="text-danger">{{$message}} </small>@enderror
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

