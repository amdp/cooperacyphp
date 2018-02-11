@extends('layouts.lvapp')
@section('title')
    Cooperacy
@stop
@section('content')

<div><!--BEGIN CONTAINER-->

  <!--CIRCLE-->
  <div class="row">
    <br><br><br>

    <div class="circle">
      <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" x="0px" y="0px" viewBox="0 0 750 750">
        <g id="cocircle">
          <linearGradient id="gequivalence" gradientUnits="userSpaceOnUse" x1="219" y1="58" x2="530" y2="58">
	           <stop  offset="0" style="stop-color:#FF8366"/><stop  offset="0.5" style="stop-color:#FF9000"/><stop  offset="1" style="stop-color:#FFB600"/>
          </linearGradient>
          <linearGradient id="gtrust" gradientUnits="userSpaceOnUse" x1="530" y1="58" x2="743" y2="260">
	           <stop  offset="0" style="stop-color:#FFB600"/><stop  offset="0.6" style="stop-color:#FFDD00"/><stop  offset="1" style="stop-color:#C3DD19"/>
          </linearGradient>
          <linearGradient id="gcare" gradientUnits="userSpaceOnUse" x1="742" y1="290" x2="670" y2="590">
	           <stop  offset="0" style="stop-color:#C3DD19"/><stop  offset="0.5" style="stop-color:#88DD33"/><stop  offset="1" style="stop-color:#55DD90"/>
          </linearGradient>
          <linearGradient id="gtransparency" gradientUnits="userSpaceOnUse" x1="700" y1="640" x2="400" y2="750">
	           <stop  offset="0" style="stop-color:#55DD90"/><stop  offset="0.5" style="stop-color:#22DDEE"/><stop  offset="1" style="stop-color:#33B2EE"/>
          </linearGradient>
          <linearGradient id="gfreedom" gradientUnits="userSpaceOnUse" x1="350" y1="750" x2="100" y2="640">
	           <stop  offset="0" style="stop-color:#33B2EE"/><stop  offset="0.5" style="stop-color:#4488EE"/><stop  offset="1" style="stop-color:#7777E5"/>
          </linearGradient>
          <linearGradient id="gunderstanding" gradientUnits="userSpaceOnUse" x1="100" y1="590" x2="20" y2="290">
	           <stop  offset="0" style="stop-color:#7777E5"/><stop  offset="0.5" style="stop-color:#AA66DD"/><stop  offset="1" style="stop-color:#D46ED4"/>
          </linearGradient>
          <linearGradient id="gdiversity" gradientUnits="userSpaceOnUse" x1="20" y1="260" x2="219" y2="58">
	           <stop  offset="0" style="stop-color:#D46ED4"/><stop  offset="0.5" style="stop-color:#FF77CC"/><stop  offset="1" style="stop-color:#FF8366"/>
          </linearGradient>
          <path id="equivalence" fill="none" stroke="url(#gequivalence)" stroke-width="24" stroke-miterlimit="10"
                      d="M525.0481567,63.1570435  c-45.3894043-21.8797607-96.2866211-34.142334-150.0480957-34.142334   c-53.7633667,0-104.6621704,12.2634277-150.0527802,34.1446533" onmouseover="showvalue(1);"/>
          <path id="trust" fill="none" stroke="url(#gtrust)" stroke-width="24" stroke-miterlimit="10"
                       d="M712.3186035,297.7496338 c-23.6291504-103.605957-93.7546997-189.5136719-187.2704468-234.5925903" onmouseover="showvalue(2);"/>
          <path id="care" fill="none" stroke="url(#gcare)" stroke-width="24" stroke-miterlimit="10"
                       d="M645.6213379,590.5565796 c47.1600342-59.1289673,75.3640137-134.0441895,75.3640137-215.5565186c0-26.5563965-3.0014648-52.4103394-8.666748-77.2504272" onmouseover="showvalue(3);"/>
          <path id="transparency" fill="none" stroke="url(#gtransparency)" stroke-width="24" stroke-miterlimit="10"
                       d="M375,720.9854126 c110,0,207.2280884-50.9467773,270.6212769-130.428833" onmouseover="showvalue(4);"/>
          <path id="freedom" fill="none" stroke="url(#gfreedom)" stroke-width="24" stroke-miterlimit="10"
                       d="M104.3764725,590.5537109 C167.7696686,670.0374146,265,720.9854126,375,720.9854126" onmouseover="showvalue(5);"/>
          <path id="understanding" fill="none" stroke="url(#gunderstanding)" stroke-width="24" stroke-miterlimit="10"
                       d="M37.68116,297.7509155 c-5.6650391,24.8396606-8.666441,50.6932373-8.666441,77.2491455c0,81.5109863,28.2031841,156.4251099,75.3618164,215.5536499" onmouseover="showvalue(6);"/>
          <path id="diversity" fill="none" stroke="url(#gdiversity)" stroke-width="24" stroke-miterlimit="10"
                       d="M224.9472809,63.1593628 C131.433548,108.2390137,61.309639,194.1461182,37.68116,297.7509155" onmouseover="showvalue(7);"/>
        </g>

        <text id="typo" x="0px" y="0px" transform="matrix(1 0 0 1 132 379)" opacity="0" fill="#555555" font-size="80">COOPERACY</text>
        <text id="payoff" x="10px" y="0px" transform="matrix(1 0 0 1 144 427)" opacity="0" fill="#555555" stroke="#555555" stroke-miterlimit="10" font-size="28" letter-spacing="7">LET'S DO IT TOGETHER</text>

        <g id="equivalenceD" display="none">
          <a href="http://cooperacy.org/equivalence" class="noline finger">
            <text transform="matrix(1 0 0 1 163 360)" fill="#555555" font-size="65">EQUIVALENCE</text>
            <line style="display:inline;fill:#555555;stroke:#FF9000;stroke-width:6;stroke-miterlimit:10;" x1="150" y1="393" x2="600" y2="393"/>
            <text transform="matrix(1 0 0 1 190 443)" display="inline" fill="#555555" stroke="#555555" stroke-miterlimit="10" font-size="25" letter-spacing="2">OF WEALTH AND FEELINGS</text>
          </a>
        </g>

        <g id="trustD" display="none">
          <a href="http://cooperacy.org/trust" class="noline finger">
            <text transform="matrix(1 0 0 1 276 360)" fill="#555555" font-size="65">TRUST</text>
            <line style="display:inline;fill:#555555;stroke:#FFDD00;stroke-width:6;stroke-miterlimit:10;" x1="150" y1="393" x2="600" y2="393"/>
            <text transform="matrix(1 0 0 1 238 443)" display="inline" fill="#555555" stroke="#555555" stroke-miterlimit="10" font-size="25" letter-spacing="2">VOTING IDEAS FIRST</text>
          </a>
        </g>

        <g id="careD" display="none">
          <a href="http://cooperacy.org/care" class="noline finger">
            <text transform="matrix(1 0 0 1 289 360)" fill="#555555" font-size="65">CARE</text>
            <line style="display:inline;fill:#555555;stroke:#88DD33;stroke-width:6;stroke-miterlimit:10;" x1="150" y1="393" x2="600" y2="393"/>
            <text transform="matrix(1 0 0 1 150 443)" display="inline" fill="#555555" stroke="#555555" stroke-miterlimit="10" font-size="25" letter-spacing="2">ABOUT OUR NEEDS AND DESIRES</text>
          </a>
        </g>

        <g id="transparencyD" display="none">
          <a href="http://cooperacy.org/transparency" class="noline finger">
            <text transform="matrix(1 0 0 1 135 360)" fill="#555555" font-size="65">TRANSPARENCY</text>
            <line style="display:inline;fill:#555555;stroke:#22DDEE;stroke-width:6;stroke-miterlimit:10;" x1="150" y1="393" x2="600" y2="393"/>
            <text transform="matrix(1 0 0 1 202 443)" display="inline" fill="#555555" stroke="#555555" stroke-miterlimit="10" font-size="25" letter-spacing="2">PUBLIC AND ON DEMAND</text>
          </a>
        </g>

        <g id="freedomD" display="none">
          <a href="http://cooperacy.org/freedom" class="noline finger">
            <text transform="matrix(1 0 0 1 225 360)" fill="#555555" font-size="65">FREEDOM</text>
            <line style="display:inline;fill:#555555;stroke:#4488EE;stroke-width:6;stroke-miterlimit:10;" x1="150" y1="393" x2="600" y2="393"/>
            <text transform="matrix(1 0 0 1 137 443)" display="inline" fill="#555555" stroke="#555555" stroke-miterlimit="10" font-size="25" letter-spacing="2">PERSONALITY BASED EMPLOYMENT</text>
          </a>
        </g>

        <g id="understandingD" display="none">
          <a href="http://cooperacy.org/understanding" class="noline finger">
            <text transform="matrix(1 0 0 1 120 360)" fill="#555555" font-size="65">UNDERSTANDING</text>
            <line style="display:inline;fill:#555555;stroke:#AA66DD;stroke-width:6;stroke-miterlimit:10;" x1="150" y1="393" x2="600" y2="393"/>
            <text transform="matrix(1 0 0 1 119 443)" display="inline" fill="#555555" stroke="#555555" stroke-miterlimit="10" font-size="25" letter-spacing="2">A SOCIAL SYSTEM FOR COOPERATION</text>
          </a>
        </g>

        <g id="diversityD" display="none">
          <a href="http://cooperacy.org/diversity" class="noline finger">
            <text transform="matrix(1 0 0 1 218 360)" fill="#555555" font-size="65">DIVERSITY</text>
            <line style="display:inline;fill:#555555;stroke:#FF77CC;stroke-width:6;stroke-miterlimit:10;" x1="150" y1="393" x2="600" y2="393"/>
            <text transform="matrix(1 0 0 1 106 443)" display="inline" fill="#555555" stroke="#555555" stroke-miterlimit="10" font-size="25" letter-spacing="2">FUN AND FUNDS FOR EVERYONE OF US</text>
          </a>
        </g>

      </svg>

    </div> <!--END CIRCLE-->

  </div><!--END ROW-->

<div id="homefade" style="opacity:0"><!--START FADING-->

  <div class="row"><!--BEGIN ROW-->

  <div class="col-md-2"></div>

  <div class="col-md-8"><!--BEGIN CONTENT-->
      <br><br><p class="subheading space" style="text-align:center"><br></p>

      <p class="base center">Cooperacy is a scientific project aiming to spread the practice and the awareness of ecosystemic thinking and cooperation.</p><br>

      <table style="width:100%;"><tr><td style="width:33%" class="subheading transparency center space"><a href="/aboutus">DISCOVER</a></td><td style="width:33%" class="subheading understanding center space"><a href="/cooperation">LEARN</a></td><td style="width:33%" class="subheading equivalence center space"><a href="/platform">DO</a></td></tr></table>
      </p>
    </div><!--END CONTENT-->

  <div class="col-md-2"></div>

  </div><!--END ROW-->

  <div class="row"><!--BEGIN ROW-->

          <p style="text-align:center;">


            <br><br><br>

          </p>

  </div><!--END ROW-->


</div> <!--END FADING-->


</div> <!--END CONTAINER-->

@stop
