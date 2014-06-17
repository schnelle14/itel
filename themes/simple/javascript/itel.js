$(document).ready(function() {
	$(document).ready(function() {
	    $('#fullpage').fullpage({
	    	navigation: true,
	        navigationPosition: 'right',
	        resize : true,
	        anchors: ['homePage', 'contactUsPage'],
	        menu: '#siteMenu'
	    });
	    
	    $('.mobile-menu').on('click', function(){
	    	$('nav.primary').toggle();
	    });
	    
	    $('nav.primary ul li a').on('click', function(){
	    	if ($(window).width() < 640){
	    		$('nav.primary').hide();
	    	}
	    });
	    
	    $('#siteMenu li').on('click', function(){
	    	location.href=$(this).find('a').attr('href');
	    	if ($(window).width() < 640){
	    		$('nav.primary').hide();
	    	}
	    });
	    
	    $(window).resize(function() {
	    	if ($(window).width() > 640){
	    		$('nav.primary').show();
	    	} else {
	    		$('nav.primary').hide();
	    	}
	    });
	});
});

