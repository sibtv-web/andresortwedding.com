document.addEventListener('DOMContentLoaded', function () {
  const mediaQuery = window.matchMedia('(max-width: 750px)');

  // =================================================================
  // マガジン一覧ページ：各セクションスライダー
  // =================================================================
  var acSpecialSlide = document.querySelectorAll('.pg_magazine-list.splide');
  if(acSpecialSlide.length > 0){
    acSpecialSlide.forEach((el,index) => {
      let count = el.querySelectorAll('.subList-item');
      // let countBg = el.querySelectorAll('.subList-item.bg');
      let arrowsValue = false;
      if(count.length > 6) {
        arrowsValue = true;
      }
      new Splide(el,{
        type: string = 'slide',
        rewind: boolean = false,
        speed: 800,
        perPage: number = 1,
        perMove: number = 1,
        gap: number = '6.25%',
        arrows: boolean = arrowsValue,
        pagination: boolean = true,
        breakpoints: {
          750: {
            gap: number = '24px',
          },
        },
      }).mount();
    })
  }

  // =================================================================
  // マガジン一覧ページ：絞り込みアコーディオン
  // =================================================================
  const accordionItems = document.querySelectorAll('.pg_magazine_nav_cmn');
  if (accordionItems.length > 0) {
    function accordionInit(e) {
      accordionItems.forEach((item) => {
      const trigger = item.querySelector('.pg_magazine_nav_cmn_label');
      const content = item.querySelector('.pg_magazine_nav_cmn_list');
      const checkedInput = item.querySelector('input[type="checkbox"]:checked');

      if (!trigger || !content) return;

      if (e.matches) {
        // SP時
        if (checkedInput) {
        item.classList.add('is-open');
        content.style.maxHeight = content.scrollHeight + 'px';
        } else {
        item.classList.remove('is-open');
        content.style.maxHeight = '0px';
        }

        trigger.onclick = function () {
        const isOpen = item.classList.contains('is-open');

        if (isOpen) {
          content.style.maxHeight = '0px';
          item.classList.remove('is-open');
        } else {
          content.style.maxHeight = content.scrollHeight + 'px';
          item.classList.add('is-open');
        }
        };

      } else {
        // PC時は常に開く
        content.style.maxHeight = 'none';
        item.classList.remove('is-open');
        trigger.onclick = null;
      }
      });
    }

    accordionInit(mediaQuery);

    if (mediaQuery.addEventListener) {
      mediaQuery.addEventListener('change', accordionInit);
    } else {
      mediaQuery.addListener(accordionInit);
    }
  }



  // =================================================================
  //table of content slide toggle TOC
  // =================================================================
  if(document.getElementById('ez-toc-container')){
    let toc = document.querySelector('.ez-toc-title-container');
    let tocIco = document.querySelector('.ez-toc-title-toggle');
    toc.addEventListener("click", (event) => {
      let tocContent = toc.nextElementSibling;
      $(tocContent).slideToggle(400);
      tocIco.classList.toggle('active');
    });
  }

  // =================================================================
  //share btn
  // =================================================================
  window.copyURL = function(url) {
    let message = document.querySelectorAll('span.copyBtn');
    navigator.clipboard.writeText(url).then(
      (success) => message[0].className = 'copied',
      (error) => console.log(url + ':' + error)
    );
    setTimeout(() => (message[0].className = 'copyBtn'), 2000);
  }

  // =================================================================
  //area slider
  // =================================================================
  if(document.getElementById('area-fvslider')){
    const splide = new Splide('.js-fade-slider', {
      type: 'fade',      // フェード
      // perPage: 1,        // 1枚表示
      autoplay: true,    // 自動再生
      interval: 4000,    // 切替時間
      speed: 1500,       // フェード速度
      pauseOnHover: false,
      pauseOnFocus: false,
      rewind: true,     // 最後→最初へ
      drag: true,
      arrows: false,
      pagination: false
    });

    splide.mount();
  }

  //slide-1
  const slider1 = document.querySelector(".slider-1 .splide");
  if(slider1) {
    new Splide(slider1, {
      type: 'loop',
      rewind: true,
      speed: 700,
      autoWidth: false,
      arrows: false,
      pagination: false,
      drag: true,
      perPage: 5,
      gap: '24px',
      autoScroll: {
        pauseOnHover: false,
        pauseOnFocus: false,
        speed: 0.5,
      },
      breakpoints: {
        750: {
          perPage: 3,
          gap: '12px',
          autoScroll: {
            speed: 0.5,
          },
        },
      }
    }).mount(window.splide.Extensions);
  }

  // =================================================================
  // area マップ開閉
  // =================================================================
  // document.addEventListener('DOMContentLoaded', function () {
  const mapItems = document.querySelectorAll('.pgarea_map_list_cmn');
  const mapModals = document.querySelectorAll('.map-modal-cont');
  if (!mapItems.length) return;

  //   const mediaQuery = window.matchMedia('(max-width: 750px)');
  function closeAllPcAccordion() {
    mapItems.forEach((item) => {
      const content = item.querySelector('.pgarea_map_list_cmn_cont');
      if (!content) return;
      item.classList.remove('is-open');
      content.style.maxHeight = '0px';
    });
  }
  function openPcAccordion(item) {
    const content = item.querySelector('.pgarea_map_list_cmn_cont');
    if (!content) return;
    item.classList.add('is-open');
    content.style.maxHeight = content.scrollHeight + 'px';
  }
  function closeAllSpModals() {
    mapModals.forEach((modal) => {
      modal.classList.remove('is-open');
    });
    document.body.classList.remove('is-modal-open');
  }
  function getAreaClass(element) {
  const areaClass = Array.from(element.classList).find((className) =>
    /^cls-(okinawa|hawaii|guam)-/.test(className)
  );
  return areaClass || null;
  }
  function bindMapEvents() {
    mapItems.forEach((item) => {
      const trigger = item.querySelector('.map-modal-label, .pgarea_map_list_cmn_label');
      const content = item.querySelector('.pgarea_map_list_cmn_cont');
      if (!trigger || !content) return;
      const newTrigger = trigger.cloneNode(true);
      trigger.parentNode.replaceChild(newTrigger, trigger);
      const currentTrigger = item.querySelector('.map-modal-label, .pgarea_map_list_cmn_label');
      item.classList.remove('is-open');
      content.style.maxHeight = '0px';
      if (mediaQuery.matches) {
        currentTrigger.addEventListener('click', function () {
          const areaClass = getAreaClass(item);
          if (!areaClass) return;
          closeAllSpModals();
          const targetModal = document.querySelector('.map-modal-cont.' + areaClass);
          if (targetModal) {
            targetModal.classList.add('is-open');
            document.body.classList.add('is-modal-open');
          }
        });
      } else {
        item.addEventListener('mouseenter', function () {
          openPcAccordion(item);
        });

        item.addEventListener('mouseleave', function () {
          item.classList.remove('is-open');
          content.style.maxHeight = '0px';
        });
      }
    });
    mapModals.forEach((modal) => {
      const closeButton = modal.querySelector('.map-modal-close');
      if (!closeButton) return;
      const newCloseButton = closeButton.cloneNode(true);
      closeButton.parentNode.replaceChild(newCloseButton, closeButton);
      const currentCloseButton = modal.querySelector('.map-modal-close');
      currentCloseButton.addEventListener('click', function () {
        modal.classList.remove('is-open');
        document.body.classList.remove('is-modal-open');
      });
    });
  }
  bindMapEvents();
  window.addEventListener('resize', function () {
    closeAllPcAccordion();
    closeAllSpModals();
    bindMapEvents();
  });

  // =================================================================
  // area magazineスライダー
  // =================================================================
  //magazine slider
  const magazineSlide = document.querySelector(".magazine .splide");
  if(magazineSlide) {
    new Splide(magazineSlide, {
    type: 'loop',
    rewind: true,
    speed: 400,
    autoWidth: false,
    arrows: true,
    pagination: false,
    drag: true,
    gap: '48px',
    padding: { left: '5.55%', right: '55.55%' },
    perPage: 1,
    perMove: 1,
    updateOnMove: true,
    breakpoints: {
      750: {
        gap: '12px',
        perPage: 1,
        padding: { left: '2.89%', right: '19.8%' },
      },
    }
  }).mount();
  }

  // =================================================================
  // area chapelsスライダー
  // =================================================================
  const sliders = document.querySelectorAll('.js-chapels-slider');
  if (sliders.length) {
    const splideInstances = new Map();
    function initSlider() {
    sliders.forEach((slider) => {
      const isInitialized = splideInstances.has(slider);
      if (mediaQuery.matches) {
      if (!isInitialized) {
        const splide = new Splide(slider, {
        type: 'slide',
        perPage: 1,
        perMove: 1,
        gap: '3.2rem',
        arrows: true,
        pagination: false,
        drag: true,
        swipe: true,
        autoWidth: false,
        speed: 600,
        padding: {
          left: '5.4rem',
          right: '5.4rem',
        },
        });
        splide.mount();
        splideInstances.set(slider, splide);
      }
      } else {
      if (isInitialized) {
        splideInstances.get(slider).destroy(true);
        splideInstances.delete(slider);
      }
      }
    });
    }
    initSlider();
    mediaQuery.addEventListener('change', initSlider);
  }
});

// =================================================================
// Infoページ：Navアコーディオン
// =================================================================
document.addEventListener('DOMContentLoaded', () => {
  const accordionInfo = document.querySelector('.j-navPg');
  const mediaQuery = window.matchMedia('(max-width: 767px)');

  if (!accordionInfo) return;

  function accordionInitInfo(e) {
    const trigger = accordionInfo.querySelector('.js-navToggle');
    const content = accordionInfo.querySelector('.js-navCont');

    if (!trigger || !content) return;

    if (e.matches) {
      content.style.maxHeight = '0px';
      accordionInfo.classList.remove('is-open');

      trigger.onclick = function () {
        const isOpen = accordionInfo.classList.contains('is-open');

        if (isOpen) {
          content.style.maxHeight = '0px';
          accordionInfo.classList.remove('is-open');
        } else {
          content.style.maxHeight = content.scrollHeight + 'px';
          accordionInfo.classList.add('is-open');
        }
      };
    } else {
      content.style.maxHeight = 'none';
      accordionInfo.classList.remove('is-open');
      trigger.onclick = null;
    }
  }

  accordionInitInfo(mediaQuery);

  if (mediaQuery.addEventListener) {
    mediaQuery.addEventListener('change', accordionInitInfo);
  } else {
    mediaQuery.addListener(accordionInitInfo);
  }
});

//エリア比較ページ スライダー
const pgAreaCompare__slider = document.querySelectorAll('.pgAreaCompare__photo-gallery .splide');
const splides = [];
if( pgAreaCompare__slider.length > 0 ) {
  pgAreaCompare__slider.forEach((el) => {
    const splide = new Splide(el,{
      type: 'loop',
      perPage: number = 5,
      perMove: 1,
      drag: boolean = false,
      gap: number = 24,
      // autoplay: boolean = true,
      interval: number = 0,
      pauseOnHover: boolean = false,
      pauseOnFocus: boolean = false,
      pagination: boolean = false,
      arrows: boolean = false,
      wheel: boolean = false,
      autoScroll: {
        speed: 1.2,
        pauseOnHover: true,
        pauseOnFocus: false,
      },
      breakpoints: {
        750: {
          perPage: number = 2,
          gap: number = 20,
          autoScroll: {
            speed: 0.4,
            pauseOnHover: true,
            pauseOnFocus: false,
          },
        },
      },
    });
    splide.mount(window.splide.Extensions);
    splides.push(splide);
  })
}

//エリア比較ページ フォトギャラリー モーダル
const trigger = document.querySelectorAll('.pgAreaCompare__photo-gallery .splide__slide');
const modal = document.querySelector('.modal');
const modalClose = document.querySelector('.modal__close');
const modalImg = document.querySelector('.modal .modal__image img');
function clickModal(el) {
  let img = el.querySelector(".slide__image img")
  let imgSrc = img.src;
  modalImg.src = imgSrc;
  modal.classList.add('active');
  splides.forEach((splide) => {
    splide.Components.AutoScroll.pause();
  });
}
function handleClick(el) {
  if (window.innerWidth < 750) {
    clickModal(el);
  }
}
function handleClose() {
  if (window.innerWidth < 750) {
    modal.classList.remove('active');
    splides.forEach((splide) => {
      splide.Components.AutoScroll.play();
    });
  }
}

modalClose.addEventListener('click', () => handleClose());
trigger.forEach((el) => {
  el.addEventListener('click', () => handleClick(el));
})