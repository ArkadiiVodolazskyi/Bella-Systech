
document.addEventListener("DOMContentLoaded", () => {
  // Slicks options
  slickOptions = {
    'vs1': {
      arrows: true,
      draggable: false,
      touchThreshold: 300,
      speed: 300,
      focusOnSelect: false,
      infinite: false,
      autoplay: false,
      dots: true,
      variableWidth: false,
      vertical: true,
      verticalSwiping: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow: `
        <button class="slick-arrow slick-prev">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="-12.2 -12.2 28.3 17.2"><path fill="none" stroke="#d02029" stroke-linecap="round" stroke-width="4px" d="M0 0l12 12L24 0" transform="translate(14 2.829) rotate(180)"/></svg>
        </button>
      `,
      nextArrow: `
        <button class="slick-arrow slick-next">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="11.8 0.7 28.3 17"><path fill="none" stroke="#d02029" stroke-linecap="round" stroke-width="4px" d="M0 0l12 12L24 0" transform="translate(14 2.829) rotate(0)"/></svg>
        </button>
      `,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            dots: false,
            draggable: false,
            vertical: false,
            verticalSwiping: false,
          },
        },
      ],
    },
    'hs1': {
      arrows: true,
      draggable: false,
      touchThreshold: 300,
      focusOnSelect: false,
      infinite: false,
      autoplay: false,
      dots: false,
      variableWidth: false,
      vertical: false,
      verticalSwiping: false,
      slidesToShow: 4,
      slidesToScroll: 1,
      prevArrow: `
        <button class="slick-arrow slick-prev">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="-1 0.7 17.1 28.3"><path fill="none" stroke="#d02029" stroke-linecap="round" stroke-width="4px" d="M0 0l12 12L24 0" transform="translate(14 2.829) rotate(90)"/></svg>
        </button>
      `,
      nextArrow: `
        <button class="slick-arrow slick-next">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="11.5 -23.5 17.5 28.5"><path fill="none" stroke="#d02029" stroke-linecap="round" stroke-width="4px" d="M0 0l12 12L24 0" transform="translate(14 2.829) rotate(-90)"/></svg>
        </button>
      `,
      responsive: [
        {
          breakpoint: 1600,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: true,
            dots: false,
            draggable: false,
            touchThreshold: 300
          },
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            arrows: true,
            dots: false,
            draggable: false,
            touchThreshold: 300
          },
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            draggable: true,
            touchThreshold: 300,
            variableWidth: true
          },
        },
      ],
    },
    'hs2': {
      arrows: false,
      draggable: false,
      touchThreshold: 300,
      focusOnSelect: false,
      infinite: false,
      autoplay: false,
      dots: false,
      variableWidth: false,
      vertical: false,
      verticalSwiping: false,
      slidesToShow: 5,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1600,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            draggable: true,
            touchThreshold: 300
          },
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            draggable: true,
            touchThreshold: 300
          },
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            draggable: true,
            touchThreshold: 300
          },
        },
      ],
    },
    'hs3': {
      arrows: true,
      draggable: false,
      touchThreshold: 300,
      focusOnSelect: false,
      infinite: false,
      autoplay: false,
      dots: true,
      variableWidth: false,
      vertical: false,
      verticalSwiping: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      speed: 300,
      appendDots: $(".slick-dots-wrapper:not(.second)"),
      prevArrow: $(".slick-prev:not(.second)"),
      nextArrow: $(".slick-next:not(.second)")
    },
    // Just copied h3 to prevent single controls for two alike sliders on the page
    'hs4': {
      arrows: true,
      draggable: false,
      touchThreshold: 300,
      focusOnSelect: false,
      infinite: false,
      autoplay: false,
      dots: true,
      variableWidth: false,
      vertical: false,
      verticalSwiping: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      appendDots: $(".slick-dots-wrapper.second"),
      prevArrow: $(".slick-prev.second"),
      nextArrow: $(".slick-next.second")
    },
    'hs5': {
      arrows: true,
      draggable: true,
      touchThreshold: 300,
      focusOnSelect: false,
      infinite: false,
      autoplay: false,
      dots: false,
      variableWidth: false,
      vertical: false,
      verticalSwiping: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow: `
        <button class="slick-arrow slick-prev">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="-12.2 -12.2 28.3 17.2"><path fill="none" stroke="#d02029" stroke-linecap="round" stroke-width="4px" d="M0 0l12 12L24 0" transform="translate(14 2.829) rotate(180)"/></svg>
        </button>
      `,
      nextArrow: `
        <button class="slick-arrow slick-next">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="11.8 0.7 28.3 17"><path fill="none" stroke="#d02029" stroke-linecap="round" stroke-width="4px" d="M0 0l12 12L24 0" transform="translate(14 2.829) rotate(0)"/></svg>
        </button>
      `,
    },
    'hs6': {
      arrows: false,
      draggable: true,
      touchThreshold: 300,
      focusOnSelect: false,
      infinite: false,
      autoplay: false,
      dots: false,
      variableWidth: false,
      vertical: false,
      verticalSwiping: false,
      slidesToShow: 2,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            draggable: true,
            touchThreshold: 300,
            variableWidth: true
          },
        },
      ]
    },
    'hs7': {
      arrows: true,
      draggable: false,
      touchThreshold: 300,
      focusOnSelect: false,
      infinite: false,
      autoplay: false,
      dots: true,
      variableWidth: false,
      vertical: false,
      verticalSwiping: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      appendDots: $(".slick-dots-wrapper.hs7"),
      prevArrow: $(".slick-prev.hs7"),
      nextArrow: $(".slick-next.hs7"),
      asNavFor: $('.toSlick[data-type=hs8]')
    },
    'hs8': {
      arrows: true,
      draggable: false,
      touchThreshold: 300,
      focusOnSelect: false,
      infinite: false,
      autoplay: false,
      dots: true,
      variableWidth: false,
      vertical: false,
      verticalSwiping: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      appendDots: $(".slick-dots-wrapper.hs8"),
      prevArrow: $(".slick-prev.hs8"),
      nextArrow: $(".slick-next.hs8"),
      asNavFor: $('.toSlick[data-type=hs7]')
    },
    'hs9': {
      arrows: false,
      draggable: false,
      touchThreshold: 300,
      focusOnSelect: false,
      infinite: false,
      autoplay: false,
      dots: false,
      variableWidth: false,
      vertical: false,
      verticalSwiping: false,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1281,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            draggable: true,
            touchThreshold: 300,
            variableWidth: true
          },
        },
        {
          breakpoint: 901,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            draggable: true,
            touchThreshold: 300,
            variableWidth: true
          },
        },
        {
          breakpoint: 601,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            draggable: true,
            touchThreshold: 300,
            variableWidth: true
          },
        },
      ]
    },
  }

  // Init desktops
  const toSlicks = document.querySelectorAll('.toSlick[data-type]:not([data-mobile=true])');
  if (toSlicks.length) {
    toSlicks.forEach(toSlick => {
      const type = toSlick.getAttribute('data-type');
      $(toSlick).slick(slickOptions[type]);
    });
  }

  // Init mobiles
  const toSlicksMob = document.querySelectorAll('.toSlick[data-mobile=true]');
  if (toSlicksMob.length) {
    toSlicksMob.forEach(toSlick => {
      if (window.innerWidth <= toSlick.getAttribute('data-screen')) {
        const type = toSlick.getAttribute('data-type');
        $(toSlick).slick(slickOptions[type]);
      }
    });
  }

  // Init AOS
  AOS.init({
    // Global settings:
    disable: 'mobile', // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
    startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
    initClassName: 'aos-init', // class applied after initialization
    animatedClassName: 'aos-animate', // class applied on animation
    useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
    disableMutationObserver: false, // disables automatic mutations' detections (advanced)
    debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
    throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)

    // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
    offset: 120, // was 120 - offset (in px) from the original trigger point
    delay: 0, // values from 0 to 3000, with step 50ms
    duration: 400, // values from 0 to 3000, with step 50ms
    easing: 'ease', // default easing for AOS animations
    once: false, // whether animation should happen only once - while scrolling down
    mirror: false, // whether elements should animate out while scrolling past them
    anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
  });

  AOS.refresh();
});

