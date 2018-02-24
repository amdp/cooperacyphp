@extends('layouts.app')

@section('content')
@if(Auth::check())


<div id="coomain">
              <h1>Membership page</h1>
              <form method= "post" action="/payment">
              <button type="submit" class="btn btn-primary">Pay now with PayPal</button>
              </form>
</div>

@endif
@endsection
