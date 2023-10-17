$(function(){

	$(window).scroll(function(){
		var scrolling = $(window).scrollTop();
	
	if(scrolling > 20){
		$(".menu-bg").addClass("bg")
	}else{
		$(".menu-bg").removeClass("bg")
	}

	})

})

// about banner
$('.about-main').slick({
	slidesToShow:1,
	slidesToScroll:1,
	dots: true,
	nextArrow:".next",
	prevArrow:".prev",
	
	  autoplay: true,
	autoplaySpeed: 2000,
  });

  

  // counter

  $('.counter').counterUp({
    delay: 10,
    time: 1000
});


// lightbox
lightbox.option({
    'resizeDuration': 200,
    'wrapAround': true
  })



