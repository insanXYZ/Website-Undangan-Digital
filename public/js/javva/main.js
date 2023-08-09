let buttonCover = document.querySelector(".buttonCover");
document.addEventListener("DOMContentLoaded", function () {

    $('.autoplay').slick({
        slidesToShow: 1,
        Infinity:true,
        slidesToScroll: 1,
        autoplay: true,
        arrows: false,
        autoplaySpeed: 4000,
      });

    let btnpage = document.querySelectorAll('.btnpage');
    let trackpoint = document.querySelector('.trackpoint');
    btnpage.forEach(button=>{
        button.addEventListener('click', function() {
            trackpoint.scrollIntoView({ behavior: "smooth" });
        })
    })

    // countdown
    let boxDays = document.querySelectorAll(".day");
    let boxHour = document.querySelectorAll(".hour");
    let boxMinute = document.querySelectorAll(".minute");
    let boxSecond = document.querySelectorAll(".second");

    let x = setInterval(function () {
        let now = new Date().getTime();

        let distance = countDownDate - now;

        let days = Math.floor(distance / (1000 * 60 * 60 * 24));
        let hours = Math.floor(
            (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
        );
        let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        let seconds = Math.floor((distance % (1000 * 60)) / 1000);

        boxDays.forEach((element) => {
            element.innerHTML = days;
        });

        boxHour.forEach((element) => {
            element.innerHTML = hours;
        });

        boxMinute.forEach((element) => {
            element.innerHTML = minutes;
        });

        boxSecond.forEach((element) => {
            element.innerHTML = seconds;
        });

        if (distance < 0) {
            clearInterval(x);
            boxDays.forEach((element) => {
                element.innerHTML = "0";
            });
    
            boxHour.forEach((element) => {
                element.innerHTML = "0";
            });
    
            boxMinute.forEach((element) => {
                element.innerHTML = "0";
            });
    
            boxSecond.forEach((element) => {
                element.innerHTML = "0";
            });
        }
    }, 1000);

    let container = document.querySelector(".container");
    let audio = document.getElementById("audio");
    let cover = document.querySelector(".cover");
    buttonCover.style.display = 'block';

    buttonCover.addEventListener("click", function () {
        container.style.display = "block";
        document.body.style.overflow = 'auto';
        audio.play();
        cover.style.opacity = 0;
        AOS.init();
        setTimeout(function () {
            cover.style.display = "none";
        }, 3200);
    });
});
