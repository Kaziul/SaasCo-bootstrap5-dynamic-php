$('.product-slider').owlCarousel({
    loop:true,
    nav:true,
    dots:false,
    // autoplay:true,
    // autoplayTimeout:4000,
    navText:['<i class=" side-caro fas fa-arrow-left"></i>','<i class=" side-caro1 fas fa-arrow-right"></i>'],
    responsive:{
        0:{
            items:1
        },
		
		 480:{
            items:1
        },
        768:{
            items:1
        },
		992:{
            items:1
        },
        1200:{
            items:1
        }
    }
})
$('.customers-active').owlCarousel({
    loop:true,
    nav:false,
    dots:false,
    // autoplay:true,
    // autoplayTimeout:4000,
   
    responsive:{
        0:{
            items:1
        },
		
		 480:{
            items:2
        },
        768:{
            items:3
        },
		992:{
            items:4
        },
        1200:{
            items:5
        }
    }
})