@extends('layouts.app')

@section('title', 'Show Subject')

@section('content')
<main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-book"></i> Subjects</h1>
            </div>
            <ul class="app-breadcrumb list-unstyled">
                <li class="breadcrumb-item h5 font-italic pt-2">{{date('l  F jS, Y')}}</li>
            </ul>
        </div>
        <div class="app-title1">
            @include('layouts.includes.messages')
        </div>
    </main>
    <main class="app-content1">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header h5 text-dark">View Subject Details</div>
                    <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="list-group h5 font-weight-normal">
                                <li class="list-group-item"><strong>Subject Code:</strong> {{$subject->subject_code}}</li>
                                <li class="list-group-item"><strong>Subject Name:</strong> {{$subject->subject_name}}</li>
                                <li class="list-group-item"><strong>Subject Teacher:</strong> {{$subject->subject_teacher}}</li>
                                <li class="list-group-item"><strong>Subject Book Name:</strong> {{$subject->subject_book}}</li>
                            </ul>
                        </div>
                    </div>
                    </div>   
                    <div class="card-footer">
                        <a class="btn btn-success" href="{{\Illuminate\Support\Facades\URL::to('/subject')}}">Go back</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection


