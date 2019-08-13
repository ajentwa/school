@extends('layouts.app')

@section('title', 'View Subjects')

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
    <main class="app-content1 ">
                <div class="card">
                    <div class="card-header h4 text-dark">
                        Subjects List
                        <div class=" float-right ml-2 d-inline-block"><a class="btn btn-success" href="javascript:window.print();" target="_blank"><i class="fa fa-print"></i> Print</a></div>
                        <a class="float-right btn btn-success text-white" href="{{\Illuminate\Support\Facades\URL::to('/subject/create')}}"><i class="fa fa-plus"></i>Add Subject</a>
                    </div>
                    <div class="card-body">
                    @if(count($subjects) > 0)
                    <table class="table table-lg table-bordered table-striped text-uppercase">
                        <tr>
                            <th>Subject Code</th>
                            <th>Subject name</th>
                            <th>Subject Teacher</th>
                            <th>Book Name</th>
                            <th>Operation</th>
                        </tr>
                        @foreach ($subjects as $subject)
                            <tr>
                                <td>{{$subject->subject_code}}</td>
                                <td>{{$subject->subject_name}}</td>
                                <td>{{$subject->subject_teacher}}</td>
                                <td>{{$subject->subject_book}}</td>
                                <td>
                                    <div class="bs-component text-white h5">
                                        <div class="btn-group">
                                            <a class="btn btn-secondary" href="{{\Illuminate\Support\Facades\URL::to('/subject/show/'.$subject->subject_id)}}">View</a>
                                            <a class="btn btn-info" href="{{\Illuminate\Support\Facades\URL::to('/subject/edit/'.$subject->subject_id)}}">Edit</a>
                                            <a class="btn btn-danger" href="{{\Illuminate\Support\Facades\URL::to('/subject/delete/'.$subject->subject_id)}}">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>  
                        @endforeach
                    </table>
                    {{$subjects->links()}}
                    @else
                        <table class="table">
                            <tr>
                                <td>No Subject found</td>
                            </tr>
                        </table>
                    @endif
                </div>
            </div>
    </main>

@endsection