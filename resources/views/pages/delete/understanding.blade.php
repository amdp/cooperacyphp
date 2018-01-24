@extends('layouts.default')
@section('title')
    Understanding - Cooperacy
@stop
@section('content')

<div id="main" class="site-main clr">


  <div id="content-wrap" class="container clr full-screen">
    <section id="primary" class="content-area clr">
      <div id="content" class="clr site-content" role="main">
        <article class="clr">

          <div class="entry-content entry clr">
          
          <h1 style="color:#BB66DD; font-size: 34px; text-align:center; font-weight:700; padding-top: 1vw">INTRODUCING THE COOPERATION CONTEXT INDEX FOR COUNTRIES</h1>
          <style>.coo-map{display: block; width: 100%; position: relative;} .coo-map svg{ display: block; width: 80%; margin: 0 auto; height: auto;}
              .country-details{display: block; margin-top: 20px; text-align: center;}
              .country-details .detail{display: inline-block; vertical-align: middle; font-weight: bolder; padding: 0 15px; width: 24%;
              .country-details .detail span{font-weight: normal; color: rgb(137, 137, 137) !important;}</STYLE>
            <STYLE>
              #countries-map {margin:0;padding:0;width:100%;height:50%;}
            </style>
            <p style="color:#8866dd; font-size: 24px; font-weight:700; margin-bottom:5px; margin-top:5px; text-align:center;">
              <object id='countries-map' type="image/svg+xml" style='width:80%; height:80%'><param name='wmode' value='transparent'></object><br />
                <script src='{{asset('js/map.js')}}'></script></p>
              <p style="color:#8866dd; font-size: 32px; font-weight:700; text-align:center;">
                <div id='map_btn' style='display:none;' onclick='return countries.ii_click();'>Click here for Cooperation Context Index</div>
              </p>
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

            <div id="coomain">
              <p style="color:#BB66DD; font-size: 24px; font-weight:700; margin-bottom:10px; margin-top:2vw;">COOPERACY IS RESEARCH TOO</p>
              <p style="color:#BB66DD; font-size: 20px; font-weight:700; margin-bottom:20px;">AN INDEPENDENT RESEARCH PROJECT FOUNDED THE 23rd SEPTEMBER 2014</p>
              <p style="color: #555555; font-size: 18px;">Cooperacy is an independent research project aimed to:<br />
                1. support a research team about cooperation theory;<br />
                2. create an online platform about cooperation in order to foster the knowledge and the diffusion of cooperative culture together with its improvement methods;<br />
                3. experiment within the platform the same methodologies.</p>
              <p style="color: #555555; font-size: 16px;">Our proposed model of Cooperation has been accepted by the research lab of the sharing economy OuiShare festival in Paris; in the Collective Intelligence Conference in Silicon Valley, Santa Clara, 2015, organized by the Centre for Collective Intelligence &#8211; M.I.T. and the University of Michigan, with the presence of Regina Duncan &#8211; Vice President of Google and the Facebook Research Team and in the same conference, in 2016, held at the Stern School of Business in New York; in the Conference &#8220;La citta&#8217; e il territorio come beni comuni&#8221; in Bologna organized by LabGov and IASC, in the 2016 g0v conference in Taipei, and Cooperacy has been invited to the first Positive Peace conference by Visions of Humanity &#8211; Institute for Economics and Peace at Stanford.</p>
              <p style="color: #555555; font-size: 16px;">Our <a href="http://sites.lsa.umich.edu/collectiveintelligence/wp-content/uploads/sites/176/2015/05/Merletti-2015-CI-Abstract.pdf">project abstract</a> proposes a definition of cooperation based on a multidisciplinary constructs model, being compared on international indicators PLS analysis, social representation, Facebook groups real and relational benefits analysis, game theory dual benefit analysis and subsequent mathematical model theorization.<br />
                Our complete research project includes dedicated experimentation with small groups in parallel with real life analysis of human interactions in companies, sharing cities, sharing economy vs. sharing business comparison, open space technology meetings, enjoyable communication (Non Violent Communication, Principled Negotiation and Theory of Desires), participated budgeting, lean manufacturing, blockchain technology, false cooperative companies definition methodologies.</p>
              <p style="color: #555555; font-size: 16px;">Our model is currently being described qualitatively and quantitatively at a scientific level, never the less we cooperate with common people coherently with our model that is based on the Diversity Theory. Everyone is invited to participate and cooperate with us with mutual enjoyment.</p>
              <p><em>Feel free to write us and join our independent research group</p>
                <p></em></p>
              <p style="color: #b466dd; font-size: 18px;">Current Universities and Institutions in contact with Cooperacy:</p>
              <p style="color: #555555; font-size: 16px;">
                The University of Michigan: Center for the Study of Complex Systems<br />
                M.I.T.: Centre for Collective Intelligence<br />
                OuiShare<br />
                Institute for Economics and Peace<br />
                LabGov<br />
                IASC<br />
                Mykolas Romeris University<br />
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
              <p><em>Please help us answering to only two questions in our online <a style="text-decoration: underline;" href="https://docs.google.com/forms/d/e/1FAIpQLSeiH8qMbsnRJQVt5n1CS1KPsJfsxBQML3hAbImpaDqiIuVrQw/viewform">Questionnaire</a></p>
                <p></em></p>
            </div>
            
              <div style="margin-left: 25%; margin-right: 25%; margin-bottom: 7%;">
                <p style="color:#BB66DD; font-size: 24px; font-weight:700; margin-bottom:10px;">UNDERSTANDING</p>
                <p style="color:#BB66DD; font-size: 20px; font-weight:700; margin-bottom:20px;">Cooperation and comprehension go together</p>
                <p style="color: #555555; font-size: 14px; font-weight:400;">When -due to diversity- the linguistic, behavioural, and cultural codes are different or unknown by the individuals, with no presence of common background that can act as a bridge, the possible and desired cooperation collapses into conflict: we can talk about &#8220;conflictual collaboration&#8221;. Absence of common codes generates a feeling of betrayal, injustice, lack of respect, absence of listening, the threat of future disadvantages and the possible destruction of the relationship, so understanding each other represents a base for cooperation.</p>
                <p>Conflictual collaboration is a form of collaboration highly distributed in groups with a lack of transparency, very low information flow, or simply social and cultural diversity which is not accepted or even worse that is forced into orthodoxy or uniformity.</p>
                <p style="background-color:#BB66DD; color:#fafafa; font-size: 16px; font-weight:300; margin-bottom:0px; padding:20px;">TO SOLVE A CONFLICT WITH THE UNDERSTANDING CONDITION:<br />
                  Combine perspectives or solutions, as sometimes conflicts are based on two complementary visions about the problem which do not exclude that much one another.</p>
                <p style="color:#BB66DD; font-size: 16px; font-weight:300; padding:20px;">KEY UNDERSTANDING PRACTICES<br />Common codes, acceptance of diversity, empathy..<br />.</p>
                <p>Common codes, like common languages, traditions, cultural background, mindsets and preferences can make a cooperation easy and enjoyable since the beginning. When two individuals understand each other they can avoid misinterpretations and subsequent feeling of incompatibility, danger, betrayal. Common codes also lead to the possibility of goal and cultural integration, multiplying the collective effect of the individual efforts. Acceptance in this is fundamental as it opens the way to reciprocal understanding and subsequent support to differences like ethnic and linguistic minorities, or simply very peculiar people who have a strange but probably interesting new perspective about the interaction.<br />
                  Empathy represent the common code of feelings, which need through good communication, like the &#8216;non-violent&#8217; one, to be recognized and expressed in order to be considered and respected.</p>
              </div>
            </div><!-- .entry-content -->
          </article><!-- #post -->
        </div><!-- #content -->
      </section><!-- #primary -->
    </div><!-- #content-wrap -->


  </div><!-- #main -->

  @stop