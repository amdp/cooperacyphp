@extends('layouts.lvapp')
@section('title')
    Participate - Cooperacy
@stop
@section('content')

<!--BEGIN CONTAINER-->
<div class="containerone">

  <!--BEGIN HEADER-->
  <div class="row">
  <br><img class="page-header" src="{{asset('/images/participate.png')}}"><br>
  </div>
  <!--END HEADER-->

  <!--BEGIN ROW-->
  <div class="row">

  <!--BEGIN LEFT COL-->
  <div class="col-md-2"></div>
  <!--END LEFT COL-->

  <!--BEGIN CONTENT-->
  <div class="col-md-8">
  <p class="base">Cooperacy activities are growing! You can support our efforts by joining one of them.<br></p>
  <p class="subheading equivalence center space margin">THE PLATFORM</p>
  <p class="base">Our main effort is to develop our <a class="ae" href="/platform">platform</a>. It is already functional, but it needs some improvements. Although we have already made some testing we still have to reach 3000 members to make it appealing, dynamic and sustainable. This is our first milestone, to get more participants: we are currently {{$membersnumber}}!</p>

  <div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="{{round($membersnumber/3000*100, $precision=2)}}"
  aria-valuemin="0" aria-valuemax="100" style="width:{{round($membersnumber/3000*100, $precision=2)}}%" style="color:#000000; background-color: #FF9000">&nbsp;{{round($membersnumber/3000*100, $precision=2)}}%&nbsp;Complete</div></div>

  <p class="subheading equivalence center space margin">COOPERACY MESSENGERS</p>
  <p class="base">Our communication group needs new members to help with the texts, the graphics, the translations and the front end coding. If you have any of these skills and you are willing to participate please <a class="ae" href="/register">join</a> and <a class="at" href="/contact">contact us.</a></p>

  <p class="subheading equivalence center space margin">COOPERACY CODERS</p>
  <p class="base">If we had enough coders we would need a lot less than 3000 members to support and maintain the platform. If you would like to participate in an open project in which your experience will be of great value for the group while the final output will be a human centered designed tool to foster human cooperation, we are really happy to introduce you to our <a class="at" href="/contact">coding team</a>.</p>

  <p class="subheading equivalence center space margin">COOPERACY EDUCATION</p>
  <p class="base"><a class="at" href="/contact">Help us</a> with the online live webinars and in preparing the materials for the courses!</p>

  <p class="subheading equivalence center space margin">COOPERACY ACROYOGA</p>
  <p class="base">This project was led by Igor Carravetta and Carola Ravaschino in 2016.</p>
  <div class="center"><video width="480px" height="360px" controls>
  <source src="{{asset('images/acrocoo.mov')}}" type="video/mp4" alt="null">
  </video></div><br>
  <p class="base">During one of the first Cooperacy meetings, we were discussing how to test the voting system and do something together. Igor and Carola, at the time, were doing Acroyoga, which merges acrobatic movements with simple yoga positions. It is based on the cooperation and trust between two people and one supervisor. It's a different cooperation compared to the standard actions we do together, in this case the bodies balances depend on the reciprocal perception and understanding of the participants. The group voted and we funded and helped the weekly course from October to March. It has been an amazing experience. Igor and Carola are happy to start over, if you want just drop a <a class="at" href="/contact">line</a> asking for them.</p>

  <p class="subheading equivalence center space margin">EXPERIMENTAL PROJECTS</p>
  <p class="base">This is a non-exaustive list of the projects we are currently testing.</p>
  <div class="center"><img width="480px" height="360px" src="{{asset('/images/coofood.png')}}"><br><br></div>
  <p class="mini"><span class="freedom">1.</span> We tried in Milan a system of buying fruits and vegetables from direct sources and reselling them amongst our members. We did it three times and we made an earning of 30 euros paying all the expenses including transports and people's time.<br>
  <span class="freedom">2.</span> We tested to get delicious, organic, multi-cereal bread from Busto Arsizio and we found out we could develop a business out of it. We just need some people to set it up.<br>
  <span class="freedom">3.</span> We organized the catering for an event, and we found out we can earn till 100 Euros for each event we organise.<br><br>
  As you see, we made some funny experiments. <a class="at" href="/contact">Maybe</a> you want to test your own?<br><br>
  </p>

  <p class="subheading equivalence center space margin">THE CORPORATE SIDE</p>
  <p class="base">Are you part of the corporate world? Would you like to apply the Cooperation Science in your company processes? Feel free to <a class="at" href="/contact">contact us</a> and ask for more information!</p>

  <p class="subheading equivalence center space margin">COOPERATION SCIENCE</p>
  <p class="base">This project is the first and most important one as Cooperacy was born from our scientific research about Cooperation.<br><br></p>
  <p class="base">Alessandro Merletti De Palo and Ilario Tito were friends since 35 years. In 2014 they met in Rome, at Bar della Pace, to talk about how much the social system needed a change. A serious talking amongst friends, the typical chat that ends once you say goodbye. Instead, when Alessandro went back home, he kept on thinking about it. How do you call that special, enjoyable energy that you feel with your friends even when you do something useful? There was no specific emotion, but Alessandro thought about the word "<a class="ae" href="/cooperation">cooperation</a>". What is cooperation? Can we bring that emotion of doing things together with enjoyment at a worldwide level? He wanted to know more, but there was no "Faculty of Cooperation" or "Cooperation University". So he started with the simplest thing he could do. He looked for the word cooperation in the dictionary. There were many definitions, but none was clear. He started reading scientific articles about it, intertwining different disciplines. Game Theory, Philosophy, Sociology, Psychology, Economy, Evolutionary Biology, Linguistics, Anthropology, Neuroscience.. there were many different approaches to the study of cooperation. Merging them together in a model, Alessandro called Ilario back and asked him to cooperate together and find eventual demonstration of the theory, in order to to introduce it at the MIT Collective Intelligence conference. Together with Maria Gisa Masia, Alessandro Mancinella, Mariangela Nitti, and Kanwar Ujjawal Singh they wrote a paper that was accepted at the conference. Since then, they participated to many other conferences around the world: this story tells the birth of the scientific model behind the idea of Cooperacy.
  Today we’re doing great with Cooperation Science! Our model was at two conferences by MIT in the US, and in 2017 we presented in Macao our international Cooperation Context Index by countries. Have a look at the <a class="au" href="/coscience">scientific</a> part of our website and, if you are an academic, please <a class="at" href="/register">join</a> Cooperacy and our team of researchers!</p><br><br>
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
