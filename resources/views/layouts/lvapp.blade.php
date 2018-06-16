<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="/css/appstyle.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/iubenda.css" rel="stylesheet">
    <meta name="description" content="Cooperacy is a no-profit project aiming to spread cooperation science in social ecosystems.">
    <!-- <meta name="nosnippets"> -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--Open graph-->
    <meta property="og:title" content="Cooperacy" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://cooperacy.org" />
    <meta property="og:image" content="http://cooperacy.org/images/wordlogoOG.png" />
    <meta property="og:description" content="Cooperacy is a scientific project aiming to spread cooperation and ecosystemic awareness." />
    <meta property="og:site_name" content="Cooperacy" />
    <!-- end Open graph -->
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WV53RSJ');</script>
    <!-- End Google Tag Manager -->
    <title>@yield('title')</title>

    @if(Route::currentRouteName() == 'research' || Route::currentRouteName() == 'cci')
      <!--BEGIN CUSTOM MAP STYLE-->
      <style>.coo-map{display: block; width: 100%; position: relative;} .coo-map svg{ display: block; width: 80%; margin: 0 auto; height: auto;}
      .country-details{display: block; margin-top: 20px; text-align: center;}
      .country-details .detail{display: inline-block; vertical-align: middle; font-weight: bolder; padding: 0 15px; width: 24%;
        .country-details .detail span{font-weight: normal; color: #aa66dd;}
        #countries-map {margin:0;padding:0;width:100%;height:50%;}
      </style>

      <style>table, tbody, tr {border=0 !important; border-collapse: collapse; border-style: hidden !important;}
      td {border=0 !important; width: 16%; border-collapse: collapse; border-style: hidden !important;}
      </style>
      <!--END CUSTOM MAP STYLE-->
    @endif

    @if(Route::currentRouteName() == 'main')
      <style type="text/css">
        path      { opacity: 0; z-index: 21; }
        .circle   {margin: 0 auto;height:60vh;position: relative;margin-top:3vh;}
        #cocircle {transform-origin: center center; -webkit-transform-origin: center center;animation: wheel 5s ease-out; }
        .desc     {width:100%;position:relative;opacity:0;font-size:20px;text-align:justify;}
        .explain  { font-size: smaller; border-top: 1px solid gray; margin-top: 3px;padding-top: 7px; }
        #typo     {animation: fade-in 3s forwards; } #payoff   {animation: fade-in 3s 1s forwards; }
        #homefade {animation: fadeino 3s forwards; animation-delay: 1s; }
        @keyframes        wheel { 0% { transform: rotateZ(0deg); } 100% { transform:rotateZ(1080deg); } }
        @keyframes        fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes        fadeino { 0% { opacity: 0; } 100% { opacity: 1; } }
        #coohome {margin: 0% 25% 7% 25%; text-align: center}
        @media        only screen and (max-width: 959px) { #coohome {margin: 0% 2% 3% 2%; text-align: center} }
        .equivalenceD {    font-weight:none;  }
      </style>
    @endif
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
  </head>

  <body>
    <!-- Google Tag Manager (noscript) -->
      <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WV53RSJ"
          height="0" width="0" style="display:none;visibility:hidden"></iframe>
      </noscript>
    <!-- End Google Tag Manager (noscript) -->
      <div id="app">
          @include('layouts.navbar')
          @yield('content')
      </div>

      @include('layouts.footer')

      <!-- Scripts -->
      <script src="/js/app.js"></script>

      @if(Route::currentRouteName() == 'main')
        <script>
        var values = ['all', 'equivalence', 'trust', 'care', 'transparency', 'freedom', 'understanding', 'diversity'];

          function randomtype() {            var randomino = (Math.floor(Math.random() * 8));            if (randomino == 0) {
              for (i = 1; i < 8; i++) {                 document.getElementById(values[i]).style['opacity'] = '1'               }
            } else {               document.getElementById(values[randomino]).style.opacity = '1';              setTimeout(function () {
                for (i = 1; i < 8; i++) {if (i === randomino) {continue;};
                  document.getElementById(values[i]).style['animation'] = 'fade-in 4s cubic-bezier(.14,.65,.25,.98) forwards'}}, 2300);}}

          function showvalue(v) { for (i = 1; i < 8; i++) {document.getElementById(values[i]+'D').style['display'] = 'none'}
                document.getElementById('typo').style['display'] = 'none';
                document.getElementById('payoff').style['display'] = 'none';
                document.getElementById(values[v]+'D').style['display'] = 'inline'}
          jQuery(window).on('load',function () {randomtype();})
        </script>
      @endif
      @if(Route::currentRouteName() == 'research' || Route::currentRouteName() == 'cci')
        <script src='{{asset('js/map.js')}}'></script>
    @endif
</body>
</html>
