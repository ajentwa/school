<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title> SMS | @yield('title')</title>

    <link href="{{asset('asset/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/custom.css')}}" rel="stylesheet">
    @yield('Styles')
  </head>
  <body class="app sidebar-mini rtl">
    @include('layouts.includes.header')
    @include('layouts.includes.sidebar')
    @yield('content')
    <!-- Essential javascripts for application to work-->
    <script src="{{asset('asset/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('asset/js/popper.min.js')}}"></script>
    <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('asset/js/main.js')}}"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{asset('js/plugins/pace.min.js')}}"></script>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>

    @yield('Scripts')
  </body>
</html>