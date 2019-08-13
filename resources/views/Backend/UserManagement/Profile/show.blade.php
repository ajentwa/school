@extends('layouts.app')

@section('title', 'Show Officer')

@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-user"></i> My Profile</h1>
            </div>
            <ul class="app-breadcrumb list-unstyled">
                <li class="breadcrumb-item h5 font-italic pt-2">{{date('l  F jS, Y')}}</li>
            </ul>
        </div>
        <div class="app-title1">
            @include('layouts.includes.messages')
        </div>
    </main>
    <main class="app-content1">
                <div class="card">
                    <div class="card-header h5 text-dark">Personal Information
                    <a class="btn btn-success float-right ml-2" href="{{\Illuminate\Support\Facades\URL::to('/profile/edit/'.$user->id)}}"><i class="fa fa-user-o"></i> Edit Profile</a>
                    <div class=" float-right ml-2 d-inline-block"><a class="btn btn-success" href="javascript:window.print();" target="_blank"><i class="fa fa-print"></i> Print</a></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-10 border pt-2">
                            <div class="card">
                                <div class="card-header">
                                    <h5>My Details</h5>
                                </div>
                                <ul class="list-group">
                                    <li class="list-group-item"><strong>Name:</strong> {{$user->name}}</li>
                                    <li class="list-group-item"><strong>Position:</strong> {{$user->occupation}}</li>
                                    <li class="list-group-item"><strong>Employee Code:</strong> {{$user->reg_number}}</li>
                                    <li class="list-group-item"><strong>Serial Code:</strong> {{$user->code}}</li>
                                    <li class="list-group-item"><strong>Teaching Subject:</strong> {{$user->subject}}</li>
                                    <li class="list-group-item"><strong>Education level:</strong> {{$user->level}}</li>
                                    <li class="list-group-item"><strong>Salary:</strong> {{'Tsh'.$user->salary}}</li>
                                    <li class="list-group-item"><strong>Phone Number:</strong> {{$user->phone}}</li>
                                    <li class="list-group-item"><strong>Email Address:</strong> {{$user->email}}</li>
                                    <li class="list-group-item"><strong>Gender:</strong> {{$user->gender}}</li>
                                    <li class="list-group-item"><strong>Date of birth:</strong> {{date('d/m/Y',strtotime($user->date_of_birth))}}</li>
                                    <li class="list-group-item"><strong>Date of join:</strong> {{date('d/m/Y',strtotime($user->created_at))}}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2 border pt-2">
                            <div class="card">
                                <div class="card-header">
                                    <h5>My Photo</h5>
                                </div>
                                <p><img src="/storage/cover_image/{{$user->cover_image}}" alt="No image Found" class="img-fluid card-image"></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-success btn-lg" href="{{\Illuminate\Support\Facades\URL::to('/officer')}}">Go back</a>
                    </div>
                </div>
    </main>

@endsection


