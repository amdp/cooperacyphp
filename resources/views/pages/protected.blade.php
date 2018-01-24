@extends('layouts.app')

@section('content')


@if(Auth::check())
<div id="coomain">
              <h1>Cooperacy members</h1>
              <!-- SE NON MEMBRO PAGANTE, VISUALIZZA IL LINK PER IL PAGAMENTO-->
              <h2>Devi effettuare il pagamento per partecipare</h2>
              <h2><a href="/payment">Clicca qui per pagare</a></h2>
              <!-- SE DAL DATABASE RISULTA MEMBRO PAGANTE VISUALIZZA LA DASHBOARD -->
</div>

@endif


@endsection 

