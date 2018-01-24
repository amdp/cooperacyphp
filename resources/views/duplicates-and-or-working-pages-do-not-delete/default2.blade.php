<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <link rel="stylesheet" href="{{asset('css/style2.css')}}">
        <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="{{asset('js/home.js')}}"></script>



        <title>@yield('title')</title>
    </head>


<body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        
        <!-- Add your site or application content here -->
      @include('layouts.navbar')
      @yield('content')
      @include('layouts.newfooter')
  
        <script src="{{asset('js/plugins.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
        <script src="{{asset('js/menu.js')}}"></script>

        </body>
</html>