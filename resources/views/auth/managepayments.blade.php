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

                        <div class="col-lg-3 col-xs-12">
                            <h4>API Status</h4>
                            <div class="btn-group">
                                @if($apistatus=='sandbox')
                                    <button id="sandbox-button" class="btn btn-success" onclick="updateApiStatus('sandbox')">Sandbox</button>
                                    <button id="live-button" class="btn btn-default" onclick="updateApiStatus('live')">Live</button>
                                @else
                                    <button id="sandbox-button" class="btn btn-default" onclick="updateApiStatus('sandbox')">Sandbox</button>
                                    <button id="live-button" class="btn btn-success" onclick="updateApiStatus('live')">Live</button>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-9 col-xs-12">
                            <h4>Paypal Plans</h4>
                            <table class="table">
                            <thead>
                                <tr>
                                    <td><strong>ID</strong></td>
                                    <td><strong>Description</strong></td>
                                </tr>
                                @foreach($plans as $plan)
                                <tr>
                                    <td>{{$plan->ID}}</td>
                                    <td>{{$plan->plan_id}}</td>
                                </tr>
                                @endforeach
                            </thead>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </col-lg-12>
</div>



</div>
@endsection