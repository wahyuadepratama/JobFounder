
$(function() { $(window).scroll(function() { if($(this).scrollTop()>100) { $('#ScrollToTop').fadeIn()} else { $('#ScrollToTop').fadeOut();}});
$('#ScrollToTop').click(function(){$('html,body').animate({scrollTop:0},1000);return false})});
