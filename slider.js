new Swiper('.card-wrapper', {
    
    spaceBetween: 30,
  
    // pagination bullet
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      dynamicsBullets: true
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    //responsive breakpoints
    breakpoints: {
        0: {
            slidesPerView: 1
        },
        768: {
            slidesPerView: 2
        },
        1024: {
            slidesPerView: 3
        },
    }

});