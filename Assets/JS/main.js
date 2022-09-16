const header = document.getElementById('header')
const main = document.querySelector('.main')
const body = document.getElementById('body')
const html = document.getElementsByTagName('html')
const sidebar = document.querySelector('.sidebar')
const openedSidebar = document.querySelector('.sidebar-open')
const navBtn = header.querySelector('.btn-nav')
const stickyHeader = document.getElementById('sticky-header')
const navBtnSticky = stickyHeader.querySelector('.btn-nav')

const cookiesPopUp = document.getElementById('cookies-pop-up')
const cookiesAccept = cookiesPopUp.querySelector('.accept-cookies')

window.addEventListener('load', () => {
    if (!document.cookie.split("; ").find(item => item.startsWith('cookies=accepted'))) {
        cookiesPopUp.showModal()
        body.style.overflow = "hidden"
    }
})

cookiesAccept.addEventListener('click', ()=> {
    cookiesPopUp.close() 
    document.cookie = "cookies=accepted; max-age=315360000;"
    body.removeAttribute('style')
})

$(document).ready(function () {
    navBtn.addEventListener('click', () => {
        openSidebar()
    })

    navBtnSticky.addEventListener('click', () => {
        openSidebar()
    })

    openedSidebar.addEventListener('click', () => {
        closeSidebar()
    })

    stickyHeader.onmouseover = () => {
        body.classList.add('stopScroll')
    }

    stickyHeader.onmouseout = () => {
        body.classList.remove('stopScroll')
    }
})

function openSidebar() {
    body.style.overflow = "hidden";
    openedSidebar.style.display = "block"
    sidebar.style.zIndex = "5"
    main.classList.add('disableMain')
    navBtn.classList.add('sidebarOn')
    navBtnSticky.classList.add('sidebarOn')
}

function closeSidebar() {
    body.removeAttribute('style')
    sidebar.removeAttribute('style')
    openedSidebar.style.display = "none"
    main.classList.remove('disableMain')
    navBtn.classList.remove('sidebarOn')
    navBtnSticky.classList.remove('sidebarOn')
}

$('.owl-carousel').owlCarousel({
    loop: true,
    nav: false,
    dots: false,
    autoWidth: true,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true
})

var lastPosition = 0;

window.addEventListener('scroll', () => {
    const position = window.scrollY;
    if ( position > lastPosition || position < stickyHeader.offsetHeight) {
        stickyHeader.classList.add('hideSticky')
        stickyHeader.classList.remove('showSticky')
        stickyHeader.style.transform = "translate(0px, -" + stickyHeader.offsetHeight + "px)"
        if (position < stickyHeader.offsetHeight + 10) {
            stickyHeader.style.display = "none"
        }
    } else if (position < lastPosition) {
        stickyHeader.removeAttribute('style')
        stickyHeader.style.display = "block"
        stickyHeader.style.transform = "translate(0px, 0px)"
        stickyHeader.classList.remove('hideSticky')
        stickyHeader.classList.add('showSticky')
    }
    lastPosition = window.scrollY;
})