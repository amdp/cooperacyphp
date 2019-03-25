$(document).ready(function() {
  setTimeout(function() {
    $(".modal-bg").css("display", "flex");
    $("body").css("overflow", "hidden");
  }, 2000);
  $(".fa-window-close").click(function() {
    $(".modal-bg").hide();
    $("body").css("overflow", "scroll");
  });
});
