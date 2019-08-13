@extends('layouts.app')

@section('title', 'Show Student')

@section('content')
<main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-users"></i> Standard One</h1>
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
                    <div class="card-header h4 text-dark">Student Information</div>
                    <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4 border pt-2">
                            <h5>Student Photo</h5><hr>
                            <p><img style="height:400px;width:400px" src="/storage/cover_image/{{$user->cover_image}}" alt="No Image Found" class="rounded img-fluid p-10"></p>
                        </div>
                        <div class="col-sm-8 border pt-2">
                            <h5>Student Details</h5><hr>
                            <ul class="list-group">
                                <li class="list-group-item"><strong>Full Name:</strong> {{$user->name}}</li>
                                <li class="list-group-item"><strong>Registration number:</strong> {{$user->reg_number}}</li>
                                <li class="list-group-item"><strong>Class:</strong> {{$user->class}}</li>
                                <li class="list-group-item"><strong>Permanent Address:</strong> {{$user->address}}</li>
                                <li class="list-group-item"><strong>Gender:</strong> {{$user->gender}}</li>
                                <li class="list-group-item"><strong>Orphan:</strong> {{$user->orphan}}</li>
                                <li class="list-group-item"><strong>Fees Status:</strong> {{$user->fees_status}}</li>
                                <li class="list-group-item"><strong>Date of birth:</strong> {{date('d/m/Y', strtotime($user->date_of_birth))}}</li>
                                <li class="list-group-item"><strong>Date of join:</strong> {{date('d/m/Y', strtotime($user->created_at))}}</li>
                                <li class="list-group-item"><strong>Parent Name:</strong> {{$user->relative_name}}</li>
                                <li class="list-group-item"><strong>Parent Occupation:</strong> {{$user->relative_occupation}}</li>
                                <li class="list-group-item"><strong>Parent Phone No1:</strong> {{$user->relative_phone1}}</li>
                                <li class="list-group-item"><strong>Parent Phone No2:</strong> {{$user->relative_phone2}}</li>
                            </ul>
                        </div>
                    </div>
                    </div>   
                    <div class="card-footer">
                        <a class="btn btn-success btn-lg" href="{{\Illuminate\Support\Facades\URL::to('/standardone')}}">Go back</a>
                    </div>
        </div>
    </main>

@endsection


