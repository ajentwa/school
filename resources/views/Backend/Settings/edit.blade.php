@extends('layouts.app')

@section('title', 'Edit Settings')

@section('content')
<main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-gear"></i> Subjects</h1>
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
                    <div class="card-header h4 text-dark">Edit Subject</div>
                    <div class="card-body">
                        <div class="row">
                        <div class="col-md-12 col-sm-12">
                        <form method="post" action="{{\Illuminate\Support\Facades\URL::to('setting/update/'.$feetype->feetype_id)}}">
                        @csrf
                        <div class="form-row">
                            <div class="col-sm-8 border pt-3 px-4">
                            <div class="form-group row">
                                <label class="control-label h6 col-sm-3">Fee Category*</label>
                            <input class="form-control col-sm-9" type="text" name="name" value="{{$feetype->name}}" required>
                            </div>
                            </div>
                            <div class="col-sm-4"></div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-8 border pt-3 px-4">
                            <div class="form-group row">
                                <label class="control-label h6 col-sm-3">Fee Amount*</label>
                                <input class="form-control col-sm-9" type="number" name="amount" value="{{$feetype->amount}}" required>
                            </div>
                            </div>
                            <div class="col-sm-4"></div>
                        </div>
                            <a href="{{\Illuminate\Support\Facades\URL::to('/setting')}}" class="btn btn-secondary btn-lg m-2">Cancel</a>
                            <button type="submit" class="btn btn-success btn-lg">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection