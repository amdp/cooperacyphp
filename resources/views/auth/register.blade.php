@extends('layouts.app')

@section('content')
<div class="containerone">
<p class="heading equivalence center space">JOIN COOPERACY</p><br>
<div class="col-md-2"></div>
<div class="col-md-8">
  <p class="base">You are joining the Cooperacy platform: a community that loves doing things <a class="ae" href="/cooperation">together</a>!<br><br>

  For your personal development, you'll also gain more <a class="ae" href="/cooperation">awareness</a> about cooperation: learning <a class="ad" href="/integration">proportional creative integration</a> and the many cooperation <a class="ad" href="/integration#solutions">solutions</a> can help you improve your family, group of friends, company or institutional decision making.<br><br>

  We're waiting for you!<br><br>
  </p>
</div>
<div class="col-md-2"></div>

<div class="col-md-3"></div>
<div class="col-md-6">
  <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="name" class="col-md-4 control-label">Name</label>
    <div class="col-md-6">
      <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
      <span class="help-block">
        <strong>{{ $errors->first('name') }}</strong>
      </span>
                                @endif
    </div>
  </div>
  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <label for="email" class="col-md-4 control-label">E-Mail Address</label>
      <div class="col-md-6">
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
          <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
          </span>
                                @endif
      </div>
  </div>
  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <label for="password" class="col-md-4 control-label">Password</label>
      <div class="col-md-6">
        <input id="password" type="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
          <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
          </span>
                                @endif
      </div>
  </div>
  <div class="form-group">
    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
      <div class="col-md-6">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required><br>
                {!! NoCaptcha::renderJs() !!}
                {!! app('captcha')->display(); !!}
      </div>
  </div>
  <div class="form-group">
    <div class="col-md-6 col-md-offset-4">
      <input type = "checkbox" id="checkread"></input>
        <label for="checkread">I have read the <a class="transparency" href="{{asset('terms')}}">Terms and contitions</a> and the <a class="transparency" target="_blank" href="https://www.iubenda.com/privacy-policy/8141188">privacy policy</a></label>
    </div>
  </div>
  <div class="form-group">
    <div class="col-md-6 col-md-offset-4">
      <button id ="join-button" type="submit" class="btn btn-primary disabled" style="background-color:#FF9000; border-color:#FF9000; opacity:100% !important;">
                        Join
      </button>
    </div>
  </div>
  </form>
</div>
<div class="col-md-3"></div>
</div>
@endsection
