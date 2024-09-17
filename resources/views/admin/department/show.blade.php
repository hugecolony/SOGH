@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4> Add Department
                    <a href="{{url('admin/department')}}" class="btn btn-primary btn-sm text-white float-end"> BACK</a>
                </h4>
            </div>
            <div class="card-body">             
                      @csrf
                      <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2> Show Department</h2>
                            </div>
                           
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                    
                                <strong>Name: </strong>
                                {{$id->Name}}
                            </div>
                            
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                    
                                <strong>Description: </strong>
                                {{$id->Description}}
                            </div>
                            
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Image: </strong>
                                <img src="{{$id->Image}}" width="500px"/>
                            </div>
                            
                        </div>
                    </div>
                   
            </div>
        </div>
    </div>
</div>    
@endsection

