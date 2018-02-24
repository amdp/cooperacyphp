@extends('layouts.lvapp')
@section('title')
    Fun - Cooperacy
@stop
@section('content')

<!--BEGIN CONTAINER-->
<div class="containerone">

  <!--BEGIN HEADER-->
  <div class="row">
  <br><img class="page-header" src="{{asset('/images/fun.png')}}"><br>
  </div>
  <!--END HEADER-->

  <!--BEGIN ROW-->
  <div class="row">

  <!--BEGIN SLEFT COL-->
  <div class="col-md-2"></div>
  <!--END LEFT COL-->

  <!--BEGIN CONTENT-->
  <div class="col-md-8">

  <br><p class="subheading diversity center space margin">FUN</p>
  <p class="base">Fun and games make us feel together, especially if the gameplay is not competitive. Fun also includes the bright side of the artistic zest and the power of creative innovation. Art, fun, games and innovation represent the generative side of our lives. This page is dedicated to collective creativity.</p>
  <br><p class="subheading diversity center space margin">COOPERATIVE MONOPOLY</p>
  <p class="base">Cooperative Monopoly is a game that can be played with a standard monopoly set to understand the economic system we live in nowadays. Following these simple steps, you may experience a transition from the standard competitive capitalistic economy to a different one based on cooperation and understanding.<br /><br />
  We recently discovered Monopoly was invented by <a class="aud" rc="https://en.wikipedia.org/wiki/Lizzie_Magie">Lizzy Magie</a>, a Georgist and game designer from the US. The game was called "The Landlord Game" or "Prosperity". The two names depend on the fact the original game had two set of rules, one almost completely similar to the Monopoly ones, the other one instead based on every land owned by a collective treasury, resembling the "Single Tax" <a class="auu" src="https://en.wikipedia.org/wiki/Georgism">Georgist</a> approach to the economy that wouldn't exclude anyone from being eliminated from the game.<br /><br />
  We tested the "Prosperity" set of rules and unfortunately they are better than the capitalist ones, but do not reach a full balanced game. We suggest you to try the cooperative monopoly narrative, and see what happens in your case:<br /><br />
  <span class="diversity">1.</span> When the game starts, every participant receives 12 houses that can be set up with no cost. The game proceeds as it normally would in a standard Monopoly game.<br />
  <span class="diversity">2.</span> When the first player runs out of the highest-value banknote type, the <i>participated governance</i> phase begins. In this phase, players can talk to each other with the purpose of forming alliances, sharing ownerships, changing the rules of the game. They can do it when it's the poorest player turn.<br />
  <span class="diversity">3.</span> When two players decide to put in common some properties or their money, the game enters the <i>collaboration</i> phase. Players may even merge in teams and play one team against the other(s). The term collaboration indicates a general form of interaction as the coalition is not neutral. Sometimes a strong competitive player is isolated until his/her policy change.<br />
  <span class="diversity">4.</span> Usually players decide to redistribute the money owned by each of them, and the game gets in the <i>redistribution</i> phase. The players usually change the objective of the game or insert an agreement that nobody can go bankrupt and should be saved by the others. Then, half of any rent payed goes to the owner, and half to the center of the board, and when any banknote type reaches the same number of the players, they are redistributed.<br />
  <span class="diversity">5.</span> Then players decide to take all the money from the bank, the game evolves into the <i>bank off</i> phase. Sometimes all the money from the bank is redistributed, sometimes a joint team of all the players decides to get the money from the bank and set the objective to build the maximum amount of hotels and houses possible as a final victory of the whole group.<br />
  <span class="diversity">6.</span> When three rounds have been played in the bank off mode, a coup d’etat is carried out and a <i>dictatorship</i> is established. A depressed tyrant takes all lands, hotels, houses and overrule the agreements the players might have drawn up, but takes no money: the players manage to save all the relevant resources before the dictatorship, so they still have all the money. They have two opportunities now. They continue playing as usual but, when they arrive on a land, they can buy it back paying first the standard rent (which is not redistributed), and then paying the value of the land and the buildings multiplied by five. This way, they may try to re-buy their city. The other opportunity is to make the depressed leader leave, that is, to make him happy again. His will is to receive all the players money, in order to accomplish a secret goal of his (going to Mars, building a mausoleum made of gold, etc.). The players could therefore also decide to give all the money they have to the dictator and make him happy. When the dictator is happy, he will go away with the money and leave the city to all the players.<br />
  <span class="diversity">7.</span> When the depressed dictator goes away, the <i>creativity</i> final phase can be started: the whole city is owned by the participants and is in common. The players are free to imagine a new city that works differently, every one of them may choose their area and color of concern, keeping in mind the city needs energy, water, food production, et cetera. Every color may be dedicated to a need, a service or an activity. The city is free to imagine a new social system based on the beliefs and ideas of the players!<br>
  A quick way to experience this is to play the game as usual, with this different mechanism:<br>
  Every time a player steps on an owned property, with or without buildings, the property produces money FROM the Monopoly box (the bank) TO the owner, even if the player on the property is the same owner. In practice, the different properties become productive entities, and any player who passes by generates wealth for the city.<br>
  The costs of the city maintainance may be accounted individually or colletively. In the individual agreement, every turn each player has to pay the third banknote amount (If you have 50.000, 10.000, 5.000, 2.000, etc. you choose 5.000) for each property he owns. In the collective agreement, the players should collectively pay an amount that starts from the third banknote amount (5.000 in the previous case) multiplied by the players, but making it grow every turn (turn 1: 5.000 each, turn 2: 10.000 each, turn 3 15.000 each). The players lose if they don't have any more property, and win when they own all the properties and acquire all the money from the bank.<br>
  These are example rules, but of course you can set your own and enjoy your city!
  <br></p>

  <br><p class="subheading diversity center space margin">FUN: BUILD YOUR OWN PINWHEEL GALAXY</p>
  <p class="base">
  Making a pinwheel is very nice and you can do this little do-ot-yourself task with your friends. The Pinwheel Galaxy is a spiral-shaped galaxy about 21 million light years away from Earth. The first Cooperacy logo was a colorful pinwheel and that idea still lives in the current rotating logo in the homepage. Celebrate Cooperacy, the eco-system and the cooperation wind by blowing on your DIY Pinwheel Galaxy! To build it, you can follow the instructions carefully put together by no less then <a class="auu" href="https://spaceplace.nasa.gov/pinwheel-galaxy/en/">NASA</a>.<br> After you made one, try and make a 7 petals, no-red, pinwheel like the Cooperacy one! If you spin it, the coordinated diversity of the colors will join and produce a white light!</p>

  <!--BEGIN WHEEL-->
  <div style="position: relative; text-align: center;">
  <div class="rotating" style="position: absolute; z-index: 1;"><img src="{{asset('images/pinwheel.png')}}" width="330" height="330"></div>
  <div style="position: absolute; z-index: 2"><img src="{{asset('images/typo.png')}}"></div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  </div>
  <!--END WHEEL-->
</p><br><br>

  </div>
  <!--END CONTENT-->

  <!--BEGIN RIGHT COL-->
  <div class="col-md-2"></div>
  <!--END RIGHT COL-->

  </div>
  <!--END ROW-->

</div>
<!--END CONTAINER-->

@stop
