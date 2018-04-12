@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron">
    <h1>JOIN - STEP 3</h1>
    <h2>CONFIRM PAYMENT</h2>
    <p style="font-size: 14px;">
      <strong>Just one more step to join Cooperacy</strong><br>
      You are about to be charged 1.16 euro/month for Cooperacy. 
    </p>
    {!! Form::open(array('route' => 'executepayment', 'method' => 'post')) !!}
    <input type="hidden" name="token" value="{{$transaction->token}}">
    <div class="form-group">
        {!! Form::submit('CONFIRM PAYMENT', ['class'=>'btn btn-success btn-block']) !!}
    </div>
    {!! Form::close() !!}
    </div>
</div>
@endsection