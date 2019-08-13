@extends('layouts.app')

@section('title', 'View Nursery Students')

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
            <div class="card-header h4">Nursery Classes</div>
            <div class="card-body">
                <ul class="list-group mb-5">
                    <a class="h4 list-group-item list-group-item-action text-success font-italic d-flex justify-content-between align-items-center" href="{{\Illuminate\Support\Facades\URL::to('/babyclass')}}">
                    Baby Class
                    <span class="badge badge-success badge-pill">{{count($babyclass)}}</span>
                    </a>
                    <a class="h4 list-group-item list-group-item-action text-success font-italic d-flex justify-content-between align-items-center" href="{{\Illuminate\Support\Facades\URL::to('/kinderone')}}">
                        Kindergateen One
                        <span class="badge badge-success badge-pill">{{count($kinderone)}}</span>
                    </a>
                    <a class="h4 list-group-item list-group-item-action text-success font-italic d-flex justify-content-between align-items-center" href="{{\Illuminate\Support\Facades\URL::to('/kindertwo')}}">
                        Kindergateen Two
                        <span class="badge badge-success badge-pill">{{count($kindertwo)}}</span>
                    </a>
                </ul>
            </div>
            <div class="card-footer h4">
                <a class="btn btn-success btn-lg" href="{{\Illuminate\Support\Facades\URL::to('/student')}}">Go Back</a>
            </div>
        </div>
    </main>

@endsection