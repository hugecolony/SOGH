@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4> Add Jobs
                    <a href="{{url('admin/jobs')}}" class="btn btn-primary btn-sm text-white float-end"> BACK</a>
                </h4>
            </div>
            <div class="card-body">
                        <form action="{{url('admin/jobs')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                        <div class="row">
                            
                          
                            <div class="col-md-6 mb-3">
                                <label>Name</label>
                                <input type="text" name="name" id="name" class="form-control"/>
                                @error('name') <small class="text-danger">{{$message}} </small>@enderror
                            </div>
                             
                            <div class="col-md-6 mb-3">
                                <label>Email</label>
                                <input type="text" name="email" id="email" class="form-control"/>
                                @error('email') <small class="text-danger">{{$message}} </small>@enderror
                            </div>
                             
                            <div class="col-md-6 mb-3">
                                <label>Phone</label>
                                <input type="integer" name="phone" id="phone" class="form-control" placeholder="3039063431"/>
                                @error('phone') <small class="text-danger">{{$message}} </small>@enderror
                            </div>
                            <div class="mb-3">
                                <label> Applied Position</label>
                                <select name="carrers_id" class="form-control">
                                    @foreach ($carrers as $carrer)
                                        <option value="{{$carrer->id}}">{{$carrer->Title}} </option>
                                    @endforeach
                                </select>
                            </div>
                           
                            <div class="col-md-6 mb-3">
                                <label>CV</label>
                                <input class="form-control" name="image" type="file" id="image">
                                @error('image') <small class="text-danger">{{$message}} </small>@enderror
                            
                            </div>
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