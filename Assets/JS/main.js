const header = document.getElementById('header');
const main = document.querySelector('.main');
const body = document.getElementById('body');
const html = document.getElementsByTagName('html');
const sidebar = document.querySelector('.sidebar');
const openedSidebar = document.querySelector('.sidebar-open');
const navBtn = header.querySelector('.btn-nav');
const stickyHeader = document.getElementById('sticky-header');
const navBtnSticky = stickyHeader.querySelector('.btn-nav');

const cookiesPopUp = document.getElementById('cookies-pop-up');

window.addEventListener('load', () => {
    if (!document.cookie.split("; ").find(item => item.startsWith('cookies=accepted'))) {
        cookiesPopUp.showModal();
        body.style.overflow = "hidden";
    }
})

if(cookiesPopUp !== null) {
    const cookiesAccept = cookiesPopUp.querySelector('.accept-cookies');
    
    cookiesAccept.addEventListener('click', ()=> {
        cookiesPopUp.close();
        document.cookie = "cookies=accepted; max-age=315360000;";
        body.removeAttribute('style');
    })
}

navBtn.addEventListener('click', () => {
    openSidebar();
})

navBtnSticky.addEventListener('click', () => {
    openSidebar();
})

openedSidebar.addEventListener('click', () => {
    closeSidebar();
})

stickyHeader.onmouseover = () => {
    disable();
}

stickyHeader.onmouseout = () => {
    enable();
}

function preventScroll(e){
    e.preventDefault();
    e.stopPropagation();
    return false;
}

function disable(){
  mainScroll.addEventListener('wheel', preventScroll);
}

function enable(){
    mainScroll.removeEventListener('wheel', preventScroll);
}

function openSidebar() {
    openedSidebar.style.display = "block";
    sidebar.style.zIndex = "5";
    main.classList.add('disableMain');
    navBtn.classList.add('sidebarOn');
    navBtnSticky.classList.add('sidebarOn');
}

function closeSidebar() {
    sidebar.removeAttribute('style');
    openedSidebar.style.display = "none";
    main.classList.remove('disableMain');
    navBtn.classList.remove('sidebarOn');
    navBtnSticky.classList.remove('sidebarOn');
}
if (document.querySelector('.owl-carousel') !== null) {
    $('.owl-carousel').owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        autoWidth: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true
    })
}

var lastPosition = 0;
const mainScroll = document.querySelector('.main-scrollbar');

mainScroll.addEventListener('scroll', () => {
    const position = mainScroll.scrollTop;
    if ( position > lastPosition || position < stickyHeader.offsetHeight) {
        stickyHeader.classList.add('hideSticky');
        stickyHeader.classList.remove('showSticky');
        stickyHeader.style.transform = "translate(0px, -" + stickyHeader.offsetHeight + "px)";
        if (position < stickyHeader.offsetHeight + 10) {
            stickyHeader.style.display = "none";
        }
    } else if (position < lastPosition) {
        stickyHeader.removeAttribute('style');
        stickyHeader.style.display = "block";
        stickyHeader.style.transform = "translate(0px, 0px)";
        stickyHeader.classList.remove('hideSticky');
        stickyHeader.classList.add('showSticky');
    }
    lastPosition = mainScroll.scrollTop;
})

if (body.classList.contains('contact-page')) {
    var mainLogos = document.querySelectorAll('.main-logo-header');
    var contactBtns = document.querySelectorAll('.contact-btn');
    const showTimes = document.querySelector('.opening-hours_open');
    const timesMenu = document.querySelector('.opening-hours_menu');

    for (var i = 0; i < mainLogos.length; i ++) {
        mainLogos[i].src = "../Assets/Images/f-logo.png";
    }

    for (var j = 0; j < contactBtns.length; j++) {
        contactBtns[j].setAttribute('href', "./contact.php");
    }

    document['sign-up'].action = "./contact.php#newsletter";

    showTimes.addEventListener('click', () => {
        if (timesMenu.classList.contains('active')) {
            timesMenu.classList.remove('active');
        } else {
            timesMenu.classList.add('active');
        }
    })
}


const close = document.querySelectorAll('.err_close');

close.forEach((e) => e.addEventListener('click', () => {
    e.parentElement.remove();
}))