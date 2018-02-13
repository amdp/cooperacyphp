@extends('layouts.lvapp')
@section('title')
    How it works - Cooperacy
@stop
@section('content')

<!--BEGIN CONTAINER-->
<div class="containerone">

  <!--BEGIN HEADER-->
  <div class="row">
  <br><img class="page-header" src="{{asset('/images/howitworks.png')}}"><br>
  </div>
  <!--END HEADER-->

  <!--BEGIN ROW-->
  <div class="row">

  <!--BEGIN LEFT COL-->
  <div class="col-md-2"></div>
  <!--END LEFT COL-->

  <!--BEGIN CONTENT-->
    <div class="col-md-8">
              <p class="subheading understanding center space margin">DESIGN DEMOCRACY</p>
              <p class="base">People will decide the progress of the platform voting local and worldwide ideas and not people. This will provide better allocation of budgets and hudgets, that is money and human time and motivation.</p>
              <p class="subheading understanding center space margin">THE FUNDING SYSTEM</p>
              <p class="base">The money represents a "Cooperation Wind" that blows in the ideas to make them take flight. The needed votes for a project to be approved are based on their budget requested. One euro per month is 0.00000039 euros per second. Every second that tiny amount of money is allocated proportionally to the ideas, like a wind in a land full of windmills. The more the votes, the stronger the cooperation wind and the bigger the mill sails will spin like a pinwheel. The more the wind collected, the faster the project will be approved. Anybody can upvote for as many projects they want, just like as a “like” button.</p>

              <table>
                <tr>
                  <td><strong>i</strong></td>
                  <td><strong>Per Second</td>
                  <td><strong>Minute</td>
                  <td><strong>Hour</td>
                  <td><strong>Day</td>
                  <td><strong>Month</td>
                  <td><strong>Year</td>
                </tr>
                <tr>
                  <td><strong>1</strong></td>
                  <td>&#8364; 39e-7</td>
                  <td>&#8364; 231e-5</td>
                  <td>&#8364; 13.888e-3</td>
                  <td>&#8364; 0.03333..</td>
                  <td>1</td>
                  <td>12</td>
                </tr>
                <tr>
                  <td><strong>100</strong></td>
                  <td>&#8364; 39e-5</td>
                  <td>&#8364; 231e-3</td>
                  <td>&#8364; 0.13888..</td>
                  <td>&#8364; 3.3333..</td>
                  <td>100</td>
                  <td>1200</td>
                </tr>
                <tr>
                  <td><strong>10000</strong></td>
                  <td>&#8364; 0.0039</td>
                  <td>&#8364; 0.2314</td>
                  <td>&#8364; 13.8888..</td>
                  <td>&#8364; 333.333..</td>
                  <td>10,000</td>
                  <td>120k</td>
                </tr>
                <tr>
                  <td><strong>1M</strong></td>
                  <td>&#8364; 0.39</td>
                  <td>&#8364; 23.14</td>
                  <td>&#8364; 1388.88..</td>
                  <td>&#8364; 33k</td>
                  <td>1M</td>
                  <td>12M</td>
                </tr>
                <tr>
                  <td><strong>1B</strong></td>
                  <td>&#8364; 395.80</td>
                  <td>&#8364; 23,140</td>
                  <td>&#8364; 1,388,888</td>
                  <td>&#8364; 33M</td>
                  <td>1B</td>
                  <td>12B</td>
                </tr>
                <tr>
                  <td><strong>7B (World)</strong></td>
                  <td>&#8364; 2770.61</td>
                  <td>&#8364; 161,980</td>
                  <td>&#8364; 9,722,216</td>
                  <td>&#8364; 231M</td>
                  <td>7B</td>
                  <td>84B</td>
                </tr>
              </table>


              <p class="subheading understanding center space margin">MULTIDIMENSIONAL VOTING </p>
              <p class="base">There are many ways of voting in COOPERACY, not just one, in order to leverage more collective intelligence. You can in fact simply up-vote an idea, or use different kind of votes. The voting will be anonymous but after the project is approved all the votes will be visible for checking, including yours.
              </p>

              <table>
                <tr>
                  <td><strong>Vote</td>
                  <td><strong>Effect</td>
                </tr>
                <tr>
                  <td><strong>Up</td>
                  <td>It proportionally determines the allocation of funds. When the total amount needed is reached, the project becomes transparent and to be approved for the first budget step. Principle: Equivalence</td>
                </tr>
                <tr>
                  <td><strong>Profitable</td>
                  <td>Same as above, but the project needs to show the business plan before getting the first amount of money. It is a bit like to say “If this idea has a proof it can produce money, I support it in order to have a richer fund”. Principle: Trust</td>
                </tr>
                <tr>
                  <td><strong>Heartvote</td>
                  <td>It’s for sustainability projects or ones that generate emotional response in the voter. The emotional response could also be generated thanks to biofeedback sensors. When heartvoted, the project gains higher visibility. Principle: Care</td>
                </tr>
                <tr>
                  <td><strong>Joke</td>
                  <td>It’s a joke! This vote is a non-punishing way to determine spam. Joking votes include a description of why the project is a joke, and when joke-voted it is moved from the voting system to a final yearly joke-projects list, just for fun. Principle: Transparency</td>
                </tr>
                <tr>
                  <td><strong>Commitment</td>
                  <td>Commitment means you would like to work for the project. If the project needs human resources, it will choose you from the commitment list first. Principle: Freedom</td>
                </tr>
                <tr>
                  <td><strong>AI</td>
                  <td>This vote is given automatically by the AI and influences the participants with statistic motivations. Principle: Understanding</td>
                </tr>
                <tr>
                  <td><strong>Bizarre (exclamation marks)</td>
                  <td>When a project has a strong “bizardry” (bizarre points), it has more opportunities to be randomly approved. Principle: Diversity</td>
                </tr>
              </table>

              <p class="subheading understanding center space margin">APPROVING A PROJECT</p>
              <p class="base">The approved idea from anonymous becomes transparent in its votes, proposers, and everything is shown. The pre-allocated fund is kept frozen for three days in which if people desire to change their support they can. If a percentage of the people decides not to support the idea anymore, that percentage is released back to the fund and goes to feed other projects. The project will receive the final amount of pre-allocation funding according to the new transparent voting percentage, without any more approval step at the end.<br>Projects lower than 1000 euros won’t be supported as according to crowdfunding sites statistics they averagely fail. Projects without activity or significant votes for a season (3 months) will release their pre-allocated funding and start over, in order to avoid fragmentation of the fund.</p>

              <p class="subheading understanding center space margin">BUDGET RELEASE</p>
              <p class="base">The budget release process is divided into 7 phases and every phase has a three days counter-voting time in which the process could be halted and the people in change changed for corruption or security reasons. Only people who upvoted, participated or are relative to the module will be notified of the phases. Participants are therefore allowed to counter-vote even if they are external to the module but only if they really care, as they won’t be notified otherwise. Every step is also voted for its transparency and sustainability.</p>
              <table>
                <tr>
                  <td> <strong>Phases</td>
                  <td> <strong>Given</td>
                  <td> <strong>Total</td>
                </tr>
                <tr>
                  <td><strong>Business plan</td>
                  <td>3%</td>
                  <td>3%</td>
                </tr>
                <tr>
                  <td><strong>Human Resources</td>
                  <td>10%</td>
                  <td>13%</td>
                </tr>
                <tr>
                  <td><strong>Setup</td>
                  <td>12%</td>
                  <td>25%</td>
                </tr>
                <tr>
                  <td><strong>Production</td>
                  <td>50%</td>
                  <td>75%</td>
                </tr>
                <tr>
                  <td><strong>Kick Off</td>
                  <td>12%</td>
                  <td>87%</td>
                </tr>
                <tr>
                  <td><strong>Fine Tuning</td>
                  <td>10%</td>
                  <td>97%</td>
                </tr>
                <tr>
                  <td><strong>Celebrate</td>
                  <td>3%</td>
                  <td>100%</td>
                </tr>
              </table>
              <p class="subheading understanding center space margin">AFTF</p>
              <p class="base">The voting process will be Anonymous First, Transparent Forever-after: the methodology we follow is similar to the Delphi Method. In our voting process, keeping it anonymous at the beginning makes any influence to be reduced. Turning it transparent afterwards and allowing people a 3-day rethinking time makes us grow and being mature in coping with truth, avoiding any kind of voting hacking, being the process verifiable. Anonymity allows to boost collective intelligence first, and transparency boosts cooperation afterwards. The information with this process is available to anybody, but it doesn't have a strong influential weight before the decision is made. This allows you to choose the project in which you want to work to or propose yours in full anonymity until the project reaches its desired hudget". After that, everything will always be public and 100% transparent also through the blockchain infrastructure. The legal framework will address the privacy issues.</p>

              <p class="subheading understanding center space margin">A REDISTRIBUTED COMMON POOL</p>
              <p class="base"> All projects are owned by COOPERACY, that is the Cooperacy participants’ fund. Corruption tends to disappear: once approved, projects are transparent and all the profits go back to the fund to give birth to new projects. Meanwhile, people earn good salaries because of the low taxation aspects of a not-for-profit or cooperative legal status. Salaries are monitored in a full transparency system: “equisalaries” will be a function of the platform that averages the wages that have similar amounts in order to keep standards of fairness, and specifies those that are way higher -or lower- than the average. Jobs that nobody wants to do or that require high skills may keep their higher salaries. Thanks to the “cooperative industry”, who works in a field can choose to work in the same field in another project, just like as it happens in the Mondragon Cooperative , a strong template we want to leverage from.</p>

              <p class="subheading understanding center space margin">THE COOPERACY PROJECTS AS MODULES</p>
              <p class="base">If the idea is a zero budget one, it will need just commitment by the people, that is, a hudget. Reached the hudget, the idea gets approved. As you see, there is a modular design in the projects. The modularity allows for an organic and circle-like approach that is able to create replicable open source blueprints for the whole platform community. Any project can have a parent and a child and be part of “circles” thanks to the tags. The biggest “parent” module is Cooperacy. Everyone will evaluate their happiness according to their preferences. A semantic engine will aggregate similar modules. <br>Every module has:<br>
              1. Information: every project has this visible information:</p>
              <p class="base">
                • Title (and proposers when anonymity ends) <br>
                • Representative image <br>
                • Subheading or objective of the project  <br>
                • Parents and children  <br>
                • Tags<br>
                • Location  <br>
                • Voting allowance (for specific local projects)<br></p>
              <p class="base">
              2. Coordinators: the ears of the module, they listen to what the participants want to do and execute it.<br>
              3. Participants: active hands of the module. Minimum 2, the coordinators, advised maximum 150.<br>
              4. Experts: possible special participants who do not vote but give advices. The “mouth” of the module.<br>
              5. Reporters: two “eyes” of the module, they write reports and compare the module with the business plan.<br>
              6. Hudget: the hudget required to fulfill the module: human commitment and budget.<br>
              7. Feed: the module is continuously subject of feedback by the participants and the voters. Even after years any participant can decide if something was good or bad, influencing the memory of the system. A simple feedback history is available: after 1 month (M), 1 season (S), 1 year (Y) and after 5 years (YY).<br>
              Feedback can be only of three kinds: HAPPY(+) MEDIUM(=) SAD(-)<br><br>
              The projects represent the voting unit of COOPERACY. They have this lifecycle:<br> </p>
              <p class="base">
                •	Idea: the idea or module is proposed – it is anonymous;<br>
                •	Vote: the idea or module is voted – anonymously;<br>
                •	Birth: the project is approved, anonymity ends;<br>
                •	Life: the budget is released according to the budget scheme;<br>
                •	Commitmenr: people needed are gathered or employed;<br>
                •	Death: when the mission is accomplished, the project “dies”. This is not a bitter end, it means the project goes in the archive. The project could also die due to economic loss and subsequent request to close the module after relative voting;<br>
                •	Memory: the module is archived and stored in the memory in order to influence future modules and for future reference;<br></p>
                <p class="subheading understanding center space margin">THE COOPERACY PROPORTIONAL GOVERNANCE</p>
                <p class="base">The COOPERACY governance is modular and proportional. Proportionality is a characteristic of the Equivalence condition in the COOPERACY model. Modularity is a derivate of the Understanding or Common Codes dimension, that establishes a common, fluid governance for all projects.<br>There are only two degrees of power, the “role” and the “participant” ones. Participants may assume a role, and have the leadership over a project. For example, if you have a project to sell special flowers, you have the role to manage the project. But if you just want to describe the project and let anybody who wants to accomplish it, then your role of manager will be held by someone else. Granularity will make the “special flowers” project made of subsections like accounting, cultivation etc. Every child project, like accounting, will have its roles.<br>“Roles” have the right to issue direct decisions over projects. Dual leadership is strongly advised: roles are usually two per module-project. When the roles issue direct decisions, these can be opposed by the module participants. They may even create special decisional projects called “budget 0” projects or modules.<br>Salaries are compared automatically with transparent collectively decided rules, so roles cannot impose them on participants and participants don’t need to wait centralized justice to act and change them. Participants are part of the governance, in every project. The power of every role is functional, not executive. That’s why roles “function”, but do not dominate, “request” but do not command. <br>If participants make an opposition, a voting is issued and its results are applied proportionally. To get an idea of the proportionality, this is pretty much like what you would do in a group of friends when you need to decide what to buy to have a dinner together. The majority want a dish, some others want some different meals, and you proportionally buy food coordinating the choices. Apparently this technique doesn’t seem to be applicable in some specific cases, but in our studies we found that those cases, when profoundly observed, are very, very limited.</p>

              <p class="subheading understanding center space margin">COOPERACY IS BASED ON HUMANS AND COMPUTERS</p>
              <p class="base">Cooperacy will analyze anything developed within itself. Due to its complete transparency, participants are owners and while they decide together they would contribute to a database which will allow Cooperacy to machine-learn continuously about the experiences of the ideas of the humans. The system will be probably based on an underlying public-blockchain structure with 100% transparency for transactions safety.<br />
                What does it mean? In simple words, Cooperacy will be based on a system that will compare all the ideas and, through the data we provide in those ideas, learn and give advice in order to make the ideas happen or warn when the ideas could fail.<br />
                This could seem a big controlling machine system, but there&#8217;s a trick: every human is allowed to communicate to the system their happiness, and the system will base its choices also on the most human, irrational and personal information of all: mood.<br />
                The data will be trasparent for every participant, and owned by everyone.<br />
                Powered by big data and human moods, the system will create an equilibrium of efficiency and humanity, and will behave like a single big organism or ecosystem.<br />
                In simplest words, the computers act as a &ldquo;memory&rdquo; of the system that every human can access in order to make better decisions.<br />
                All the profit goes back into the bank and can be only used to fund other ideas.</p>
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
