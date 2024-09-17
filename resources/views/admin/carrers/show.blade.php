@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4> Add Carrers
                    <a href="{{url('admin/carrers')}}" class="btn btn-primary btn-sm text-white float-end"> BACK</a>
                </h4>
            </div>
            <div class="card-body">             
                      @csrf
                      <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2> Show Carrers</h2>
                            </div>
                           
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                    
                                <strong>Job Title: </strong>
                                {{$id->Title}}
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
                                <strong>Attachment: </strong>
                                <embed src={{asset($id->Attachment)}} width='500' height='500'class="img img-responsive"/>
                            </div>
                            
                        </div>
                    </div>
                   
            </div>
        </div>
    </div>
</div>    
@endsection

