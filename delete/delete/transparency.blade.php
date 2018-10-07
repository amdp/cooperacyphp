@extends('layouts.default')
@section('title')
    Transparency - Cooperacy
@stop
@section('content')


<div id="main" class="site-main clr">


  <div id="content-wrap" class="container clr full-screen">
    <section id="primary" class="content-area clr">
      <div id="content" class="clr site-content" role="main">
        <article class="clr">
          <div class="entry-content entry clr">
            <p><img src="{{asset('images/transparency.png')}}" width="100%" /></p>
            <div id="coomain" name="coomain">
              <p id="transparency" name="transparency" style="color: #19ddf1; font-size: 20px; font-weight: bold; margin-bottom: 10px;">WELCOME TO THE COOPERACY TRANSPARENCY CENTRE</p>
              <p style="color: #19ddf1; font-size: 16px; font-weight: bold; margin-bottom: 20px;">WE SHOW OFF OUR TRUTHS</p>
              <p style="color: #555555; font-size: 16px;">Explore our transparent world: the <a style="hover: #33cccc; text-decoration: underline;" href="#finance">money</a> flow is crystal clear, so it is our <a style="hover: #33cccc; text-decoration: underline;" href="#legal">legal status</a>, whoever <a style="hover: #33cccc; text-decoration: underline;" href="#contributors">helps us</a> is registered in our contributions list, our research and organizational <a style="hover: #33cccc; text-decoration: underline;" href="#team">team</a> is listed below, and you can read about our <a style="hover: #33cccc; text-decoration: underline;" href="#story">story</a> and browse our <a style="hover: #33cccc; text-decoration: underline;" href="#news">news</a> in the right panel.</p>
              <p><em>And if you don&#8217;t see something you&#8217;re curious of, please <a style="hover: #33cccc; text-decoration: underline;" href="#contact">ask</a> for more information to be shown in this page.</em></p>
              <p id="finance" name="finance" style="color: #19ddf1; font-size: 24px; font-weight: bold; margin-bottom: 10px;">
                <p>FINANCIAL INFORMATION</p>
                <p style="color: #19ddf1; font-size: 16px; font-weight: bold; margin-bottom: 20px;">ABOUT MONEY</p>
                <p style="color: #555555; font-size: 16px;">We like so much transparency that we want everyone to be able to know our bank account balance and inspect our paypal account. We have nothing to hide.<br />
                  <span style="color: #19ddf1;">Bank account:</span> our IBAN is IT61D0623001623000043225634 - Filiale AG 23 Milano Cariparma di via Moscova, and the current bank balance is around 300 euros &#8211; updated: Jan 2016<br />
                  <span style="color: #19ddf1;">Paypal:</span> you can access our account from the standard paypal login with COOPERATION + password cooperation2016</p>
                <p><em>..help us in showing all the movements in our bank account and in our paypal account in this page, contact us!</em></p>
                <p id="legal" name="legal" style="color: #19ddf1; font-size: 24px; font-weight: bold; margin-bottom: 10px;">
                  <p>INFORMATION ABOUT THE COOPERACY ASSOCIATION-FOUNDATION</p>
                  <p style="color: #19ddf1; font-size: 16px; font-weight: bold; margin-bottom: 20px;">LEGAL STUFF</p>
                  <p style="color: #555555; font-size: 16px;">The Cooperacy Association was founded in Italy, Milan, the 21/07/2015. Its current address is Via Pinamonte da Vimercate 5, 20121 Milano. We&#8217;re planning to institute a foundation in Holland as in other countries the cost is too high.</p>
                  <p style="color: #555555; font-size: 16px;">The Cooperacy Association was instead born in late 2014, founded by Alessandro Merletti De Palo, as a group of 7 independent researchers in order to find a better framework for cooperation theory that would enable mutual happiness in the world.<br />
                    It became a legal entity with the co-founder Ilario Tito in 2015, after the first abstract of the model was accepted in the 2015 Collective Intelligence Conference in Santa Clara, held by the University of Michigan, with the support and presence of Facebook and, through the vice-president Regina Duncan, of Google. The Collective Intelligence Conferences are part of the institutional dissemination and confrontation activities fostered by the Centre for Collective Intelligence in the Massachussets Institute of Technology.</p>
                  <p><em>If you are willing to help us from a legal or an administrative side, please feel free to contact us.</em></p>
                  <p id="contributors" name="contributors" style="color: #19ddf1; font-size: 24px; font-weight: bold; margin-bottom: 10px;">
                    <p>CONTRIBUTORS&#8217; LIST</p>
                    <p style="color: #19ddf1; font-size: 16px; font-weight: bold; margin-bottom: 20px;">OUR MIGHTY PEOPLE</p>
                    <p style="color: #555555; font-size: 16px;">You can see the list of <a style="hover: #19DDF1; text-decoration: underline;" href="http://cooperacy.org/cooperacy-contributions/">names</a> as well as the relative monetary value of the activity (including expenses) done as if monetary wages would have been corresponded to the participants. We keep track about it as we would correspond those amounts if we will have the possibility.</p>
                    <p><em>Feel free to help us and join us anytime!</em></p>
                    <p id="story" name="story" style="color: #19ddf1; font-size: 24px; font-weight: bold; margin-bottom: 10px;">
                      <p>COOPERACY HISTORY</p>
                      <p style="color: #19ddf1; font-size: 20px; font-weight: bold; margin-bottom: 20px;">TWO YEARS OF LIFE</p>
                      <p style="color: #555555; font-size: 16px;">The Cooperacy Association has been chosen as part of the scientific lab of OuiShare, the leading organization for the Sharing Economy phenomenon,at the 2015 OuiShareFest in Paris. We&#8217;ve been invited in the first International Conference on Positive Peace held by the Institute for Economics and Peace at Stanford, but we were unfortunately too poor to participate and cover travel expenses. We have been accepted and participated in the first International Association for the Study of the Commons conference about &#8220;The City as Commons&#8221; in Bologna, and we&#8217;ve been selected again in 2016 for the Collective Intelligence Conference at the Stern School of Business in New York.<br />
                        The model of Cooperation developed by Cooperacy, based on rigourous scientific confrontation on the cooperation theory literature and different - still ongoing - research streams, has gathered so much interest in such a small amount of time that different european and international Universities and Institutions, organizations and even business events and courses are supporting, establishing a partnership or disseminating it.</p>
                      <p><em>If you want to join our research team, please contact us!</em></p>
                      <p id="research" name="research" style="color: #000000; font-size: 24px; font-weight: bold; margin-bottom: 10px; text-align: center;">
                        COOPERACY RESEARCH AND ORGANIZATION TEAM</p>
                      <style>table, tbody, tr {border=0 !important; border-collapse: collapse; border-style: hidden !important;}
                        td {border=0 !important; width: 16%; border-collapse: collapse; border-style: hidden !important;}
                      </style>
                      <table>
                        <tr>
                          <td><img src="{{asset('images/amdp.png')}}" alt="null" /></td>
                          <td><img src="{{asset('images/ilario.png')}}" alt="null" /></td>
                          <td><img src="{{asset('images/giosetta.png')}}" alt="null" /></td>
                          <td><img src="{{asset('images/curti.png')}}" alt="null" /></td>
                          <td><img src="{{asset('images/marco.png')}}" alt="null" /></td>
                          <td><img src="{{asset('images/mostafa.png')}}" alt="null" /></td>
                        </tr>
                        <tr>
                          <td>Alessandro Merletti De Palo<br />Founder of Cooperacy</td>
                          <td>Ilario Tito<br />Co-Founder</td>
                          <td>Giosetta Ciuffa<br />Journalist - Economy field</td>
                          <td>Ilaria Curti<br />Marketing and Communication</td>
                          <td>Marco Marincola<br />Project Manager</td>
                          <td>S. Mostafa Rasoolimanesh<br />Statistics and Research</td>
                        </tr>
                        <tr>
                          <td><img class="img-icon" src="{{asset('images/fogeborg.png')}}" alt="null" /></td>
                          <td><img class="img-icon" src="{{asset('images/mancinella.png')}}" alt="null" /></td>
                          <td><img class="img-icon" src="{{asset('images/anita.png')}}" alt="null" /></td>
                          <td><img class="img-icon" src="{{asset('images/nitti.png')}}" alt="null" /></td>
                          <td><img class="img-icon" src="{{asset('images/damiano.png')}}" alt="null" /></td>
                          <td><img class="img-icon" src="{{asset('images/marelli.png')}}" alt="null" /></td>
                        </tr>
                        <tr>
                          <td>Michael Fogeborg<br />Developer</td>
                          <td>Alessandro Mancinella<br />Group Psychologist</td>
                          <td>Anita Fiaschetti<br />Sociologist, Press Agent</td>
                          <td>Mariangela Nitti<br />Social Science Statistician</td>
                          <td>Damiano Avellino<br />Biologist</td>
                          <td>Fulvio Marelli<br />Data Analyst</td>
                        </tr>
                      </table>
                      <p style="color: #22ddee; font-size: 24px; font-weight: bold; margin-bottom: 10px;">TRANSPARENCY</p>
                      <p style="color: #22ddee; font-size: 20px; font-weight: bold; margin-bottom: 20px;">Cooperation and truth</p>
                      <p style="color: #555555; font-size: 14px; font-weight: 400;">For some people, the fundamental value to profoundly enjoy acting together is only one: truth. Truth is difficult to say and difficult to receive. But when groups of people are transparent to each other, everybody who&#8217;s not enjoying the cooperation may stop and let other participants continue. When transparency ends, frauds, hoaxes and the like are a good example to make you think about an apparent respectful and trusted collaboration that in reality is only egoism. If you have nothing to hide, why not being transparent?</p>
                      <p style="background-color: #22ddee; color: #ffffff; font-size: 16px; font-weight: 300; margin-bottom: 0px; padding: 20px;">TO SOLVE A CONFLICT WITH THE TRANSPARENCY CONDITION:<br />
                        Find the missing secret, exposing everyone&#8217;s point of view in complete freedom. Be careful with this methodology and be ready to accept apparent unpleasant truths.</p>
                      <p style="color: #22ddee; font-size: 16px; font-weight: 300; padding: 20px;">KEY TRANSPARENCY PRACTICES<br />
                        Auto-evaluation, feedback, follow-up, information sharing</p>
                      <p style="color: #555555; font-size: 16px; font-weight: 400;">Transparency is nowadays a hard theme, privacy is sacred but at the same time the way social networks spread important personal data led to big changes. If we consider specific methodologies like auto-evaluation, feedback and follow-up we can see that transparency may be raised and -in a tolerant climate appreciating diversity- help the sharing of different individual point of views or more comprehension between participants.<br />
                        A good information sharing, an &#8220;active&#8221; form of transparency, may be a great enhancer of the diversity potential, the birth of mutual comprehension and subsequent good trust and relation between participants.<br />
                        Be careful with transparency as a sudden truth could enhance the conflict potential of diversity instead.</p>
                      <p id="contact" name="contact" style="color: #22ddee; font-size: 24px; font-weight: bold; margin-bottom: 10px;">CONTACT US<br />
                        <div role="form" class="wpcf7" id="wpcf7-f1303-p20-o1" lang="en-US" dir="ltr">

                        {{ Form::open(array('url' => 'sendmessage', 'novalidate'=>'novalidate')) }}


                        <p><label> Your Name (required)<br />
                        {{ Form::text('name', null, [
                        'size' => 40,
                        'class' => 'wpcf7-form-control wpcf7-text wpcf7-validates-as-required',
                        'aria-required' => 'true',
                        'aria-invalid' => 'false',]) }}</label></p>

                        <p><label> Your Email (required)<br />
                        <span class="wpcf7-form-control-wrap your-email">{{ Form::email('email', null, [
                        'size' => 40,
                        'class' => 'wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email',
                        'aria-required' => 'true',
                        'aria-invalid' => 'false',]) }}</span> </label></p>

                        <p><label> Subject<br />
                        <span class="wpcf7-form-control-wrap your-subject">{{ Form::text('subject', null, [
                        'size' => 40,
                        'class' => 'wpcf7-form-control wpcf7-text',
                        'aria-invalid' => 'false',]) }}</span> </label></p>

                        <p><label> Your Message<br />
                        <span class="wpcf7-form-control-wrap your-message">{{ Form::textarea('message', null, [
                        'cols' => 40,
                        'rows'=>10,
                        'class' => 'wpcf7-form-control wpcf7-textarea',
                        'aria-invalid' => 'false',]) }}</span> </label></p>

                        <p><input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit" /></p>
                        <div class="wpcf7-response-output wpcf7-display-none"></div>
                        {{ Form::close() }}

                      </p>
                    </div>
                  </div><!-- .entry-content -->
                </article><!-- #post -->
              </div><!-- #content -->
            </section><!-- #primary -->
          </div><!-- #content-wrap -->


        </div><!-- #main -->

        @stop
