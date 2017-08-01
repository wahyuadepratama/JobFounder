
	$(document).ready(function(){       
   var scroll_start = 0;
   var startchange = $('#startchange');
   var offset = startchange.offset();
    if (startchange.length){
   $(document).scroll(function() { 
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
          $(".navbar.navbar-inverse.navbar-fixed-top").css('box-shadow', '0 1px 0 rgba(12,13,14,0.15), 0 0 0 transparent, 0 0 0 transparent, 0 0 0 transparent');
       } else {
          $('.navbar.navbar-inverse.navbar-fixed-top').css('box-shadow', 'none');
       }
   });
    }
});
