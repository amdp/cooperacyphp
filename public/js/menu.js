$(document).ready(function() {
  $('.learn-menu').hide();  
});
$(document).ready(function() {
  $('.discover-menu').hide();  
});
$(document).ready(function() {
  $('.do-menu').hide();  
});
$(document).ready(function() {
  $('.science-menu').hide();  
});

$(".dropbutton-discover").mouseenter(function() {
  $('.discover-menu').stop().slideDown(400);  
}).mouseleave(function() {
   $('.discover-menu').stop().delay(600).slideUp(100);
});
$('.discover-menu').hover(function() {
    $(this).stop();
});

$(".dropbutton-learn").mouseenter(function() {
  $('.learn-menu').stop().slideDown(400);  
}).mouseleave(function() {
   $('.learn-menu').stop().delay(600).slideUp(100);
});
$('.learn-menu').hover(function() {
    $(this).stop();
});

$(".dropbutton-do").mouseenter(function() {
  $('.do-menu').stop().slideDown(400);  
}).mouseleave(function() {
   $('.do-menu').stop().delay(600).slideUp(100);
});
$('.do-menu').hover(function() {
    $(this).stop();
});

$(".dropbutton-science").mouseenter(function() {
  $('.science-menu').stop().slideDown(400);  
}).mouseleave(function() {
   $('.science-menu').stop().delay(600).slideUp(100);
});
$('.science-menu').hover(function() {
    $(this).stop();
});


var ww = document.body.clientWidth;

$(document).ready(function() {
  $(".responsive-nav li a").each(function() {
    if ($(this).next().length > 0) {
      $(this).addClass("parent");
    };
  })
  
  $(".toggleMenu").click(function(e) {
    e.preventDefault();
    $(this).toggleClass("active");
    $(".responsive-nav").toggle();
  });
  adjustMenu();
})

$(window).bind('resize orientationchange', function() {
  ww = document.body.clientWidth;
  adjustMenu();
});

var adjustMenu = function() {
  if (ww < 1024) {
    $(".toggleMenu").css("display", "inline-block");
    if (!$(".toggleMenu").hasClass("active")) {
      $(".responsive-nav").hide();
    } else {
      $(".responsive-nav").show();
    }
    $(".responsive-nav li").unbind('mouseenter mouseleave');
    $(".responsive-nav li a.parent").unbind('click').bind('click', function(e) {
      // must be attached to anchor element to prevent bubbling
      e.preventDefault();
      $(this).parent("li").toggleClass("hover");
    });
  } 
  else if (ww >= 1024) {
    $(".toggleMenu").css("display", "none");
    $(".responsive-nav").show();
    $(".responsive-nav li").removeClass("hover");
    $(".responsive-nav li a").unbind('click');
    $(".responsive-nav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
      // must be attached to li so that mouseleave is not triggered when hover over submenu
      $(this).toggleClass('hover');
    });
  }
}

