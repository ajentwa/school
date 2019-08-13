@extends('layouts.app')

@section('title', 'Create Setting')

@section('content')
<main class="app-content">
        <div class="app-title">
            <div>
                <h1 class="text-capitalize"><i class="fa fa-gear"></i> Add Settings</h1>
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
                    <div class="card-header h4 text-dark">Add New Settings</div>
                    <div class="card-body">
                        <form method="post" action="{{\Illuminate\Support\Facades\URL::to('setting/store')}}">
                        @csrf
                        <div class="form-row">
                            <div class="col-sm-8 border pt-3 px-4">
                            <div class="form-group row">
                                <label class="control-label h6 col-sm-3">Fee Category*</label>
                                <input class="form-control col-sm-9" type="text" name="name" placeholder="Enter Fee Category" required>
                            </div>
                            </div>
                            <div class="col-sm-4"></div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-8 border pt-3 px-4">
                            <div class="form-group row">
                                <label class="control-label h6 col-sm-3">Fee amount*</label>
                                <input class="form-control col-sm-9" type="number" name="amount" placeholder="Enter Fee Amount" required>
                            </div>
                            </div>
                            <div class="col-sm-4"></div>
                        </div>
                            <a href="{{\Illuminate\Support\Facades\URL::to('/setting')}}" class="btn btn-secondary btn-lg">Cancel</a>
                            <button type="submit" class="btn btn-success btn-lg">Submit</button>
                        </form>
                    </div>
                </div>
    </main>

@endsection