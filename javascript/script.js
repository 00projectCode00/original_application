$(function(){
  $("#menu-button").on("click", function(){

    var $overlay = $(".overlayMenu");
    var openClass = "open";

    if( !$overlay.hasClass(openClass) ){

      $overlay.addClass(openClass);
      $overlay.slideDown();

    } else {

      $overlay.removeClass(openClass);
      $overlay.slideUp();
    }
  });
});

$(function() {
    $(".overlayMenu").click(function(event) {
        event.stopPropagation();
    });
});
// $(function(){
//   $('.slider').slick({
//
//     accessibility: true,
//     autoplay: true,
//     autoplaySpeed: 1000,
//     dots: true,
//     fade: true,
//
//   });
// });
