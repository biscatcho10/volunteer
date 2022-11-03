
//**************//  start js home  //**************//
( function($) {

  ////// handle circle slider to mouse move //////
  setTimeout(e => {
    // handle circle slider top page to mouse move => ( button next and button prev && arrow style)
    document.querySelector('.slider_top_page .owl-nav .owl-next').insertAdjacentHTML('afterend', `
      <div class="circlmove bCirclmove">
      </div>
      <div id="perantArrow" class="app_arrows">
          <span class='arrows'></span>
      </div>
    `)

    let WinWidth  =  window.innerWidth,
    perantArrows  =  document.getElementById("perantArrow"),
    arrowEffect   =  document.querySelector("span.arrows"),
    buttonPrev    =  document.querySelector('.owl-prev'),
    buttonNext    =  document.querySelector('.owl-next')

    // handle circle postion to onresize
    window.addEventListener("resize", function () {
      WinWidth = window.innerWidth;
    });

    function clickNextORPrev(hidden,show,clipValue,dirPage) {
      // arrow style
      arrowEffect.setAttribute('style', `clip-path: polygon` + clipValue)

      // move slider next or prev
      if (dirPage) { // chick diraction body rtl
        show.style.width = '0';
        hidden.style.width = '80px';
      }else{ // chick diraction body ltr
        hidden.style.width = '0';
        show.style.width = '80px';
      }
    }

    document.querySelector('.sliderTopPage').onmousemove = function (event){

      // postion circle and postion arrow and  postion next and postion prev
      xposition = (event.clientX - perantArrows.offsetLeft - perantArrows.offsetWidth/2);
      yposition = (event.clientY - (perantArrows.offsetTop - window.scrollY) - perantArrows.offsetHeight/2);
      $('.owl-prev, .owl-next, .bCirclmove ,.app_arrows').css({transform : `translate(${xposition}px, ${yposition}px)`});

      if (WinWidth / 3 >= event.clientX) {// start show arrow left => button prev
        clickNextORPrev(buttonNext,buttonPrev,`(100% 0%, 30% 50%, 100% 100%, 75% 100%, 0% 50%, 75% 0)` , dirPage)
      }
      else if ((WinWidth - WinWidth / 3) <= event.clientX) { // start show arrow right => button next
        clickNextORPrev(buttonPrev,buttonNext, `(25% 0, 100% 50%, 25% 100%, 0 100%, 74% 50%, 0 0)` , dirPage)
      }
      else{  // hide arrow left and hide arrow right and start show ( . )
        arrowEffect.setAttribute('style','clip-path: polygon(100% 0, 100% 64%, 100% 100%, 0 100%, 0 40%, 0 0); width: 8px; height: 8px')
        buttonNext.style.width = '0';
        buttonPrev.style.width = '0';
      }

    };
  },10)

  ////// start all carousel page home //////
  let owlC = $(".sliderTopPage")// hero slider => slider top page home
  owlC.owlCarousel({
  rtl: dirPage,
  callbacks: false,
  nav:true,
  autoplay: true,
  autoplayTimeout: 13000,
  loop: true,
  margin: 0,
  dots: true,
  animateOut: 'fadeOut',
  slideTransition: 'ease-in',
  // smartSpeed: 1500,
  items: 1,
  });
  let tCount = 0; // start type Writer slider top page home
  function typeWriter() {
    element = document.querySelector("#swiperTopPage .active .content_text h2")
    text = element.getAttribute('slider-text')
    if (tCount < text.length) {
      element.innerHTML += text.charAt(tCount);
      tCount++;
      setTimeout(typeWriter, 100);
    }
  }typeWriter()
  owlC.on('change.owl.carousel', function() { // to appear in writing from the beginning each time the slider changes.
    tCount = -1
    $("#swiperTopPage .content_text h2").text('')
    typeWriter()
  })

  setTimeout(e => { // start handle pagination number to slider top page ( header )
    let paginationHeader = document.querySelectorAll('.owl-dot')
    for (let i = 0; i < paginationHeader.length; i++) {
        i >= 9 ? zero = '' : zero = 0;
        dirPage ? zero = '' : '';
        paginationHeader[i].innerHTML = `<div class='num_page'> ${zero} ${i+1} </div>`
    }
    document.querySelector('.hero-slider .owl-dots').classList.add('container')
  },10)

  $(".slider-items, .slider-items-latest_").owlCarousel({ // start slider section card to home
    rtl: dirPage,
    callbacks:true,
    autoplay: true,
    loop: true,
    margin: 0,
    dots: false,
    lazyLoad:true,
    slideTransition: 'linear',
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
        stagePadding: 0,
      },
      768: {
        items: 1,
        stagePadding: 100,
      },
      992: {
        items: 2,
      },
      1200: {
        items: 3,
      }
    },
  });

  $(".slider-items-items").owlCarousel({ // start section logo carousel
    rtl: dirPage,
    autoplay: true,
    loop: true,
    margin: 0,
    dots: false,
    slideTransition: 'linear',
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
      },
      370: {
        items: 2,
      },
      768: {
        items: 3,
      },
      992: {
        items: 4,
      },
      1200: {
        items: 7,
      },
    },
  });

  ////// text Type To Scroll function //////
  window.addEventListener('scroll',function (e) {
    (function textTypeToScroll(section) {
      let elem = $(section)
      for (let i = 0; i < elem.length; i++) {
        if (scrollY >= (elem.eq(i).offset().top - window.innerHeight) + elem.eq(i).height()) {
          $(`${section} .lines_text`).eq(i).slideDown({
            duration: 1000,
            complete: function(){
              $(`${section} .break_text p`).eq(i).css({
                transform: 'translateX(0px)'
              })
            }
          })
        }else{
            dirPage == true ? dir = '' : dir = '-';
            $(`${section} .lines_text`).eq(i).slideUp({
              complete: function(){
                $(`${section} .break_text p`).eq(i).css({
                  transform: `translateX(${dir}${$(`${section} p`).width() + 50}px)`
                })
              }
            })
        }
      }

    })('.textType')
  })

})(jQuery);
