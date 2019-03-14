@extends('layouts.app')
@section('content')
<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
</script>
<div class="col-md-2">
  <navbar>TESTONE</navbar>
</div>
<div class="col-md-8">
  <div class="project-list-container">
    <project>TEST</project>
  </div>
</div>

<div class="col-md-2"></div>
<script src="{{asset('js/cooperacy.js')}}">
@endsection