window.addEventListener("load", () => {

  // ------------ General ------------

  // Globals
  const body = document.body;
  const overlay = document.querySelector('#overlay');
  const overlay_mobile = document.querySelector('#overlay_mobile');

  // Masked Inputs
  (function() {
    const inputTels = document.querySelectorAll('input[type=tel]');

    if (inputTels.length) {

      $(inputTels).click(function() {
        $(this).setCursorPosition(5);
      }).mask(
        "+38 (999) 999-9999",
        {autoclear: false}
      );

      // Fix masked input cursor
      $.fn.setCursorPosition = function(pos) {
        if ($(this).get(0).setSelectionRange) {
          $(this).get(0).setSelectionRange(pos, pos);
        } else if ($(this).get(0).createTextRange) {
          var range = $(this).get(0).createTextRange();
          range.collapse(true);
          range.moveEnd('character', pos);
          range.moveStart('character', pos);
          range.select();
        }
      };
    }
  })();

  // Smooth anchors
  (function() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
          e.preventDefault();

          document.querySelector(this.getAttribute('href')).scrollIntoView({
              behavior: 'smooth'
          });
      });
    });
  })();

  // Read more
  (function() {
    const wrappeds = document.querySelectorAll('.wrapped');
    const readMores = document.querySelectorAll('.readMore');

    if (wrappeds.length && readMores.length) {
      for (let i = 0; i < readMores.length; i++) {
        readMores[i].addEventListener('click', () => {
          if (wrappeds[i].classList.contains('active')) {
            wrappeds[i].classList.remove('active');
            readMores[i].innerText = 'Подробнее'
          } else {
            wrappeds[i].classList.add('active');
            readMores[i].innerText = 'Свернуть'
          }

        });
      }
    }
  })();

  // Header open hamb menu on mobile
  (function() {
    const hambButton = document.getElementById('openHambMenu');
    const hambMenu = document.getElementById('mobileMenu');
    if (hambButton && hambMenu) {
      hambButton.addEventListener('click', () => {
        overlay_mobile.classList.toggle('active');
        hambMenu.classList.toggle('active');
        hambButton.classList.toggle('active');
        overlay_mobile.addEventListener('click', () => {
          overlay_mobile.classList.remove('active');
          hambMenu.classList.remove('active');
          hambButton.classList.remove('active');
        }, true);
      }, true);
    }
  })();

  // Footer expand lists on mobile
  (function() {
    const footerHeaders = document.querySelectorAll('footer .footer_block h5');
    const footerBlocks = document.querySelectorAll('footer .footer_block');
    if (footerHeaders.length && footerBlocks.length) {
      for (let i = 0; i < footerHeaders.length; i++) {
        footerHeaders[i].addEventListener('click', () => {
          if (footerBlocks[i].classList.contains('active')) {
            footerBlocks[i].classList.remove('active');
          } else {
            for (let j = 0; j < footerBlocks.length; j++) {
              footerBlocks[j].classList.remove('active');
            }
            footerBlocks[i].classList.add('active');
          }
        });
      }
    }
  })();

  // open-connect
  (function() {
    const modalConnect = document.getElementById('modal-connect');
    const openConnects = document.querySelectorAll('.open-connect');
    const closeConnect = document.getElementById('close-connect');

    if (openConnects.length) {
      openConnects.forEach(openConnect => {
        openConnect.addEventListener('click', () => {
          overlay.classList.add('active');
          modalConnect.classList.add('active');
          overlay.addEventListener('click', () => {
            overlay.classList.remove('active');
            modalConnect.classList.remove('active');
          }, true);
        }, true);
      });
    }
    if (closeConnect) {
      closeConnect.addEventListener('click', (e) => {
        e.preventDefault();
        overlay.classList.remove('active');
        modalConnect.classList.remove('active');
      }, true);
    }
  })();

  // Change cities
  (function() {
    const cityBtns = document.querySelectorAll('.choose_city button');
    const cityBlocks = document.querySelectorAll('section.dealer .right .cards');

    if(cityBtns.length && cityBlocks.length) {
      for (let i = 0; i < cityBtns.length; i++) {
        cityBtns[i].addEventListener('click', () => {
          for (let j = 0; j < cityBtns.length; j++) {
            cityBtns[j].classList.remove('active');
            cityBlocks[j].classList.remove('active');
          }
          cityBtns[i].classList.add('active');
          cityBlocks[i].classList.add('active');
        }, true);
      }

      // On mobile we are using select
      const citySelect = document.getElementById('citySelect');
      if (citySelect) {
        citySelect.addEventListener('change', () => {
          for (let j = 0; j < cityBtns.length; j++) {
            cityBtns[j].classList.remove('active');
            cityBlocks[j].classList.remove('active');
          }
          cityBlocks[citySelect.selectedIndex + 1].classList.add('active');
        }, true);
      }
    }

    // Expand city filials
    const cityFilialsHeaders = document.querySelectorAll('section.dealer .right .cards .filial .street');
    const cityFilials = document.querySelectorAll('section.dealer .right .cards .filial');
    if (cityFilialsHeaders.length && cityFilials.length) {
      for (let i = 0; i < cityFilialsHeaders.length; i++) {
        cityFilialsHeaders[i].addEventListener('click', () => {
          if (cityFilials[i].classList.contains('active')) {
            cityFilials[i].classList.remove('active');
          } else {
            for (let j = 0; j < cityFilialsHeaders.length; j++) {
              cityFilials[j].classList.remove('active');
            }
            cityFilials[i].classList.add('active');
          }
        }, true);
      }
    }
  })();

  // Hide header .bottom on scroll
  (function() {
    const mainHeader = document.getElementById('mainHeader');
    if (mainHeader) {
      window.addEventListener('scroll', () => {
        if (window.pageYOffset > 200) {
          mainHeader.classList.add('minified');
        } else {
          mainHeader.classList.remove('minified');
        }
      }, true);
    }
  })();

  // Onmousehover animations
  if (window.innerWidth > 768) {

    // Home banner figures animation
    $('section.homeBanner .slide').each(function() {
      $(this).mousemove(function(e){
        var y = e.pageY / 20;
        var x = e.pageX / 20;
        $('section.homeBanner .slide .image .aquaEmpty').css("transform", `translate(${-x}px, ${-y}px)`);
        $('section.homeBanner .slide .image .pinkFilled').css("transform", `translate(${x}px, ${y}px)`);
      });
    });

    // Request image animation
    $('section.request').each(function() {
      $('section.request .wrapper').mousemove(function(e){
        var x = e.pageX / 15;
        var y = e.pageY / 40;
        $('section.request .request_img').css("transform", `translate(${-x + 100}px, ${y}px)`);
      });
    });
  }

  // contacts - init cities | init maps
  (function() {
    const citiesBtns = document.querySelectorAll('.choose_city button[data-city]');
    const citiesAddresses = document.querySelectorAll('.contacts .address[data-city]');
    const citiesMaps = document.querySelectorAll('.map[data-city]');

    if (citiesBtns.length && citiesAddresses.length && citiesMaps.length) {

      const mapCoords = [
        [50.42972286659074, 30.522952928933808],
        [50.42972286659074, 30.522952928933808],
        [50.42972286659074, 30.522952928933808]
      ];

      for (let i = 0; i < citiesBtns.length; i++) {

        // Init maps
        const markerIcon = {
          url: './img/ico_marker.png',
          scaledSize: new google.maps.Size(68, 68)
        };
        const coordinates = {
          lat: mapCoords[i][0],
          lng: mapCoords[i][1]
        };
        const map = new google.maps.Map(citiesMaps[i], {
          center: coordinates,
          zoom: 17,
          disableDefaultUI: false,
          scrollwheel: false,
        });
        const marker = new google.maps.Marker({
          position: coordinates,
          map: map,
          icon: markerIcon
        });

        // Change button | addreses | maps
        citiesBtns[i].addEventListener('click', () => {
          for (let j = 0; j < citiesBtns.length; j++) {
            citiesBtns[j].classList.remove('active');
            citiesAddresses[j].classList.remove('active');
            citiesMaps[j].classList.remove('active');
          }

          citiesBtns[i].classList.add('active');
          citiesAddresses[i].classList.add('active');
          citiesMaps[i].classList.add('active');
        }, true);

        // On mobile we are using select
        const citySelect = document.getElementById('citySelect');
        if (citySelect) {
          citySelect.addEventListener('change', () => {
            for (let j = 0; j < citiesBtns.length; j++) {
              citiesBtns[j].classList.remove('active');
              citiesAddresses[j].classList.remove('active');
              citiesMaps[j].classList.remove('active');
            }
            citiesBtns[citySelect.selectedIndex].classList.add('active');
            citiesAddresses[citySelect.selectedIndex].classList.add('active');
            citiesMaps[citySelect.selectedIndex].classList.add('active');
          }, true);
        }

      }
    }
  })();

  // single-videos - change custom button


  AOS.refresh();
  $(".why").on('scroll', function () {
    AOS.refresh();
  });
});

window.addEventListener('load', AOS.refresh);