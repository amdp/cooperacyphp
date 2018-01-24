@extends('layouts.app')

@section('content')
<div class="container">
    @if(Auth::check() && Auth::user()->isAdmin())
      @include('auth.admin-dashboard')
    @else
      @include('auth.user-dashboard')
     @endif
    </div>
</div>
@endsection
