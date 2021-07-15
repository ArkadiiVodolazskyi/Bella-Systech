
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
  once: true, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
});

document.addEventListener("DOMContentLoaded", () => {

});

window.addEventListener("load", () => {

  // Globals
  const overlay = document.querySelector('#overlay');

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
            readMores[i].innerText = 'Читать далее'
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
        overlay.classList.toggle('active');
        hambMenu.classList.toggle('active');
        hambButton.classList.toggle('active');
        overlay.addEventListener('click', () => {
          overlay.classList.remove('active');
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
});