@extends('layouts.app')

@section('title', 'Add Subject')

@section('content')
<main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-book"></i> Subjects</h1>
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
                    <div class="card-header h4 text-dark">Add New subject</div>
                    <div class="card-body">
                        <form method="post" action="{{\Illuminate\Support\Facades\URL::to('subject/store')}}">
                        @csrf
                        <div class="form-row">
                            <div class="col-sm-8 border pt-3 px-4">
                            <div class="form-group row">
                                <label class="control-label h6 col-sm-3">Subject Name*</label>
                                <input class="form-control col-sm-9" type="text" name="subject_name" placeholder="Enter Subject Name" required>
                            </div>
                            </div>
                            <div class="col-sm-4"></div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-8 border pt-3 px-4">
                            <div class="form-group row">
                                <label class="control-label h6 col-sm-3">Subject Code*</label>
                                <input class="form-control col-sm-9" type="text" name="subject_code" placeholder="Enter Subject Code" required>
                            </div>
                            </div>
                            <div class="col-sm-4"></div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-8 border pt-3 px-4">
                            <div class="form-group row">
                                <label class="h6 col-sm-3" for="class">Subject Teacher</label>
                                <select class="form-control col-sm-9" name="subject_teacher" id="class" required>
                                    <option value="">Select Teacher</option>
                                    @foreach ($users as $user)
                                        <option value="{{$user->name}}">{{$user->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            </div>
                            <div class="col-sm-4"></div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-8 border pt-3 px-4">
                            <div class="form-group row">
                                <label class="control-label h6 col-sm-3">Book Name*</label>
                                <input class="form-control col-sm-9" type="text" name="subject_book" placeholder="Enter Book Name" required>
                            </div>
                            </div>
                            <div class="col-sm-4">
                            </div>
                        </div>
                            <a href="{{\Illuminate\Support\Facades\URL::to('/subject')}}" class="btn btn-secondary btn-lg">Cancel</a>
                            <button type="submit" class="btn btn-success btn-lg">Submit</button>
                        </form>
                    </div>
                </div>
    </main>

@endsection