$(document).ready(function() {});

window.openModal = function(id) {
  console.warn("id", id);
  var t = $(id);
  var elem = $(id);

  t.addClass("is-active");
  $("html").addClass("is-clipped");

  t.find(".modal-background").on("click", function(e) {
    e.stopPropagation();
    elem.removeClass("is-active");
    $("html").removeClass("is-clipped");
  });

  t.find(".trigger-close").on("click", function(e) {
    e.stopPropagation();
    elem.removeClass("is-active");
    $("html").removeClass("is-clipped");
  });
};
