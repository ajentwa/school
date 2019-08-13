@extends('layouts.app')

@section('title', 'Standard Two Students')

@section('content')
<main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-users"></i> Standard Two</h1>
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
                        Standard Two Students
                        <a class="btn btn-success float-right mx-2" href="javascript:window.print();" target="_blank"><i class="fa fa-print"></i> Print</a>
                        <a class="float-right btn btn-success text-white" href="{{\Illuminate\Support\Facades\URL::to('/standardtwo/create')}}"><i class="fa fa-plus"></i>Add Student</a></div>
                    <div class="card-body">
                    @if(count($users) > 0)
                    <div class="table-responsive">
                    <table class="table table-lg table-bordered text-uppercase table-striped">
                        <tr>
                            <th>Full Name</th>
                            <th>Reg Number</th>
                            <th>Orphan</th>
                            <th>Parent Name</th>
                            <th class="text-center">Operation</th>
                        </tr>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->reg_number}}</td>
                                <td>{{$user->orphan}}</td>
                                <td>{{$user->relative_name}}</td>
                                <td>
                                    <div class="bs-component text-white h5">
                                        <div class="btn-group">
                                          <a class="btn btn-secondary" href="{{\Illuminate\Support\Facades\URL::to('/standardtwo/show/'.$user->id)}}">View</a>
                                          <a class="btn btn-info" href="{{\Illuminate\Support\Facades\URL::to('/standardtwo/edit/'.$user->id)}}">Edit</a>
                                          <a class="btn btn-danger" href="{{\Illuminate\Support\Facades\URL::to('/standardtwo/delete/'.$user->id)}}">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>  
                        @endforeach
                    </table>
                    {{$users->links()}}
                    @else
                        <table class="table">
                            <tr>
                                <td>No Student found</td>
                            </tr>
                        </table>
                    </div>
                    @endif
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-success btn-lg" href="{{\Illuminate\Support\Facades\URL::to('/student/primary')}}">Go back</a>
                    </div>
        </div>
    </main>

@endsection