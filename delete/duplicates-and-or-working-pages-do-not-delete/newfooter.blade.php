

<div class="footer">
<div class="footer-spacer"></div>
<div class="footerblock-news">
	<div class="footerblock-news-text">
	<b>NEWS</b></br>
	Lorem ipsum > http://...</br>
	Lorem ipsum > http://...</br>
	Lorem ipsum > http://...</br>
	</div>
</div>

<div class="footerblock-follow">
	<div class="footerblock-follow-text">
	<b>FOLLOW US</b></br>
	Connect with us </br>and stay in the loop.<br>
	<img class="menuservice" src="images/facebook.png" onmouseover="this.src='images/facebook_on.png'" onmouseclick="this.src='images/facebook_on.png'" onmouseout="this.src='images/facebook.png'" width="10%">
	</div>
</div>

<div class="footerblock-contact">
	<div class="footerblock-contact-text">

	<b>UPDATES</b></br>
	Be first to hear about our news and announcements.<br>
	
	<img class="menuservice" align="left" src="images/contact.png" onmouseover="this.src='images/contact_on.png'" onmouseclick="this.src='images/contact_on.png'" onmouseout="this.src='images/contact.png'" width="10%">
	<div style="padding-top:0.4vw">
	{{ Form::open(array('url' => 'sendmessage')) }}{{Form::text('email', false, ['placeholder'=>'YOUR E-MAIL', 'class' => 'keeptouch', 'style'=>'width:7vw'])}}{{Form::submit('SUBSCRIBE')}}{{Form::close()}}
	</div>

	
	</div>
</div>

<div class="footerblock-keeptouch">
	<div class="footerblock-keeptouch-text">
	
	<b>CONTACT US</b></br>
	info@cooperacy.org<br><br>
	
	<img class="menuservice" align="left" src="images/keeptouch.png" onmouseover="this.src='images/keeptouch_on.png'" onmouseclick="this.src='images/keeptouch_on.png'" onmouseout="this.src='images/keeptouch.png'" width="10%">
	<div style="padding-top:0.8vw">&nbsp;&nbsp;	CONTACT FORM</div>

	</div>
</div>



<div class="footer-spacer"></div>

<!--SMALL DEVICES-->

<div class="footerblock-follow-s">
	<b>FOLLOW US</b></br>
	Connect with us and stay in the loop.<br>
	<img class="menuservice" src="images/facebook.png" onmouseover="this.src='images/facebook_on.png'" onmouseclick="this.src='images/facebook_on.png'" onmouseout="this.src='images/facebook.png'" width="5%">
</div>

<div class="footerblock-contact-s">
	<b>UPDATES</b></br>
	Be first to hear about our news and announcements.<br>
	<img class="menuservice" align="left" src="images/contact.png" onmouseover="this.src='images/contact_on.png'" onmouseclick="this.src='images/contact_on.png'" onmouseout="this.src='images/contact.png'" width="5%"><br>
	{{ Form::open(array('url' => 'sendmessage')) }}{{Form::text('email', false, ['placeholder'=>'YOUR E-MAIL', 'class' => 'keeptouch'])}}{{Form::submit('SUBSCRIBE')}}{{Form::close()}}
</div>

<div class="footerblock-keeptouch-s">
	
	
	<br><b>CONTACT US</b><br>
	info@cooperacy.org<br>
	
	<img class="menuservice" align="left" src="images/keeptouch.png" onmouseover="this.src='images/keeptouch_on.png'" onmouseclick="this.src='images/keeptouch_on.png'" onmouseout="this.src='images/keeptouch.png'" width="5%">
	<span style="font-size:10vw"><br></span>&nbsp;&nbsp;	CONTACT FORM


</div>

<!--END SMALL-->



<div class="footer-info">
<a href="{{route('register')}}" style="color: #FF9000;">JOIN</a> or <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=YS7MHXBSVDDEU" style="color: #FFDD00;">DONATE</a>
          <br>

Via Cappuccini, 11 - 20122 Milan - Fiscal Code: 97725540153 - &copy;2017 Cooperacy research association.<br><br>
</div>
</div>