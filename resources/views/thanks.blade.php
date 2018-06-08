@extends('layouts.app')

@section('content')
<div class="container">
        <div class="jumbotron">
            <h1>THANK YOU!</h1>
            <h2>CONGRATULATIONS, YOU ARE NOW A MEMBER OF COOPERACY.</h2>
            <a href="{{url('/home')}}"><h2>GO TO BETA DASHBOARD</h2></a>
        </div>
    </div>
</div>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WV53RSJ');</script>
    <!-- End Google Tag Manager -->
@endsection
