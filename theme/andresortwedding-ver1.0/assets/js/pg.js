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
