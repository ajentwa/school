@extends('layouts.app')

@section('title', 'Remedial fee Payment')

@section('content')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1 class="text-capitalize"><i class="fa fa-money"></i> Remedial Fee for Standard three</h1>
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
            <a class="float-right btn btn-success text-white" href="{{\Illuminate\Support\Facades\URL::to('/remedialfeestandardthree/create')}}"><i class="fa fa-plus"></i>Make Payment</a>
        </div>
        <div class="card-body">
            @if(count($fees) > 0)
            <div class="table-responsive">
            <table class="table table-bordered text-uppercase">
                <thead>
                <tr><th colspan="6" class="h4 text-dark text-uppercase">Standard three {{date('Y')}} Student's Remedial Fee report on {{date('d/m/Y')}}</th></tr>
                <tr>
                    <th>Student Name</th>
                    <th>Amount</th>
                    <th>Paid</th>
                    <th>dept</th>
                    <th>Status</th>
                    <th class="text-center">Operation</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($fees as $fee)
                    <tr>
                        <td>{{$fee->user['name']}}</td>
                        <td>{{$fee->amount}}</td>
                        <td>{{$fee->paid}}</td>
                        <td>{{$fee->amount - $fee->paid}}</td>
                        <td class="text-capitalize">{{$fee->status}}</td>
                        <td>
                            <div class="bs-component text-white h5">
                                <div class="btn-group">
                                    <a class="btn btn-secondary" href="{{\Illuminate\Support\Facades\URL::to('/remedialfeestandardthree/show/'.$fee->fee_id)}}">Receipt</a>
                                    <a class="btn btn-info" href="{{\Illuminate\Support\Facades\URL::to('/remedialfeestandardthree/edit/'.$fee->fee_id)}}">Edit</a>
                                    <a class="btn btn-danger" href="{{\Illuminate\Support\Facades\URL::to('/remedialfeestandardthree/delete/'.$fee->fee_id)}}">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>  
                @endforeach
                </tbody>
            </table>
            {{$fees->links()}}
            @else
                <table class="table text-uppercase">
                    <tr>
                        <td>No Remedial fee report found</td>
                    </tr>
                </table>
            </div>
            @endif
        </div>
        <div class="card-footer">
            <a class="btn btn-success btn-lg" href="{{\Illuminate\Support\Facades\URL::to('/remedialfee')}}">Go back</a>
        </div>
    </div>
</main>

@endsection


