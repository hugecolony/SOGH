@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4> Edit Carrers
                    <a href="{{url('admin/carrers')}}" class="btn btn-primary btn-sm text-white float-end"> BACK</a>
                </h4>
            </div>
            <div class="card-body">
                <form method ="POST" action="{{url('/admin/carrers/edit/'.$id->id)}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="row">
                        
                       
                        <div class="col-md-6 mb-3">
                            <strong>Job Title</strong>
                            <input type="text" name="Title" id="Title" value={{$id->Title}} placeholder="Title" class="form-control"/>
                            @error('Title') <small class="text-danger">{{$message}} </small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Job Type</label>
                            <input type="text" name="Type" id="Type" value={{$id->Type}} placeholder="Type" class="form-control"/>
                            @error('Type') <small class="text-danger">{{$message}} </small>@enderror
                        </div>
                         
                        <div class="col-md-12 mb-3">
                            <label>Qualification</label>
                            <input type="text" name="Qualification" value="{{$id->Qualification}}" id="Qualification" class="form-control" rows="3"/>
                            @error('Qualification') <small class="text-danger">{{$message}} </small>@enderror
                        
                        </div>
                         <div class="col-md-12 mb-3">
                            <label>Description</label>
                            <input type="text" name="Description" value="{{$id->Description}}" id="Description" class="form-control" rows="3"/>
                            @error('Description') <small class="text-danger">{{$message}} </small>@enderror
                        
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Location</label>
                            <input type="text" name="Location" id="Location" value={{$id->Location}} placeholder="Location" class="form-control"/>
                            @error('Location') <small class="text-danger">{{$message}} </small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Terms & Conditions</label>
                            <input type="text" name="Terms" id="Terms" value={{$id->Terms}} class="form-control"/>
                            @error('Terms') <small class="text-danger">{{$message}} </small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Closing On</label>
                            <input class="form-control" name="ClosingOn"  value={{$id->ClosingOn}}  type="date" id="ClosingOn">
                            @error('Closing On') <small class="text-danger">{{$message}} </small>@enderror
                        
                        </div>

                        {{-- <div class="col-md-6 mb-3">
                            <label>Images</label>
                            <input type="file" name="Images" class="form-control"/>
                        </div> --}}
                       
                        <div class="col-md-6 mb-3">
                            <label>Attachment</label>
                            <input class="form-control" name="Attachment" value="{{$id->Attachment}}" type="file" id="Attachment">
                            @error('Attachment') <small class="text-danger">{{$message}} </small>@enderror
                        
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
                            <button type="submit" name="submit" value="Save" class="btn btn-primary float-end">Save Data</button>

                        </div>
                    </div> 
                </form>
        </div>
        </div>
    </div>
</div>    
@endsection

