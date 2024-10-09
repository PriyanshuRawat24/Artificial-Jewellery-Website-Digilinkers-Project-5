//	Header scroll Height (Background change)
// $(window).scroll(function() {

// 	if ($(document).scrollTop() > 200	) {

// 		$(".navbar").addClass("customNav");
// 	} else {

// 		$(".navbar").removeClass("customNav");
// 	}
// });


// Add class active
// $(document).ready(function() {
// 	var url = window.location.href;
// 	$('.myNav-nav a[href="url"]').parent().addClass('active');
// 	$('.myNav-nav a').filter(function() {
// 		return this.href == url;
// 	}).parent().addClass('active');
// });




// AOS Init
// $(document).ready(function() {
//   AOS.init({
//       duration: 1000,
//     });
// });


// owl carousel
$('.hm-jewellery').owlCarousel({
    loop:true,
    margin:10,
    autoplay: true,
    nav:true,
    autoplayTimeout:2000,
    autoplayHoverPause: true,
    responsive:{
        0:{
            items:0
        },
        600:{
            items:4
        },
        1000:{
            items:4
        }
    }
})


$('.about-us').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout:2000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:4
        },
        1000:{
            items:4
        }
    }
})

$('.testimonials').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout:2000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})


// <!-- Initialize Swiper -->
//  var swiper = new Swiper(".mySwiper", {
//    slidesPerView: 5,
//    // spaceBetween: 10,
//    slidesPerGroup: 1,
//    loop: true,
//    speed:1000,
//    autoplay:true,
//    autoplaySpeed:2000,
//    autoplayTimeout:2000,
//    centeredSlides: true,
//    loopFillGroupWithBlank: true,
//    navigation: {
//      nextEl: ".swiper-button-next",
//      prevEl: ".swiper-button-prev",
//    },
//  });


// smooth scrolling

$('a[href*="#"]').click(function (event) {
	if (
		location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
		var target = $(this.hash);
		target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
		if (target.length) {
			event.preventDefault();
			$('html, body').animate({
				scrollTop: target.offset().top
			}, 750);
		}
	}
});
