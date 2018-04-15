<div class="row">
    @if($user->member_type=='legacy')
    <div class="col-lg-12 col-xs-12">
        <h4>You are a legacy member</h4>
        <p>You subscribed to Cooperacy with the old payment system.<br>Please contact the administrator for more info.</p>
    </div>
    @endif

    @if($user->member_type=='free')
    <div class="col-lg-12 col-xs-12">
        <h4>You have a free membership</h4>
        <p>Enjoy Cooperacy! In the meanwhile, please consider <a href="{{route('subscribe')}}">subscribing now!</a></p>
    </div>
    @endif

    @if($user->member_type=='basic')
    <div class="col-lg-12 col-xs-12">
        <h4>Still no subscription?</h4>
        <p>Join Cooperacy and enjoy full access to our platform.</p>
        <h3><a href="{{route('subscribe')}}">Join now with PayPal!</a></h3>
    </div>
    @endif

    @if($user->member_type=='member')

        @if ($user->member_payment == 'PayPal')
    
            <div class="col-lg-12 col-xs-12">
                <h4>Subscription details</h4>
                    <h3>PayPal</h3>
                <p>
                    <strong>Subscription ID:</strong> {{$subscriptioninfo->id}}<br>
                    <strong>State:</strong> {{$subscriptioninfo->state}}<br>
                    <strong>PayPal Account:</strong> {{$subscriptioninfo->payer->payer_info->email}}<br><br>
                    <strong>Activated on:</strong> {{date('d F Y',strtotime($subscriptioninfo->start_date))}}<br>
                </p>
                @if($subscriptioninfo->state=='Active')
                    <h3>Next payment: {{$subscriptioninfo->plan->payment_definitions[0]->amount->value}} 
                        {{$subscriptioninfo->plan->payment_definitions[0]->amount->currency}} on 
                        {{date('d F Y',strtotime($subscriptioninfo->agreement_details->next_billing_date))}}
                    </h3>
                    <button id="cancel-membership-button" class="btn btn-primary" data-toggle="modal" data-target="#cancelmembership">Cancel Subscription</button>
                @elseif($subscriptioninfo->state=='Cancelled')
                <h3>Your subscription will expire on 
                        {{date('d F Y',strtotime($subscriptioninfo->agreement_details->last_payment_date)+2592000)}}
                    </h3>
                    <button id="reactivate-membership-button" class="btn btn-success" data-toggle="modal" data-target="#reactivatemembership">Reactivate Subscription</button>
                @endif



            </div>

            <div id="cancelmembership" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Cancel subscription</h4>
                    </div>
                    <div class="modal-body">
                        <h5>Are you sure?</h5>
                        <p>We're going to miss you!</p>
                        {!! Form::open ( array ('route' => 'cancelmembership')) !!}
                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Back</button>
                        {!! Form::submit ('Cancel subscription', ['id' => 'delete', 'class' => 'btn btn-danger']) !!}
                        {{ Form::hidden('id', $subscriptioninfo->id) }}
                        {!! Form::close() !!}
                    </div>
                    </div>

                </div>
            </div>

            <div id="reactivatemembership" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Reactivate membership</h4>
                    </div>
                    <div class="modal-body">
                        <h5>Great news!</h5>
                        <p>We were looking forward to see you again!</p>
                        {!! Form::open ( array ('route' => 'reactivatemembership')) !!}
                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Back</button>
                        {!! Form::submit ('Reactivate', ['id' => 'delete', 'class' => 'btn btn-success']) !!}
                        {{ Form::hidden('id', $subscriptioninfo->id) }}
                        {!! Form::close() !!}
                    </div>
                    </div>

                </div>
            </div>
        
        @else 

            <div class="col-lg-12 col-xs-12">
                <h4>Other payment system</h4>
            </div>

        @endif

    @endif
    
</div>