@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Warning</div>

                <div class="panel-body">
                    You must subscribe.

                    {!! Form::open(array('url' => 'pool', 'method' => 'post')) !!}
                    {!! Form::submit('Subscribe') !!}
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
