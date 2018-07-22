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

    {!! Form::open(array('url' => 'pool', 'method' => 'post')) !!}
                    {!! Form::submit('VOLUNTARY POOLING THROUGH PAYPAL', ['class'=>'btn btn-primary btn-block']) !!}
                    {!! Form::close() !!}
    <br><br>

    <p class="base">Pool instead via bank transfer sending us a code/receipt or contact us for suggestions, questions, requests:</p>
    <div role="form" class="wpcf7" id="wpcf7-f1303-p20-o1" lang="en-US" dir="ltr">
    {{ Form::open(array('url' => 'sendmessage', 'novalidate'=>'novalidate')) }}

    <p class="mini">Your Name (required)<br />
    {{ Form::text('name', null, [
    'size' => 40,
    'class' => 'wpcf7-form-control wpcf7-text wpcf7-validates-as-required',
    'aria-required' => 'true',
    'aria-invalid' => 'false',]) }}</p>

    <p class="mini">Your Email (required)<br />
    <span class="wpcf7-form-control-wrap your-email">{{ Form::email('email', null, [
    'size' => 40,
    'class' => 'wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email',
    'aria-required' => 'true',
    'aria-invalid' => 'false',]) }}</span> </label></p>

    <p class="mini">Subject<br />
    <span class="wpcf7-form-control-wrap your-subject">{{ Form::text('subject', null, [
    'size' => 40,
    'class' => 'wpcf7-form-control wpcf7-text',
    'aria-invalid' => 'false',]) }}</span></p>

    <p class="mini">Your Message<br />
    <span class="wpcf7-form-control-wrap your-message">{{ Form::textarea('message', null, [
    'cols' => 40,
    'rows'=>10,
    'class' => 'wpcf7-form-control wpcf7-textarea',
    'aria-invalid' => 'false',]) }}</span></p>

    <p class="mini"><input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit" /></p>
    <div class="wpcf7-response-output wpcf7-display-none"></div>
    {{ Form::close() }}
  </div><br>
</div>
@endsection
