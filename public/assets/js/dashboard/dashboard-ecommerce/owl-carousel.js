$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
}), $('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
}),
    $('#owl-carousel-14').owlCarousel({
        items:4,
        margin:10,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        loop: true,
        dots:false,
        nav: false,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            420:{
                items:2,
                nav:false
            },
            600:{
                items:3,
                nav:false
            },
            1199:{
                items:4,
                nav:false
            }
        }
    });
