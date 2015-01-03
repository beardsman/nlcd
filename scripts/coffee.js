$(function(){
	$(window).load(function() {
		var windowH = $(window).height();
		var wrapperH = $('#navBack').height();
		var contentH = $('#mainContent').height() + 20; //accounts for 20px margin
		
		var navHeight = Math.max(windowH, wrapperH, contentH)
		$('#navBack').css('height',navHeight);
	});
	
	$(window).resize(function(){
		var windowH = $(window).height();
		var wrapperH = $('#navBack').height();
		var contentH = $('#testID').height() + 20;
		
		var navHeight = Math.max(windowH, wrapperH, contentH)
		$('#navBack').css('height',navHeight);
	})  
	
	$(".rslides").responsiveSlides();
        
        $("nav select").change(function () {
        window.location = $(this).find("option:selected").val();
        });
	
});
