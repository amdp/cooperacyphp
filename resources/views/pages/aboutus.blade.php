@extends('layouts.lvapp')
@section('title')
    About Us - Cooperacy
@stop
@section('content')

<!--BEGIN CONTAINER-->
<div class="container">

  <!--BEGIN SPACER-->
  <div class="row"><p style="height:20px;"></p></div>
  <!--END SPACER-->

  <!--BEGIN HEADER-->
  <div class="row">
    <br><img class="page-header" src="{{asset('/images/aboutus.png')}}">
  </div>
  <!--END HEADER-->

  <!--BEGIN ROW-->
  <div class="row">

  <!--BEGIN LEFT COL-->
  <div class="col-md-2"></div>
  <!--END LEFT COL-->

  <!--BEGIN CONTENT-->
  <div class="col-md-8"><br><br>

  <p class="base"><br>Cooperacy is a project based on the study of Cooperation Science. Its aim is to share awareness of different decision making possibilities that on a wider scale may trigger a more evoluted social system. <br>A social system is simply the way people relate one another in a group or a society. More specifically, in a social system the decision making, the resources and the enjoyment of the group are seen as a unique whole.<br></p><br><br>

  <p class="subheading transparency center space">REDISTRIBUTIVE FUNDING</p><br>
  <p class="base">The Cooperacy social system is based on <i>redistributive funding</i>, a special crowdfunding based on subscription. The subscription fee to participate in Cooperacy is very small: one euro per month. Every month the collective fund grows, allowing people to vote for how to use the common money and learn to interact in a different economic and social system based on cooperation.</p><br>

  <p class="subheading transparency center space">A DESIGN DEMOCRACY</p><br>
  <p class="base">Anybody can join the Cooperacy social system. The aim is the mutual happiness of its participants.<br>The means to achieve this aim are complex as they are based on scientific research, but substantially Cooperacy is based on the coordination of the participants' diversity.<br> In order to reach a coordinated diversity, the Cooperacy project is based on a <i>design democracy</i>, in which the participants elect ideas instead of people. The ideas receive proportional importance, experimental space, funds and commitment of the group according to the votes they get. In this proccess there is not a single winning idea, all of them receive a proportional amount of attention.</p>

    </div>
  <!--END CONTENT-->

  <!--BEGIN RIGHT COL-->
  <div class="col-md-2"></div>
  <!--END RIGHT COL-->

  </div>
  <!--END ROW-->

  <!--BEGIN ROW-->
  <div class="row">

  <!--BEGIN LEFT COL-->
  <div class="col-md-2"></div>
  <!--END LEFT COL-->

  <!--BEGIN CONTENT-->
  <div class="col-md-8">


  <br><br><p class="subheading transparency center space">COOPERACY RESEARCH AND ORGANIZATION TEAM</p><br><br>

  <style>table, tbody, tr {border=0 !important; border-collapse: collapse; border-style: hidden !important;}
        td {border=0 !important; width: 12%;border-collapse: collapse; border-style: hidden !important;}
  </style>

  <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center">
      <img class="img-responsive" style="margin:0 auto;" src="{{asset('images/amdp.png')}}" alt="null" /><br>
      <p>Alessandro Merletti De Palo<br><i>Founder and Co-President of Cooperacy</i></p>
    </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center">
      <img class="img-responsive" style="margin:0 auto;" src="{{asset('images/ilario.png')}}" alt="null" /><br>
     <p>Ilario Tito<br><i>Co-President and Co-Founder</i></p>
    </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center">
      <img class="img-responsive" style="margin:0 auto;" src="{{asset('images/giosetta.png')}}" alt="null" /><br>
      <p>Giosetta Ciuffa<br><i>External Relations</i></p>
    </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center">
      <img class="img-responsive" style="margin:0 auto;" src="{{asset('images/curti.png')}}" alt="null" /><br>
      <p>Ilaria Curti<br><i>Marketing and Communication</i></p>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center">
      <img class="img-responsive" style="margin:0 auto;" src="{{asset('images/marco.png')}}" alt="null" /><br>
      <p>Marco Marincola<br><i>Finance</i></p>
    </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center">
      <img class="img-responsive" style="margin:0 auto;" src="{{asset('images/mostafa.png')}}" alt="null" /><br>
     <p>S. Mostafa Rasoolimanesh<br><i>Statistics Research - CCI Index</i></p>
    </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center">
      <img class="img-responsive" style="margin:0 auto;" src="{{asset('images/sara.png')}}" alt="null" /><br>
      <p>Sara Conallo<br><i>Jackie of all trades</i></p>
    </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center">
      <img class="img-responsive" style="margin:0 auto;" src="{{asset('images/framba.png')}}" alt="null" /><br>
      <p>Federica Framba<br><i>Art Director</i></p>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center">
      <img class="img-responsive" style="margin:0 auto;" src="{{asset('images/enea.png')}}" alt="null" /><br>
      <p>Enea Barbetta<br><i>Main Developer</i></p>
    </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center">
      <img class="img-responsive" style="margin:0 auto;" src="{{asset('images/valentina.png')}}" alt="null" /><br>
     <p>Valentina Panizza<br><i>Strategic Planning</i></p>
    </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center">
      <img class="img-responsive" style="margin:0 auto;" src="{{asset('images/stefania.png')}}" alt="null" /><br>
      <p>Stefania Forlani<br><i>Planning Updates</i></p>
    </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center">
      <img class="img-responsive" style="margin:0 auto;" src="{{asset('images/francesco.png')}}" alt="null" /><br>
      <p>Francesco Taskayali<br><i>First Pianist</i></p>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center">
      <img class="img-responsive" style="margin:0 auto;" src="{{asset('images/giovanna.png')}}" alt="null" /><br>
      <p>Giovanna Littardi<br><i>First Guitarist</i></p>
    </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center">
      <img class="img-responsive" style="margin:0 auto;" src="{{asset('images/beatrice.png')}}" alt="null" /><br>
     <p>Beatrice Carli Moretti<br><i>Passionate Supporter</i></p>
    </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center">

    </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center">

    </div>
  </div><br><br>




    </div>
  <!--END CONTENT-->

  <!--BEGIN RIGHT COL-->
  <div class="col-md-2"></div>
  <!--END RIGHT COL-->

  </div>
  <!--END ROW-->

  <!--BEGIN ROW-->
  <div class="row">

  <!--BEGIN LEFT COL-->
  <div class="col-md-2"></div>
  <!--END LEFT COL-->

  <!--BEGIN CONTENT-->
  <div class="col-md-8"><br>

  <p class="subheading transparency center space">THE SCIENTIFIC RESEARCH</p><br>
  <p class="base">During the beginning of 2014, two Italian old friends, Ilario and Alessandro, sat at the Peace Bar in Rome to discuss how a social system could change the contemporary dramatic situation of the world, still affected by economic inequivalence, hunger, wars and damaged ecosystem.<br>
  Alessandro told Ilario he was developing a model based on cooperation that could help the change.<br>
  In late 2014, a group of 7 independent researchers investigated from different disciplines and perspectives the model of Cooperation Science developed by Alessandro Merletti De Palo based on an extensive literature review about Cooperation and its many different frameworks. The model was confirmed by the investigations results, and the subsequent paper was accepted at the M.I.T. 2015 Collective Intelligence Conference in Santa Clara, organized by the University of Michigan - Ann Arbour, with the presence of Facebook and of the Google vice-president Regina Duncan.<br>
  "Cooperacy" then became a legal entity with the official registration in Milan by the co-founder Ilario Tito in 2015.<br>
  Focused on Cooperation Science, the association represents the legal entity of the whole social project. Many other people are joining Cooperacy to be part of it, not only for scientific reasons, but to develop together a new, cooperative social system.</p><br>

  <p class="subheading transparency center space">TRANSPARENCY</p><br>
  <p class="base">Explore our transparent world: the money flow is crystal clear, so it is our legal status, whoever helps us is registered in our contributions list, our research and organizational team is listed below.<br>
      And if you don&#8217;t see something you&#8217;re curious of, please <a style="text-decoration: underline;" href="http://cooperacy.org/transparency#contact" class="transparency">ask</a> for more information to be shown in this page.</p><br>

  <p class="subheading transparency center space">FINANCE</p><br>
  <p class="base">We like so much transparency that we want everyone to be able to know our bank account balance and inspect our paypal account. We have nothing to hide.<br>
        <span style="color: #22DDEE;">Bank account:</span> our IBAN is IT61D0623001623000043225634 - Filiale AG 23 Milano Cariparma di via Moscova, and the current bank balance is around 250 euros &#8211; updated: Jan 2017<br />
        <span style="color: #22DDEE;">Paypal:</span> you can access our account from the standard paypal login with COOPERATION + password cooperation2016</p><br>

  <p class="subheading transparency center space">LEGAL STUFF</p><br>
  <p class="base">The Cooperacy Association was founded in Italy, Milan, the 21/07/2015. Its current address is Via Pinamonte da Vimercate 5, 20121 Milano. We&#8217;re planning to institute a foundation in Lithuania or Holland as in other countries the cost is too high.</p><br>

  <p id="contributors" name="contributors" style="color: #22DDEE; font-size: 24px; font-weight: bold; margin-bottom: 10px;">

  <p class="subheading transparency center space">CONTRIBUTORS LIST AND PLANNING</p><br>
  <p class="base">You can see in our <a style="hover: #22DDEE; text-decoration: underline;" href="https://goo.gl/OYcrOS">planning</a> the list of names as well as the relative monetary value of the activity (including expenses) done as if monetary wages would have been corresponded to the participants. We keep track about it as we would correspond those amounts if we will have the possibility.</p>

  </div>
  <!--END CONTENT-->

  <!--BEGIN RIGHT COL-->
  <div class="col-md-2"></div>
  <!--END RIGHT COL-->

  </div>
  <!--END ROW-->

  <!--BEGIN SPACER-->
  <div class="row"><p style="height:20px;"></p></div>
  <!--END SPACER-->

</div>
<!--END CONTAINER-->


@stop
