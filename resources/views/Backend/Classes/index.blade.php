@extends('layouts.app')

@section('title', 'View Classes')

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
    <main class="app-content1 ">
                <div class="card">
                    <div class="card-header h4 text-dark">
                        Classes Details
                        <div class=" float-right ml-2 d-inline-block"><a class="btn btn-success" href="javascript:window.print();" target="_blank"><i class="fa fa-print"></i> Print</a></div>
                        <a class="float-right btn btn-success text-white" href="{{\Illuminate\Support\Facades\URL::to('/class/create')}}"><i class="fa fa-plus"></i>Add Class</a>
                    </div>
                    <div class="card-body">
                    @if(count($classes) > 0)
                    <table class="table table-lg table-bordered table-striped text-uppercase">
                        <tr>
                            <th>#</th>
                            <th>Class name</th>
                            <th>Class teacher</th>
                            <th>No Of Class Students</th>
                            <th>Operation</th>
                        </tr>
                        @foreach ($classes as $index => $class)
                            <tr>
                                <td>{{$index + 1}}</td>
                                <td>{{$class->class_name}}</td>
                                <td>{{$class->class_teacher}}</td>
                                <td>{{$class->class_students}}</td>
                                <td>
                                    <div class="bs-component text-white h5 ">
                                        <div class="btn-group mx-auto">
                                            <a class="btn btn-secondary" href="{{\Illuminate\Support\Facades\URL::to('/class/show/'.$class->class_id)}}">View</a>
                                            <a class="btn btn-info" href="{{\Illuminate\Support\Facades\URL::to('/class/edit/'.$class->class_id)}}">Edit</a>
                                            {{-- <a class="btn btn-danger" href="{{\Illuminate\Support\Facades\URL::to('/class/delete/'.$class->class_id)}}">Delete</a> --}}
                                        </div>
                                    </div>
                                </td>
                            </tr>  
                        @endforeach
                    </table>
                    {{$classes->links()}}
                    @else
                        <table class="table">
                            <tr>
                                <td>No Class found</td>
                            </tr>
                        </table>
                    @endif
                </div>
            </div>
    </main>

@endsection