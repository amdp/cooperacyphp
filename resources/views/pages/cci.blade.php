@extends('layouts.lvapp')
@section('title')
    Cooperation Context Index - Cooperacy
@stop
@section('content')

  <!--BEGIN SPACER-->
  <div class="row"><p style="height:50px;"></p></div>
  <!--END SPACER-->

  <!--BEGIN HEADER-->
  <div class="row">
  <img class="page-header" src="{{asset('/images/cci.png')}}">
  </div>

  <!--END HEADER-->

  <!--BEGIN ROW-->
  <div class="row">

  <!--BEGIN MAP-->
  <div class="col-md-12">

  <div style="text-align:center;">
  <p class="center" style="margin-top:10px;text-align:center">
  <object id='countries-map' type="image/svg+xml" style='width:80%; height:80%'><param name='wmode' value='transparent'></object>
  <br /></p></div>


  <div id='map_btn' style='display:none;' onclick='return countries.ii_click();'><p class="subheading understanding center space">CLICK HERE FOR THE COOPERATION CONTEXT INDEX</p></div>
  </div>
  <!--END MAP-->

  </div>
  <!--END ROW-->

  <!--BEGIN ROW-->
  <div class="row">

  <!--BEGIN LEFT COL-->
  <div class="col-md-2"></div>
  <!--END LEFT COL-->

  <!--BEGIN VALUE TABLE-->
  <div class="col-md-8">
  <div class="country-details">

    <table>
      <tr>
        <span id='country-value'></span>
      </tr>
      <tr>
        <td>    <span class="detail country" style="font-weight:lighter;"> CCI <span id='CCI-value'></span></span> </td>
        <td>    <span class="detail equivalence" style="font-weight:lighter; color: #ff9900;">EQUIVALENCE <span id='equivalence-value'></span></span> </td>
        <td>    <span class="detail reliability" style="font-weight:lighter; color: #ffdd00;">TRUST <span id='reliability-value'></span></span> </td>
        <td>    <span class="detail care" style="font-weight:lighter; color: #99ff55;">CARE <span id='care-value'></span></span> </td>
      </tr>
      <tr>
        <td>    <span class="detail transparency" style="font-weight:lighter; color: #55ffff;">TRANSPARENCY <span id='transparency-value'></span></span> </td>
        <td>    <span class="detail freedom" style="font-weight:lighter; color: #0077ee;">FREEDOM <span id='freedom-value'></span></span> </td>
        <td>    <span class="detail understanding" style="font-weight:lighter; color: #aa77dd;">UNDERSTANDING <span id='understanding-value'></span></span> </td>
        <td>    <span class="detail diversity" style="font-weight:lighter; color: #ff00ff;">DIVERSITY <span id='diversity-value'></span></span> </td>
      </tr>
    </table>
  </div>
  </div>
  <!--END VALUE TABLE-->

  </div>
  <!--END ROW-->

<!--BEGIN CONTAINER-->
<div class="container">

  <!--BEGIN SPACER-->
  <div class="row"><p style="height:20px;"></p></div>
  <!--END SPACER-->

  <!--BEGIN ROW-->
  <div class="row">

  <!--BEGIN LEFT COL-->
  <div class="col-md-2"></div>
  <!--END LEFT COL-->

  <!--BEGIN CONTENT-->
  <div class="col-md-8">

  <p class="subheading understanding center space margin">THE COOPERATION CONTEXT INDEX BY COUNTRY</p>
              <p class="base">
              The Cooperation Context Index is a measure of the <i>possibility</i> of cooperative interactions in a country, by analyzing and cross-checking more than 150 international official indexes.<br><br>

              It is based on the Cooperation Science framework and shows a non-performative map of the prevalent condition of cooperation over the seven others: equivalence, trust, care, transparency, freedom, understanding, diversity; and a level of the possibility to establish cooperation in each country analyzed. The results can be consulted in the interactive map, that shows 139 countries with 2017 CCI index data and 39 with the 2016 one. The impact of every condition of cooperation over the whole index is similar, with the exception of the diversity condition which is currently irrelevant, as it depends on the others. Usually high diversity becomes a plus when the CCI index is higher than one. Countries with a CCI value of more than two leverage over the diversity, while countries close to 0 and lower usually turn high diversity into conflicts.
              <br><br>
              <p class="subheading understanding center space margin">THE INDEXES</p>
              The list of indexes spans through 2014-2016 data retrieved from online public sources: BTI-Project; EIU - Democracy Index; Ethnologue linguistic diversity by country; Freedom house; Global Corruption Barometer - Transparency International; Global Food Security Index; The World Bank; ipu.org; UNHCR; SE4ALL; OECD National Accounts data files; Internal Displacement Monitoring Centre; UN Inter-agency Group for Child Mortality Estimation; UN Office on Drugs and Crime's International Homicide Statistics database; UNESCO; UNICEF; WHO; JMP; FAO; U.N. Population Division; Eurostat; Human Trafficking Report; Infoplease refined by internal research; International Budget Partnership; International consortium of investigative journalists; Internet live stats; Pew Research Center RDI; Transparency International; Wikileaks; World Economic Forum; World Press Freedom Index. We will soon openly release the CCI data files.<br><br>
              <p class="subheading understanding center space margin">THE MODEL</p>
              The Cooperation Model developed by Cooperacy and the related CCI, based on rigourous scientific confrontation on the cooperation theory literature and different - still ongoing - research streams, has gathered so much interest in such a small amount of time that different european and international Universities and Institutions, organizations and even business events and courses are supporting, establishing a partnership or disseminating it.<br><br></p>
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
