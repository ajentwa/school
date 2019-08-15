@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-gear"></i> Dashboard</h1>
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
          {{-- <div class="card-header h4">Welome to Our School</div> --}}
          <div class="card-body">
            <div class="row mx-auto">
                <div class="col-md-1">
                  <img style="height:90px" src="{{asset('asset/images/login.png')}}" alt="No Image">
                </div>
                <div class="col-md-11">
                  <div class="card-title text-uppercase text-center">
                    <h4>Kinyerezi islamic nursery and primary Schools</h3>
                    <p class="h5">arabic and english medium
                    <br>p.o.box 25680, tabata - kinyerezi dar-es-salaam
                    <br>Tel:0711 750 700<hr></p>
                  </div>
                </div>
            </div>
            <div class="row mx-auto">
                <h4 class="font-italic mb-3">Welome to Our School</h4><hr>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card text-uppercase font-weight-bold mb-3">
                  <div class="list-group">
                    <a href="{{\Illuminate\Support\Facades\URL::to('/student')}}" class="text-success list-group-item list-group-item-action d-flex justify-content-between align-items-center h4">
                      school students
                      <span class="badge badge-success badge-pill">{{ $school_students }}&nbsp; Students</span>
                    </a>
                    <a href="{{\Illuminate\Support\Facades\URL::to('/student/nursery')}}" class="text-success list-group-item list-group-item-action d-flex justify-content-between align-items-center h4">
                      nursery students
                      <span class="badge badge-success badge-pill">{{ $students_nursery }}&nbsp; Students</span>
                    </a>
                    <a href="{{\Illuminate\Support\Facades\URL::to('/student/primary')}}" class="text-success list-group-item list-group-item-action d-flex justify-content-between align-items-center h4">
                      primary students
                      <span class="badge badge-success badge-pill">{{ $students_primary }}&nbsp; Students</span>
                    </a>
                    <a href="{{\Illuminate\Support\Facades\URL::to('/makemalambapayment')}}" class="text-success list-group-item list-group-item-action d-flex justify-content-between align-items-center h4">
                      transport  fee payment
                      <span class="badge badge-success badge-pill">{{ count($malambafee) }}&nbsp; paid Students</span>
                    </a>
                    <a href="{{\Illuminate\Support\Facades\URL::to('/maketeaandlunchpayment')}}" class="text-success list-group-item list-group-item-action d-flex justify-content-between align-items-center h4">
                      food  fee payment
                      <span class="badge badge-success badge-pill">{{ count($teaandlunchfee) }}&nbsp; paid Students</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </main>

@endsection