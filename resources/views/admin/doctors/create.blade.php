@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4> Add Doctors
                    <a href="{{url('admin/doctors')}}" class="btn btn-secondary btn-sm text-white float-end"> BACK</a>
                </h4>
            </div>
            <div class="card-body">
                @if($errors->any())
                <div class="alert alert-warning">
                        @foreach($errors->all() as $error)
                        <div> {{$error}}</div>
                        @endforeach
                </div>
                @endif
                    <form method ="POST" action="{{url('admin/doctors')}}" enctype="multipart/form-data">
                      @csrf
                      <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Home</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Profile</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="awards-tab" data-bs-toggle="tab" data-bs-target="#awards-tab-pane" type="button" role="tab" aria-controls="awards-tab-pane" aria-selected="false">Awards</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="images-tab" data-bs-toggle="tab" data-bs-target="#images-tab-pane" type="button" role="tab" aria-controls="images-tab-pane" aria-selected="false">Images</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="details-tab" data-bs-toggle="tab" data-bs-target="#details-tab-pane" type="button" role="tab" aria-controls="details-tab-pane" aria-selected="false">Details</button>
                          </li>
                      </ul>
                      
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade border p-3 show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                            <div class="mb-3">
                                <label> Department</label>
                                <select name="department_id" class="form-control">
                                    @foreach ($departments as $department)
                                        <option value="{{$department->id}}">{{$department->Name}} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Doctor Name</label>
                                <input type="text" name="Name" id="Name"class="form-control" rows="4"/>
                                @error('Name') <small class="text-danger">{{$message}} </small>@enderror
                            </div>

                            <div class="mb-3">
                                <label>Doctor Designation</label>
                                <input type="text" name="Designation" id="Designation" class="form-control"/>
                                @error('Designation') <small class="text-danger">{{$message}} </small>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Doctor Incoming Time</label>
                                <input type="time" name="Incoming_Time" id="Incoming_Time" class="form-control"/>
                                @error('Incoming_Time') <small class="text-danger">{{$message}} </small>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Doctor Outgoing Time</label>
                                <input type="time" name="Outgoing_Time" id="Outgoing_Time" class="form-control"/>
                                @error('Outgoing_Time') <small class="text-danger">{{$message}} </small>@enderror
                            </div>
                        </div>
                        <div class="tab-pane fade border p-3" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                            <div class="mb-3">
                                <label>Doctor Educational Credentials</label>
                                <input type="text" name="Educational_Credentials" id="Educational_Credentials" class="form-control"/>
                                @error('Educational_Credentials') <small class="text-danger">{{$message}} </small>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Doctor Email</label>
                                <input type="text" name="Email" id="Email" class="form-control"/>
                                @error('Email') <small class="text-danger">{{$message}} </small>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Facebook URL </label>
                                <input type="text" name="Facebook_URL" id="Facebook_URL" class="form-control"/>
                                @error('Facebook_URL') <small class="text-danger">{{$message}} </small>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Linkedin_URL </label>
                                <input type="text" name="Linkedin_URL" id="Linkedin_URL" class="form-control"/>
                                @error('Linkedin_URL') <small class="text-danger">{{$message}} </small>@enderror
                            </div>
                        </div>
                     
                        <div class="tab-pane fade border p-3" id="awards-tab-pane" role="tabpanel" aria-labelledby="awards-tab" tabindex="0">
                            <div class="mb-3">
                                <label>Awards </label>
                                <input type="text" name="Awards" id="Awards" class="form-control"/>
                                @error('Awards') <small class="text-danger">{{$message}} </small>@enderror
                            </div>

                            <div class="mb-3">
                                <label>Professional Membership </label>
                                <input type="text" name="Professional_Membership" id="Professional_Membership" class="form-control"/>
                                @error('Professional_Membership') <small class="text-danger">{{$message}} </small>@enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Status</label>
                                <input type="checkbox" name="stauts" id="status" class="width:30px; height:30px"/>
                                Checked=Hidden,Unchecked=Visible
                                
                            </div>
                        </div>


                        <div class="tab-pane fade border p-3" id="details-tab-pane" role="tabpanel" aria-labelledby="details-tab" tabindex="0">
                            <div class="mb-3">
                                <label>Description </label>
                                <input type="text" name="Description" id="Description" class="form-control"/>
                                @error('Description') <small class="text-danger">{{$message}} </small>@enderror
                            </div>

                            <div class="mb-3">
                                <label>Expertise</label>
                                <input type="text" name="Expertise" id="Expertise" class="form-control"/>
                                @error('Expertise') <small class="text-danger">{{$message}} </small>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Qualification</label>
                                <input type="text" name="Qualification" id="Qualification" class="form-control"/>
                                @error('Qualification') <small class="text-danger">{{$message}} </small>@enderror
                            </div>
                        </div>


                        <div class="tab-pane fade border p-3" id="images-tab-pane" role="tabpanel" aria-labelledby="images-tab" tabindex="0">
                            <div class="col-md-6 mb-3">
                                <label>Upload Doctor Image</label>
                                <input class="form-control" name="image[]" type="file" multiple>
                             
                            
                            </div>
                        </div>

                     
                      </div>


                      <div class="col-md-12 mb-3">
                        <button type="submit" name="submit" value="Save" class="btn btn-primary float-end">Save Data</button>

                    </div>
                    </form>
                
            </div>
        </div>
    </div>
</div>

@endsection