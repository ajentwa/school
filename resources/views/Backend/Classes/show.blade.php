@extends('layouts.app')

@section('title', 'Show Class')

@section('content')
<main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-university"></i> Classes</h1>
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
                <div class="card">
                    <div class="card-header h5 text-dark">View Class Details</div>
                    <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="list-group h5 font-weight-normal">
                                <li class="list-group-item"><strong>Class Name:</strong> {{$class->class_name}}</li>
                                <li class="list-group-item"><strong>Class Teacher:</strong> {{$class->class_teacher}}</li>
                                <li class="list-group-item"><strong>No Of Students in Class:</strong> {{$class->class_students}}</li>
                            </ul>
                        </div>
                    </div>
                    </div>   
                    <div class="card-footer">
                        <a class="btn btn-success" href="{{\Illuminate\Support\Facades\URL::to('/class')}}">Go back</a>
                    </div>
                </div>
    </main>

@endsection


