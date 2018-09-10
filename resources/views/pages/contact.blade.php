@extends('layouts.lvapp')
@section('title')
    Contact us - Cooperacy
@stop
@section('content')
<br><br><br><br>
<div id="main" class="site-main clr">
<div id="content-wrap" class="container clr full-screen">
<section id="primary" class="content-area clr">
<div id="content" class="clr site-content" role="main">
<article class="clr">
<div class="entry-content entry clr">
<p style="padding-top:1vw"></p>
<div id="coomain" name="coomain">
          <p id="contact" name="contact" class="transparency heading center space">CONTACT US</p>
            <p class="base center">Contact us or feel free to ask us anything that is not clear yet.</p>

                        <div role="form" class="wpcf7" id="wpcf7-f1303-p20-o1" lang="en-US" dir="ltr">
                        
                        @if(session('data'))
                        <p class="transparency heading center space">{{session('data')}}</p>
                        @else
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

                        <p class="mini">{!! app('captcha')->display(); !!}</p>
                        <div style="height:1em;"></div>
                        
                        <p class="mini"><input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit" /></p>
                        
                        <div class="wpcf7-response-output wpcf7-display-none"></div>
                          @if($errors->first())
                          <p style="color:red;"><strong>Error! </strong>{{$errors->first('name')}} {{$errors->first('email')}} {{$errors->first('subject')}} {{$errors->first('message')}} {{$errors->first('g-recaptcha-response')}}</p>
                          @endif
                        <div style="height:1em;"></div>

                        {{ Form::close() }}
                        @endif

                      </p>
    </div>
  </div><!-- .entry-content -->
</article><!-- #post -->
</div><!-- #content -->
</section><!-- #primary -->
</div><!-- #content-wrap -->


        </div><!-- #main -->

        @stop
