$(document).ready(function(){

      if ($('#continents').val()=='empty') {
          $('#continent-group').hide();
        }      
      if ($('#states').val()=='empty') {
          $('#state-group').hide();
        }
      if ($('#cities').val()=='empty') {
          $('#city-group').hide();
          $('#new-city-form').hide();
        }

      updateLocation();
      if ($('#zero-budget-project').prop('checked')) {
        updatezerobudget();
      }
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

var updatecontinents = function() {
    
    $.ajax({
      type: 'GET',
      url: '/get-continents',
      success: function(data) {
        $('#continent option').remove();
        $.each(data, function(){
            $('#continent select').append('<option value="'+ this.id_project +'">'+ this.title_project +'</option>');
          });
        }
    });
  

       updateLocation();
   }


   var updatestates = function(cont) {
    
    var continent = $(cont).find(":selected").val();
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
   }

   var updatecities = function(stat) {

    var state = $(stat).find(":selected").val();
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

   }

   // Update values on change
   
   $('#continent').on('change', function() {updatestates('#continent'); }); 
  
   $('#state').on('change', function() { updatecities('#state'); });
   
   $('#city').on('change', function() {
     updateLocation();
   });
   // Toggle visibity buttons
   
   
   
   $('#button-continent').click(function(){
    $('#continent-group').toggle();
    updatecontinents();
    updateLocation();
   });
   
   $('#button-state').click(function(){
    $('#state-group').toggle();
    updatestates('#continent');
    updateLocation();
   });
   
   $('#button-city').click(function(){
    $('#city-group').toggle();
    updatecities('#state');
    updateLocation();
   });
   
   
   $(document).on('keyup mouseup', '#budget-project', function() {    
    var budget = $('#budget-project').val();                                  
    $('#project-budget').val(budget);
    $('#temporary-project-budget').val(budget);
  });
  
  var updatezerobudget = function(){
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
  }

  $('#zero-budget-project').click(function () {updatezerobudget();});
  
  //ADD COORDINATORS
  $('#add-coordinator').click(function(){
    var added=$('#addedcoordinators').val();
    added++;
    if (added<2){
      var coordinator = $('#coordinator-project').val();
      var coordinatorID = $('#temp-coordinator').val();
      $('#coordinator-list').append('<div style="height:3px;"></div><li class="list-group-item" id="coordinator'+added+'">'+coordinator+'<span class="pull-right"><i class="icon-remove" id="'+added+'"></i></span></li>');
      $('#array-coordinators').append('<input type="hidden" name="coordinator'+added+'" id="data-coordinator'+added+'" value="'+coordinatorID+'"></input>');
      $('#addedcoordinators').val( function(i, oldval) {
        return parseInt( oldval, 10) + 1;
      });         
  }
  $('#add-coordinator').attr('disabled', true);
  $('#coordinator-project').val('');
  
  });
    
  $('#coordinator-list').click(function(e) {
      var added=$('#addedcoordinators').val();
      if (added > 0) {
      var id = '#coordinator'+e.target.id;
      var dataid = '#data-coordinator'+e.target.id;
        $(id).remove();
        $(dataid).remove();
        added--;
        $('#addedcoordinators').val( function(i, oldval) {
          return parseInt( oldval, 10) - 1;
        });
      }
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
  $('#add-expert').click(function(){
    var addedex=$('#addedexperts').val();
    addedex++;
      var expert = $('#expert-project').val();
      var expertID = $('#temp-expert').val();
      $('#expert-list').append('<div style="height:3px;"></div><li class="list-group-item" id="experte'+addedex+'">'+expert+'<span class="pull-right"><i class="icon-remove" id="e'+addedex+'"></i></span></li>');
      $('#array-experts').append('<input type="hidden" name="expert'+addedex+'" id="data-experte'+addedex+'" value="'+expertID+'"></input>');
      $('#addedexperts').val( function(i, oldval) {
        return parseInt( oldval, 10) + 1;
      });  
      $('#add-expert').attr('disabled', true);
      $('#expert-project').val('');
  });
  

  
  $('#expert-list').click(function(e) {
      var addedex=$('#addedexperts').val();
      var id = '#expert'+e.target.id;
      var dataid = '#data-expert'+e.target.id;
        $(id).remove();
        $(dataid).remove();
        addedex--;
        $('#addedexperts').val( function(i, oldval) {
        return parseInt( oldval, 10) - 1;
        });  
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
  $('#add-reporter').click(function(){
      var addedre=$('#addedreporters').val();
      addedre++;
      var reporter = $('#reporter-project').val();
      var reporterID = $('#temp-reporter').val();
      $('#reporter-list').append('<div style="height:3px;"></div><li class="list-group-item" id="reporterr'+addedre+'">'+reporter+'<span class="pull-right"><i class="icon-remove" id="r'+addedre+'"></i></span></li>');
      $('#array-reporters').append('<input type="hidden" name="reporter'+addedre+'" id="data-reporterr'+addedre+'" value="'+reporterID+'"></input>');
      $('#addedreporters').val( function(i, oldval) {
        return parseInt( oldval, 10) + 1;
      });  
      $('#add-reporter').attr('disabled', true);
      $('#reporter-project').val('');
  });
  

  
  $('#reporter-list').click(function(e) {
      var addedre=$('#addedreporters').val();
      console.log(e.target.id);
      var id = '#reporter'+e.target.id;
      var dataid = '#data-reporter'+e.target.id;
        $(id).remove();
        $(dataid).remove();
        addedre--;
        $('#addedreporters').val( function(i, oldval) {
        return parseInt( oldval, 10) - 1;
        }); 
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