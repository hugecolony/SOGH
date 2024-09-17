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
                        <form action="{{url('admin/carrers')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                        <div class="row">
                            
                          
                            <div class="col-md-6 mb-3">
                                <label>Job Title</label>
                                <input type="text" name="Title" id="Title" class="form-control"/>
                                @error('Title') <small class="text-danger">{{$message}} </small>@enderror
                            </div>
                             
                            <div class="col-md-6 mb-3">
                                <label>Job Type</label>
                                <input type="text" name="Type" id="Type" class="form-control"/>
                                @error('Type') <small class="text-danger">{{$message}} </small>@enderror
                            </div>
                             
                            <div class="col-md-6 mb-3">
                                <label>Qualification</label>
                                <input type="text" name="Qualification" id="Qualification" class="form-control"/>
                                @error('Qualification') <small class="text-danger">{{$message}} </small>@enderror
                            </div>

                             <div class="col-md-12 mb-3">
                                <label>Description</label>
                                <input type="text" name="Description" id="Description" class="form-control" rows="3"/>
                                @error('description') <small class="text-danger">{{$message}} </small>@enderror
                            
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Location</label>
                                <input type="text" name="Location" id="Location" class="form-control" rows="3"/>
                                @error('Location') <small class="text-danger">{{$message}} </small>@enderror
                            
                            </div>
                           <div class="col-md-6 mb-3">
                                <label>Terms & Conditions</label>
                                <input type="text" name="Terms" id="Terms" class="form-control"/>
                                @error('Terms') <small class="text-danger">{{$message}} </small>@enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Closing On</label>
                                <input class="form-control" name="ClosingOn" type="date" id="ClosingOn">
                                @error('Closing On') <small class="text-danger">{{$message}} </small>@enderror
                            
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Attachment</label>
                                <input class="form-control" name="Attachment" type="file" id="Attachment">
                                @error('Attachment') <small class="text-danger">{{$message}} </small>@enderror
                            
                            </div>

                           
                            <div class="col-md-6 mb-3">
                                <label>Status</label>
                                <input type="checkbox" name="stauts" id="status" class="width:30px; height:30px"/>
                                Checked=Hidden,Unchecked=Visible
                                
                            </div>
                            {{--
                            <div class="col-md-6 mb-3">
                                <label>Status</label>
                                <input type="checkbox" name="STATUS" id="STATUS" class="form-control"/>
                                
                            </div>
                             <div class="col-md-12 mb-3">
                                <h4>SEO TAGS</h4>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Meta Title</label>
                                <input type="meta-title" name="meta-title" id="meta-title" class="form-control"/>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Meta Keyword</label>
                                <input type="meta-keyword" name="meta-keyword"  id="meta-keyword" class="form-control"/>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Meta Description</label>
                                <input type="meta-description" name="meta-description" id="meta-description"  class="form-control"/>
                            </div> --}}
                            <div class="col-md-12 mb-3">
                                <button type="submit" name="submit" value="Save" class="btn btn-primary float-end">Save </button>

                            </div>
                        </div> 
                    </form>
            </div>
        </div>
    </div>
</div>    
@endsection