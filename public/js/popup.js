$(document).ready(function() {
  // Popup function
  function popup() {
    setTimeout(function() {
      $(".modal-bg").css("display", "flex");
      $("body").css("overflow", "hidden");
    }, 4000);
  }

  // Cookies
  function GetCookie(name) {
    var arg = name + "=";
    var alen = arg.length;
    var clen = document.cookie.length;
    var i = 0;

    while (i < clen) {
      var j = i + alen;
      if (document.cookie.substring(i, j) == arg) return "here";
      i = document.cookie.indexOf(" ", i) + 1;
      if (i == 0) break;
    }

    return null;
  }

  var visit = GetCookie("popup-cookie");

  if (visit == null) {
    var expire = new Date();

    popup();

    expire = new Date(expire.getTime() + 1800);
    document.cookie = "popup-cookie=here; expires=" + expire;
  }

  // Close Button
  $(".fa-window-close").click(function() {
    $(".modal-bg").hide();
    $("body").css("overflow", "scroll");
  });
});
