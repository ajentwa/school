@extends('layouts.app')

@section('title', 'View Tuition fee menu')

@section('content')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-money"></i> Remedial Fee</h1>
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
            <div class="card-header h4">Select Student Class For Remedial Fee Payment</div>
            <div class="card-body">
                <ul class="list-group mb-5">
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/remedialfeebabyclass')}}">Baby Class</a>
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/remedialfeekinderone')}}">Kindergateen One</a>
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/remedialfeekindertwo')}}">Kindergateen Two</a>
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/remedialfeestandardone')}}">Standard One</a>
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/remedialfeestandardtwo')}}">Standard Two</a>
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/remedialfeestandardthree')}}">Standard Three</a>
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/remedialfeestandardfour')}}">Standard Four</a>
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/remedialfeestandardfive')}}">Standard Five</a>
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/remedialfeestandardsix')}}">Standard Six</a>
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/remedialfeestandardseven')}}">Standard Seven</a>
                </ul>
            </div>
            <div class="card-footer">
                <a href="{{\Illuminate\Support\Facades\URL::to('/feepayment')}}" class="btn btn-success btn-lg">Go Back</a>
            </div>
        </div>
    </main>

@endsection