
<div class="row">
    <div class="col-md-12">
        @if(session('message'))
            <div class="alert alert-success">{{session ('message')}}</div>
            
        @endif
        <div class="card">
            <div class="card-header">
                <h3> Carrers
                    <a href="{{url('admin/carrers/create')}}" class="btn btn-primary float-end"> Add Carrers</a>
                </h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Job Title</th>
                            <th>Job Type</th>
                            <th>Qualification</th>
                            <th>Description</th>  
                            <th>Location</th>  
                            <th>Terms & Conditions</th>
                            <th>Closing On</th>
                            <th>Attachment</th>                       
                            <th>Status</th>
                            <th>Action</th>
                         
                                                     
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($carrers as $carrer)
                        <tr>
                      
                            <td> {{$carrer->id}}</td>
                            <td> {{$carrer->Title}}</td>
                            <td> {{$carrer->Type}}</td>
                            <td> {{$carrer->Qualification}}</td>
                            <td> {{$carrer->Description}}</td>
                            <td> {{$carrer->Location}}</td>
                            <td> {{$carrer->Terms}}</td>
                            <td>{{$carrer->ClosingOn}} </td>
                            
                         <td> 
                                <embed src={{asset($carrer->Attachment)}}  width='50' height='50' class="img img-responsive"/>
                            </td>
                            <td> {{$carrer->status == '0' ? 'Visible' : 'Hidden'}}</td>
                            <td>
                                <form action="" method="POST"> 
                                    <a href="{{url('admin/carrers/show',$carrer->id)}}" class="btn btn-info">Show</a>
                                   </form>
                                <a  href="{{url('admin/carrers/edit',$carrer->id)}}" class="btn btn-success">Edit</a>
                                <a href="{{url('admin/carrers/delete',$carrer->id)}}" class="btn btn-danger">Delete</a>
                                
                            </td> 

                        </tr>
                            
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

