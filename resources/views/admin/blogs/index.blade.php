@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        @if(session('message'))
            <div class="alert alert-success">{{session ('message')}}</div>
            
        @endif
        <div class="card">
            <div class="card-header">
                <h3> Blogs
                    <a href="{{url('admin/blogs/create')}}" class="btn btn-primary float-end"> Add Blogs</a>
                </h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>  
                            <th>Cover Image</th>  
                            <th>Date</th>
                            <th>Actions</th>
                         
                                                     
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                        <tr>
                      
                            <td> {{$blog->id}}</td>
                            <td> {{$blog->Title}}</td>
                            <td> {{$blog->Description}}</td>
                           
                          
                            
                         <td> 
                                <img src={{asset($blog->CoverImage)}}  width='50' height='50' class="img img-responsive"/>
                        </td>

                            <td> {{$blog->Date}}</td>
                            <td>
                                {{-- <form action="" method="POST"> 
                                    <a href="{{url('admin/blogs/show',$carrer->id)}}" class="btn btn-info">Show</a>
                                   </form> --}}
                                <a  href="{{url('admin/blogs/edit',$blog->id)}}" class="btn btn-success">Edit</a>
                                <a href="{{url('admin/blogs/delete',$blog->id)}}" class="btn btn-danger">Delete</a>
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