<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--Open graph-->
      <meta property="og:title" content="Cooperacy" />
      <meta property="og:type" content="website" />
      <meta property="og:url" content="http://cooperacy.org" />
      <meta property="og:image" content="http://cooperacy.org/images/wordlogoOG.png" />
      <meta property="og:description" content="Cooperacy is a scientific project aiming to spread the practice and the awareness of ecosystemic thinking and cooperation." />
      <meta property="og:site_name" content="Cooperacy" />
    <!-- end Open graph -->

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Prompt:300" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/appstyle.css" rel="stylesheet">
    @if(Route::currentRouteName() == 'newsmanage')
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">
    @endif
    @if(Route::currentRouteName() == 'newsadmin' || Route::currentRouteName() == 'updatenews')
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css">
    @endif
    @if(Route::currentRouteName() == 'new-project')
      <link href="/css/jquery-ui.min.css" rel="stylesheet">
      <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    @endif
    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
  <div id="app">
      @include('layouts.navbar')
        <!--BEGIN SPACERS-->
        <div class="row"><p style="height:80px;"></p></div>
      @yield('content')
  </div>
  <div class="row">
    <p style="height:20px;"></p>
    <!--END SPACERS-->
  </div>
  @include('layouts.footer')
  <!-- Scripts -->
  @if(Route::currentRouteName() == 'newsadmin' || Route::currentRouteName() == 'updatenews')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    <script>
    $('#data').datepicker({
      format: "dd-mm-yyyy",
      keyboardNavigation: false,
      orientation: "bottom auto",
      autoclose: true,
      todayHighlight: true
    });
    </script>
  @endif

  @if(Route::currentRouteName() == 'newsmanage')
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
      jQuery(document).ready(function($) {
      /* now you can use $ */
      });
      $(document).ready(function() {
          $('#newstable').DataTable( {
              "scrollY":        "200px",
              "scrollCollapse": true,
              "paging":         true,
              "order": [[3, 'desc']]
          } );
      } );
      </script>
  @endif

  @if(Route::currentRouteName() == 'new-project')
   <script type="text/javascript" src="js/jquery-ui.min.js"></script>
   <script type="text/javascript" src="js/new-project.js"></script>
  @endif

  @if(Route::currentRouteName() == 'register')
    <script type="text/javascript">
      $(document).ready(function(){
        $('#checkread').click(function(){
          if($('#join-button').hasClass('disabled')) {
            $('#join-button').removeClass('disabled');
          } else {
            $('#join-button').addClass('disabled');
          }
        });
      });
    </script>
  @endif

  @if(Route::currentRouteName() == 'view-project')
    <script type="text/javascript">
      

   var updateVote = function(clicked, userID, projectID) {
     console.log('Clicked on: ' + clicked);
     $.ajax({
       url: '/update-vote/',
       type : 'get',
       cache : false,
       data : { command: clicked,
                uID: userID,
                pID: projectID},
       success: function(data) {
         console.log(data[0].label);
         console.log(data[0].total);
         console.log(data[0].log);
         console.log('#'+data[0].label+projectID);
         $('#'+data[0].label+projectID).html(data[0].total);
       }


     });
   }

  $("[vote-comment]").click(function() {
     var eqClass = $(this).find('[id^="label"]').attr("class");
     var initialColor = $(this).find('[id^="label"]').attr("initialColor");
     var initialOpacity = $(this).find('[id^="label"]').attr("initialOpacity");
     var initialWeight = $(this).find('[id^="label"]').attr("initialWeight");
     var clickedColor = $(this).find('[id^="label"]').attr("clickedColor");
     var clickedOpacity = $(this).find('[id^="label"]').attr("clickedOpacity");
     var clickedWeight = $(this).find('[id^="label"]').attr("clickedWeight");
     var idLabel = $(this).find('[id^="label"]').attr("id");
     var clicked = $(this).attr("id");
     var userID = $('#userID').val();
     var projectID = $(this).attr("commentid");
    if (clicked!=='vote-ai'){
       if (eqClass==='vote-label-noclick') {
         $('#'+idLabel).removeClass().addClass('vote-label-click');
         $('#'+idLabel).css({"color":clickedColor, "opacity": clickedOpacity, "font-weight":clickedWeight});
         $('#heading'+idLabel).css({"color":clickedColor, "opacity": clickedOpacity, "font-weight":clickedWeight});
         $('#bar'+idLabel).css({"background":clickedColor, "opacity": clickedOpacity});
         updateVote(clicked, userID, projectID);
       } else {
         $('#'+idLabel).removeClass().addClass('vote-label-noclick');
         $('#'+idLabel).css({"color":initialColor, "opacity": initialOpacity, "font-weight":initialWeight});
         $('#heading'+idLabel).css({"color":initialColor, "opacity": initialOpacity, "font-weight":initialWeight});
         $('#bar'+idLabel).css({"background":initialColor, "opacity": initialOpacity});
         updateVote(clicked, userID, projectID);
       }
    }
   });

