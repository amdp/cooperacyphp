@extends('layouts.app')

@section('content')
<!--BEGIN CONTAINER-->
<div class="container">
<!-- ERRORS -->
@if($errors->first())
<div class="row">
	<div class="alert alert-success alert-danger fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Error! </strong>{{$errors->first('titolo')}} {{$errors->first('autore')}} {{$errors->first('data')}} {{$errors->first('content')}}</a>
	</div>
</div>
@endif
<!-- END ERRORS -->
<!--FLASH MESSAGGIO-->
@if(session('data'))
<div class="row">
	<div class="alert alert-success alert-dismissable fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			{{session('data')}}
	</div>
</div>
@endif
<!--END FLASH MESSAGGIO-->
<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-default">
			<div class="panel-heading"><h2>Modifica news</h2></div>
		</div>
	</div>
</div>
<div class="row">
	<div class="container">
		<div class="col-sm-12 text-right">
      <a href="{{route('newsmanage')}}" class="btn btn-success">Gestione news</a>
		</div>
	</div>
</div>
{!! Form::open ( array ('route' => 'updatenewsletter', 'files' => true, 'method' => 'post')) !!}
<!--FORM-->
<div class="row">
	<div class="container">
		<div class="col-sm-12">
			<div class="form-group">
					<label for="titolo">Titolo</label>
						{!! Form::text ('titolo', 
								$post->title, 
								['id' => 'titolo',
								'class' => 'form-control']) !!}
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="container">
		<div class="col-sm-3">
			<div class="form-group">
					<label for="titolo">Autore</label>
						{!! Form::text ('autore', 
								$post->author, 
								['id' => 'autore',
								'class' => 'form-control']) !!}
			</div>
		</div>
		<div class="col-sm-3">
			<div class="form-group">
					<label for="data-dismiss">Data</label>
						{!! Form::text ('data', 
								$newdata, 
								['id' => 'data',
								'class' => 'form-control']) !!}
			</div>
		</div>
    
    <div class="col-sm-3">
			<div class="form-group">
				<label for="img_header">Immagine</label><br>
        <img class="img-responsive" src="{{asset('images/news/'.$post->img)}}">
				<input type="file" id="img" name="img" class="form-control" aria-describedby="fileHelp">
				<small id="fileHelp" class="form-text text-muted">Caricare immagini in formato JPG o PNG inferiori a 500Kb</small>
			</div>
		</div>
    
		<div class="col-sm-3">
			<div class="form-group">
					<label for="status">Status di pubblicazione</label><br>
						@if($post->status !== 'pubblicata')
							@php
								$checked0=false;
								$checked1=true;
							@endphp
						@else
							@php
								$checked0=true;
								$checked1=false;
							@endphp
						@endif
						<label>{{ Form::radio('status', 'pubblicata', $checked0, ['id' => 'status']) }} Pubblicata </label><br>
						<label>{{ Form::radio('status', 'bozza', $checked1, ['id' => 'status']) }} Bozza </label><br>
								
			</div>
		</div>

	</div>
</div>

<div class="row">
	<div class="container">
		<div class="col-sm-12">
			<label for="text">Contenuto</label><br>
			{!! Form::textarea ('content', 
				$post->content, 
				['id' => 'text',
				'class' => 'form-control']) !!}
			
		</div>
	</div>
</div>
<div style="height:20px;"></div>
<div class="row">
	<div class="container">
		<div class="col-sm-12 text-right">
      {!! Form::hidden ('id', $post->id) !!}
			{!! Form::submit ('Salva', ['id' => 'aggiorna', 'class' => 'btn btn-success']) !!}
		</div>
	</div>
</div>
<!--END FORM-->
{!! Form::close() !!}
</div>
<!--END CONTAINER-->
@endsection