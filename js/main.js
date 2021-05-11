// advantages Swiper
let advantagesSwiper = new Swiper('.advantages-swiper-container', {
    slidesPerView: 3,
    centeredSlides: true,
    loop: true,
    breakpoints: {
        300: {
          slidesPerView: 1,
        },
        780: {
          slidesPerView: 2,
        },
        1044: {
          slidesPerView: 3,
        }
    }, 
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
})

// programs Swiper
let programsSwiper = new Swiper('.programs-swiper-container', {
    slidesPerView: 3,
    loop: true,
    navigation: {
        nextEl: '.programs-swiper-next-btn',
        prevEl: '.programs-swiper-prev-btn',
    },
    breakpoints: {
        300: {
          slidesPerView: 1,
        },
        780: {
          slidesPerView: 2,
        },
        1200: {
          slidesPerView: 3,
        }
    }, 
})


// reviews Swiper
let reviewsSwiper = new Swiper('.reviews-swiper-container', {
    slidesPerView: 3,
    loop: true,
    navigation: {
        nextEl: '.reviews-swiper-next-btn',
        prevEl: '.reviews-swiper-prev-btn',
    },
    breakpoints: {
        300: {
          slidesPerView: 1,
        },
        780: {
          slidesPerView: 2,
        },
        1044: {
          slidesPerView: 3,
        }
    }, 
})

// popup

const pagePopup = document.querySelector('.page-popup')
const popupWrapper = pagePopup.querySelector('.page-popup-wrapper')
let pagePopupTitle = pagePopup.querySelector('.page-popup-title-text')
let courseName = pagePopup.querySelector('.course-name')

function setDisplayBlock(el) {
    el.classList.add('set-display-block')
}
function setDisplayNone(el) {
    el.classList.remove('set-display-block')
}
function hidePopup(el) {
    el.classList.remove('page-popup-active')
}
function showPopup(el) {
    el.classList.add('page-popup-active')
}

function smoothShow(el) {
    setDisplayBlock(el)
    setTimeout(showPopup, 200, el)
}
function smoothHide(el) {
    hidePopup(el)
    setTimeout(setDisplayNone, 200, el)
}

let signUpBtns = [...document.querySelectorAll('.sign-up')]

signUpBtns.forEach(element => {
    element.onclick = function(event) {
        if (element.classList.contains('first-lesson')) {
            pagePopupTitle.textContent = 'Записаться на бесплатное занятие'
        } else {
            pagePopupTitle.textContent = 'Записаться на курс '
        }
        if (element.classList.contains('choose-program')) {
            courseName.textContent = `"${element.dataset.programName}"` 
        } else {
            courseName.textContent = ''
        }
        event.preventDefault()
        smoothShow(pagePopup)
        pagePopup.addEventListener('click', function(e) {
            if (e.target == pagePopup) {
                smoothHide(pagePopup)
            }
        })
    }
})

// burger menu

const burgerBtn = document.querySelector('.burger-menu')
const jumpMenu = document.querySelector('.jump-menu')
const headerMenuLinks = [...document.querySelectorAll('.header-menu-link')]
const body = document.querySelector('body')

burgerBtn.onclick = function() {
    burgerBtn.classList.toggle('burger-active')
    jumpMenu.classList.toggle('jump-menu-active')
    if (burgerBtn.classList.contains('burger-active')) {
        body.classList.add('no-scroll')
    } else {
        body.classList.remove('no-scroll')
    }
    
}
headerMenuLinks.forEach(element => {
    element.addEventListener('click', function() {
		burgerBtn.classList.remove('burger-active');
        jumpMenu.classList.remove('jump-menu-active');
        body.classList.remove('no-scroll');
	})
})


