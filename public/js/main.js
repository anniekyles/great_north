// hide and show extra-services
$(function(){
   $('#extra-services').hide();
   $('#extra-services').parent().on('click', function(){

      //use '$(this)' instead of 'this' to retrieve the jQuery object instead of DOM object
      $('#extra-services').slideToggle();
      console.log($(this));
   });
});