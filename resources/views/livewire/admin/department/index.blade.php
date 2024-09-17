<div class="row">
    <div class="col-md-12">
        @if(session('message'))
            <div class="alert alert-success">{{session ('message')}}</div>
            
        @endif
        <div class="card">
            <div class="card-header">
                <h3> Department
                    <a href="{{url('admin/department/create')}}" class="btn btn-primary float-end"> Add Department</a>
                </h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Image</th>  
                            <th>Description</th>                       
                            <th>Services</th>
                            <th>Action</th>
                         
                                                     
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($departments as $department)
                            <tr>
                                
                                <td>{{$department->id}}</td>
                                <td>{{$department->Name}}</td>
                               
                                <td> <img src={{asset($department->Image)}} width='50' height='50' class="img img-responsive"/></td>
                                            
                                <td>{{$department->Description}}</td>
                                {{-- <td>{{$department->STATUS == '1' ? 'Hidden':'Visible'}}</td> --}}
                              
                                <td>{{$department->Services}}</td>
                                <td> 
                                    <form action="" method="POST"> 
                                        <a href="{{url('admin/department/show',$department->id)}}" class="btn btn-info">Show</a>
                                       </form>
                                    <a  href="{{url('admin/department/edit',$department->id)}}" class="btn btn-success">Edit</a>
                                    <a href="{{url('admin/department/delete',$department->id)}}" class="btn btn-danger">Destroy</a>

                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>