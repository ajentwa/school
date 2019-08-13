@extends('layouts.app')

@section('title', 'Uniform Fee')

@section('content')
<main class="app-content">
  <div class="app-title">
      <div>
          <h1 class="text-capitalize"><i class="fa fa-money"></i> Uniform Fee for standard five</h1>
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
        <div class="card-header h4 text-dark text-capitalize">student uniform fee payment</div>
        <div class="card-body">
          <form method="post" action="{{\Illuminate\Support\Facades\URL::to('uniformfeestandardfive/store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-row"> 
                <div class="col-sm-8 border pt-3 px-4">
                <div class="form-group row">
                    <label class="h5 col-sm-3" for="name">Student Name*</label>
                    <select class="form-control text-uppercase col-sm-9" name="name" id="name" required>
                        <option value="">Select Student Name</option>
                        @if(count($users) > 0)
                          @foreach ($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                          @endforeach
                        @endif
                      </select>
                </div>
                </div>
                <div class="col-sm-4"></div>
            </div>
            <div class="form-row"> 
                <div class="col-sm-8 border pt-3 px-4">
                <div class="form-group row">
                    <label class="control-label h5 col-sm-3">Paid (In Tshs)*</label>
                    <input class="form-control col-sm-9" type="number" name="paid" placeholder="Enter Paid Amount" required>
                </div>
                </div>
                <div class="col-sm-4"></div>
            </div>
            <div class="form-row"> 
                  <div class="col-sm-8 border pt-3 px-4">
                  <div class="form-group row">
                      <label class="control-label h5 col-sm-3">Paid by</label>
                      <input class="form-control col-sm-9" type="text" name="payer" placeholder="Enter Full Name" required>
                  </div>
                  </div>
                  <div class="col-sm-4"></div>
            </div>
              <input type="hidden" name="feetype_id" value="4">
              <input type="hidden" name="class_id" value="8">
              <input type="hidden" name="amount" value="50000">
              <input type="hidden" name="officer" value="{{Auth::user()->name }}">
              <a class="btn btn-secondary btn-lg" href="{{\Illuminate\Support\Facades\URL::to('/uniformfeestandardfive')}}">Cancel</a>
              <button type="submit" class="btn btn-success btn-lg">Submit</button>
          </form>
        </div>
      </div>
  </main>
@endsection
