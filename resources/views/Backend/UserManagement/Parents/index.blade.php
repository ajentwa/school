@extends('layouts.app')

@section('title', 'Parents Details')

@section('content')
<main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-users"></i> Parents</h1>
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
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header h4 text-dark">
                        Parents Details
                        <div class=" float-right d-inline-block"><a class="btn btn-success" href="javascript:window.print();" target="_blank"><i class="fa fa-print"></i> Print</a></div>
                    </div>
                    <div class="card-body">
                    @if(count($users) > 0)
                    <table class="table table-lg table-bordered table-striped text-uppercase">
                        <tr>
                            <th>Student Name</th>
                            <th>Parent Name</th>
                            <th>Parent Occupation</th>
                            <th>Parent Phone No1</th>
                            <th>Parent Phone No2</th>
                        </tr>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->relative_name}}</td>
                                <td>{{$user->relative_occupation}}</td>
                                <td>{{$user->relative_phone1}}</td>
                                <td>{{$user->relative_phone2}}</td>
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
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection