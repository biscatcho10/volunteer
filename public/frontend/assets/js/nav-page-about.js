let navTop = document.querySelector('.loction_page_top'),
navBottom = document.querySelector('#loctionBottomNav'),
footer = document.querySelector('#Subscribe'),
EmarginTop = window.getComputedStyle(navTop),
sections = document.querySelectorAll(".mysec"),
navLi = document.querySelectorAll("#loctionBottomNav ul li")

window.addEventListener('scroll', e => {
    if (scrollY > (navTop.offsetTop + Number(EmarginTop.marginTop.slice(0,EmarginTop.marginTop.length - 2)))) {
        if(scrollY + innerHeight > footer.offsetTop){
            navBottom.classList.remove('show')
        }else{
            navBottom.classList.add('show')
        }
    }else{
        navBottom.classList.remove('show')
    }

    // this is active link section Nav Bottom 
    sections.forEach((element , i) => {
        if (element.offsetTop - 80 <= window.scrollY) {
            if (document.querySelectorAll('#loctionBottomNav ul li.active').length != 0) {
                document.querySelectorAll('#loctionBottomNav ul li.active').forEach(e => {
                    e.classList.remove('active'); // remove class active to all element
                })
            }
            navLi[i].classList.add('active'); // add class active this => singl li last child <= window.scrollY 
        }
    });
})
