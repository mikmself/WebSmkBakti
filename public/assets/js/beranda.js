document.addEventListener('DOMContentLoaded', (event) => {
    const countDownDate = new Date("Jun 30, 2024 00:00:00").getTime();
    const countdownFunction = setInterval(() => {
        const now = new Date().getTime();
        const distance = countDownDate - now;
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);
        document.getElementById('days').innerHTML = days;
        document.getElementById('hours').innerHTML = hours;
        document.getElementById('minutes').innerHTML = minutes;
        document.getElementById('seconds').innerHTML = seconds;
        if (distance < 0) {
            clearInterval(countdownFunction);
            document.querySelector('.countdown').innerHTML = "EXPIRED";
        }
    }, 1000);
});
let dropdown = document.getElementById("dropdown");
let dropdownContent = document.getElementById("dropdown-content");

dropdown.addEventListener("click",()=>{
    dropdownContent.classList.toggle("display-block");
});

let dropdown2 = document.getElementById("dropdown2");
let dropdown2Content = document.getElementById("dropdown-content2");

dropdown2.addEventListener("click",()=>{
    dropdown2Content.classList.toggle("display-block");
});

function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }