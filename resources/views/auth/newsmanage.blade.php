@extends('layouts.app')

@section('content')
<!--BEGIN CONTAINER-->
<div class="container">
<!--FLASH MESSAGE-->
@if(session('data'))
<div class="row">
	<div class="alert alert-success alert-dismissable fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			{{session('data')}}
	</div>
</div>
@endif
<!--END FLASH MESSAGE-->

<div class="row">
  <div class="col-sm-12">
    <div class ="panel panel-default">
      <div class="panel-heading"><h4>News</h4></div>
      <div class="panel-body">
        <table id="newstable" class="table table-hover table-responsive display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Titolo</th>
                <th>Autore</th>
                <th>Status</th>
                <th>Data pubblicazione</th>
                <th>Cambia status</th>
                <th>Modifica</th>
                <th>Elimina</th>
            </tr>
        </thead>
        <tbody>
      @foreach($posts as $post)
        @if($post->status!=='pubblicata')
          @php $status = "Bozza";
          $value = "pubblicata"; 
          $text = "Pubblica";
          @endphp
        @else
          @php $status = "Pubblicata";
          $value = "bozza"; 
          $text = "Sposta in 'Bozza'";
          @endphp
        @endif
          <tr class="table-row" data-href="{{asset('newssingle')}}/{{$post->id}}">
              <td><a href="{{asset('newssingle')}}/{{$post->id}}"><strong>{{$post->title}}</strong></a></td>
              <td><strong>{{$post->author}}</strong></td>
              <td><strong>{{$status}}</strong></td>
              <th>{{$post->data}}</th>
                  <th><a href="{{asset('updatestatus')}}/{{$post->id}}/{{$value}}">{{$text}}</a></th>
                  <th><a href="{{asset('updatenews')}}/{{$post->id}}">Modifica</a></th>
                  <th><a href="#" data-toggle="modal" data-target="#myModal" onclick="document.getElementById('postid').value = '{{$post->id}}'" >Elimina</a></th>
            </tr>
        @endforeach
        </tbody>
    </table>
      </div>
      <div class="panel-footer text-right">
        <a href="{{route('newsadmin')}}" class="btn btn-success">Nuova</a>
      </div>
    </div>
  </div>
</div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Eliminazione</h4>
      </div>
      <div class="modal-body">
      	<h5>Attenzione</h5>
        <p>La news sar&agrave; permanentemente cancellata dal database.<br>
        L'operazione non potr&agrave; essere annullata.</p>
        
	
      </div>
      <div class="modal-footer">
        {!! Form::open ( array ('route' => 'deletenewsletter', 'method' => 'post')) !!}
        {{ Form::hidden('id', 'false', ['id' => 'postid']) }}
        <button type="button" class="btn btn-success" data-dismiss="modal">Annulla</button>
        {!! Form::submit ('Elimina', ['id' => 'delete', 'class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
      </div>
    </div>

  </div>
</div>


</div>
<!--END CONTAINER-->
@endsection