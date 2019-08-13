@extends('layouts.app')

@section('title', 'Worker\'s Details')

@section('content')
<main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-users"></i> School Workers</h1>
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
                        Workers List
                        <div class=" float-right ml-2 d-inline-block"><a class="btn btn-success" href="javascript:window.print();" target="_blank"><i class="fa fa-print"></i> Print</a></div>
                        <a class="float-right btn btn-success text-white" href="{{\Illuminate\Support\Facades\URL::to('/worker/create')}}"><i class="fa fa-plus"></i>Add Worker</a>
                    </div>
                    <div class="card-body">
                    @if(count($users) > 0)
                    <table class="table table-lg table-bordered table-striped text-uppercase">
                        <tr>
                            <th>Full name</th>
                            <th>Employee Code</th>
                            <th>Occupation</th>
                            <th>Education level</th>
                            <th>Operation</th>
                        </tr>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->reg_number}}</td>
                                <td>{{$user->occupation}}</td>
                                <td>{{$user->level}}</td>
                                <td>
                                    <div class="bs-component text-white h5">
                                        <div class="btn-group">
                                            <a class="btn btn-secondary" href="{{\Illuminate\Support\Facades\URL::to('/worker/show/'.$user->id)}}">View</a>
                                            <a class="btn btn-info" href="{{\Illuminate\Support\Facades\URL::to('/worker/edit/'.$user->id)}}">Edit</a>
                                            <a class="btn btn-danger" href="{{\Illuminate\Support\Facades\URL::to('/worker/delete/'.$user->id)}}">Delete</a>
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
                                <td>No Worker found</td>
                            </tr>
                        </table>
                    @endif
                </div>
            </div>
    </main>

@endsection