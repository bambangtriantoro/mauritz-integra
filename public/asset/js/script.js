// Loading
window.onload = function(){
    hideLoading() 
    var animate = document.querySelectorAll('.animate')
    animate.forEach(anm => anm.style.visibility = 'hidden')
    visionmissionAnimate()
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
var carouselCaptionOffset = document.getElementById('carousel').offsetTop + 150

function stickyNavbar() {
    if (window.pageYOffset >= carouselCaptionOffset) {
        navbar.classList.add('sticky')
    } else if (window.pageYOffset < navbarOffset) {
        navbar.classList.remove('sticky')
    }
} 

// Vision Mission Animate
var visionmission = document.getElementById('visionmission')
var visionmissionOffset = visionmission.offsetTop

function visionmissionAnimate() {
    var visionmissionItem = document.querySelectorAll('#visionmission .animate')

    for(i=0;i<visionmissionItem.length;i++){
        var windowHeight = window.innerHeight
        var visionmissionItemTop = visionmissionItem[i].getBoundingClientRect().top;
        if (visionmissionItemTop < windowHeight - 150) {
            visionmissionItem[i].style.visibility = 'visible'

            if(i%2 == 0){
                visionmissionItem[i].classList.add('animate__animated', 'animate__bounceInLeft',)
            } else {
                visionmissionItem[i].classList.add('animate__animated', 'animate__bounceInRight')
            }
        }
    }
}

window.addEventListener('scroll', visionmissionAnimate)

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
showTime()