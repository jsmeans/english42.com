jQuery.noConflict()
jQuery(document).ready(function(){
    (function($){

    $('.flexslider').flexslider();

	$('#monday').click(function(){
    	$('#monday_slide').slideToggle();
    });
	
	$('#tuesday').click(function(){
    	$('#tuesday_slide').slideToggle();
    });

    $('#wednesday').click(function(){
    	$('#wednesday_slide').slideToggle();
    });

    $('#thursday').click(function(){
    	$('#thursday_slide').slideToggle();
    });

	$('#friday').click(function(){
    	$('#friday_slide').slideToggle();
	});

	$('#saturday').click(function(){
    	$('#saturday_slide').slideToggle();
    });

var open = $('.open'),
    a = $('ul').find('a');

console.log(a.hasClass('active'));

open.click(function(e){
    e.preventDefault();
    var $this = $(this),
        speed = 500;
    if($this.hasClass('active') === true) {
        $this.removeClass('active').next('.box').slideUp(speed);
    } else if(a.hasClass('active') == false) {
        $this.addClass('active').next('.box').slideDown(speed);
    } else {
        a.removeClass('active').next('.box').slideUp(speed);
        $this.addClass('active').next('.box').delay(speed).slideDown(speed);
    }

    $(".absolutepos").each(function() {
        $(this).parent().css("height",$(this).height());
});
    
});



    })(jQuery);
 
});