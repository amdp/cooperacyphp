var newProject = new Vue({
  el: '#newProject',
  data: {test: "test" }
})


    // Hide Location form
    $(document).ready(function(){
      $('#continent-group').hide();
      $('#state-group').hide();
      $('#city-group').hide();
      $('#new-city-form').hide();
    });


    // Update Location on visibility
    var updateLocation = function() {
     var LocationID = 1;
     var ParentLocation = null;
     if($('#continent-group').is(':visible')){

       LocationID = $('#continent').find(":selected").val();
       ParentLocation = 1;
       if($('#state-group').is(':visible')){

         ParentLocation = $('#continent').find(":selected").val();
         LocationID = $('#state').find(":selected").val();
         if($('#city-group').is(':visible')){

         ParentLocation = $('#state').find(":selected").val();
         LocationID = $('#city').find(":selected").val();
         }
       }
     } else {

        LocationID = 1;
        ParentLocation = null;
     }
     $('#parent-location-value').val(ParentLocation);
     $('#location-value').val(LocationID);

     if (LocationID == 'new-city'){
        $('#new-city-form').show();
      } else {
        $('#new-city-form').hide();
      }

   };

   // Update values on change
    $('#continent').on('change', function() {

    var continent = $(this).find(":selected").val();
      $.ajax({
        type: 'GET',
        url:'/get-states/'+continent,
        success: function(data) {
          $('#state option').remove();
          $.each(data, function(){
            $('#state select').append('<option value="'+ this.id_project +'">'+ this.title_project +'</option>');
          });
          var state=data[0].id_project;
          $('#city option').remove();
          $.ajax({
            type: 'GET',
            url:'/get-cities/'+state,
            success: function(data) {
              $('#city option').remove();
              if(!data.length) {
                $('#city select').append('<option value="new-city">Insert new city</option>');
              } else {
                $('#city select').append('<option value="new-city">Insert new city</option>');
                $('#city select').append('<option disabled>---------------</option>');
                $.each(data, function(){
                  $('#city select').append('<option value="'+ this.id_project +'">'+ this.title_project +'</option>');
                });
              }

            }
          });
        }
      });
      updateLocation();
   });


   $('#state').on('change', function() {

    var state = $(this).find(":selected").val();
      $.ajax({
        type: 'GET',
        url:'/get-cities/'+state,
        success: function(data) {
          $('#city option').remove();
          if(!data.length) {
                $('#city select').append('<option value="new-city">Insert new city</option>');
              } else {
              $('#city select').append('<option value="new-city">Insert new city</option>');
              $('#city select').append('<option disabled>---------------</option>');
              $.each(data, function(){
                $('#city select').append('<option value="'+ this.id_project +'">'+ this.title_project +'</option>');
              });
              }
        }
      });
    updateLocation();
   });

   $('#city').on('change', function() {
     updateLocation();
   });
   // Toggle visibity buttons



   $('#button-continent').click(function(){
    $('#continent-group').toggle();
    updateLocation();
   });

   $('#button-state').click(function(){
    $('#state-group').toggle();
    updateLocation();
   });

   $('#button-city').click(function(){
    $('#city-group').toggle();
    updateLocation();
   });


   $(document).on('keyup mouseup', '#budget-project', function() {
    var budget = $('#budget-project').val();
    $('#project-budget').val(budget);
    $('#temporary-project-budget').val(budget);
  });

  $('#zero-budget-project').click(function(){
   var tempbudget = $('#temporary-project-budget').val();
   if ($('#zero-budget-project').prop('checked')) {
     $('#project-budget').val(0);
     $('#no-budget').val(1);
     $('#budget-project').attr('disabled', true);
     $('#budget-project').val('');
    } else {
     var budget = $('#budget-project').val();
     $('#project-budget').val(tempbudget);
     $('#no-budget').val(0);
     $('#budget-project').removeAttr('disabled');
     $('#budget-project').val(tempbudget);
    }
  });

  //ADD COORDINATORS
  var i=0;
  var added=0;
  $('#add-coordinator').click(function(){
    if (added<2){
      var coordinator = $('#coordinator-project').val();
      var coordinatorID = $('#temp-coordinator').val();
      $('#coordinator-list').append('<div style="height:3px;"></div><li class="list-group-item" id="coordinator'+i+'">'+coordinator+'<span class="pull-right"><i class="icon-remove" id="'+i+'"></i></span></li>');
      $('#array-coordinators').append('<input type="hidden" name="coordinator'+i+'" id="data-coordinator'+i+'" value="'+coordinatorID+'"></input>');
      added++;
      i++;

  }
  $('#add-coordinator').attr('disabled', true);
  $('#coordinator-project').val('');
  console.log('added='+added);
  });



  $('#coordinator-list').click(function(e) {
      var id = '#coordinator'+e.target.id;
      var dataid = '#data-coordinator'+e.target.id;
        $(id).remove();
        $(dataid).remove();
        console.log('removed: '+id);
        added--;
        console.log('i='+i);
  });

  // AUTOCOMPLETE COORDINATORS
