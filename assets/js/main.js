// Animation on scrool

AOS.init();





//  Timmer

let monthsText = document.getElementById('monthTime')
let daysText = document.getElementById('dayTime')
let hoursText = document.getElementById('hoursTime')
let minsText = document.getElementById('minsTime')
let secsText = document.getElementById('secondsTime')

setInterval(() => {
    const date = new Date();
    let timeToExist = new Date('October 25, 2020 00:00:00')
    const newNow  = date.getTime()
    let months = monthsRemaining(timeToExist, newNow)
    let days = dayRemaining(months.remainingMilSec, newNow)
    let hours = hoursRemaining(days.remainingMilSec, newNow)
    let mins = minRemaining(hours.remainingMilSec, newNow)
    let secs = secRemaining(mins.remainingMilSec, newNow)
    monthsText.innerHTML = months.months 
    daysText.innerHTML =  days.days 
    hoursText.innerHTML = hours.hours 
    minsText.innerHTML = mins.mins
    secsText.innerHTML = secs.secs 
}, 1000)

function monthsRemaining(millSec, newNow){
    let remianingMilSec = millSec - newNow;
    let monthInMilSec = 60*60*24*30 * 1000;
    let remainingMonth = remianingMilSec/monthInMilSec
    let milSecNotUsed = millSec - (parseInt(remainingMonth) * monthInMilSec) 
    remainingMonth = parseInt(remainingMonth);
    remainingMonth = remainingMonth.toString();
    remainingMonth = remainingMonth.padStart(2, '0')
    return {
        months: remainingMonth, 
        remainingMilSec : milSecNotUsed
    }
}


function dayRemaining(millSec, newNow){
    let remianingMilSec = millSec - newNow;
    let daysInMilSec = 60*60*24 * 1000;
    let remainingDay = remianingMilSec/daysInMilSec
    let milSecNotUsed = millSec - (parseInt(remainingDay) * daysInMilSec) 
    remainingDay = parseInt(remainingDay);
    remainingDay = remainingDay.toString();
    remainingDay = remainingDay.padStart(2, '0');
    return {
        days: remainingDay, 
        remainingMilSec : milSecNotUsed
    }
}

function hoursRemaining(millSec, newNow){
    let remianingMilSec = millSec - newNow;
    let hoursInMilSec = 60*60*1000;
    let remainingHours = remianingMilSec/hoursInMilSec
    let milSecNotUsed = millSec - (parseInt(remainingHours) * hoursInMilSec) 
    remainingHours = parseInt(remainingHours)
    remainingHours = remainingHours.toString();
    remainingHours = remainingHours.padStart(2, '0')
    return {
        hours: remainingHours, 
        remainingMilSec : milSecNotUsed
    }
}

function minRemaining(millSec, newNow){
    let remianingMilSec = millSec - newNow;
    let minsInMilSec = 60*1000;
    let remainingMins = remianingMilSec/minsInMilSec
    let milSecNotUsed = millSec - (parseInt(remainingMins) * minsInMilSec)
    remainingMins = parseInt(remainingMins)
    remainingMins = remainingMins.toString()
    remainingMins = remainingMins.padStart(2, '0')
    return {
        mins: remainingMins,
        remainingMilSec : milSecNotUsed
    }
}
function secRemaining(millSec, newNow){
    let remianingMilSec = millSec - newNow;
    let secInMilSec = 1000;
    let remainingSec = remianingMilSec/secInMilSec
    let milSecNotUsed = millSec - (parseInt(remainingSec) * secInMilSec)
    remainingSec = parseInt(remainingSec)
    remainingSec = remainingSec.toString()
    remainingSec = remainingSec.padStart(2,'0')
    return {
        secs: remainingSec,
        remainingMilSec : milSecNotUsed
    }
}







// Carousel

$(document).ready(function(){
    $('.cells').slick({
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });
  });
  let closeIcon  = document.getElementById('close_modal');
  let modalImage = document.getElementById('modalSrc');
  let modal = document.getElementsByClassName('modal')[0]
  let slideElements =  document.getElementsByClassName('image_Slider')
  for(let i = 0; i < slideElements.length; i++){
    slideElements[i].addEventListener('click', (event) => {
      modal.classList.remove('Hide_Modal')
      modal.classList.add('Show_Modal')
      let src = slideElements[i].src;
      modalImage.src = src
    })
  }

  closeIcon.addEventListener('click', (event) => {
    modal.classList.remove('Show_Modal')
    modal.classList.add('Hide_Modal')
  })


  // Form validation

  let email = document.getElementById('email');
  let subBtn = document.getElementById('notification_form')
  let errorMessage = document.getElementById('errorMsg')

  subBtn.addEventListener('submit', (event)=> {
    event.preventDefault();
    let emailRegex =  /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    if(!emailRegex.test(email.value)){
      event.preventDefault();
      email.classList.add('error');
      errorMessage.innerHTML = "Please enter a valid email";
    }
  })












