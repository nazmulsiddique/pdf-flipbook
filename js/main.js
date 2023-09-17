$(document).ready(function() {
  $("#button1").click(function() {
    $(this).addClass("active");
    $("#button2").removeClass("active");
  });

  $("#button2").click(function() {
    $(this).addClass("active");
    $("#button1").removeClass("active");
  });
});

