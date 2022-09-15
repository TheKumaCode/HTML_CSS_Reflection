const header = document.getElementById('header')
const main = document.querySelector('.main')
const body = document.getElementById('body')
const sidebar = document.querySelector('.sidebar')
const openedSidebar = document.querySelector('.sidebar-open')
const navBtn = header.querySelector('.btn-nav')
const stickyHeader = document.getElementById('sticky-header')
const navBtnSticky = stickyHeader.querySelector('.btn-nav')

$(document).ready(function () {
    navBtn.addEventListener('click', (e) => {
        openSidebar(e)
    })

    navBtnSticky.addEventListener('click', (e) => {
        openSidebar(e)
    })

    openedSidebar.addEventListener('click', () => {
        closeSidebar()
    })
})

function openSidebar(e) {
    body.style.overflow = "hidden";
    openedSidebar.style.display = "block"
    sidebar.style.zIndex = "5"
    main.classList.add('disableMain')
    stickyHeader.classList.add('disableMain')
    e.target.classList.add('sidebarOn')
}

function closeSidebar() {
    body.removeAttribute('style')
    sidebar.removeAttribute('style')
    openedSidebar.style.display = "none"
    main.classList.remove('disableMain')
    stickyHeader.classList.remove('disableMain')
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
    autoplayPauseOnHover: true
})

var lastPosition = 0;

window.addEventListener('scroll', () => {
    const position = window.scrollY;
    if ( position > lastPosition || position < stickyHeader.offsetHeight) {
        stickyHeader.classList.add('hideSticky')
        stickyHeader.classList.remove('showSticky')
        stickyHeader.style.top = "-" + stickyHeader.offsetHeight + "px"
        if (position < stickyHeader.offsetHeight + 10) {
            stickyHeader.style.display = "none"
        }
    } else if (position < lastPosition) {
        stickyHeader.removeAttribute('style')
        stickyHeader.style.display = "block"
        stickyHeader.classList.remove('hideSticky')
        stickyHeader.classList.add('showSticky')
    }
    lastPosition = window.scrollY;
})