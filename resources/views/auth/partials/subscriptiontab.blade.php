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
        
        @if($user->member_status=='Active')
        <div class="col-lg-12 col-xs-12">
            <h4>Subscription details</h4>
        </div>
        @endif

        @if($user->member_status=='Cancelled')
        <div class="col-lg-12 col-xs-12">
            <h4>Subscription details</h4>
        </div>
        @endif

    @endif
    
</div>