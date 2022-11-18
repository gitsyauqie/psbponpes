$(".gx-4").css("display", "none");
$("#tab-1").css("display", "block");

function run(hideTab, showTab) {
  if (hideTab < showTab) {
    var currentTab = 0;
    x = $("#tab-" + hideTab);
    y = $(x).find("input");
    // for (i = 0; i < y.length; i++) {
    //   if (y[i].value == "") {
    //     $(y[i]).css("background", "#e2eafc");
    //     return false;
    //   }
    // }
  }

  for (i = 1; i < showTab; i++) {
    $("#step-" + i).css("opacity", "1");
  }

  $("#tab-" + hideTab).css("display", "none");
  $("#tab-" + showTab).css("display", "block");
  $("input").css("background", "#fff");
}
