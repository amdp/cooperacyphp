@extends('layouts.app')

@section('content')


@if(Auth::check())
<div id="coomain">
              <h1>Cooperacy Members</h1>
              <!-- SE NON MEMBRO PAGANTE, VISUALIZZA IL LINK PER IL PAGAMENTO-->
              <h2>You should be a member to visit this page.</h2>
              <h2><a class="ae" href="/payment">Click here to become a member or renew your membership.</a></h2>
              <!-- SE DAL DATABASE RISULTA MEMBRO PAGANTE VISUALIZZA LA DASHBOARD -->
</div>

@endif


@endsection
