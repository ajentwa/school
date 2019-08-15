@extends('layouts.app')

@section('title', 'Administrators Details')

@section('content')
<main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-users"></i> Administrators</h1>
            </div>
            <ul class="app-breadcrumb list-unstyled">
                <li class="breadcrumb-item h5 font-italic pt-2">{{date('l F jS, Y')}}</li>
            </ul>
        </div>
        <div class="app-title1">
            @include('layouts.includes.messages')
        </div>
    </main>
    <main class="app-content1 ">
        <div class="card">
            <div class="card-header h4">
                List Of All System Administrators 
                <div class=" float-right ml-2 d-inline-block"><a class="btn btn-success" href="javascript:window.print();" target="_blank"><i class="fa fa-print"></i> Print</a></div>
                @if(!Auth::guest())
                    @if(Auth::user()->role_id == 1)
                        {{-- <a class="float-right btn btn-success text-white" href="{{\Illuminate\Support\Facades\URL::to('/administrator/create')}}"><i class="fa fa-plus"></i>Add Administrator</a> --}}
                    @endif
                @endif
            </div>
            <div class="card-body">
            @if(count($users) > 0)
            <table class="table table-bordered table-striped text-uppercase">
                <tr class="row">
                        @foreach ($users as $index => $user)
                            <td class="col">
                                <div class="card text-center p-0">
                                    <div class="card-header">
                                        <h6>Administrator: No{{$index + 1}}</h6>
                                        <h6>name: {{$user->name}}</h6>
                                    </div>
                                    <div class="card-body">
                                        <img style="height:190px;width:190px" src="/storage/cover_image/{{$user->cover_image}}" alt="No image" class="img-fluid">
                                    </div>
                                    <div class="card-footer">
                                        <div class="bs-component text-white h5">
                                            <div class="btn-group">
                                                <a class="btn btn-secondary" href="{{\Illuminate\Support\Facades\URL::to('/administrator/show/'.$user->id)}}">View</a>
                                                <a class="btn btn-info" href="{{\Illuminate\Support\Facades\URL::to('/administrator/edit/'.$user->id)}}">Edit</a>
                                                {{-- <a class="btn btn-danger" href="{{\Illuminate\Support\Facades\URL::to('/administrator/delete/'.$user->id)}}">Delete</a> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        @endforeach
                        </tr>
                    </table>
                {{-- <tr>
                    <th>Full Name</th>
                    <th>Gender</th>
                    <th>Mobile Phone</th>
                    <th>Date Of Join</th>
                    @if(!Auth::guest())
                        @if(Auth::user()->role_id == 1)
                            <th>Operation</th>
                        @endif
                    @endif
                </tr>
                @foreach ($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->gender}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{date('F d, Y',strtotime($user->created_at))}}</td>
                        @if(!Auth::guest())
                        @if(Auth::user()->role_id == 1)
                        <td>
                            <div class="bs-component text-white h5">
                                <div class="btn-group">
                                    <a class="btn btn-secondary" href="{{\Illuminate\Support\Facades\URL::to('/administrator/show/'.$user->id)}}">View</a>
                                    <a class="btn btn-info" href="{{\Illuminate\Support\Facades\URL::to('/administrator/edit/'.$user->id)}}">Edit</a>
                                    {{-- <a class="btn btn-danger" href="{{\Illuminate\Support\Facades\URL::to('/administrator/delete/'.$user->id)}}">Delete</a> --
                                </div>
                            </div>
                        </td>
                        @endif
                        @endif
                    </tr>  
                @endforeach
                </table> --}}
                {{$users->links()}}
                @else
                    <table class="table">
                        <tr>
                            <td>No Administrator found</td>
                        </tr>
                    </table>
                @endif
            </div>
        </div>
    </main>

@endsection
                                      
    
