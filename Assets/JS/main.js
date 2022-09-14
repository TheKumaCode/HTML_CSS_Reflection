const header = document.getElementById('header')
const main = document.querySelector('.main')
const body = document.getElementById('body')
const sidebar = document.querySelector('.sidebar')
const openedSidebar = document.querySelector('.sidebar-open')
const navBtn = header.querySelector('.btn-nav')

$(document).ready(function () {
    navBtn.addEventListener('click', (e) => {
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
    e.target.classList.add('sidebarOn')
}

function closeSidebar() {
    body.removeAttribute('style')
    sidebar.removeAttribute('style')
    openedSidebar.style.display = "none"
    main.classList.remove('disableMain')
    navBtn.classList.remove('sidebarOn')
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
const mainHeader = document.getElementById('header')
const stickyHeader = document.getElementById('sticky-header')

document.addEventListener('scroll', () => {
    let position = window.scrollY
    if (position < lastPosition && position >= 168) {
        stickyHeader.style.display = "block"
    } else if (position > lastPosition) {
        stickyHeader.style.display = "none"
    } else {
        return;
    }
    lastPosition = position <= 0 ? 0 : position
})