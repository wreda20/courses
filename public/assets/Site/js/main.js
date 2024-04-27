$('a[href="#"]').click(function (e) {
  e.preventDefault();
});

/*------------- #panel-responsive-items --------------*/

$(function () {
  $(".panel-responsive-btn").click(function () {
    let current_item_attr = $(this).attr("data-target"),
      current_item = $(".panel-responsive-item." + current_item_attr);

    if ($(this).hasClass("panel-responsive-open")) {
      current_item.addClass("active");
      if (current_item.hasClass("noScroll")) {
        $("body").attr("data-panel", "noScroll");
      }
      if (!current_item.hasClass("no-overlay")) {
        $(".side-overlay").addClass("active");
      }
    }
    if ($(this).hasClass("panel-responsive-close")) {
      $(".panel-responsive-item").removeClass("active");
      $("body").removeAttr("data-panel");
      $(".side-overlay").removeClass("active");
    }
  });
});
