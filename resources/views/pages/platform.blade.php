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

  <p class="subheading transparency center space margin">IMAGINE</p>
  <p class="base">Imagine the effect of one million people bringing together a little economic effort: one euro. Imagine you and all the other people to reciprocally collect one million euros every month to support your ideas. With this collective fund you will generate an innovative economy that will realise more ideas the more people will participate.<br>
  Would you like to <a class="aue" href="/register">join</a>?</p>

  <p class="subheading transparency center space">CO-OWNING A PLATFORM</p>
  <p class="base">The Cooperacy Platform won't just realise the most desired ideas proposed by the participants, but also create a social ecosystem based on co-ownership and redistribution of wealth.</p>

  <p class="subheading center space transparency">VOTING IDEAS</p>
  <p class="base">We thought about a mechanism that would allow to distribute the common resources to the ideas according to how much the same ideas are desired by the participants. Expressing their desire through votes, the common collected money goes proportionally to the ideas according to the votes received. Keeping it simple: people propose <i>ideas</i>, <i>votes</i> allocate their funding.</p>

  <p class="subheading center space transparency">REDISTRIBUTING PROFITS</p>
  <p class="base">Every idea is co-owned, so when it produces wealth, its profits go back to the platform collected money, in order to fund other ideas and to create a virtuous circle that slowly generates resources for everyone.</p>

  <p class="subheading center space equivalence margin">A COOPERATION LEARNING ECOSYSTEM</p>
  <p class="base">An artificial intelligence will learn from all the data coming from the platform and suggest, in the long run, best practices in order to help the people to realise their ideas. We thought about this as an "ecosystemic deep learning". Moreover, the participants can communicate their happiness, so that the "learning ecosystem"  will base its suggestions also on the most human, irrational and personal information of all: mood.</p>



  <p class="base"><i>For more technical information about the platform, see its <a class="auu" href="/howitworks">white paper<a>.</i></p>

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
