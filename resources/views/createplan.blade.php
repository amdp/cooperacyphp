@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Subscription Plan</div>

                <div class="panel-body">
                    Click to create plan

                    {!! Form::open(array('url' => 'createplan', 'method' => 'post')) !!}
                    {!! Form::submit('Create plan') !!}
                    {!! Form::close() !!}

                </div>
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection