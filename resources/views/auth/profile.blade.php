@extends('layouts.app')

@section('content')
@php
if($panel=='personal') {
    $personaltab='active';
    $personalmenu ='class=active';
    $subscriptiontab = '';
    $subscriptionmenu ='';
} else if ($panel=='subscription') {
    $personaltab='';
    $personalmenu ='';
    $subscriptiontab = 'active';
    $subscriptionmenu ="class=active";
}
@endphp
<div class="container">
<div class="row">
    <col-lg-12 class="col-xs-12">
    <h3>Profile</h3>

        <ul class="nav nav-tabs">
            <li {{$personalmenu}}><a data-toggle="tab" href="#personal">Personal data</a></li>
            <li {{$subscriptionmenu}}><a data-toggle="tab" href="#subscription">Subscription</a></li>
        </ul>

        <div class="tab-content">
            <div id="personal" class="tab-pane fade in {{$personaltab}}">            
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-xs-12">
                            <h4>Profile details coming soon</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div id="subscription" class="tab-pane fade in {{$subscriptiontab}}">            
                <div class="container">
                    @include('auth.partials.subscriptiontab')
                </div>
            </div>

        </div>

    </col-lg-12>
</div>



</div>
@endsection