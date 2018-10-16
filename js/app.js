$('.navbar-nav .dropdown').on('click', function(){
    if($(this).hasClass('openMobile')) {
	$(this).removeClass('openMobile');
    }else {
    	$(this).addClass('openMobile');
    }
});

