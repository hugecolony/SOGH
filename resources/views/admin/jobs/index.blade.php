@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-12">
            @if(session('message'))
                <div class="alert alert-success">{{session ('message')}}</div>
                
            @endif
            <div class="card">
                <div class="card-header">
                    <h3> Jobs
                        <a href="{{url('admin/jobs/create')}}" class="btn btn-primary float-end"> Add Jobs</a>
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                              
                                <th>Applicant Name</th>  
                                               
                                <th>Applicant Email</th>
                               
                                <th>Applicant Phone</th>            
                                <th>Applied Position </th>
                                
                                <th> CV </th>
                                  
                                                         
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jobs as $job)
                            <tr>
                                <td> {{$job->id}}</td>
                         
                               
                                <td> {{$job->name}}</td>
                             
                                <td> {{$job->email}}</td>
                                <td> {{$job->phone}}</td>
                                <td>
                                  
                                    @if($job->carrers)
                                        {{$job->carrers->Title}}
                                    @else
                                        No Departments
                                    @endif
                                      
                                </td>
                             
                                <td> 
                                    <img src="{{asset("$job->image")}}" width='50' height='50' class="img img-responsive"/>
                                </td>
                                <td>
                                    <a  href="{{url('admin/jobs/edit',$job->id)}}" class="btn btn-success">Edit</a>
                                    <a href="{{url('admin/jobs/delete',$job->id)}}" class="btn btn-danger" onclick="return confirm ('Are your sure, you want  to delete this data ?')">Delete</a>
                                    
                                </td>
    
                            </tr>
                                
                            @endforeach
                        </tbody>
                </div>
            </div>
        </div>
    </div>
    
       
@endsection