$( document ).ready(function() {
    $(".burger-menu").click(function () {
      $(this).toggleClass("menu-on");
    });

    $('.burger-menu').on('click', function(){
      $('header nav').fadeToggle();
    });
  });