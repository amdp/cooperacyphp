@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Subscription cancelled</div>

                <div class="panel-body">
                    You have {{session('data')}} days left.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
