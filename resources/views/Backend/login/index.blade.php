<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">
    <title> School | Login </title>

    <link href="{{asset('asset/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/custom.css')}}" rel="stylesheet">
    @yield('Styles')
  </head>
  <body>
    <nav style="height:50px;" class="navbar navbar-expand-sm navbar-dark bg-success fixed-top"> 
    </nav>    
    <section class="login-content">
      <div class="login-box">
        <form class="login-form" action="{{\Illuminate\Support\Facades\URL::to('login')}}" method="post">
           @csrf
          <h3 class="login-head"><img style="height:90px" src="{{asset('asset/images/login.png')}}" alt="No Image"></h3>
          <div class="form-group input-group">
            <span class="input-group-addon"><i class="fa fa-lg text-success fa-user"></i></span>
            <input type="text" name="reg_number" class="form-control" required>
          </div>
          <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-lg text-success fa-lock"></i></span>
                <input type="password" name="password" class="form-control" required>
          </div>
          <div class="form-group btn-container">
            <button type="submit" class="btn btn-success btn-lg btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>Sign In</button>
            <span class="text-justify text-danger text-italic font-weight-bold" id="error">{{$errorMsg}}</span>
        </div>
        </form>
      </div>
    </section>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-bottom text-center text-white">
      <ul class="navbar-nav mx-auto">
          <li class="nav-item text-uppercase">Kinyerezi islamic nursery and primary Schools &copy; {{date('Y')}}</li>
      </ul>
    </nav>
    <script src="{{asset('asset/js/jquery.min.js')}}"></script>
    <script src="{{asset('asset/js/popper.min.js')}}"></script>
    <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('asset/js/main.js')}}"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{asset('js/plugins/pace.min.js')}}"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
</html>