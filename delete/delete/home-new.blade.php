@extends('layouts.default2')
@section('title')
    Cooperacy - Diverse and together
@stop
@section('content')



<div class="transparent-spacer"></div>




<!-- CIRCLE-->
<style type="text/css">


            path      { opacity: 0; z-index: 21; }
            .circle   {margin: 0 auto;height:60vh;position: relative;margin-top:3vh;}
            #cocircle {transform-origin: center center; -webkit-transform-origin: center center;animation: wheel 5s ease-out; }
            .desc     {width:100%;position:relative;opacity:0;font-size:20px;text-align:justify;}
            .explain  { font-size: smaller; border-top: 1px solid gray; margin-top: 3px;padding-top: 7px; }
            #typo     {animation: fade-in 3s forwards; } #payoff   {animation: fade-in 3s 2s forwards; }
            @keyframes  wheel { 0% { transform: rotateZ(0deg); } 100% { transform:rotateZ(1080deg); } }
            @keyframes  fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
            #coohome {margin: 0% 25% 7% 25%; text-align: center}
            @media  only screen and (max-width: 959px) {
            #coohome {margin: 0% 2% 3% 2%; text-align: center}}
            .equivalenceD {
            	font-weight:none;
            }

          </style>
          
          <div class="circle"><svg xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 750 750">
              <g id="cocircle">
                <path id="equivalence" fill="none" stroke="#FF9000" stroke-width="24" stroke-miterlimit="10"
                    d="M225.709,62.785 c45.197-21.649,95.826-33.77,149.288-33.77c50.245,0,97.991,10.713,141.079,29.979" onmouseover="showvalue(1);"/>
                <path id="trust" fill="none" stroke="#FFDD00" stroke-width="24" stroke-miterlimit="10"
                    d="M516.076,58.994 c94.277,42.149,166.243,125.255,193.274,226.706" onmouseover="showvalue(2);"/>
                <path id="care" fill="none" stroke="#88DD33" stroke-width="24" stroke-miterlimit="10"
                    d="M709.351,285.699 c7.587,28.491,11.635,58.434,11.635,89.322c0,78.376-26.072,150.676-70.015,208.687" onmouseover="showvalue(3);"/>
                <path id="transparency" fill="none" stroke="#22DDEE" stroke-width="24" stroke-miterlimit="10"
                    d="M650.971,583.708 c-63.172,83.401-163.282,137.277-275.974,137.277" onmouseover="showvalue(4);"/>
                <path id="freedom" fill="none" stroke="#4488EE" stroke-width="24" stroke-miterlimit="10"
                    d="M374.997,720.985 c-113.476,0-214.192-54.632-277.286-139.022" onmouseover="showvalue(5);"/>
                <path id="understanding" fill="none" stroke="#AA66DD" stroke-width="24" stroke-miterlimit="10"
                    d="M97.711,581.963 c-43.146-57.715-68.696-129.347-68.696-206.941c0-30.365,3.912-59.816,11.261-87.88" onmouseover="showvalue(6);"/>
                <path id="diversity" fill="none" stroke="#FF77DD" stroke-width="24" stroke-miterlimit="10"
                    d="M40.275,287.142 c25.95-99.139,94.76-180.919,185.434-224.357" onmouseover="showvalue(7);"/>
              </g>

              <text id="typo" style="opacity:0;" transform="matrix(1 0 0 1 126.4829 374.8936)" fill="#555555" font-family="'Avenir'" font-size="80">COOPERACY</text>
              <text id="payoff" style="opacity:0;" transform="matrix(1 0 0 1 135.2437 420.6143)" fill="#555555" stroke="#555555" stroke-miterlimit="10" font-family="'Avenir'" font-size="28" letter-spacing="7">DIVERSE AND TOGETHER</text>

              <g id="equivalenceD" display="none"><a class="equivalenceD" xlink:href="/equivalence-new">
                  <text transform="matrix(1 0 0 1 147.5029 349.5166)" fill="#555555" font-family="'Avenir'" font-size="65">EQUIVALENCE</text><line display="inline" fill="none" stroke="#FF9000" stroke-width="5" stroke-miterlimit="10" x1="149.788" y1="382.776" x2="599.788" y2="382.776"/><text transform="matrix(1 0 0 1 186.5635 432.7881)" fill="#555555" stroke="#555555" stroke-miterlimit="10" font-family="'Avenir'" font-size="25" letter-spacing="2">OF WEALTH AND FEELINGS</text></line>
                </a></g>
              <g id="trustD" display="none"><a xlink:href="trust-new">
                  <text transform="matrix(1 0 0 1 276.0303 349.9756)" fill="#555555" font-family="'Avenir'" font-size="65">TRUST</text><line display="inline" fill="#FFDD00" stroke="#FFDD00" stroke-width="5" stroke-miterlimit="10" x1="149.788" y1="382.776" x2="599.788" y2="382.776"/><text transform="matrix(1 0 0 1 233.2002 432.3291)" display="inline" fill="#555555" stroke="#555555" stroke-miterlimit="10" font-family="'Avenir'" font-size="25" letter-spacing="2">VOTING IDEAS FIRST</text></line>
                </a></g>
              <g id="careD" display="none"><a xlink:href="care-new">
                  <text transform="matrix(1 0 0 1 288.3857 349.9756)" fill="#555555" font-family="'Avenir'" font-size="65">CARE</text><line display="inline" fill="none" stroke="#88DD33" stroke-width="5" stroke-miterlimit="10" x1="149.788" y1="381.776" x2="599.788" y2="381.776"/><text transform="matrix(1 0 0 1 145.2139 432.3291)" display="inline" fill="#555555" stroke="#555555" stroke-miterlimit="10" font-family="'Avenir'" font-size="25" letter-spacing="2">ABOUT OUR NEEDS AND DESIRES</text></line>
                </a></g>
              <g id="transparencyD" display="none"><a xlink:href="/transparency-new">
                  <text transform="matrix(1 0 0 1 118.8379 349.9961)" fill="#555555" font-family="'Avenir'" font-size="65">TRANSPARENCY</text><line display="inline" fill="none" stroke="#22DDEE" stroke-width="5" stroke-miterlimit="10" x1="149.788" y1="381.776" x2="599.788" y2="381.776"/><text transform="matrix(1 0 0 1 197.9424 432.3086)" display="inline" fill="#555555" stroke="#555555" stroke-miterlimit="10" font-family="'Avenir'" font-size="25" letter-spacing="2">PUBLIC AND ON DEMAND</text></line>
                </a></g>
              <g id="freedomD" display="none"><a xlink:href="/freedom-new">
                  <text transform="matrix(1 0 0 1 215.2783 349.9658)" fill="#555555" font-family="'Avenir'" font-size="65">FREEDOM</text><line display="inline" fill="none" stroke="#4488EE" stroke-width="5" stroke-miterlimit="10" x1="149.788" y1="381.776" x2="599.788" y2="381.776"/><text transform="matrix(1 0 0 1 129.376 442.3394)" display="inline" fill="#555555" stroke="#555555" stroke-miterlimit="10" font-family="'Avenir'" font-size="25" letter-spacing="2">PERSONALITY BASED EMPLOYMENT</text></line>
                </a></g>
              <g id="understandingD" display="none"><a xlink:href="/understanding-new">
                  <text transform="matrix(1 0 0 1 92.7075 349.9238)" fill="#555555" font-family="'Avenir'" font-size="65">UNDERSTANDING</text><line display="inline" fill="none" stroke="#AA66DD" stroke-width="5" stroke-miterlimit="10" x1="149.788" y1="381.776" x2="599.788" y2="381.776"/><text transform="matrix(1 0 0 1 112.5425 432.3809)" display="inline" fill="#555555" stroke="#555555" stroke-miterlimit="10" font-family="'Avenir'" font-size="25" letter-spacing="2">A SOCIAL SYSTEM FOR COOPERATION</text></line>
                </a></g>
              <g id="diversityD" display="none"><a xlink:href="/diversity-new">
                  <text transform="matrix(1 0 0 1 215.7197 349.8467)" fill="#555555" font-family="'Avenir'" font-size="65">DIVERSITY</text><line display="inline" fill="none" stroke="#FF77CC" stroke-width="5" stroke-miterlimit="10" x1="149.788" y1="381.776" x2="599.788" y2="381.776"/><text transform="matrix(1 0 0 1 101.1157 432.458)" display="inline" fill="#555555" stroke="#555555" stroke-miterlimit="10" font-family="'Avenir'" font-size="25" letter-spacing="2">FUN AND FUNDS FOR EVERYONE OF US</text></line>
                </a></g>
            </svg></div>



</div>

@stop