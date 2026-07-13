// gnav toggle
var windowW = window.outerWidth;
var dur01;
const header = document.getElementById('header');
const hm = document.getElementById('hm');
const nav = document.getElementById('nav');
const menu = document.querySelectorAll('#nav li.nav__menu-itm a');
const toggleItem = document.querySelectorAll('#nav .nav__menu-itm .ttl');
const loadFunction = () => {
  windowW = window.outerWidth;
  if(windowW > 750) {
    dur01 = 0.7;
  } else {
    dur01 = 0.45;
  }
}
const toggleMenu = async (el) => {
  windowW = window.outerWidth;
  if (750 >= windowW) {
    let target = el.getAttribute("data-nav")
    $('#' + target).slideToggle(300);
    if (el.classList.contains('active')){
      el.classList.remove("active");
    } else {
      el.classList.add("active");
    }
  } else {
    return;
  }
}
if(hm) {
  hm.addEventListener('click',(element) => {
    hm.classList.toggle('active');
    nav.classList.toggle('active');
    if(hm.classList.contains('active')){
      header.classList.add('fixed');
    } else {
      header.classList.remove('fixed');
    }
  })
}
if(menu.length > 0) {
  menu.forEach((el) => {
    el.addEventListener('click',(subEl) => {
    hm.classList.remove('active');
    nav.classList.remove('active');
    header.classList.remove('fixed');
    })
  })
}
if(toggleItem.length > 0) {
  toggleItem.forEach((element) => {
    element.addEventListener("click",() => toggleMenu(element))
  })
}
window.addEventListener('load',loadFunction);
window.addEventListener('resize',loadFunction);

const toTop = document.querySelector(".toTop");
if(toTop) {
  let ticking = false;
  window.addEventListener('scroll', () => {
    if (!ticking && window.scrollY > 500) {
      window.requestAnimationFrame(() => {
        toTop.classList.add("active");
        ticking = false;
      });
      ticking = true;
    } else {
      toTop.classList.remove("active");
    }
  });
}

// smooth scroll
const headerHeight = header ? header.offsetHeight : 0;
$(function(){
  $('a[href^="#"]').on('click' , function() {

    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top - headerHeight;
    $('body,html').animate({scrollTop:position}, 400, 'swing');
    return false;
  });
});

