<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="icon" href="{{ URL::asset('img/logo.html')}}">
    <link rel="apple-touch-icon" href="{{ URL::asset('img/favicons/apple-touch-icon.html')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('img/favicons/apple-touch-icon-72x72.html')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset('img/favicons/apple-touch-icon-114x114.html')}}">
    <link type="text/css" href="{{ URL::asset('css/demos/photo.css')}}" rel="stylesheet" />
    <script src="{{ URL::asset('js/modernizr-custom.html')}}"></script>
  </head>
<body>  
@yield('content')
</body>
  <script src="{{ URL::asset('js/jquery.min.js')}}"></script>
  <script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
  <script src="{{ URL::asset('js/base.js')}}"></script>
</html>
