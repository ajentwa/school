@extends('layouts.app')

@section('title', 'View Students fee')

@section('content')
<main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-money"></i> Fees Payment</h1>
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
            <div class="card-header h4 text-capitalize">Select Fee to make payment</div>
            <div class="card-body">
                <ul class="list-group mb-5">
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/tuitionfee')}}">Tuition Fee</a>
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/remedialfee')}}">Remedial Fee</a>
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/teaandlunchfee')}}">Tea and Lunch Fee</a>
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/uniformfee')}}">Uniform Fee</a>
                    <a class="h5 list-group-item list-group-item-action text-primary font-italic" href="{{\Illuminate\Support\Facades\URL::to('/malambafee')}}">Malamba Feeve</a>
                </ul>
            </div>
        </div>
    </main>

@endsection