@extends('layouts.app')

@section('title', 'Show Administrator')

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
    <main class="app-content1">
                <div class="card">
                    <div class="card-header h5 text-dark">View Administrator Information</div>
                    <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4 border pt-2">
                            <h5>Administrator Photo</h5><hr>
                            <p><img style="width:400px;height:400px;" src="/storage/cover_image/{{$user->cover_image}}" alt="No image Found" class="rounded img-fluid p-10"></p>
                        </div>
                        <div class="col-sm-8 border pt-2">
                            <h5>Administrator Details</h5><hr>
                            <ul class="list-group">
                                <li class="list-group-item"><strong>Name:</strong> {{$user->name}}</li>
                                <li class="list-group-item"><strong>Position:</strong> {{$user->occupation}}</li>
                                <li class="list-group-item"><strong>Username:</strong> {{$user->reg_number}}</li>
                                <li class="list-group-item"><strong>Serial Code:</strong> {{$user->code}}</li>
                                <li class="list-group-item"><strong>Phone Number:</strong> {{$user->phone}}</li>
                                <li class="list-group-item"><strong>Gender:</strong> {{$user->gender}}</li>
                                <li class="list-group-item"><strong>Date of birth:</strong> {{date('F d, Y',strtotime($user->date_of_birth))}}</li>
                                <li class="list-group-item"><strong>Date of join:</strong> {{date('F d, Y',strtotime($user->created_at))}}</li>
                            </ul>
                        </div>
                    </div>
                    </div>   
                    <div class="card-footer">
                        <a class="btn btn-success btn-lg" href="{{\Illuminate\Support\Facades\URL::to('/administrator')}}">Go back</a>
                    </div>
                </div>
    </main>

@endsection


