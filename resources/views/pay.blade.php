@extends('layouts.app')

@section('content')
<div class="container">
    <div class="containerone">
    @if(session('data'))
    <p class="base understanding center space up">Subscription cancelled.<br><br>
    You have {{session('data')}} days left to join us!</p>
    @else
    <p class="base equivalence center space up">Step 2: the voluntary pooling<br><br></p>
    @endif
    <p class="base">The Cooperacy membership is based on voluntary pooling. All of us send just one euro per month: the money is pooled to finance future ideas and projects, included yours. If you do not believe it, you can see what we've done with the money directly from the public paypal account: go to the standard paypal login and enter our account with COOPERATION + password cooperation2016.<br><br>

    If you don't like paypal, you can pool one year membership (12 euros) via bank transfer: our IBAN is IT61D0623001623000043225634 - Filiale AG 23 Milano Cariparma di via della Moscova.<br><br>

    If you are living in a low income country, you can pool with a lower amount if you help us adapt the amount to the different purchasing power of your nation.<br><br>

    {!! Form::open(array('url' => 'pay', 'method' => 'post')) !!}
                    {!! Form::submit('Voluntary pooling through PayPal', ['class'=>'btn btn-primary btn-block']) !!}
                    {!! Form::close() !!}
    <br><a class="ae" href="mailto:membershp@cooperacy.org"><div class="btn btn-primary btn-block">Send us your voluntary pooling bank transfer receipt instead</div></a></p>
  </div><br>
</div>
@endsection
