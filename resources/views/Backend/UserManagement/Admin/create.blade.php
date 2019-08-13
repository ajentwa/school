@extends('layouts.app')

@section('title', 'Add Adminiatrator')

@section('content')
<main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-users"></i> Administrators</h1>
            </div>
            <ul class="app-breadcrumb list-unstyled">
                <li class="breadcrumb-item h5 font-italic pt-2">{{date('l F jS, Y')}}</li>
            </ul>
        </div>
        <div class="app-title1">
            @include('layouts.includes.messages')
        </div>
    </main>
    <main class="app-content1 ">
                <div class="card">
                    <div class="card-header h4 text-dark">Add New Adminiatrator</div>
                    <div class="card-body">
                        <form method="post" action="{{\Illuminate\Support\Facades\URL::to('administrator/store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col-sm-8 border pt-3 px-4">
                            <div class="form-group row">
                                <label class="control-label h6 col-sm-3">Full Name*</label>
                                <input class="form-control col-sm-9" type="text" name="name" placeholder="Enter full name" required>
                            </div>
                            </div>
                            <div class="col-sm-4"></div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-8 border pt-3 px-4">
                            <div class="form-group row">
                                <label class="control-label h6 col-sm-3">Username*</label>
                                <input class="form-control col-sm-9" type="text" name="reg_number" placeholder="Enter Username" required>
                            </div>
                            </div>
                            <div class="col-sm-4"></div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-8 border pt-3 px-4">
                            <div class="form-group row">
                                <label class="control-label h6 col-sm-3">Serial Code*</label>
                                <input class="form-control col-sm-9" type="text" name="code" placeholder="Enter serial code" required>
                            </div>
                            </div>
                            <div class="col-sm-4"></div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-8 border pt-3 px-4">
                            <div class="form-group row">
                                <label class="control-label d-block h6 col-sm-3">Gender</label>
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
                            <div class="col-sm-4"></div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-8 border pt-3 px-4">
                            <div class="form-group row">
                                <label class="control-label h6 col-sm-3">Cover Image (<em>Max Size: 2MB</em>)</label>
                                <input class="form-control-file col-sm-9" type="file" name="cover_image">
                            </div>
                            </div>
                            <div class="col-sm-4"></div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-8 border pt-3 px-4">
                            <div class="form-group row">
                                <label class="control-label h6 col-sm-3">Phone Number*</label>
                                <input class="form-control col-sm-9" type="number" name="phone" placeholder="Enter Phone Number" required>
                            </div>
                            </div>
                            <div class="col-sm-4"></div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-8 border pt-3 px-4">
                            <div class="form-group row">
                                <label class="control-label h6 col-sm-3">Date of birth*</label>
                                <input class="form-control col-sm-9"  type="date" name="date_of_birth" placeholder="Select Date of birth" required>
                            </div>
                            </div>
                            <div class="col-sm-4"></div>
                        </div>
                            <input type="hidden" name="role_id" value="1">
                            <input type="hidden" name="occupation" value="Administrator">
                            <a href="{{\Illuminate\Support\Facades\URL::to('/administrator')}}" class="btn btn-secondary btn-lg">Cancel</a>
                            <button type="submit" class="btn btn-success btn-lg">Submit</button>
                        </form>
                    </div>
                </div>
    </main>

@endsection