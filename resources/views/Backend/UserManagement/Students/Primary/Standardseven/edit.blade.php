@extends('layouts.app')

@section('title', 'Edit Student')

@section('content')
<main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-users"></i> Standard Seven</h1>
            </div>
            <ul class="app-breadcrumb list-unstyled">
                <li class="breadcrumb-item h5 font-italic pt-2">{{date('l  F jS, Y')}}</li>
            </ul>
        </div>
        <div class="app-title1">
            @include('layouts.includes.messages')
        </div>
    </main>
    <main class="app-content1 ">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header h4 text-dark">Edit Student Information</div>
                    <div class="card-body">
                        <div class="row">
                        <div class="col-md-12 col-sm-12">
                        <form method="post" action="{{\Illuminate\Support\Facades\URL::to('standardseven/update/'.$user->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col border pt-2 px-2">
                            <div class="form-group">
                                <label class="control-label h5">Full Name*</label>
                                <input class="form-control" type="text" name="name" value="{{$user->name}}" required>
                            </div>
                            </div>
                            <div class="col border pt-2 px-2">
                            <div class="form-group">
                                <label class="control-label h5">Registration Number*</label>
                                <input class="form-control" type="text" name="reg_number" value="{{$user->reg_number}}" required>
                            </div>
                            </div>
                            <div class="col border pt-2 px-2">
                            <div class="form-group">
                                <label class="control-label h5">Permanent Address*</label>
                                <input class="form-control" type="text" name="address" value="{{$user->address}}" required>
                            </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col border pt-2 px-2">
                            <div class="form-group">
                                <label class="control-label h5">Date of birth*</label>
                                <input class="form-control" type="date" name="date_of_birth" value="{{$user->date_of_birth}}" required>
                            </div>
                            </div>
                            <div class="col border pt-2 px-2">
                            <div class="form-group">
                                <label class="control-label d-block h5">Gender</label>
                                <div class="form-check-inline">
                                <label class="form-check-label pl-0">
                                    <input class="form-check-input" type="radio" name="gender" value="Male"  @if($user->gender == 'Male') checked @endif>Male
                                </label>
                                </div> 
                                <div class="form-check-inline">
                                <label class="form-check-label pl-0">
                                    <input class="form-check-input" type="radio" name="gender" value="Female"   @if($user->gender == 'Female') checked @endif>Female
                                </label>
                                </div>
                            </div>
                            </div>
                            <div class="col border pt-2 px-2">
                            <div class="form-group">
                                <label class="control-label d-block h5">Orphan</label>
                                <div class="form-check-inline">
                                <label class="form-check-label pl-0">
                                    <input class="form-check-input" type="radio" name="orphan" value="Yes"  @if($user->orphan == 'Yes') checked @endif>Yes
                                </label>
                                </div> 
                                <div class="form-check-inline">
                                <label class="form-check-label pl-0">
                                    <input class="form-check-input" type="radio" name="orphan" value="No"   @if($user->orphan == 'No') checked @endif>No
                                </label>
                                </div>
                            </div>
                            </div>
                        </div> 
                        <div class="form-row">
                            <div class="col border pt-2 px-2">
                            <div class="form-group">
                                <label class="control-label h5">Passport size (<em>Less than 2MB</em>)</label>
                                <input class="form-control-file" type="file" name="cover_image">
                            </div>
                            </div>
                            <div class="col border pt-2 px-2">
                            <div class="form-group">
                                <label class="h5" for="fees_status">Fees status*</label>
                                <select class="form-control" name="fees_status" id="fees_status" required>
                                    <option value="{{$user->fees_status}}">{{$user->fees_status}}</option>
                                    <option value="Full fees">Full Fees</option>
                                    <option value="Third quarter fees">Third Quarter Fees</option>
                                    <option value="Half fees">Half Fees</option>
                                    <option value="Free fees">Free Fees</option>
                                </select>
                            </div>
                            </div>
                            <div class="col border pt-2 px-2">
                            <div class="form-group">
                                <label class="control-label h5">Parent Name*</label>
                                <input class="form-control" type="text" name="relative_name" value="{{$user->relative_name}}" required>
                            </div> 
                            </div> 
                        </div> 
                        <div class="form-row">
                            <div class="col border pt-2 px-2">
                            <div class="form-group">
                                <label class="control-label h5">Parent Occupation*</label>
                                <input class="form-control" type="text" name="relative_occupation" value="{{$user->relative_occupation}}" required>
                            </div> 
                            </div> 
                            <div class="col border pt-2 px-2">
                            <div class="form-group">
                                <label class="control-label h5">Parent Phone No1*</label>
                                <input class="form-control" type="number" name="relative_phone1" value="{{$user->relative_phone1}}" required>
                            </div>
                            </div>
                            <div class="col border pt-2 px-2">
                            <div class="form-group">
                                <label class="control-label h5">Parent Phone No2*</label>
                                <input class="form-control" type="number" name="relative_phone2" value="{{$user->relative_phone2}}" required>
                            </div>
                            </div>
                        </div> 
                            <input type="hidden" name="role_id" value="4">
                            <input type="hidden" name="code" value="1234">
                            <input type="hidden" name="class_name" value="Standard Seven">
                            <input type="hidden" name="occupation" value="Student">
                            <a href="{{\Illuminate\Support\Facades\URL::to('/standardseven')}}" class="btn btn-secondary btn-lg mr-2">Cancel</a>
                            <button type="submit" class="btn btn-success btn-lg">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection

    