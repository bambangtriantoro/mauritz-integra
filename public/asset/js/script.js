// Loading
window.onload = function(){
    showTime()
    hideLoading() 
    animateOnload()
}

function hideLoading(){
    var preloader = document.getElementById('preloader')
    preloader.style.opacity = 0
    setTimeout(function(){
        preloader.style.display = 'none'
    },1500)
}

// Sticky Navbar
window.onscroll = function(){stickyNavbar()} 

var navbar = document.getElementById('navbar')
var navbarOffset = navbar.offsetTop
var carouselCaptionOffset = document.getElementById('header').offsetTop + 150

function stickyNavbar() {
    if (window.pageYOffset >= carouselCaptionOffset) {
        navbar.classList.add('sticky')
    } else if (window.pageYOffset < navbarOffset) {
        navbar.classList.remove('sticky')
    }
} 

// Animate
function animate() {
    var animate = document.getElementsByClassName('animate')

    for(i=0;i<animate.length;i++){
        var windowHeight = window.innerHeight
        var animateTop = animate[i].getBoundingClientRect().top
        var animateType = animate[i].getAttribute('data-animate')
        if (animateTop < windowHeight - 150) {
            animate[i].style.visibility = 'visible'
            animate[i].classList.add('animate__animated', animateType,)
        }
    }
}

function animateOnload() {
    var animate = document.getElementsByClassName('animate')

    for(i=0;i<animate.length;i++){
        var windowHeight = window.innerHeight
        var animateTop = animate[i].getBoundingClientRect().top
        var animateType = animate[i].getAttribute('data-animate')
        animate[i].style.visibility = 'hidden'
        if (animateTop < windowHeight - 150) {
            animate[i].style.visibility = 'visible'
            animate[i].classList.add('animate__animated', animateType,)
        }
    }
}

window.addEventListener('scroll', animate)

// Date and Time
function showTime(){
    var date = new Date()
    var h = date.getHours() // 0 - 23
    var m = date.getMinutes() // 0 - 59
    var s = date.getSeconds() // 0 - 59
    var session = ' AM'
    
    if(h == 0){
        h = 12
    }
    
    if(h == 12){
      session = ' PM'
    }

    if(h > 12){
        h = h - 12
        session = ' PM'
    }
    
    h = (h < 10) ? '0' + h : h
    m = (m < 10) ? '0' + m : m
    s = (s < 10) ? '0' + s : s
    
    var time = h + ':' + m + session

    // document.getElementById('date').innerHTML = date.toDateString()
    document.getElementById('datetime').innerText = date.toDateString() +' , '+ time
    document.getElementById('datetime').textContent = date.toDateString() +' , '+ time

    setTimeout(showTime, 1000)
}