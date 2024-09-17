@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        @if(session('message'))
           <div class="alert alert-success">{{session ('message')}}</div>
        
       @endif
        <div class="card">
            <div class="card-header">
                <h4> Doctors
                    <a href="{{url('admin/doctors/create')}}" class="btn btn-primary btn-sm text-white float-end"> Add Doctors</a>
                </h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Department</th>
                            <th>Doctor Name</th>  
                            <th>Educational_Credentials</th>                       
                            <th>Email</th>
                            <th>Incoming Time</th>
                            <th>Outgoing Time</th>
                            <th>Description</th>            
                            <th>Facebook URL</th>
                            <th>Linkedin URL</th>
                            <th>Expertise</th>  
                            <th>Qualification</th>                       
                            <th>Awards</th>
                            <th>Professional Membership</th>                            
                              
                                                     
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($doctors as $doctor)
                        <tr>
                            <td> {{$doctor->id}}</td>
                            <td>
                                @if($doctor->department)
                                    {{$doctor->department->Name}}
                                @else
                                    No Departments
                                @endif
                                  
                            </td>
                            <td> {{$doctor->Name}}</td>
                            <td> {{$doctor->Educational_Credentials}}</td>
                            <td> {{$doctor->Email}}</td>
                            <td> {{$doctor->Incoming_Time}}</td>
                            <td> {{$doctor->Outgoing_Time}}</td>
                            <td> {{$doctor->Facebook_URL}}</td>
                            <td> {{$doctor->Linkedin_URL}}</td>
                            <td> {{$doctor->Expertise}}</td>
                            <td> {{$doctor->Qualification}}</td>
                            <td> {{$doctor->Awards}}</td>
                            <td> {{$doctor->Professional_Membership}}</td>
                         
                            <td> {{$doctor->status == '0' ? 'Visible' : 'Hidden'}}</td>
                            <td>
                                <a  href="{{url('admin/doctors/edit',$doctor->id)}}" class="btn btn-success">Edit</a>
                                <a href="{{url('admin/doctors/delete',$doctor->id)}}" class="btn btn-danger" onclick="return confirm ('Are your sure, you want  to delete this data ?')">Delete</a>
                                
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