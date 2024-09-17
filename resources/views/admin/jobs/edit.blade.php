@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4> Edit Carrers
                    <a href="{{url('admin/jobs')}}" class="btn btn-primary btn-sm text-white float-end"> BACK</a>
                </h4>
            </div>
            <div class="card-body">
                <form method ="POST" action="{{url('/admin/jobs/edit/'.$id->id)}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="row">
                        
                       
                        <div class="col-md-6 mb-3">
                            <strong> Name</strong>
                            <input type="text" name="name" id="name" value={{$id->name}} placeholder="name" class="form-control"/>
                            @error('name') <small class="text-danger">{{$message}} </small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Email</label>
                            <input type="text" name="email" id="email" value={{$id->email}} placeholder="email" class="form-control"/>
                            @error('email') <small class="text-danger">{{$message}} </small>@enderror
                        </div>
                         
                        <div class="col-md-12 mb-3">
                            <label>Phone</label>
                            <input type="text" name="phone" value="{{$id->phone}}" id="phone" class="form-control" rows="3"/>
                            @error('phone') <small class="text-danger">{{$message}} </small>@enderror
                        
                        </div>
                        <div class="mb-3">
                            <label> Position</label>
                            <select name="applied_position" class="form-control">
                                @foreach ($carrers as $department)
                                    <option value="{{$department->id}}" {{$department->id == $department->carrers_id ? 'selected':''}}>
                                        {{$department->Title}} </option>
                                @endforeach
                            </select>
                        </div>
                       

                        {{-- <div class="col-md-6 mb-3">
                            <label>Images</label>
                            <input type="file" name="Images" class="form-control"/>
                        </div> --}}
                       
                        <div class="col-md-6 mb-3">
                            <label>CV</label>
                            <input class="form-control" name="CV" value="{{$id->image}}" type="file" id="image">
                            {{-- @error('image') <small class="text-danger">{{$message}} </small>@enderror --}}
                        
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

