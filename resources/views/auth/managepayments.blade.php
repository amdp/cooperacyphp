@extends('layouts.app')

@section('content')
<div class="container">

<div class="row">
    <col-lg-12 class="col-xs-12">
    <h3>Manage Subscription Plans</h3>

        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">PayPal</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                
                <div class="container">
                    <div class="row">
                        <col-lg-12 class="col-xs-12">
                            <h4>API Status</h4>
                            <div class="btn-group">
                                @if($status=='sandbox')
                                    <button id="sandbox-button" class="btn btn-success" onclick="updateApiStatus('sandbox')">Sandbox</button>
                                    <button id="live-button" class="btn btn-default" onclick="updateApiStatus('live')">Live</button>
                                @else
                                    <button id="sandbox-button" class="btn btn-default" onclick="updateApiStatus('sandbox')">Sandbox</button>
                                    <button id="live-button" class="btn btn-success" onclick="updateApiStatus('live')">Live</button>
                                @endif
                            </div>
                        </col-lg-12>
                    </div>
                </div>

            </div>
        </div>

    </col-lg-12>
</div>



</div>
@endsection