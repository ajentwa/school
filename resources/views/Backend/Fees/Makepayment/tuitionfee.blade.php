@extends('layouts.app')

@section('title', 'Make payment')

@section('content')
<main class="app-content">
        <div class="app-title">
            <div>
                <h1 class="text-capitalize"><i class="fa fa-money"></i> Make Tuition fee Payment</h1>
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
            <div class="card-header h4">Choose Student Class to make Tuition Fee Payment</div>
            <div class="card-body">
                <ul class="list-group mb-5">
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/tuitionfeebabyclass/create')}}">Baby Class</a>
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/tuitionfeekinderone/create')}}">Kindergateen One</a>
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/tuitionfeekindertwo/create')}}">Kindergateen Two</a>
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/tuitionfeestandardone/create')}}">Standard One</a>
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/tuitionfeestandardtwo/create')}}">Standard Two</a>
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/tuitionfeestandardthree/create')}}">Standard Three</a>
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/tuitionfeestandardfour/create')}}">Standard Four</a>
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/tuitionfeestandardfive/create')}}">Standard Five</a>
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/tuitionfeestandardsix/create')}}">Standard Six</a>
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/tuitionfeestandardseven/create')}}">Standard Seven</a>
                </ul>
            </div>
            <div class="card-footer">
                <a class="btn btn-success btn-lg" href="{{\Illuminate\Support\Facades\URL::to('/dashboard')}}">Go back</a>
            </div>
        </div>
    </main>

@endsection