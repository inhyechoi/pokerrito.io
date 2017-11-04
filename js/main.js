(function($) {

  $('.mainmenu-list').hide();
  $('.burger').on('click', function (event) {
  event.preventDefault();
  $('.burger').toggleClass('open');
  $('.mainmenu-list').slideToggle().toggleClass('show');
   });


  

})(jQuery);