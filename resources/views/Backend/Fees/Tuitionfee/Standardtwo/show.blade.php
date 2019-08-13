@extends('layouts.app')

@section('title', 'Show Students Fee Report')

@section('content')
<main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-money"></i> Tuition Fee for Standard Two</h1>
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
            <div class="card-header">
                    <a class="float-right btn btn-success" href="{{\Illuminate\Support\Facades\URL::to('/tuitionfeestandardtwo')}}">Go back</a>
                <div class=" float-right mx-2 d-inline-block"><a class="btn btn-success" href="javascript:window.print();" target="_blank"><i class="fa fa-print"></i> Print</a></div>
            </div>
            <div class="card-body">
                    <div class="card-title text-center h4 text-uppercase text-dark">student's payment receipt</div>
                    <table class="table table-sm border-none" style="width:300px;border-width:none">
                            <tr>
                                <td class="font-weight-bold">Student Name</td>
                                <td class="text-uppercase">{{$fee->user['name']}}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Student class</td>
                                <td class="text-uppercase">{{$fee->class['class_name']}}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Being paid by</td>
                                <td class="text-uppercase">{{$fee->payer}}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Received by</td>
                                <td class="text-uppercase">{{$fee->officer}}</td>
                            </tr>
                        </table>
                        <table class="table table-bordered">
                            <tr>
                                <th class="text-uppercase font-weight-bold">S/N</th>
                                <th class="text-uppercase font-weight-bold">fee category</th>
                                <th class="text-uppercase font-weight-bold">amount</th>
                                <th class="text-uppercase font-weight-bold">paid</th>
                                <th class="text-uppercase font-weight-bold">dept</th>
                                <th class="text-uppercase font-weight-bold">date of payment</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td class="text-uppercase">{{$fee->feetype['name']}}</td>
                                <td>{{$fee->amount}}</td>
                                <td>{{$fee->paid}}</td>
                                <td>{{$fee->amount - $fee->paid}}</td>
                                <td>{{date('d/m/Y', strtotime($fee->created_at))}}</td>
                            </tr>
                        </table>  
                        <h5 class=" float-right">Signature....................................</h5> 
            </div>
        </div>
    </main>

@endsection


