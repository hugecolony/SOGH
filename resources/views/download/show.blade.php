@extends('download.layout')
@section('content')
<h1>SHOW</h1>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{url('/admin/download')}}">Back</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">

            <strong>File: </strong>
            {{$id->File}}
        </div>
        
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Image: </strong>
             <img src="{{$id->File}}" width="500px" class="img img-responsive"/>
         
        </div>
        
    </div>
</div>