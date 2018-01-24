@extends('layouts.default')
@section('title')
    Cooperacy - Diverse and together
@stop
@section('content')

<div id="content-wrap" class="container clr full-screen">
  <section id="primary" class="content-area clr">
    <div id="content" class="clr site-content" role="main">
      <article class="clr">
        <div class="entry-content entry clr">
          <style type="text/css">
            body,table,tr,td,img,p,hr{margin:0px;padding:0px;border:0px;border-collapse:collapse;border-spacing:0px;overflow:hidden;}
            a         {text-decoration:none;cursor:pointer;}
            body      {background-color: #FFF;font-size: 100%;}
            hr        {margin: 1px; overflow: visible; border-collapse: separate;}
            path      { opacity: 0; z-index: 21; }
            .circle   {margin: 0 auto;height:60vh;position: relative;margin-top:3vh;}
            #cocircle {transform-origin: center center; -webkit-transform-origin: center center;animation: wheel 5s ease-out; }
            .desc     {width:100%;position:relative;opacity:0;font-size:20px;text-align:justify;}
            .explain  { font-size: smaller; border-top: 1px solid gray; margin-top: 3px;padding-top: 7px; }
            #typo     {animation: fade-in 3s forwards; } #payoff   {animation: fade-in 3s 2s forwards; }
            @keyframes wheel { 0% { transform: rotateZ(0deg); } 100% { transform:rotateZ(1080deg); } }
            @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
            #coohome {margin: 0% 25% 7% 25%; text-align: center}
            @media only screen and (max-width: 959px) {
            #coohome {margin: 0% 2% 3% 2%; text-align: center}}

          </style>
          <script src='js/home.js'></script>
          <div class="circle">
            <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 750 750">
              <g id="cocircle">
                <path id="equivalence" fill="none" stroke="#FF9000" stroke-width="24" stroke-miterlimit="10"
                d="M525.0481567,63.1570435  c-45.3894043-21.8797607-96.2866211-34.142334-150.0480957-34.142334   c-53.7633667,0-104.6621704,12.2634277-150.0527802,34.1446533" onmouseover="showvalue(1);"/>
                <path id="trust" fill="none" stroke="#FFDD00" stroke-width="24" stroke-miterlimit="10"
                 d="M712.3186035,297.7496338 c-23.6291504-103.605957-93.7546997-189.5136719-187.2704468-234.5925903" onmouseover="showvalue(2);"/>
                <path id="care" fill="none" stroke="#88DD33" stroke-width="24" stroke-miterlimit="10"
                 d="M645.6213379,590.5565796 c47.1600342-59.1289673,75.3640137-134.0441895,75.3640137-215.5565186c0-26.5563965-3.0014648-52.4103394-8.666748-77.2504272" onmouseover="showvalue(3);"/>
                <path id="transparency" fill="none" stroke="#22DDEE" stroke-width="24" stroke-miterlimit="10"
                 d="M375,720.9854126 c110,0,207.2280884-50.9467773,270.6212769-130.428833" onmouseover="showvalue(4);"/>
                <path id="freedom" fill="none" stroke="#4488EE" stroke-width="24" stroke-miterlimit="10"
                 d="M104.3764725,590.5537109 C167.7696686,670.0374146,265,720.9854126,375,720.9854126" onmouseover="showvalue(5);"/>
                <path id="understanding" fill="none" stroke="#AA66DD" stroke-width="24" stroke-miterlimit="10"
                 d="M37.68116,297.7509155 c-5.6650391,24.8396606-8.666441,50.6932373-8.666441,77.2491455c0,81.5109863,28.2031841,156.4251099,75.3618164,215.5536499" onmouseover="showvalue(6);"/>
                <path id="diversity" fill="none" stroke="#FF77DD" stroke-width="24" stroke-miterlimit="10"
                 d="M224.9472809,63.1593628 C131.433548,108.2390137,61.309639,194.1461182,37.68116,297.7509155" onmouseover="showvalue(7);"/>
              </g>

              <text id="typo" transform="matrix(1 0 0 1 132 379)" opacity="0" fill="#555555" font-size="80">COOPERACY</text>
              <text id="payoff" transform="matrix(1 0 0 1 141 427)" opacity="0" fill="#555555" stroke="#555555" stroke-miterlimit="10" font-size="28" letter-spacing="7">DIVERSE AND TOGETHER</text>

              <g id="equivalenceD" display="none"><a xlink:href="http://cooperacy.org/equivalence">
              		<text transform="matrix(1 0 0 1 163 360)" fill="#555555" font-size="65">EQUIVALENCE</text><line style="display:inline;fill:#555555;stroke:#FF9000;stroke-width:6;stroke-miterlimit:10;" x1="150" y1="393" x2="600" y2="393"/><text transform="matrix(1 0 0 1 190 443)" display="inline" fill="#555555" stroke="#555555" stroke-miterlimit="10" font-size="25" letter-spacing="2">OF WEALTH AND FEELINGS</text></a></g>
              <g id="trustD" display="none"><a xlink:href="http://cooperacy.org/trust">
                  <text transform="matrix(1 0 0 1 276 360)" fill="#555555" font-size="65">TRUST</text><line style="display:inline;fill:#555555;stroke:#FFDD00;stroke-width:6;stroke-miterlimit:10;" x1="150" y1="393" x2="600" y2="393"/><text transform="matrix(1 0 0 1 238 443)" display="inline" fill="#555555" stroke="#555555" stroke-miterlimit="10" font-size="25" letter-spacing="2">VOTING IDEAS FIRST</text>
                </a></g>
              <g id="careD" display="none"><a xlink:href="http://cooperacy.org/care">
                  <text transform="matrix(1 0 0 1 289 360)" fill="#555555" font-size="65">CARE</text><line style="display:inline;fill:#555555;stroke:#88DD33;stroke-width:6;stroke-miterlimit:10;" x1="150" y1="393" x2="600" y2="393"/><text transform="matrix(1 0 0 1 150 443)" display="inline" fill="#555555" stroke="#555555" stroke-miterlimit="10" font-size="25" letter-spacing="2">ABOUT OUR NEEDS AND DESIRES</text>
                </a></g>
              <g id="transparencyD" display="none"><a xlink:href="http://cooperacy.org/transparency">
                  <text transform="matrix(1 0 0 1 135 360)" fill="#555555" font-size="65">TRANSPARENCY</text><line style="display:inline;fill:#555555;stroke:#22DDEE;stroke-width:6;stroke-miterlimit:10;" x1="150" y1="393" x2="600" y2="393"/><text transform="matrix(1 0 0 1 202 443)" display="inline" fill="#555555" stroke="#555555" stroke-miterlimit="10" font-size="25" letter-spacing="2">PUBLIC AND ON DEMAND</text>
                </a></g>
              <g id="freedomD" display="none"><a xlink:href="http://cooperacy.org/freedom">
                  <text transform="matrix(1 0 0 1 225 360)" fill="#555555" font-size="65">FREEDOM</text><line style="display:inline;fill:#555555;stroke:#4488EE;stroke-width:6;stroke-miterlimit:10;" x1="150" y1="393" x2="600" y2="393"/><text transform="matrix(1 0 0 1 137 443)" display="inline" fill="#555555" stroke="#555555" stroke-miterlimit="10" font-size="25" letter-spacing="2">PERSONALITY BASED EMPLOYMENT</text>
                </a></g>
              <g id="understandingD" display="none"><a xlink:href="http://cooperacy.org/understanding">
                  <text transform="matrix(1 0 0 1 120 360)" fill="#555555" font-size="65">UNDERSTANDING</text><line style="display:inline;fill:#555555;stroke:#AA66DD;stroke-width:6;stroke-miterlimit:10;" x1="150" y1="393" x2="600" y2="393"/><text transform="matrix(1 0 0 1 119 443)" display="inline" fill="#555555" stroke="#555555" stroke-miterlimit="10" font-size="25" letter-spacing="2">A SOCIAL SYSTEM FOR COOPERATION</text>
                </a></g>
              <g id="diversityD" display="none"><a xlink:href="http://cooperacy.org/diversity">
                  <text transform="matrix(1 0 0 1 218 360)" fill="#555555" font-size="65">DIVERSITY</text><line style="display:inline;fill:#555555;stroke:#FF77CC;stroke-width:6;stroke-miterlimit:10;" x1="150" y1="393" x2="600" y2="393"/><text transform="matrix(1 0 0 1 106 443)" display="inline" fill="#555555" stroke="#555555" stroke-miterlimit="10" font-size="25" letter-spacing="2">FUN AND FUNDS FOR EVERYONE OF US</text>
                </a></g>
            </svg></div>
</div><!--END ROW-->
<div class="homefade">
<div class="row">
<div id="coomain">

          <br><br><p class="title" style="text-align:center">LEARN TO COOPERATE<br>CHANGE THE WORLD<br><br></p>

          <p class="base">
          Cooperacy is a scientific research association dedicated to the study of Cooperation Science. Our growing community of scientists, professionals and citizens are experimenting day by day a different way of making decisions, choosing for the good of the planet and understanding which methodologies may bring people to appreciate their diversities and be happy together.</p>

<br>

          <p class="maxititle transparency" style="color:#22DDEE;">DISCOVER<br>
          <p class="base" style="color:#666666;">Find out who we are, why you could be interested in joining us and the latest news of the association.</p>

<br>

          <p class="maxititle understanding" style="color:#AA66DD;">LEARN<br>
          <p class="base" style="color:#666666;">Learn a new way to interpret the world, the society, your daily life decision making and the conditions that allow the possibility of cooperating.<br> Have access to our monthly webinars in which you can discuss your daily decisions and how they affect the world around you.</p>

<br>

          <p class="maxititle equivalence">DO<br>
          <p class="base" style="color:#666666;">If you ever wanted to generate a big change in the world, you can now make simple daily choices that trigger greater transformations at a larger scale. Subscribe to our association and participate to the first design democracy based on a collective funding platform, the practical and financial way we are transforming the current social system.<br>We invest one euro per month in a common fund and decide together what to do with it. By choosing together we train ourselves to think about the group, the system, the environmnent. In turn, everyone of us learns how to cooperate, participates to members only Cooperation Science webinars or meetings, makes questions on how to act together and gets along the way that leads to mutual enjoyment.</p>

<br>

          <p class="title" style="text-align:center">SUBSCRIBE TO COOPERACY TODAY<br>JOIN THE CHANGE<br><br>
          </p>

          <div class="row">
            <p style="text-align:center;margin-bottom:10px"><a href="/register"><img src="{{asset('images/join.png')}}"; width="150" height="150" ></a></p>

          </div> <!--END FADING-->


          @endsection
