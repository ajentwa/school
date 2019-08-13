@extends('layouts.app')

@section('title', 'View Primary Students')

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
            <div class="card-header h4">Primary Classes</div>
            <div class="card-body">
                <ul class="list-group mb-5">
                    <a class="h4 list-group-item list-group-item-action text-success font-italic d-flex justify-content-between align-items-center" href="{{\Illuminate\Support\Facades\URL::to('/standardone')}}">
                        Standard One
                    <span class="badge badge-success badge-pill">{{count($stdone)}}</span>
                    </a>
                    <a class="h4 list-group-item list-group-item-action text-success font-italic d-flex justify-content-between align-items-center" href="{{\Illuminate\Support\Facades\URL::to('/standardtwo')}}">
                        Standard Two
                    <span class="badge badge-success badge-pill">{{count($stdtwo)}}</span>
                    </a>
                    <a class="h4 list-group-item list-group-item-action text-success font-italic d-flex justify-content-between align-items-center" href="{{\Illuminate\Support\Facades\URL::to('/standardthree')}}">
                        Standard Three
                        <span class="badge badge-success badge-pill">{{count($stdthree)}}</span>
                    </a>
                    <a class="h4 list-group-item list-group-item-action text-success font-italic d-flex justify-content-between align-items-center" href="{{\Illuminate\Support\Facades\URL::to('/standardfour')}}">
                        Standard Four
                        <span class="badge badge-success badge-pill">{{count($stdfour)}}</span>
                    </a>
                    <a class="h4 list-group-item list-group-item-action text-success font-italic d-flex justify-content-between align-items-center" href="{{\Illuminate\Support\Facades\URL::to('/standardfive')}}">
                        Standard Five
                        <span class="badge badge-success badge-pill">{{count($stdfive)}}</span>
                    </a>
                    <a class="h4 list-group-item list-group-item-action text-success font-italic d-flex justify-content-between align-items-center" href="{{\Illuminate\Support\Facades\URL::to('/standardsix')}}">
                        Standard Six
                        <span class="badge badge-success badge-pill">{{count($stdsix)}}</span>
                    </a>
                    <a class="h4 list-group-item list-group-item-action text-success font-italic d-flex justify-content-between align-items-center" href="{{\Illuminate\Support\Facades\URL::to('/standardseven')}}">
                        Standard Seven
                        <span class="badge badge-success badge-pill">{{count($stdseven)}}</span>
                    </a>
                </ul>
            </div>
            <div class="card-footer h4">
                <a class="btn btn-success btn-lg" href="{{\Illuminate\Support\Facades\URL::to('/student')}}">Go Back</a>
            </div>
        </div>
    </main>

@endsection