@extends('layouts.app')

@section('content')
<div class="container">
    @role('admin')
      @include('auth.admin-dashboard')
    @endrole
    @role('user')
      @include('auth.user-dashboard')
    @endrole
    </div>
</div>
@endsection