$( "#coordinator-project" ).autocomplete({
  source: function (request, response) {
    $.ajax({
       url: '/get-person/',
       type : 'get',
       cache : false,
       data: {term: request.term},
       success: function(data) {
                        response($.map(data, function (el) {
                         return {
                             label: el.name,
                             value: el.name,
                             id: el.id
                         };
                 }));
                },

        error: function(jqXHR, textStatus, errorThrown){
             console.log( textStatus);
        }
    });
  },
  select: function( event, ui ) {
        $('#temp-coordinator').val(ui.item.id);
        $('#add-coordinator').removeAttr('disabled');
      }


});


//ADD EXPERTS
  var j=0;
  var addedex=0;
  $('#add-expert').click(function(){

      var expert = $('#expert-project').val();
      var expertID = $('#temp-expert').val();
      $('#expert-list').append('<div style="height:3px;"></div><li class="list-group-item" id="experte'+j+'">'+expert+'<span class="pull-right"><i class="icon-remove" id="e'+j+'"></i></span></li>');
      $('#array-experts').append('<input type="hidden" name="expert'+j+'" id="data-experte'+j+'" value="'+expertID+'"></input>');
      addedex++;
      j++;
      $('#add-expert').attr('disabled', true);
      $('#expert-project').val('');
  });



  $('#expert-list').click(function(e) {
      var id = '#expert'+e.target.id;
      var dataid = '#data-expert'+e.target.id;
        $(id).remove();
        $(dataid).remove();
        console.log('removed: '+id);
        addedex--;
  });

  // AUTOCOMPLETE EXPERTS
  $( "#expert-project" ).autocomplete({
  source: function (request, response) {
    $.ajax({
       url: '/get-person/',
       type : 'get',
       cache : false,
       data: {term: request.term},
       success: function(data) {
                        response($.map(data, function (el) {
                         return {
                             label: el.name,
                             value: el.name,
                             id: el.id
                         };
                 }));
                },

        error: function(jqXHR, textStatus, errorThrown){
             console.log( textStatus);
        }
    });
  },
  select: function( event, ui ) {
        $('#temp-expert').val(ui.item.id);
        $('#add-expert').removeAttr('disabled');
      }


});



//ADD REPORTERS
  var k=0;
  var addedre=0;
  $('#add-reporter').click(function(){

      var reporter = $('#reporter-project').val();
      var reporterID = $('#temp-reporter').val();
      $('#reporter-list').append('<div style="height:3px;"></div><li class="list-group-item" id="reporterr'+k+'">'+reporter+'<span class="pull-right"><i class="icon-remove" id="r'+k+'"></i></span></li>');
      $('#array-reporters').append('<input type="hidden" name="reporter'+k+'" id="data-reporterr'+k+'" value="'+reporterID+'"></input>');
      addedre++;
      k++;
      $('#add-reporter').attr('disabled', true);
      $('#reporter-project').val('');
  });



  $('#reporter-list').click(function(e) {
      var id = '#reporter'+e.target.id;
      var dataid = '#data-reporter'+e.target.id;
        $(id).remove();
        $(dataid).remove();
        console.log('removed: '+id);
        addedre--;
  });

  // AUTOCOMPLETE REPORTERS
$( "#reporter-project" ).autocomplete({
  source: function (request, response) {
    $.ajax({
       url: '/get-person/',
       type : 'get',
       cache : false,
       data: {term: request.term},
       success: function(data) {
                        response($.map(data, function (el) {
                         return {
                             label: el.name,
                             value: el.name,
                             id: el.id
                         };
                 }));
                },

        error: function(jqXHR, textStatus, errorThrown){
             console.log( textStatus);
        }
    });
  },
  select: function( event, ui ) {
        $('#temp-reporter').val(ui.item.id);
        $('#add-reporter').removeAttr('disabled');
      }


});

// PREVIEW IMAGE COVER
$(document).ready(function() {
        document.getElementById("img-project").onchange = function () {
            var reader = new FileReader();
            $('#uploadedimage').removeAttr('src');
            reader.onload = function (e) {
                if (e.total > 5000000) {
                    $('#imageerror').text('Image too large');
                    $jimage = $("#img-project");
                    $jimage.val("");
                    $jimage.wrap('<form>').closest('form').get(0).reset();
                    $jimage.unwrap();
                    $('#uploadedimage').removeAttr('src');
                    return;
                }
                $('#imageerror').text('');
                document.getElementById("uploadedimage").src = e.target.result;
            };
            reader.readAsDataURL(this.files[0]);
        };
    });
