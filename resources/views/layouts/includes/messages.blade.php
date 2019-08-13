@if(count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="alert alert-dismissable alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>{{$error}}</strong>
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-dismissable alert-success" style="margin-top: 0vh !important; margin-bottom: 1">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>{{session('success')}}</strong>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-dismissable alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>{{session('error')}}</strong>
    </div>
@endif