@extends('layouts.app')

@section('title', 'View Students')

@section('content')
<main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-users"></i> Students</h1>
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
            <div class="card-header h4">Students Classes</div>
            <div class="card-body">
                <ul class="list-group mb-5">
                    <a class="h4 list-group-item list-group-item-action text-success font-italic d-flex justify-content-between align-items-center" href="{{\Illuminate\Support\Facades\URL::to('/student/nursery')}}">
                        Nursery Students
                    <span class="badge badge-success badge-pill">{{$students_nursery}}&nbsp; Students</span>
                    </a>
                    <a class="h4 list-group-item list-group-item-action text-success font-italic d-flex justify-content-between align-items-center mb-3" href="{{\Illuminate\Support\Facades\URL::to('/student/primary')}}">
                        Primary Students
                    <span class="badge badge-success badge-pill">{{$students_primary}}&nbsp; Students</span>
                    </a>
                    <li class="h4 list-group-item list-group-item-action text-dark d-flex justify-content-between align-items-center">
                        Totol number of Students:
                    <span class="badge badge-dark badge-pill">{{$total}}&nbsp; Students</span>
                    </li>
                </ul>
            </div>
        </div>
    </main>

@endsection