//slide-1
const slider1 = document.querySelector(".slider-1 .splide");
if(slider1) {
  new Splide(slider1,{
    type: string = 'loop',
    rewind: boolean = true,
    speed: number = 700,
    autoWidth: boolean = false,
    arrows: boolean = false,
    pagination: boolean = false,
    drag: boolean = false,
    perPage: number = 5,
    gap: string = '24px',
    autoScroll: {
      pauseOnHover: false,
      pauseOnFocus: boolean = false,
      speed: 0.5,
    },
    breakpoints: {
      750: {
      perPage: number = 3,
      gap: string = '12px',
        autoScroll: {
          speed: number = 0.5,
        },
      },
    }
  }).mount(window.splide.Extensions);
}

//slide-2
const slider2 = document.querySelector(".slider-2 .splide");
if(slider2) {
  new Splide(slider2,{
    type: string = 'loop',
    rewind: boolean = true,
    speed: number = 400,
    autoWidth: boolean = false,
    arrows: boolean = false,
    pagination: boolean = false,
    drag: boolean = false,
    perPage: number = 5,
    gap: string = '24px',
    autoScroll: {
      pauseOnHover: false,
      pauseOnFocus: boolean = false,
      speed: 0.5,
    },
    breakpoints: {
      750: {
      perPage: number = 3,
      gap: string = '12px',
        autoScroll: {
          speed: number = 0.5,
        },
      },
    }
  }).mount(window.splide.Extensions);
}

//slide-3
const slider3 = document.querySelectorAll(".slider-3 .splide");
if(slider3.length > 1) {
  slider3.forEach((element) => {
    new Splide(element,{
      type: 'fade',
      rewind: boolean = true,
      autoplay: boolean = true,
      interval: number = 5000,
      speed: 5000,
      arrows: boolean = false,
      drag: boolean = true,
      pagination: boolean = false,
      pauseOnHover: boolean = false,
      pauseOnFocus: boolean = false,
      updateOnMove: true,
      breakpoints: {
        750: {
          interval: number = 4000,
          pagination: boolean = false,
        },
      },
    }).mount();
  })
}


//magazine slider
const magazineSlide = document.querySelector(".magazine .splide");
if(magazineSlide) {
  new Splide(magazineSlide,{
    type: string = 'loop',
    rewind: boolean = true,
    speed: number = 400,
    autoWidth: boolean = false,
    arrows: boolean = true,
    pagination: boolean = false,
    drag: boolean = false,
    gap: string = '48px',
    padding: { left: '5.55%', right: '24.44%' },
    padding: { left: '5.55%', right: '55.55%' },
    perPage: number = 1,
    // perPage: number = 2,
    perMove: number = 1,
    updateOnMove: true,
    breakpoints: {
      750: {
      gap: string = '12px',
      perPage: number = 1,
      padding: { left: '2.89%', right: '19.8%' },
      },
    }
  }).mount();
}

// //faq toggle
var toggle = $(".faq__block-itm .q");
var content = $(".faq__block-itm .a");
$(toggle).on('click',function(){
  $(this).toggleClass("active");
  $('#' + $(this).data('faq')).slideToggle(300);
})
