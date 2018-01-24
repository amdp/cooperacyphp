@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron">
    @if(session('data'))
    <h1>SUBSCRIPTION CANCELLED</h1>
    <h2>YOU HAVE {{session('data')}} DAYS LEFT. STAY WITH US!</h2>
    @else
    <h1>JOIN - STEP 2</h1>
    <h2>PAY SUBSCRIPTION TO COMPLETE REGISTRATION</h2>
    @endif
    <p style="font-size: 14px;">
      <strong>Participant</strong> is our only membership level (The 16% more – 0.16 euros – is the cost of paypal fees)</p><p style="font-size: 14px;">
                If you want to donate more, use the ‘donate’ button. You won’t receive additional privileges if you give more. But you can of course be proud of it.</p>

    <p style="font-size: 14px;"><strong>No paypal?</strong> Please use paypal until we setup a different payment method. We need some trust. We plan to have another option before the end of the year.</p>

    <p style="font-size: 14px;"><strong>Low income country?</strong> We’ll soon adapt the fees to the different currencies purchasing power.</p>

    <p style="font-size: 14px;">The price for membership is <strong>€1.16 per Month.</strong>
    </p>
    {!! Form::open(array('url' => 'pay', 'method' => 'post')) !!}
                    {!! Form::submit('PAY SUBSCRIPTION WITH PAYPAL', ['class'=>'btn btn-primary btn-block']) !!}
                    {!! Form::close() !!}
    </div>
</div>
@endsection