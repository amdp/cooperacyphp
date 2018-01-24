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
         $('#'+data[0].label+'-'+data[0].projectID).html(data[0].total);
       }
       
       
     });
     
     
     
   }
  
  $("[vote-button]").click(function() {
     var eqClass = $(this).find('[id^="label"]').attr("class");
     var idLabel = $(this).find('[id^="label"]').attr("id");
     console.log('clicked on minibutton: '+eqClass);
     console.log('label of minibutton: '+idLabel);
     var selected = $(this).attr("id");
     var clicked = selected.split('+')[0]
     var userID = $('#userID').val();
     var projectID = selected.split("+").pop();
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