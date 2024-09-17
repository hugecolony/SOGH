@extends('employee.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12" style="padding: 20px">
                @if(session('message'))
                <div class="alert alert-success">{{session ('message')}}</div>
                
                @endif
                <div class="card">
                    <div class="card-header">
                        <h1>Employee</h1>
                    </div>
                    <div class="card-body">
                        <h3> 
                            <a href="{{url('admin/employee/create')}}" class="btn btn-success btn-sm text-white float-start"> Add Employee</a>
                            <a href="{{url('admin/dashboard')}}" class="btn btn-warning btn-sm float-end text-black "> Back</a>
                        
                        </h3>
                        

                        <br/>
                        <br/>
                     
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Social Media</th>
                                        
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($employees as $item)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$item->Name}}</td>
                                            <td>{{$item->Description}}</td>
                                               
                                            <td> <img src={{asset($item->Image)}} width='50' height='50'class="img img-responsive"/></td>
                                            
                                            <td>{{$item->SocialMedia}}</td>
                                        
                                            <td>
                                                <form action="" method="POST"> 
                                                 <a href="{{url('admin/employee/show',$item->id)}}" class="btn btn-info">Show</a>
                                                </form>
                                                <a href="{{url('admin/employee/edit',$item->id)}}" class="btn btn-success">Edit</a>
                                                <a href="{{url('admin/employee/delete',$item->id)}}" class="btn btn-danger">Destroy</a>
            
                                            </td>
            
                                        </tr>
                                    
                                    @endforeach
                            
                                    
                                </tbody>
                              
                            </table>
                            <div class="d-flex">
                                {!!$employees->links('pagination::bootstrap-5')!!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection