$(document).ready(function () {

  initOwlSlider();
  changeAttr();
  initFixMenu();
  //initFixGlobalMenu();
  // thanks();
  initScroll();
  initMenu();
  initSlider_1();
  initSlider_2();
  initSlider_3();
  initTab();
  // initSlider_banner();
  // initShowMore(6, 6, document.querySelector('.speakers__list'));
  onlineItemsGrid();
  initFBTracks();
  initLazy();

  $.extend($.fancybox.defaults, {
    afterClose: function () {
      const eventId = 145;
      const order = typeof orderId != 'undefined' ? orderId : undefined;
      if (order) {
        addPostpaymentAction(eventId, order);
      }
    }
  });

  function addPostpaymentAction(eventId, order) {

    fetch('https://api.1001tickets.org/getOrderStatus/' + eventId + '/' + order)
      .then(response => response.json())
      .then(response => {
        if (response['errorCode'] === 0 && response['response']['status'] === 4) {
          location.href = 'https://synergyglobal.ru/forums/brain2020/payment_success/';
        }
      })
  };

  function initFixGlobalMenu() {

    if ($(window).width() > 320) {

      var menu = $(".headerGlobal__top");
      var topOfGlobalMenu = $(menu).offset().top;

      $(window).scroll(function () {

        if ($(window).scrollTop() > topOfGlobalMenu) {

          $(menu).addClass("fixGlobalmenu");

        } else {

          $(menu).removeClass("fixGlobalmenu");
        }
      })
    }
  }

  function initFixMenu() {

    if ($(window).width() > 320) {

      var menu = $(".header");
      var topOfMenu = $(menu).offset().top;

      console.log(topOfMenu);


      $(window).scroll(function () {

        if ($(window).scrollTop() > topOfMenu) {

          $(menu).addClass("fixmenu");

        } else {

          $(menu).removeClass("fixmenu");
        }
      })
    }
  }

  /* Lazy */


  function initLazy() {
    let lazyArr = [].slice.call(document.querySelectorAll('.lazy')),
      active = false,
      threshold = 200;
    const lazyLoad = function (e) {
      if (active === false) {
        active = true;

        setTimeout(function () {
          lazyArr.forEach(function (lazyObj) {
            if (
              lazyObj.getBoundingClientRect().top <=
              window.innerHeight + threshold &&
              lazyObj.getBoundingClientRect().bottom >=
              -threshold &&
              getComputedStyle(lazyObj).display !== 'none'
            ) {
              if (lazyObj.dataset.src) {
                let img = new Image(),
                  src = lazyObj.dataset.src;
                img.src = src;
                img.onload = function () {
                  if (!!lazyObj.parent) {
                    lazyObj.parent.replaceChild(
                      img,
                      lazyObj
                    );
                  } else {
                    lazyObj.src = src;
                  }
                };
                lazyObj.removeAttribute('data-src');
              }

              if (lazyObj.dataset.srcset) {
                lazyObj.srcset = lazyObj.dataset.srcset;
                lazyObj.removeAttribute('data-srcset');
              }

              lazyObj.classList.remove('lazy');
              lazyObj.classList.add('lazy-loaded');

              lazyArr = lazyArr.filter(function (obj) {
                return obj !== lazyObj;
              });

              if (lazyArr.length === 0) {
                document.removeEventListener(
                  'scroll',
                  lazyLoad
                );
                window.removeEventListener('resize', lazyLoad);
                window.removeEventListener(
                  'orientationchange',
                  lazyLoad
                );
              }
            }
          });

          active = false;
        }, 200);
      }
    };

    lazyLoad();

    document.addEventListener('scroll', lazyLoad);
    window.addEventListener('resize', lazyLoad);
    window.addEventListener('orientationchange', lazyLoad);
  }

  $(function () {

    if (!$('[data-toggle-class]').length) return;

    $('[data-toggle-class]').on('click', function (event) {
      event.preventDefault();
      var
        obj = $(this).data('href'),
        obj_class = $(this).attr('data-toggle-class'),
        $obj;

        $obj = $(obj); /* Если передан jQuery-селектор */

      $obj.toggleClass(obj_class);
      $.fancybox.update();
    })
  })

  function initOwlSlider() {

    $('.topics__slider').owlCarousel({
      loop: false,
      margin: 20,
      nav: true,
      dots: false,
      slideBy: 1,
      responsive: {
        0: {
          items: 1,
        },
        768: {
          items: 2,
          margin: 10
        },
        1050: {
          items: 3,
          margin: 20
        }
      }
    })
    $('.topics__slider').prepend($('.owl-nav'));
  }


  $('.main__runline').marquee({
    duration: 25000,
    startVisible: true,
    gap: 0,
    duplicated: true
  })

  function changeAttr() {

    $('form').each(function (i, elem) {

      var value =  $(this).find('.form__chekbox').find('label').attr('for') + i;
      var value2 =  $(this).find('.form__chekbox-2').find('label').attr('for') + i;

      $(this).find('.form__chekbox').find('label').attr('for', value);
      $(this).find('.form__chekbox').find(':checkbox[name="personalDataAgree"]').attr('id', value);

      $(this).find('.form__chekbox-2').find('label').attr('for', value2);
      $(this).find('.form__chekbox-2').find(':checkbox[name="personalDataAgree"]').attr('id', value2);

    });
  }


  function thanks() {

    let forms = document.querySelectorAll('.main-form'),

      imgSrc = document.querySelector('.popup-thanks__img').getAttribute('src'),
      thanksBlock = document.querySelector('.popup-thanks').cloneNode(true);

    thanksBlock.querySelector('.popup-thanks__content').classList.remove('popup-thanks__content');
    thanksBlock.querySelector('.popup-thanks__img').setAttribute('src', imgSrc);

    let thanksBlockStr = thanksBlock.innerHTML

    for (let form of forms) {

      form.querySelector('.form__button').addEventListener('click', function (e) {

        let id = setInterval(function () {

          for (sendSuccess of document.querySelectorAll('.send-success')) {

            sendSuccess.innerHTML = thanksBlockStr;
            clearInterval(id)
          }
        }, 200)
      })
    }
  }


  function initSlider_1() {

    $('.partners__partnersSlider').owlCarousel({
      loop: true,
      margin: 0,
      dots: false,
      nav: true,
      navText: ["", ""],
      slideBy: 1,
      stagePadding: 1,
      responsive: {
        0: {
          items: 2,
          stagePadding: 0
        },
        425: {
          items: 2,
        },
        768: {
          items: 4,
          margin: 0
        },
        1050: {
          items: 4,
          margin: 0,
          stagePadding: 1,
        }
      }
    })
  }

  function initSlider_2() {

    $('.partners__partnersInfoSlider').owlCarousel({
      loop: false,
      margin: 0,
      dots: false,
      nav: true,
      navText: ["", ""],
      slideBy: 1,
      responsive: {
        0: {
          items: 2,
          stagePadding: 0
        },
        425: {
          items: 2,
        },
        768: {
          items: 4,
          margin: 0
        },
        1050: {
          items: 4,
          margin: 0
        }
      }
    })
  }


  function initSlider_3() {

    $('.gallery__galleryInfoSlider').owlCarousel({
      loop: false,
      margin: 0,
      dots: false,
      nav: false,
      navText: ["", ""],
      responsive: {
        0: {
          center: true,
          slideBy: 1,
          items: 1.5
        },
        425: {
          slideBy: 2,
          items: 2
        },
        768: {
          slideBy: 4,
          items: 4
        },
        1199: {
          slideBy: 6,
          items: 6
        }
      }
    })
  }

  // function initSlider_banner() {

  // $('.banner__content-list').owlCarousel({
  //   loop: false,
  //   margin: 0,
  //   dots: false,
  //   nav: true,
  //   navText: ["", ""],
  //   slideBy: 1,
  //   responsive:{
  //     0:{
  //       items: 2,
  //       stagePadding: 0
  //     },
  //     425:{
  //       items: 2,
  //     },
  //     768:{
  //       items:4,
  //       margin: 0
  //     },
  //     1050:{
  //       items:4,
  //       margin: 0
  //     }
  //   }
  // })

  //   $(function() {
  //     var owl = $('.banner__content-list'),
  //         owlOptions = {
  //             loop: false,
  //             margin: 0,
  //             responsive: {
  //                 0: {
  //                     items: 2
  //                 }
  //             }
  //         };

  //     if ( $(window).width() < 578 ) {
  //         var owlActive = owl.owlCarousel(owlOptions);
  //     } else {
  //         owl.addClass('off');
  //     }

  //     $(window).resize(function() {
  //         if ( $(window).width() < 578 ) {
  //             if ( $('.banner__content-list').hasClass('off') ) {
  //                 var owlActive = owl.owlCarousel(owlOptions);
  //                 owl.removeClass('off');
  //             }
  //         } else {
  //             if ( !$('.banner__content-list').hasClass('off') ) {
  //                 owl.addClass('off').trigger('destroy.owl.carousel');
  //                 owl.find('.owl-stage-outer').children(':eq(0)').unwrap();
  //             }
  //         }
  //     });
  // });
  // }

  function initShowMore(defaultSize, openSize, list) {
    $(list).each(function () {
      var currentListChildren = $(this).children();
      var listSize = currentListChildren.length;
      $(currentListChildren).show();
      $(currentListChildren).slice(defaultSize, listSize).hide();
      var btn = $(this).parent().find('.jq-show-link');
      $(btn).parent().show();
      $(btn).css('display', 'block');
      if (defaultSize == listSize) {
        $(btn).parent().hide();
      }

      $(btn).on('click', function () {
        event.preventDefault();
        defaultSize = (defaultSize + openSize <= listSize) ? defaultSize + openSize : listSize;
        $(currentListChildren).slice(0, defaultSize).show();
        if (defaultSize == listSize) {
          $(btn).parent().hide();
        }
      });
    });
  }

  function initScroll() {
    if (!$('.scroll').length) return;

    $(document).on('click scroll.init', '.scroll', function (event) {
      event.preventDefault();
      $.fancybox.close();

      var
        hrefId = $(this).attr('href') || $(this).data('href'),
        header_height = $('.header').innerHeight(),
        posTop = $(hrefId).offset().top - header_height;
      $('html, body').animate({ scrollTop: posTop }, 1000);
    });
  }

  function initMenu() {
    $('.header__nav_menu').on('click', function () {
      $('.header__nav').toggleClass('header__nav-active');
    });
    $('.header__nav_close-pic, .header__nav-link, .header__nav-phone, .header__nav-button').on('click', function () {
      $('.header__nav').removeClass('header__nav-active');
    });

  }

  function onlineItemsGrid() {
    if ($(window).width() < 769) {
      $('.item-gold').clone().appendTo('.price-online__content');
      $('.price-online__content-bottom .item-gold').remove();
    } else {
      $('.item-gold').clone().appendTo('.price-online__content-bottom');
      $('.price-online__content .item-gold').remove();
    }
    for (i = 0; i < $('.item-gold').length; i++) {
      if (i > 0) {
        $('.item-gold')[i].remove();
      }
    }
  }

  $(window).on('resize', function () {
    onlineItemsGrid();
  })


  function initFBTracks() {

    $('.main-form, .form-reg-vertical, #popup-reg')
      .on('submit', 'form', function () {
        /* Код для кнопки "Отправить заявку" и кнопки "Зарегистрироваться" */
        fbq('track', 'button send request');
      })
      ;

    $('.popup-price')
      .on('submit', 'form', function () {
        /* Код для кнопки "Купить билет" */
        fbq('track', 'buy ticket button');
      })
      ;

    $('.chatbot')
      .on('click', '.button', function () {
        /* Код для кнопки "Перейти WhatsApp" */
        fbq('track', 'button WhatsApp ');
      })
      ;

  }

  function initTab() {
    $('ul.program__day li').click(function (e) {
      e.preventDefault();
      var tab_id = $(this).attr('data-tab');
      $('ul.program__day li').removeClass('current');
      $('.program__table.current').removeClass('current');
      $(this).addClass('current');
      $("#" + tab_id).addClass('current');
    });
  }

});


//   Form


let formSubmited;
let formCloned;
returnForm();

function returnForm() {
  $('form').submit(function () {
    formSubmited = $(this);
    formCloned = formSubmited.children().clone(true);
  })
}





