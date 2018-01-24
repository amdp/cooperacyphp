@extends('layouts.lvapp')
@section('title')
    Based on science - Cooperacy
@stop
@section('content')

<!--BEGIN CONTAINER-->
<div class="container">

  <!--BEGIN CUSTOM MAP STYLE-->
  <style>.coo-map{display: block; width: 100%; position: relative;} .coo-map svg{ display: block; width: 80%; margin: 0 auto; height: auto;}
  .country-details{display: block; margin-top: 20px; text-align: center;}
  .country-details .detail{display: inline-block; vertical-align: middle; font-weight: bolder; padding: 0 15px; width: 24%;
  .country-details .detail span{font-weight: normal; color: #aa66dd;}
  #countries-map {margin:0;padding:0;width:100%;height:50%;}
  </style>
  <!--END CUSTOM MAP STYLE-->

  <!--BEGIN ROW-->
  <div class="row">
  
  <!--BEGIN MAP-->
  <div class="col-md-12">
  
  <div style="text-align:center;">
  <p class="heading understanding center" style="margin-top:10px;text-align:center">
  <object id='countries-map' type="image/svg+xml" style='width:80%; height:80%'><param name='wmode' value='transparent'></object>
  <br />
  <script src='{{asset('js/map.js')}}'></script></p></div>
  <p class="heading understanding center">
  <p style="color: #aa66dd; font-size: 20px; text-align: center; font-weight: bold; margin-bottom: 10px;">INTRODUCING THE COOPERATION CONTEXT INDEX FOR COUNTRIES</p>
  <div id='map_btn' style='display:none;' onclick='return countries.ii_click();'>Click here for Cooperation Context Index</p></div>
  
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
    <style>table, tbody, tr {border=0 !important; border-collapse: collapse; border-style: hidden !important;}
      td {border=0 !important; width: 16%; border-collapse: collapse; border-style: hidden !important;}
    </style>
    <table>
      <tr>
        <td>    <span class="detail country"><span id='country-value'></span> CCI: <span id='CCI-value'></span></span> </td>
        <td>    <span class="detail equivalence" style="color: #ff9900;">Equivalence: <span id='equivalence-value'></span></span> </td>
        <td>    <span class="detail reliability" style="color: #ffdd00;">Trust: <span id='reliability-value'></span></span> </td>
        <td>    <span class="detail care" style="color: #99ff55;">Care: <span id='care-value'></span></span> </td>
      </tr>
      <tr>
        <td>    <span class="detail transparency" style="color: #55ffff;">Transparency: <span id='transparency-value'></span></span> </td>
        <td>    <span class="detail freedom" style="color: #0077ee;">Freedom: <span id='freedom-value'></span></span> </td>
        <td>    <span class="detail understanding" style="color: #aa77dd;">Understanding: <span id='understanding-value'></span></span> </td>
        <td>    <span class="detail diversity" style="color: #ff00ff;">Diversity: <span id='diversity-value'></span></span> </td>
      </tr>
    </table>
  </div>
  </div>
  <!--END VALUE TABLE-->
    
  </div>
  <!--END ROW-->
  
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
  <p class="heading understanding">AN INDEPENDENT RESEARCH PROJECT FOUNDED THE 23rd SEPTEMBER 2014</p>
              <p class="base">
              In late 2014, a group of 7 independent researchers investigated from different disciplines and perspectives the model of Cooperation Science developed by Alessandro Merletti De Palo based on an extensive literature review about Cooperation and its many different frameworks. The model was confirmed by the investigations results, and the subsequent paper was accepted at the M.I.T. 2015 Collective Intelligence Conference in Santa Clara, organized by the University of Michigan - Ann Arbour, with the presence of Facebook and of the Google vice-president Regina Duncan.<br>
              "Cooperacy" then became a legal entity with the official registration in Milan by the co-founder Ilario Tito in 2015.<br><br>

              We presented the model the same year at the OuiShareFest in Paris, the leading worldwide event about the emerging phenomenon of the Sharing Economy. We refined our approach with semantic clusters and presented it during the IASC conference in Bologna organized by LabGov. We&#8217;ve been invited in the first International Conference on Positive Peace held by the Institute for Economics and Peace at Stanford then we presented the model in 2016 at the g0v Conference in Taipei and finally in Germany, Hamburg, at the official Conference for Coproduction systems. We presented our preliminary Cooperation Context Index at the 2016 Collective Intelligence Conference at the New York Stern School of Business and we got accepted in Macao PLS-SEM conference with the updated index this year. We spread through very different backgrounds, from the institutional MIT, Michigan Ann Arbor and New York Stern, to the governative g0v or the specific statistical approach of Macao PLS17, from the festival style of OuiShare to the serious context in Hamburg, from conferences with partners like Google and Facebook to those with IASC or the same g0v.
              <br><br>
              These events are symbols of the research and impact effects of our investigation: enabling better relational intelligence and developing productivity through cooperative and mutual satisfactory processes.<br><br>
              The model of Cooperation developed by Cooperacy, based on rigourous scientific confrontation on the cooperation theory literature and different - still ongoing - research streams, has gathered so much interest in such a small amount of time that different european and international Universities and Institutions, organizations and even business events and courses are supporting, establishing a partnership or disseminating it.</p>
              <p class="base">Our <a style="text-decoration: underline;" href="https:///www.researchgate.net/project/Cooperation-Science">project articles</a> propose a definition of cooperation based on an interdisciplinary constructs model, being compared on international indicators PLS analysis, social representation, Facebook groups real and relational benefits analysis, game theory dual benefit analysis and subsequent mathematical model theorization.
              <p class="base">Our model is therefore currently being described qualitatively and quantitatively at a scientific level, never the less we cooperate with common people coherently with our model that is based on the Diversity Theory. Everyone is invited to participate and cooperate with us with mutual enjoyment.
              <p class="base"><em>Feel free to write us and join our independent research group</p>
                <p></em></p>
              <p class="subheading understanding">Current Universities and Institutions in contact with Cooperacy:</p>
              <p class="base">
                The University of Michigan: Center for the Study of Complex Systems<br />
                M.I.T.: Centre for Collective Intelligence<br />
                OuiShare<br />
                Institute for Economics and Peace<br />
                LabGov<br />
                IASC<br />
                Mykolas Romeris University<br />
                Centre National de la Recherche Scientifique - Paris<br />
                Universidad de Malaga<br />
                University of Coimbra<br />
                University of Manchester<br />
                Delft University of Technology<br />
                DemocracyOS<br />
                Ancona University<br />
                Meet the Media Guru<br />
                Marconi University<br />
                Bicocca University<br />
                Slovak Academy of Science<br />
                Them Games</p>
              <p class="subheading understanding">Our current streams of research are:<br>
                  <p class="base">
                  1 Main Cooperation Science framework<br>
                  2 Cooperation Context Index for countries<br>
                  3 Facebook groups relative analysis based on two indicators, benefit and relations<br>
                  4 Semantics of Cooperation<br>
                  5 Game theory and Evolutionary biology<br>
                  6 Neuroscience of Cooperation<br>
                  7 Economy and Governance<br>
                  9 Neuroscience<br>
                  <p class="base">

                    <p class="subheading understanding">Articles:<br>
                      <p class="base">
                      •	Conference paper, MIT Collective Intelligence Conference 2015, University of Michigan - Ann Arbor - Centre for Complex Systems, held in Santa Clara, Silicon Valley<br>
                      •	Conference paper, MIT Collective Intelligence Conference 2016, New York University Stern School of Business<br>
                      •	In publication: Cooperation and Collective Intelligence, LabGov and IASC selection from the Conference of Urban Commons, Bologna<br>
                      •	In publication: Cooperation: the Art of Mutual Enjoyment, Springer<br>
                      •	Conference paper, Partial Least Square 2017 international conference, Introducing a Cooperation Context Index for countries<br>
                      Provisory link for all articles: <a style="text-decoration: underline;" href="https://www.researchgate.net/project/Cooperation-Science">www.researchgate.net/project/Cooperation-Science</a><br><br>
                <em>Please help us answering to only two questions in our online <a style="text-decoration: underline;" href="https://docs.google.com/forms/d/e/1FAIpQLSeiH8qMbsnRJQVt5n1CS1KPsJfsxBQML3hAbImpaDqiIuVrQw/viewform">Questionnaire</a></p>
                <p></em></p>
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
