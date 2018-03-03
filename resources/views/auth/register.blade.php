@extends('layouts.app')

@section('content')
<div class="containerone">
<p class="heading equivalence center space">JOIN COOPERACY</p><br>
<div class="col-md-2"></div>
<div class="col-md-8">
  <p class="base">By joining the Cooperacy project, you will enter into a community that loves doing things <a class="aue" href="/cooperation">together</a>.
  <br>We learn every day how to cooperate following what <a class="auu" href="/research">science</a> and real practices suggest. With a small effort, <a class="auc" href="/aboutyou">you</a> and other people will <a class="aue" href="/participate">participate</a> into the creation of an innovative social ecosystem where everyone's diversity brings development, <a class="aud" href="/fun">fun</a> and mutual enjoyment thanks to a special <a class="auf" href="/governance">governance</a>. You'll help the creation of the Cooperacy <a class="aue" href="/platform">platform</a>, where collective wealth is redistributed into the projects of the participants, enabling a future alternative economy.<br><br>

  For your personal development, you'll gain more <a class="aue" href="/cooperation">awareness</a> about ecosystemic thinking and cooperation, participating to our live webinars. Learning <a class="aud" href="/integration">proportional creative integration</a> and the many cooperation <a class="aud" href="/solutions">solutions</a>, you can improve your family, group of friends and organisations internal decision making process with these innovative social technologies. And if you are an university student, check our <a class="auu" href="/project-articles">scientific framework</a> and interdisciplinary field <a class="auu" href="/streams">list</a> to get acquainted with Cooperation <a class="auu" href="/science">Science</a>!<br><br><br>
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
                {!! app('captcha')->display(); !!}
      </div>
  </div>
  <div class="form-group">
    <div class="col-md-6 col-md-offset-4">
      <input type = "checkbox" id="checkread"></input>
        <label for="checkread">I have read the <a class="transparency" href="{{asset('terms')}}">Terms and contitions</a></label>
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
