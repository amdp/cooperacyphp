<footer>
<div class="searchbar">
  <span class="aboutsearchheader">COOPERATION IDEAS</span>
  {{ Form::open(array('url' => 'sendmessage')) }}{{Form::text('email', false, ['placeholder'=>'Search...', 'class' => 'form-control', 'style'=>"display:table-cell; width:100%"])}}{{Form::close()}}
  </div>
</footer>