//////  start Animation aos plugin ========
(function($) {
  AOS.init({
    offset: 100,
    duration:700,
    easing:'ease-in-out',
    delay:0,
    once: false
  });
})(jQuery);


////// my direction page ========
let myString = $('body').attr('dirPage');
dirPage = myString == 1 ? true : false;
////// nav mobile menu ========
let FixedList = $('nav:not(.fixed_nav) .icon_list'),
FixedListUl = $('nav:not(.fixed_nav) .icon_list ul'),
IconList = $('.icon_list > label.menuOpen'),
TopAndSubHeader = $('header:not(.h_top) > .container > .row .sub_header')
function mobileMenu(e) {
  if (FixedList.hasClass('active')) {
    FixedList.removeClass('active')
    FixedListUl.removeClass('act')
    IconList.removeClass('x')
  }else{
    if (document.querySelector('nav:not(.fixed_nav) .icon_list ul.act')) {
        FixedList.removeClass('active')
        FixedListUl.removeClass('act')
    }else{
        FixedList.addClass('active')
        FixedListUl.addClass('act')
    }
    IconList.addClass('x')
  }
}
window.addEventListener('resize', function () { // Hide the menu when changing the screen size
  FixedList.removeClass('active')
  FixedListUl.removeClass('act')
  IconList.removeClass('x')
})

////// start drawing line navbar ========
const svg = document.getElementById("svgPath"), // set height of the svg path as constant
length = svg.getTotalLength(); //get Total Length
svg.style.strokeDasharray = length; // start positioning of svg drawing
svg.style.strokeDashoffset = length; // hide svg before scrolling start

let prevScrollpos = window.pageYOffset
window.addEventListener("scroll", function (e) {// start all effect navbar
  // start drawing line navbar
  const scrollpercent =
    (document.body.scrollTop + document.documentElement.scrollTop) /
    (document.documentElement.scrollHeight -
     document.documentElement.clientHeight),
  draw = length * scrollpercent;
  svg.style.strokeDashoffset = length - draw; // Reverse the drawing when scroll upwards

  ////// start effect navbar ========
  let header = $("header") //chinge style to scroll
  if (scrollY >= 300) {
    header.addClass("h_top");
    setTimeout(function () {
      if (scrollY == 300) header.addClass("h_top_3");
    }, 300);
    setTimeout(function () {
      header.removeClass("h_top_3");
      header.addClass("h_top_2");
    }, 500);
  } else {
    header.removeClass("h_top");
    setTimeout(function () {
      header.removeClass("h_top_2");
    }, 500);
  }
});

////// position language => header language ========
document.querySelector('.language_switcher').addEventListener('mouseenter', function () {
  lSelect = document.querySelector('.language_select');
  lOffset = this.getBoundingClientRect()
  lSelect.style = dirPage ? `left:${lOffset.left}px; top: ${lOffset.top + lOffset.height}px` : `left:${lOffset.left - lSelect.clientWidth + lOffset.width}px; top: ${lOffset.top + lOffset.height}px`;
});



//<< validation >>//

// start all message
let requiredMessage = 'input is required' ,
    emailMessage = 'Email is not invalid'

// Show input error messages
function showError(input, message , insert) {
    input.insertAdjacentHTML(insert, `<div class='inputRequired'><span>${message}</span></div>`)
}

//check email is valid
function checkEmail(input) {

    if (document.querySelector(input)) {
        const re = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        inp = document.querySelector(input)
        if(!re.test(inp.value)) {
            showError(inp, emailMessage ,'afterend')
        }
    }

}

//checkRequired fields
function checkRequired(inputArr) {
    document.querySelectorAll(inputArr).forEach(input => {
        if(input.value === ''){
            showError(input,requiredMessage ,'afterend')
        }
    });
}

let myFlag
// Required Checked One fields
function RequiredCheckedOne(parentAll) {

    if (document.querySelectorAll(parentAll).length > 0) {

        document.querySelectorAll(parentAll).forEach(parentSingl => {

            console.log();

            if (parentSingl.hasAttribute('requiredQuestion')) {

                myFlag = 0

                parentSingl.querySelectorAll('input').forEach( input => {

                    if (!input.checked){

                        if (myFlag == 0) {
                            showError(parentSingl,requiredMessage ,'afterbegin')
                            myFlag = 1
                        }

                    }

                })

                parentSingl.querySelectorAll('input').forEach( input => {

                    if (input.checked){

                        if (parentSingl.querySelector('.inputRequired')) {

                            parentSingl.querySelector('.inputRequired').remove()

                        }

                    }

                })

            }

        });

    }

}

//check input Length
function checkLength(input, min ,max) {

    if (document.querySelector(input)) {

        inp = document.querySelector(input)
        if(inp.value.length < min) {
            showError(inp, `${getFieldName(inp)} must be at least ${min} characters` ,'afterend');
        }else if(inp.value.length > max) {
            showError(inp, `${getFieldName(inp)} must be les than ${max} characters` ,'afterend');
        }

    }

}

//get FieldName
function getFieldName(input) {
    return input.id.charAt(0).toUpperCase() + input.id.slice(1);
}

// delete the message when typing input
document.querySelectorAll('form input').forEach(ele => {
    ele.addEventListener('keyup', function (e) {
        item = Array.from(this.parentElement.children).filter(i => i.classList.contains('inputRequired') == true)[0]
        item != undefined ? item.remove() : '' ;
    })
})

// delete the message when all Checkbox input
document.querySelectorAll('form input[type="checkbox"]').forEach(ele => {
    ele.addEventListener('change', function (e) {
        item = Array.from(this.parentElement.children).filter(i => i.classList.contains('inputRequired') == true)[0]
        item != undefined ? item.remove() : '' ;
    })
})



// Event Listeners
document.querySelector('form').addEventListener('submit',function(event) {

    document.querySelectorAll('.inputRequired').forEach(e => {
        e.remove()
    })

    checkRequired('form input[requiredes="true"]:not([disabled])');
    RequiredCheckedOne('.question_checkbox');
    checkEmail('input[emailRequired="true"]');
    checkLength('input[name="name"]',3,15);

    document.querySelectorAll('.inputRequired').length > 0 ? event.preventDefault() : '';

});
