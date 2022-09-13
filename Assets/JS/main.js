const header = document.getElementById('header')
const main = document.querySelector('.main')
const body = document.getElementById('body')
const sidebar = document.querySelector('.sidebar')
const closeSidebar = document.querySelector('.sidebar-open')
const navBtn = header.querySelector('.btn-nav')

navBtn.addEventListener('click', () => {
    body.style.overflow = "hidden";
    closeSidebar.style.display = "block"
    sidebar.style.zIndex = "5"
    main.classList.add('disableMain')
    event.target.classList.add('sidebarOn')
})

closeSidebar.addEventListener('click', () => {
    body.removeAttribute('style')
    sidebar.removeAttribute('style')
    closeSidebar.style.display = "none"
    main.classList.remove('disableMain')
    navBtn.classList.remove('sidebarOn')
})


$('.owl-carousel').owlCarousel({
    loop: true,
    nav: false,
    dots: false,
    autoWidth: true,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayPauseOnHover: true
})

