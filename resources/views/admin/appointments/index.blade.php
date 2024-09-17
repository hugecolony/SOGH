@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        @if(session('message'))
            <div class="alert alert-success">{{session ('message')}}</div>
            
        @endif
        <div class="card">
            <div class="card-header">
                <h3> Request An Appointments
                    <a href="{{url('admin/appointments/create')}}" class="btn btn-primary float-end"> Add Appointments</a>
                </h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Department ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>  
                            <th>CNIC</th>
                            <th>Whatsapp</th>
                            <th>Mobile</th>  
                            <th>Appointment Date</th>  
                            <th>Reason of Appointments</th>
           
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($appointments as $appointment)
                        <tr>
                      
                            <td> {{$appointment->id}}</td>
                            <td>
                                @if($appointment->department)
                                    {{$appointment->department->Name}}
                                @else
                                    No Departments
                                @endif
                                  
                            </td>
                            <td> {{$appointment->First_Name}}</td>
                            <td> {{$appointment->Last_Name}}</td>
                            
                            
                            <td> {{$appointment->CNIC}}</td>
                            <td> {{$appointment->Whatsapp}}</td>
                            
                           
                            <td> {{$appointment->Mobile_Number}}</td>
                            
                            <td> {{$appointment->Appointment_date}}</td>
                            <td> {{$appointment->Reason_of_Appointment}}</td>
                            
                           
                            
                  

                            <td>
                                {{-- <form action="" method="POST"> 
                                    <a href="{{url('admin/blogs/show',$carrer->id)}}" class="btn btn-info">Show</a>
                                   </form> --}}
                                <a  href="{{url('admin/appointments/edit',$appointment->id)}}" class="btn btn-success">Edit</a>
                                <a href="{{url('admin/appointments/delete',$appointment->id)}}" class="btn btn-danger">Delete</a>
                                @csrf
                                @method('delete')
                            </td> 

                        </tr>
                            
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection