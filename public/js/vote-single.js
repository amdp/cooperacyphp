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
         $('#'+data[0].label).html(data[0].total);
       }
       
       
     });
   }
   
   $("[vote-button]").click(function() {
     var eqClass = $(this).find('[id^="label"]').attr("class");
     var idLabel = $(this).find('[id^="label"]').attr("id");
     console.log(eqClass);
     console.log(idLabel);
     var clicked = $(this).attr("id");
     var userID = $('#userID').val();
     var projectID = $('#projectID').val();
     if (clicked!=='vote-ai'){
       if (eqClass==='label label-default') {
         $('#'+idLabel).removeClass().addClass('label label-primary');
         updateVote(clicked, userID, projectID);
       } else {
         $('#'+idLabel).removeClass().addClass('label label-default');
         updateVote(clicked, userID, projectID);
       }
    }
     
   });
   
   var updateVoteComment = function(clicked, userID, projectID) {
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
     var idLabel = $(this).find('[id^="label"]').attr("id");
     var clicked = $(this).attr("id");
     var userID = $('#userID').val();
     var projectID = $(this).attr("commentid");
     console.log(eqClass);
     console.log(clicked);
     console.log(userID);
     console.log(projectID);
    if (clicked!=='vote-ai'){
       if (eqClass==='label label-default') {
         $('#'+idLabel).removeClass().addClass('label label-primary');
         updateVoteComment(clicked, userID, projectID);
       } else {
         $('#'+idLabel).removeClass().addClass('label label-default');
         updateVoteComment(clicked, userID, projectID);
       }
    }      
   });
   
 $('#eq-popover').popover();
 $('#trust-popover').popover();
 $('#heart-popover').popover();
 $('#joke-popover').popover();
 $('#commit-popover').popover();
 $('#ai-popover').popover();
 $('#bizarre-popover').popover();
