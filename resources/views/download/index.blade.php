@extends('download.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12" style="padding: 20px">
                @if(session('message'))
                <div class="alert alert-success">{{session ('message')}}</div>
                
            @endif
                <div class="card">
                    <div class="card-header">
                        <h1>Downloads & Carrers</h1>
                    </div>
                    <div class="card-body">
                        <h3> 
                            <a href="{{url('admin/download/create')}}" class="btn btn-success btn-sm text-white float-start"> Add Downloads</a>
                            <a href="{{url('admin/dashboard')}}" class="btn btn-warning btn-sm float-end text-black "> Back</a>
                        </h3>
                       
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>FileName</th>
                                        <th>File Storage Address</th>
                                        <th>Actions</th>
                                        <th>Image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     
                                    
                                    @foreach ($downloads as $item)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$item->FileName}}</td>
                                            <td>{{$item->File}}</td>
                                            
                                            <td>
                                                {{-- <form action="" method="POST"> 
                                                 <a href="{{url('admin/download/show',$item->id)}}" class="btn btn-info">Show</a>
                                                </form> --}}
                                                 <a href="{{url('admin/download/show',$item->id)}}" class="btn btn-info">Show</a>
                                                
                                                <a href="{{url('admin/download/edit',$item->id)}}" class="btn btn-success">Edit</a>
                                                <a href="{{url('admin/download/delete',$item->id)}}" class="btn btn-danger">Destroy</a>
            
                                                <td> <embed src={{asset($item->File)}} width='50' height='50'class="img img-responsive"/></td>
                                            
                                            </td>
            
                                        </tr>
                                    
                                        @endforeach
                                    
                                
                                </tbody>
                            </table>
                            <div class="d-flex">
                                {!!$downloads->links('pagination::bootstrap-5')!!}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection