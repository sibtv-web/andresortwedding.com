// gnav toggle
var windowW = window.outerWidth;
const header = document.getElementById('header');
const hm = document.getElementById('hm');
const nav = document.getElementById('nav');
const menu = document.querySelectorAll('#nav li.nav__menu-itm a');
const toggleItem = document.querySelectorAll('#nav .nav__menu-itm .ttl');
const loadFunction = () => {
  windowW = window.outerWidth;
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

// smooth scroll
const headerHeight = nav ? nav.offsetHeight : 0;
const urlHash = window.location.hash;
if (urlHash) {
  window.addEventListener('load', () => {
    window.scrollTo(0, 0);
    setTimeout(() => {
      const target = document.querySelector(urlHash);
      if (!target) return;
      const position = target.getBoundingClientRect().top + window.pageYOffset - headerHeight - 30;
      window.scrollTo({
        top: position,
        behavior: 'auto'
      });
    }, 0);
  });
}
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const href = this.getAttribute('href');
    const target = href === '#' || href === '' 
      ? document.documentElement
      : document.querySelector(href);
    if (!target) return;
    const position = target.getBoundingClientRect().top + window.scrollY;
    const headHeight = document.querySelector('#nav')?.offsetHeight || 0;
    const targetPosition = position - headHeight;
    window.scrollTo({
      top: targetPosition,
      behavior: 'smooth'
    });
  });
});

// fadein animation
gsap.utils.toArray(".fade-anime").forEach((el) => {
  var fade = el.getAttribute('data-fade');
  if(fade == "fade-up"){
    gsap.fromTo(el, 
      {y:"30px",opacity:0}, 
      {y:"auto",opacity:1,
        scrollTrigger: {
          trigger: el,
          start: 'top center',
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
        start:'top center+=100'
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
          start: 'top center',
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
        start:'top center+=100'
      }
  })
  }
});