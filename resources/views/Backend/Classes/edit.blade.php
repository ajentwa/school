@extends('layouts.app')

@section('title', 'Edit Class')

@section('content')
<main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-university"></i> Classes</h1>
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
                    <div class="card-header h4 text-dark">Edit Class Details</div>
                    <div class="card-body">
                        <div class="row">
                        <div class="col-md-12 col-sm-12">
                        <form method="post" action="{{\Illuminate\Support\Facades\URL::to('class/update/'.$class->class_id)}}">
                        @csrf
                        <div class="form-row">
                            <div class="col border pt-2 px-2">
                            <div class="form-group">
                                <label class="control-label h6">Class Name*</label>
                            <input class="form-control" type="text" name="class_name" value="{{$class->class_name}}" readonly>
                            </div>
                            </div>
                            <div class="col border pt-2 px-2">
                            <div class="form-group">
                                <label class="h5" for="class_teacher">Class Teacher</label>
                                <select class="form-control" name="class_teacher" id="class_teacher" required>
                                <option value="{{$class->class_teacher}}">{{$class->class_teacher}}</option>
                                    @foreach ($users as $users)
                                        <option value="{{$users->name}}">{{$users->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            </div>
                            <div class="col border pt-2 px-2">
                            <div class="form-group">
                                <label class="control-label h6">No Of Class Students*</label>
                                <input class="form-control" type="number" name="class_students" value="{{$class->class_students}}"  required>
                            </div>
                            </div>
                        </div>
                        <a href="{{\Illuminate\Support\Facades\URL::to('/class')}}" class="btn btn-secondary btn-lg">Cancel</a>
                        <button type="submit" class="btn btn-success btn-lg">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection