// $('.search__category').on('click',function(){
//   $('.search__category-list').toggle();
// });

// // ajax
// function searchAjax(type, url, data, dataType) {
//   var defer = $.Deferred();
//   $.ajax({
//     type: type,
//     url: url,
//     data: data,
//     dataType: dataType,
//     success: defer.resolve,
//     error: defer.reject
//   });
//   return defer.promise();
// }
// $(".search__category-list li").on("click", function(evt) {
//   let host = location.hostname;
//   let protocol = location.protocol;
//   let url = protocol + '//' + host + '/ajax/search-article.php';
//   let value = $(this).data('value');
//   let textValue = $(this).text();
//   let data = {
//     'value' : value,
//   };
//   $('.search__category-list').hide();
//   $('.search__category').text(textValue);
//   searchAjax('POST', url, data, 'html').done(function(res) {
//     $(".pg_article-result").html(res);
//   }).fail(function(res) {
//     console.log('failed' + res);
//   });
// });


// function getParam(name, url) {
//   if (!url) url = window.location.href;
//   name = name.replace(/[\[\]]/g, "\\$&");
//   var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
//       results = regex.exec(url);
//   if (!results) return null;
//   if (!results[2]) return '';
//   return decodeURIComponent(results[2].replace(/\+/g, " "));
// }
// var urlSearch = location.search;
// var urlPath = location.pathname.split('/');
// if(urlSearch && urlPath[1] == 'article' && urlPath[2] == "") {
//   var param = getParam('search');
//   console.log(urlPath[1]);
//   if(param == "food" || param == "activity" || param == "spot" || param == "shopping" || param == "stay" || param == "info"){
//     let host = location.hostname;
//     let protocol = location.protocol;
//     let url = protocol + '//' + host + '/ajax/search-article.php';
//     let value = param;
//     let data = {
//       'value' : value,
//     };
//     searchAjax('POST', url, data, 'html').done(function(res) {
//       $(".pg_article-result").html(res);
//     }).fail(function(res) {
//       console.log('failed' + res);
//     });
//   }
// }


// //share
// function copyURL(url) {
//   let message = document.querySelectorAll('span.copyBtn')
//   navigator.clipboard.writeText(url).then(
//     (success) => message[0].className = 'copied',
//     (error) => console.log(url + ':' + error)
//   );
//   setTimeout(() => (message[0].className = 'copyBtn'), 2000);
// }

// //info accordion
// $(function() {
// })
// var windowW = $(window).outerWidth(true);
// $(window).on('resize',function(){
//   var windowResize = $(window).outerWidth(true);
//   if(windowW < 750){
//     if(windowW != windowResize){
//       windowW = windowResize;
//       $(".pg_info-container-list-item .title").removeClass("open");
//       $('.pg_info-container-list-item-sublist').css('display','none');
//       $('.pg_info-container-list-item.active .pg_info-container-list-item-sublist').css('display','block');
//     }
//   } else {
//     $(".pg_info-container-list-item .title").removeClass("open");
//     $('.pg_info-container-list-item-sublist').css('display','block');
//     windowW = windowResize;
//   }
// });
// var toggle = $(".pg_info-container-list-item .title");
// var content = $(".pg_info-container-list-item-sublist");
// toggle.on('click',function(){
//   if(windowW < 750){
//     $(this).toggleClass("open");
//     $('#' + $(this).data('accordion')).slideToggle(300);
//   }
// })

// // spot slider
// if($('.spot.splide').length > 0){
//   new Splide('.spot.splide',{
//     type: string = 'slide',
//     rewind: boolean = false,
//     speed: 800,
//     perPage: number = 3,
//     perMove: number = 1,
//     padding: { left: '7.22%', right: '7.22%' },
//     gap: '3%',
//     arrowPath: 'M30.44,17.5H0v5h30.44s-14,14-14,14l3.56,3.5,20-20L20,0l-3.56,3.5,14,14Z',
//     pagination: boolean = false,
//     classes: {
//       arrows: 'splide__arrow-spot',
//     },
//     breakpoints: {
//       750: {
//         padding: { left: '13.52%', right: '13.52%' },
//         gap: number = 24,
//         perPage: number = 1,
//       },
//     },
//   }).mount();
// }

// // purpose slider
// if($('.purpose.splide').length > 0){
//   $('.purpose.splide').each(function () {
//     new Splide($(this)[0],{
//       type: string = 'slide',
//       rewind: boolean = false,
//       speed: 800,
//       perPage: number = 3,
//       perMove: number = 1,
//       padding: { left: '7.22%', right: '7.22%' },
//       gap: '3%',
//       arrowPath: 'M30.44,17.5H0v5h30.44s-14,14-14,14l3.56,3.5,20-20L20,0l-3.56,3.5,14,14Z',
//       pagination: boolean = false,
//       classes: {
//         arrows: 'splide__arrow-purpose',
//       },
//       breakpoints: {
//         750: {
//           padding: { left: '13.52%', right: '13.52%' },
//           gap: number = 24,
//           perPage: number = 1,
//         },
//       },
//     }).mount();
//   });
// }

// window.onload = function(){
//   let target = document.querySelectorAll( ".scroll-end" );
//   let targetArr = Array.from(target);
//   targetArr.forEach(function(element, index) {
//     element.scrollIntoView(false);
//   });
// }

// if(document.querySelector('.single_special .accordion')){
//   $('.single_special .accordion').on('click',function(){
//     let nextEl = $(this).find('.accordion-a');
//     // $(this).toggleClass("active");
//     nextEl.slideToggle(300);
//   })
// }


// special slide
// if($('.pg_magazine-slider.splide').length > 0){
//   $('.pg_magazine-slider.splide').each(function () {
//     new Splide($(this)[0],{
//       type: string = 'loop',
//       rewind: boolean = true,
//       pauseOnHover: boolean = false,
//       speed: 1400,
//       perPage: number = 1,
//       perMove: number = 1,
//       padding: { left: '5.55%', right: '12.22%' },
//       gap: '6.55%',
//       arrowPath: 'M30.44,17.5H0v5h30.44s-14,14-14,14l3.56,3.5,20-20L20,0l-3.56,3.5,14,14Z',
//       pagination: boolean = true,
//       updateOnMove: true,
//       autoplay: true,
//       classes: {
//         arrows: 'splide__arrow-special',
//         page: "splide__pagination__page splide__pagination-special",
//       },
//       breakpoints: {
//         750: {
//           speed: 800,
//           padding: { left: '5.79%', right: '11.35%' },
//           gap: number = '6.5%',
//           perPage: number = 1,
//         },
//       },
//     }).mount();
//   });
// }

// let dotsParent = document.querySelector('.splide__pagination');
// const addDots = () => {
//   let dotsLastElement = document.createElement("li");
//   dotsLastElement.setAttribute("class","last");
//   dotsParent.appendChild(dotsLastElement);
// }
// if(dotsParent){
//   addDots();
//   window.addEventListener('resize',addDots);
// }

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
			//   padding: { left: '5.55%', right: '5.55%' },
			gap: number = '6.25%',
			arrows: boolean = arrowsValue,
			pagination: boolean = true,
			breakpoints: {
				750: {
					//   padding: { left: '5.79%', right: '5.79%' },
					gap: number = '24px',
					// perPage: number = 1,
				},
			},
		}).mount();
	})
}

// =================================================================
// マガジン一覧ページ：絞り込みアコーディオン
// =================================================================

const accordionItems = document.querySelectorAll('.pg_magazine_nav_cmn');
// const mediaQuery = window.matchMedia('(max-width: 750px)');

function accordionInit(e) {

accordionItems.forEach((item) => {
	const trigger = item.querySelector('.pg_magazine_nav_cmn_label');
	const content = item.querySelector('.pg_magazine_nav_cmn_list');

	if (!trigger || !content) return;

	if (e.matches) {
	// 750px以下
	content.style.maxHeight = '0px';

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
mediaQuery.addEventListener('change', accordionInit);



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
function copyURL(url) {
	let message = document.querySelectorAll('span.copyBtn')
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
		drag: false,
		arrows: false,
		pagination: false
	});

	splide.mount();
}

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
// =================================================================
// area マップ開閉
// =================================================================
const mapAccordionItems = document.querySelectorAll('.pgarea_map_list_cmn');

// 要素がなければ処理しない
if (mapAccordionItems.length) {
	const mapMediaQuery = window.matchMedia('(max-width: 750px)');

	function closeAll() {
	mapAccordionItems.forEach((item) => {
		const content = item.querySelector('.pgarea_map_list_cmn_cont');
		if (!content) return;
		item.classList.remove('is-open');
		content.style.maxHeight = '0px';
	});
	}

	function setOpen(item) {
	const content = item.querySelector('.pgarea_map_list_cmn_cont');
	if (!content) return;
	item.classList.add('is-open');
	content.style.maxHeight = content.scrollHeight + 'px';
	}

	function bindAccordion() {
	mapAccordionItems.forEach((item) => {
		const trigger = item.querySelector('.pgarea_map_list_cmn_label');
		const content = item.querySelector('.pgarea_map_list_cmn_cont');

		if (!trigger || !content) return;

		// いったんイベント解除用に複製
		const newTrigger = trigger.cloneNode(true);
		trigger.parentNode.replaceChild(newTrigger, trigger);

		// 再取得
		const currentTrigger = item.querySelector('.pgarea_map_list_cmn_label');

		// 初期状態
		item.classList.remove('is-open');
		content.style.maxHeight = '0px';

		if (mapMediaQuery.matches) {
		// SP: click
		currentTrigger.addEventListener('click', function () {
			const isOpen = item.classList.contains('is-open');

			if (isOpen) {
			item.classList.remove('is-open');
			content.style.maxHeight = '0px';
			} else {
			item.classList.add('is-open');
			content.style.maxHeight = content.scrollHeight + 'px';
			}
		});
		} else {
		// PC: hover
		item.addEventListener('mouseenter', function () {
			setOpen(item);
		});

		item.addEventListener('mouseleave', function () {
			item.classList.remove('is-open');
			content.style.maxHeight = '0px';
		});
		}
	});
	}

	bindAccordion();

	window.addEventListener('resize', function () {
	bindAccordion();

	mapAccordionItems.forEach((item) => {
		const content = item.querySelector('.pgarea_map_list_cmn_cont');
		if (item.classList.contains('is-open') && content) {
		content.style.maxHeight = content.scrollHeight + 'px';
		}
	});
	});
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


// =================================================================
// area magazineスライダー
// =================================================================
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