$('#eq-popover').popover();

     $('#eq-popover').hover(
        function(){
        $('#titleeq-popover').css('visibility', 'visible');
       },
       function(){
        $('#titleeq-popover').css('visibility', 'hidden');
       },
     );


   $('#trust-popover').popover();

      $('#trust-popover').hover(
        function(){
        $('#titletrust-popover').css('visibility', 'visible');
       },
       function(){
        $('#titletrust-popover').css('visibility', 'hidden');
       },
     );

   $('#care-popover').popover();

     $('#care-popover').hover(
        function(){
        $('#titlecare-popover').css('visibility', 'visible');
       },
       function(){
        $('#titlecare-popover').css('visibility', 'hidden');
       },
     );

   $('#joke-popover').popover();

     $('#joke-popover').hover(
        function(){
        $('#titlejoke-popover').css('visibility', 'visible');
       },
       function(){
        $('#titlejoke-popover').css('visibility', 'hidden');
       },
     );

   $('#commit-popover').popover();

     $('#commit-popover').hover(
        function(){
        $('#titlecommit-popover').css('visibility', 'visible');
       },
       function(){
        $('#titlecommit-popover').css('visibility', 'hidden');
       },
     );

   $('#ai-popover').popover();

     $('#ai-popover').hover(
        function(){
        $('#titleai-popover').css('visibility', 'visible');
       },
       function(){
        $('#titleai-popover').css('visibility', 'hidden');
       },
     );

   $('#bizarre-popover').popover();

     $('#bizarre-popover').hover(
        function(){
        $('#titlebizarre-popover').css('visibility', 'visible');
       },
       function(){
        $('#titlebizarre-popover').css('visibility', 'hidden');
       },
     );

   $('[id^="DeleteComment"]').click(function() {
      var commentID = $(this).attr("commentid")
      $('#ButtonReply'+commentID).attr("disabled", true);
      $('#deleteCommentID').val(commentID);
   });

  $('[id^="ButtonModify"]').click(function() {
      var commentID = $(this).attr("commentid");
      var bExpanded = $('#ButtonReply'+commentID).attr('class');
      console.log(bExpanded);
      if(bExpanded=='collapsed'||!bExpanded) {
        $('#ButtonReply'+commentID).removeClass('collapsed')
        $('#ButtonReply'+commentID).addClass('disabled');
      } else if (bExpanded=='disabled') {
        $('#ButtonReply'+commentID).removeClass('disabled')
      }
   });
  $('[id^="ButtonReply"]').click(function() {
      var commentID = $(this).attr("commentid");
      var bExpanded = $('#ButtonModify'+commentID).attr('class');
      console.log(bExpanded);
      if(bExpanded=='collapsed'||!bExpanded) {
        $('#ButtonModify'+commentID).removeClass('collapsed')
        $('#ButtonModify'+commentID).addClass('disabled');
      } else if (bExpanded=='disabled') {
        $('#ButtonModify'+commentID).removeClass('disabled')
      }
   });
  </script>
  @endif 
  
  
  
  @if(Route::currentRouteName() == 'project-list')
  <script type="text/javascript">
  var updateVote = function(clicked, userID, projectID) {
     console.log('Clicked on: ' + clicked);
     $.ajax({
       url: '/update-vote/',
       type : 'get',
       cache : false,
       data : { command: clicked,
                uID: userID,
                pID: projectID},
       success: function(data) {
         console.log(data[0].label);
         console.log(data[0].total);
         console.log(data[0].log);
         console.log('#'+data[0].label+'-'+data[0].projectID);
         $('#'+data[0].label+data[0].projectID).html(data[0].total);
       }


     });



   }

  $("[vote-comment]").click(function() {
     var eqClass = $(this).find('[id^="label"]').attr("class");
     var initialColor = $(this).find('[id^="label"]').attr("initialColor");
     var initialOpacity = $(this).find('[id^="label"]').attr("initialOpacity");
     var initialWeight = $(this).find('[id^="label"]').attr("initialWeight");
     var clickedColor = $(this).find('[id^="label"]').attr("clickedColor");
     var clickedOpacity = $(this).find('[id^="label"]').attr("clickedOpacity");
     var clickedWeight = $(this).find('[id^="label"]').attr("clickedWeight");
     var idLabel = $(this).find('[id^="label"]').attr("id");
     console.log('clicked on minibutton with class: '+eqClass);
     console.log('id label of clicked minibutton: '+idLabel);
     var clicked = $(this).attr("id");
     var userID = $('#userID').val();
     var projectID = $(this).attr("commentid");
     if (clicked!=='vote-ai'){
       if (eqClass==='vote-label-noclick') {
         $('#'+idLabel).removeClass().addClass('vote-label-click');
         $('#'+idLabel).css({"color":clickedColor, "opacity": clickedOpacity, "font-weight":clickedWeight});
         $('#heading'+idLabel).css({"color":clickedColor, "opacity": clickedOpacity, "font-weight":clickedWeight});
         $('#bar'+idLabel).css({"background":clickedColor, "opacity": clickedOpacity});
         updateVote(clicked, userID, projectID);
       } else {
         $('#'+idLabel).removeClass().addClass('vote-label-noclick');
         $('#'+idLabel).css({"color":initialColor, "opacity": initialOpacity, "font-weight":initialWeight});
         $('#heading'+idLabel).css({"color":initialColor, "opacity": initialOpacity, "font-weight":initialWeight});
         $('#bar'+idLabel).css({"background":initialColor, "opacity": initialOpacity});
         updateVote(clicked, userID, projectID);
       }
     }

   });


  </script>
  @endif
  
  

</body>
</html>
