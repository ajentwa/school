@extends('layouts.app')

@section('title', 'Add Worker')

@section('content')
<main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-users"></i> School Workers</h1>
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
                <div class="card">
                    <div class="card-header h4 text-dark">Add New Worker</div>
                    <div class="card-body">
                        <div class="row">
                        <div class="col-md-12 col-sm-12">
                        <form method="post" action="{{\Illuminate\Support\Facades\URL::to('worker/store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col border pt-2 px-2">
                            <div class="form-group">
                                <label class="control-label h6">Full Name*</label>
                                <input class="form-control" type="text" name="name" placeholder="Enter full name" required>
                            </div>
                            </div>
                            <div class="col border pt-2 px-2">
                            <div class="form-group">
                                <label class="control-label h6">Employee Code*</label>
                                <input class="form-control" type="text" name="reg_number" placeholder="Enter Registration Number" required>
                            </div>
                            </div>
                            <div class="col border pt-2 px-2">
                            <div class="form-group">
                                <label class="control-label h6">Education level*</label>
                                <input class="form-control" type="text" name="level" placeholder="Enter Education Level" required>
                            </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col border pt-2 px-2">
                            <div class="form-group">
                                <label class="h5" for="class">Occupation</label>
                                <select class="form-control" name="occupation" id="class" required>
                                    <option value="">Select Occupation</option>
                                    <option value="Secretary">Secretary</option>
                                    <option value="Guardian">Guardian</option>
                                    <option value="Cooker">Cooker</option>
                                    <option value="Cleaner">Cleaner</option>
                                    <option value="Driver">Driver</option>
                                </select>
                            </div>
                            </div>
                            <div class="col border pt-2 px-2">
                            <div class="form-group">
                                <label class="control-label d-block h6">Gender</label>
                                <div class="form-check-inline">
                                <label class="form-check-label pl-0">
                                    <input class="form-check-input" type="radio" name="gender" value="Male" required>Male
                                </label>
                                </div> 
                                <div class="form-check-inline">
                                <label class="form-check-label pl-0">
                                    <input class="form-check-input" type="radio" name="gender" value="Female" required>Female
                                </label>
                                </div>
                            </div>
                            </div>
                            <div class="col border pt-2 px-2">
                            <div class="form-group">
                                <label class="control-label h6">Passport size (<em>Less than 2MB</em>)</label>
                                <input class="form-control-file" type="file" name="cover_image">
                            </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col border pt-2 px-2">
                            <div class="form-group">
                                <label class="control-label h6">Date of birth*</label>
                                <input class="form-control"  type="date" name="date_of_birth" placeholder="Select Date of birth" required>
                            </div>
                            </div>
                            <div class="col border pt-2 px-2">
                            <div class="form-group">
                                <label class="control-label h6">Relative Name*</label>
                                <input class="form-control" type="text" name="relative_name" placeholder="Enter Relative Name" required>
                            </div> 
                            </div> 
                            <div class="col border pt-2 px-2">
                            <div class="form-group">
                                <label class="control-label h6">Relative Phone No*</label>
                                <input class="form-control" type="text" name="relative_phone1" placeholder="Enter Relative Phone No" required>
                            </div> 
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col border pt-2 px-2">
                            <div class="form-group">
                                <label class="control-label h6">Phone Number*</label>
                                <input class="form-control" type="number" name="phone" placeholder="Enter Phone Number" required>
                            </div>
                            </div>
                            <div class="col">
                            </div>
                            <div class="col">
                            </div> 
                        </div>
                            <input type="hidden" name="code" value="1234">
                            <input type="hidden" name="role_id" value="5">
                            <a href="{{\Illuminate\Support\Facades\URL::to('/worker')}}" class="btn btn-secondary btn-lg">Cancel</a>
                            <button type="submit" class="btn btn-success btn-lg">Submit</button>
                        </form>
                    </div>
        </div>
    </main>

@endsection