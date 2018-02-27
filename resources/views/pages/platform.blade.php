@extends('layouts.lvapp')
@section('title')
    The Platform - Cooperacy
@stop
@section('content')

<!--BEGIN CONTAINER-->
<div class="containerone">

  <!--BEGIN HEADER-->
  <div class="row">
  <img class="page-header" src="{{asset('/images/platform.png')}}">
  </div>
  <!--END HEADER-->

  <!--BEGIN ROW-->
  <div class="row">

  <!--BEGIN LEFT ROW-->
  <div class="col-md-2"></div>

  <!--BEGIN CONTENT-->
  <div class="col-md-8">

  <p class="subheading transparency margin">What if you could change the world with just one euro per month..</p>

  <p class="subheading transparency center space margin">IMAGINE</p>
  <p class="base">Imagine the effect of one million people bringing together a little economic effort: one euro. Imagine one million euros every month to support the ideas of these people. Imagine an innovative economy that is possible exclusively according to the number of people participating.<br>
  Would you like to help this to happen?</p>

  <p class="subheading transparency center space margin">CO-OWNING A PLATFORM</p>
  <p class="base">The Cooperacy Platform won't just realise the most wanted ideas proposed by the participants, but also create a social ecosystem based on co-ownership and redistribution of wealth.</p>

  <span class="subheading equivalence">VOTING IDEAS</span>
  <p class="base">First of all, we thought about a mechanism that would allow to distribute resources to ideas, according to how much the same ideas are desired by the participants, with their will expressed through votes: in facts, the common collected money goes proportionally to the ideas according to the votes received. Keeping it simple: people propose <i>ideas</i>, <i>votes</i> support them.</p>

  <span class="subheading equivalence">REDISTRIBUTING PROFITS</span>
  <p class="base">When an idea is funded and produces wealth, its profits go back to the platform collected money, in order to fund other ideas and to create a virtuous circle that generates resources for more ideas.</p>

  <span class="subheading equivalence">BECOMING A LEARNING ECOSYSTEM</span>
  <p class="base">An artificial intelligence will learn from all the data coming from the platform and suggest, in the long run, best practices in order to help the people to realise their ideas. We thought about this as an "ecosystemic deep learning". Moreover, the participants can communicate their happiness, so that the "learning ecosystem"  will base its suggestions also on the most human, irrational and personal information of all: mood.</p>



  <p class="base"><i>For more technical information see the platform <a class="auu" href="/howitworks">white paper<a>.</i></p>

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
