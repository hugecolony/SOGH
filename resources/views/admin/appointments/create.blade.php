@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4> Add Blogs
                    <a href="{{url('admin/appointment')}}" class="btn btn-primary btn-sm text-white float-end"> BACK</a>
                </h4>
            </div>
            <div class="card-body">
                @if($errors->any())
                <div class="alert alert-warning">
                        @foreach($errors->all() as $error)
                        <div> {{$error}}</div>
                        @endforeach
                </div>
                @endif
                    <form method ="POST" action="{{url('admin/appointment')}}" enctype="multipart/form-data">
                      @csrf
                        <div class="row">
                            
                          
                            <div class="col-md-6 mb-3">
                                <label>First Name</label>
                                <input type="text" name="First_Name" id="First_Name" class="form-control"/>
                                @error('First_Name') <small class="text-danger">{{$message}} </small>@enderror
                            </div>
                             <div class="col-md-12 mb-3">
                                <label>Last Name</label>
                                <input type="text" name="Last_Name" id="Last_Name" class="form-control" rows="3"/>
                                @error('Last_Name') <small class="text-danger">{{$message}} </small>@enderror
                            
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>CNIC</label>
                                <input type="text" name="CNIC" id="CNIC" class="form-control"/>
                                @error('CNIC') <small class="text-danger">{{$message}} </small>@enderror
                            </div>
                             <div class="col-md-12 mb-3">
                                <label>Whatsapp</label>
                                <input type="text" name="Whatsapp" id="Whatsapp" class="form-control" rows="3"/>
                                @error('Whatsapp') <small class="text-danger">{{$message}} </small>@enderror
                            
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Mobile Number</label>
                                <input type="text" name="Mobile_Number" id="Mobile_Number" class="form-control" rows="3"/>
                                @error('Mobile_Number') <small class="text-danger">{{$message}} </small>@enderror
                            
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Date</label>
                                <input type="date" name="Appointment_date" id="Appointment_date" class="form-control" />
                                @error('Appointment_date') <small class="text-danger">{{$message}} </small>@enderror
                            
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Reason of Appointment</label>
                                <input type="text" name="Reason_of_Appointment" id="Reason_of_Appointment" class="form-control" />
                                @error('Reason_of_Appointment') <small class="text-danger">{{$message}} </small>@enderror
                            
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="mb-3">
                                    <label> Department ID</label>
                                    <select name="department_id" class="form-control">
                                        @foreach ($departments as $department)
                                            <option value="{{$department->id}}">{{$department->Name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            
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