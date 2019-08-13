@extends('layouts.app')

@section('title', 'Settings')

@section('content')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1 class="text-capitalize"><i class="fa fa-gear"></i> Settings</h1>
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
        <div class="card-header h4 text-capitalize">
            <div class=" float-right mx-2 d-inline-block"><a class="btn btn-success" href="javascript:window.print();" target="_blank"><i class="fa fa-print"></i> Print</a></div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-8">
                    @if(count($feetypes) > 0)
                    <div class="table-responsive">
                    <table class="table table-bordered text-uppercase">
                        <thead>
                        <tr><th colspan="6" class="h4 text-dark text-capitalize"> 
                            Fee Settings
                            <a class="float-right btn btn-success text-white" href="{{\Illuminate\Support\Facades\URL::to('/setting/create')}}"><i class="fa fa-plus"></i>Add Fee</a>
                        </th></tr>
                        <tr>
                            <th>Fee Category</th>
                            <th>Amount</th>
                            <th class="text-center">Operation</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($feetypes as $feetype)
                            <tr>
                                <td>{{$feetype->name}}</td>
                                <td>{{$feetype->amount}}</td>
                                <td>                        
                                    <a class="m-auto btn btn-info" href="{{\Illuminate\Support\Facades\URL::to('/setting/edit/'.$feetype->feetype_id)}}"><i class="fa fa-edit"></i>Edit</a>
                                </td>
                            </tr>  
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                    @endif
                </div>
            </div>  
        </div>
    </div>
</main>

@endsection