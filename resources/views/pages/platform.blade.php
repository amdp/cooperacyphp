@extends('layouts.lvapp')
@section('title')
    The platform - Cooperacy
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

  <p class="subheading transparency margin">What if you could change the world with just one euro per month..
    <br>would you do it?</p>
  <p class="base">We think that a little effort by everyone could be able to generate a major change. This belief stands at the base of the platform we're setting up. We want to create a place in which ideas get funded by that simple single euro provided every month by everyone of us.<br><br>
  Nice, but.. how?</p>

  <p class="subheading transparency center space margin">DESIGN DEMOCRACY, PROPORTIONAL REDISTRIBUTIVE FUNDING, ECOSYSTEMIC LEARNING</p>
  <p class="base">In Cooperacy we don't want just to realise the ideas of the participants, but also to create a social ecosystem based on redistribution of wealth. Therefore we have invented three powerful social technologies: "Design Democracy", "Proportional Redistributive Funding", "Ecosystemic Learning".</p>

  <span class="subheading equivalence">Design Democracy</span>
  <p class="base">First of all, we thought about a mechanism that would allow to distribute resources to ideas, according to how much the same ideas are desired by the participants, with their will expressed through votes: the common money goes proportionally according to the votes the ideas received. Keeping it simple: people desing ideas, votes bring resources.</p>

  <span class="subheading equivalence">Proportional Redistributive Funding</span>
  <p class="base">When an idea is funded and produces wealth, its profits go back to the platform and get proportionally redistributed in order to fund other ideas, creating a virtuous circle that generates wealth for everyone.</p>

  <span class="subheading equivalence">Ecosystemic Learning</span>
  <p class="base">An artificial intelligence will analyse all the data coming from the platform and learn, in the long run, best practices in order to help the people to realise their ideas. We think about this as an ecosystemic deep learning. The platform will in facts allow us to choose the best projects and proportionally finance them according to the principles of cooperation. This could seem a big controlling machine system, but there's a catch: participants can communicate to the Cooperacy ecosystem their happiness, so that the Ecosystemic Learning will base its choices also on the most human, irrational and personal information of all: mood.</p>

  <p class="subheading transparency center space margin">IMAGINE</p>
  <p class="base">Imagine the effect of one million people bringing together their little economic effort. Imagine a million euros per month transforming the world. This money flow will be used only when a common will is found. Only jointly enjoyable ideas will be realized. Imagine a social change that is possible exclusively according to the number of people participating.<br>
  Would you like to help this to happen?</p>

  <p class="base"><i>For more technical information see the platform <a href="/howitworks">white paper.<a></i></p>

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
