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
                                        <td><strong>#</strong></td>
                                        <td><strong>ID</strong></td>
                                        <td><strong>Description</strong></td>
                                        <td><strong>Status</strong></td>
                                    </tr>
                                </thead>
                                <tbody id="planlist">
                                    @foreach($paypalplans as $plan)
                                    <tr class="{{$plan->plan_api_status}}-plan">
                                        <td>{{$plan->id}}</td>
                                        <td>{{$plan->plan_id}}</td>
                                        <td>{{$plan->plan_description}}</td>
                                        <td>
                                        @if($plan->plan_status == 'ACTIVE')
                                            <div class="btn-group">
                                                <button disabled="disabled" id="plan-active-button{{$plan->id}}" class="btn btn-success" onclick="updatePlanStatus('ACTIVE','{{$plan->id}}','{{$plan->plan_id}}')">Active</button>
                                                <button id="plan-inactive-button{{$plan->id}}" class="btn btn-default" onclick="updatePlanStatus('INACTIVE','{{$plan->id}}','{{$plan->plan_id}}')">Inactive</button>
                                            </div>
                                        @else
                                            <div class="btn-group">
                                                <button id="plan-active-button{{$plan->id}}" class="btn btn-default" onclick="updatePlanStatus('ACTIVE','{{$plan->id}}','{{$plan->plan_id}}')">Active</button>
                                                <button disabled="disabled" id="plan-inactive-button{{$plan->id}}" class="btn btn-success" onclick="updatePlanStatus('INACTIVE','{{$plan->id}}','{{$plan->plan_id}}')">Inactive</button>
                                            </div>
                                        @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
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