@extends('layouts.app')

@section('title', 'Make payment')

@section('content')
<main class="app-content">
        <div class="app-title">
            <div>
                <h1 class="text-capitalize"><i class="fa fa-money"></i> Make Malamba fee Payment</h1>
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
            <div class="card-header h4">Choose Student Class to make Malamba Fee Payment</div>
            <div class="card-body">
                <ul class="list-group mb-5">
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/malambafeebabyclass/create')}}">Baby Class</a>
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/malambafeekinderone/create')}}">Kindergateen One</a>
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/malambafeekindertwo/create')}}">Kindergateen Two</a>
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/malambafeestandardone/create')}}">Standard One</a>
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/malambafeestandardtwo/create')}}">Standard Two</a>
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/malambafeestandardthree/create')}}">Standard Three</a>
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/malambafeestandardfour/create')}}">Standard Four</a>
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/malambafeestandardfive/create')}}">Standard Five</a>
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/malambafeestandardsix/create')}}">Standard Six</a>
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/malambafeestandardseven/create')}}">Standard Seven</a>
                </ul>
            </div>
            <div class="card-footer">
                <a class="btn btn-success btn-lg" href="{{\Illuminate\Support\Facades\URL::to('/dashboard')}}">Go back</a>
            </div>
        </div>
    </main>

@endsection