// fadein animation
gsap.registerPlugin(SplitText);
const split = new SplitText(".split-txt", { type: "chars, words, lines" });
const callBack_01 = (el) => {
  var cl = el.querySelector(".cl__inner");
  gsap.fromTo(cl,
    {
      opacity: 0,
      transformOrigin: "top"
    },
    {
      opacity: 1,
      ease: "power4.out",
      duration: 1.2,
    }
  );

}
const callBack_02 = (el) => {
  gsap.to(
    split.chars,
    {
      opacity:1,
      ease: Power0.easeNone,
      duration:0.08,
      stagger: 0.01,
    },
  )
}
gsap.utils.toArray(".fade-anime").forEach((el) => {
  var fade = el.getAttribute('data-fade');
  if(fade == "fade-up"){
    gsap.fromTo(el,
      {y:"30px",opacity:0},
      {y:"auto",opacity:1,
        scrollTrigger: {
          trigger: el,
          start: 'top center+=200',
          toggleActions: 'play none none none',
        },
        ease: Power0.easeNone,
        duration:0.5,
      },
    )
  }
  if(fade == "fade-up-cont"){
    var targets = el.querySelectorAll(':scope > *');
    gsap.fromTo(targets,
      {y:"30px",autoAlpha:0},
      {y:"auto",autoAlpha:1,
      ease: Power0.easeNone,
      duration:0.5,
      stagger:{
          each:.1
      },
      scrollTrigger:{
        trigger:targets,
        start:'top center+=200'
      },
      clearProps: "opacity,visibility,transform",
      onComplete: () => {
        gsap.set(targets, { clearProps: "opacity,visibility,transform" });
      }
    })
  }
  if(fade == "fade-op"){
    gsap.fromTo(el,
      {opacity:0},
      {opacity:1,
        scrollTrigger: {
          trigger: el,
          start: 'top center+=200',
          toggleActions: 'play none none none',
        },
        ease: Power0.easeNone,
        duration:0.5,
      },
    )
  }
  if(fade == "fade-op-cont"){
    var targets = el.querySelectorAll(':scope > *');
    gsap.fromTo(targets,
      {autoAlpha:0},
      {autoAlpha:1,
      ease: Power0.easeNone,
      duration:0.5,
      stagger:{
          each:.01
      },
      scrollTrigger:{
        trigger:targets,
        start:'top center+=200'
      }
  })
  }
  if(fade == "fade-up-top"){
    gsap.fromTo(el,
      {y:"30px",opacity:0},
      {y:"auto",opacity:1,
        scrollTrigger: {
          trigger: el,
          start: 'top center+=300',
          toggleActions: 'play none none none',
        },
        ease: Power0.easeNone,
        duration:0.5,
      },
    )
  }
  if(fade == "slide-up-cont-01"){
    var targets = el.querySelectorAll(':scope > *');
    var targetMask = [];
    targets.forEach((el,i) => {
      let mask = el.querySelector(".mask");
      let triggered = false;
      targetMask.push(mask);
      gsap.fromTo(mask,
        {
          scaleY: 1,
          transformOrigin: "top"
        },
        {
          scaleY: 0,
          ease: "power4.out",
          duration: 1,
          delay: i * 0.08,
          scrollTrigger: {
            trigger: el,
            start: "top center"
          },
          onUpdate: function() {
            if (!triggered && this.progress() > dur01) {
              triggered = true;
              callBack_01(el);
            }
          }
          // onComplete: function() {
          //   callBack_01(el);
          // }
        }
      );
    })
  }
  if(fade == "slide-up-cont-02"){
    var targets = el.querySelectorAll(':scope > *');
    targets.forEach((el,i) => {
      let mask = el.querySelector('.mask');
      gsap.fromTo(mask,
        {
          scaleY: 1,
          transformOrigin: "top"
        },
        {
          scaleY: 0,
          ease: "power4.out",
          duration: 1,
          delay: (i+1) * 0.2,
          scrollTrigger: {
            trigger: el,
            start: "top center"
          },
        }
      );
    })
  }
  if(fade == "fade-up-text"){
    gsap.fromTo(el,
      {
        y:"30px",
        opacity:0
      },
      {
        y:"auto",
        opacity:1,
        scrollTrigger: {
          trigger: el,
          start: 'top center+=200',
          toggleActions: 'play none none none',
        },
        onComplete: function() {
          callBack_02(el);
        },
        ease: Power0.easeNone,
        duration:0.5,
      },
    )
  }
  if(fade == "z-in"){
    gsap.fromTo(el,
      {scale:0.8,opacity:0},
      {scale:1,opacity:1,
        scrollTrigger: {
          trigger: el,
          start: 'top center',
          toggleActions: 'play none none none',
        },
        ease: "power4.out",
        duration:0.8,
      },
    )
  }
  if(fade == "z-in2"){
    gsap.fromTo(el,
      {scale:0.8,opacity:0},
      {scale:1,opacity:1,
        scrollTrigger: {
          trigger: el,
          start: 'top center',
          toggleActions: 'play none none none',
        },
        ease: "power4.out",
        duration:0.8,
        delay: 0.3,

      },
    )
  }

});

//feature slider
const featureSlide = document.querySelector(".feature .splide");
if(featureSlide) {
  new Splide(featureSlide,{
    type: string = 'loop',
    rewind: boolean = true,
    speed: number = 400,
    autoWidth: boolean = false,
    arrows: boolean = true,
    pagination: boolean = false,
    drag: boolean = true,
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
