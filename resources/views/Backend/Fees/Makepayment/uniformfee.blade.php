@extends('layouts.app')

@section('title', 'Make payment')

@section('content')
<main class="app-content">
        <div class="app-title">
            <div>
                <h1 class="text-capitalize"><i class="fa fa-money"></i> Make Uniform Payment</h1>
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
            <div class="card-header h4">Choose Student Class to make Uniform Fee Payment</div>
            <div class="card-body">
                <ul class="list-group mb-5">
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/uniformfeebabyclass/create')}}">Baby Class</a>
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/uniformfeekinderone/create')}}">Kindergateen One</a>
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/uniformfeekindertwo/create')}}">Kindergateen Two</a>
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/uniformfeestandardone/create')}}">Standard One</a>
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/uniformfeestandardtwo/create')}}">Standard Two</a>
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/uniformfeestandardthree/create')}}">Standard Three</a>
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/uniformfeestandardfour/create')}}">Standard Four</a>
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/uniformfeestandardfive/create')}}">Standard Five</a>
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/uniformfeestandardsix/create')}}">Standard Six</a>
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/uniformfeestandardseven/create')}}">Standard Seven</a>
                </ul>
            </div>
            <div class="card-footer">
                <a class="btn btn-success btn-lg" href="{{\Illuminate\Support\Facades\URL::to('/dashboard')}}">Go back</a>
            </div>
        </div>
    </main>

@endsection