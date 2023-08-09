let button = document.querySelector(".button");
document.addEventListener("DOMContentLoaded", function () {
    let fullUrl = window.location;
    let objectUrl = new URL(fullUrl);
    let domain = objectUrl.protocol + "//" + objectUrl.host;

    button.style.display = "block";

    // countdown
    let boxDays = document.getElementById("day");
    let boxHour = document.getElementById("hour");
    let boxMinute = document.getElementById("minute");
    let boxSecond = document.getElementById("second");

    var x = setInterval(function () {
        var now = new Date().getTime();

        var distance = countDownDate - now;

        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor(
            (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
        );
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        boxDays.innerHTML = days;
        boxHour.innerHTML = hours;
        boxMinute.innerHTML = minutes;
        boxSecond.innerHTML = seconds;

        if (distance < 0) {
            clearInterval(x);
            document.getElementById("day").innerHTML = "0";
            document.getElementById("hour").innerHTML = "0";
            document.getElementById("minute").innerHTML = "0";
            document.getElementById("second").innerHTML = "0";
        }
    }, 1000);
    let audio = document.getElementById("audio");

    button.addEventListener("click", downSlide);

    function downSlide() {
        AOS.init();
        let cover = document.querySelector(".cover");
        cover.classList.toggle("downSlide");
        audio.play();
        setTimeout(() => {
            cover.style.display = "none";
        }, 1000);
    }

    //toggle Audio
    let toggleAudio = document.querySelector(".toggleAudioIcon");
    toggleAudio.addEventListener("click", function () {
        let imgToggle = document.querySelector(".toggleAudioIcon img");
        let text = document.querySelector(".toggleAudioIcon div");
        if (audio.paused) {
            audio.play();
            imgToggle.src = `${domain}/svg/simplify/pause.svg`;
            text.innerHTML = "pause";
        } else {
            audio.pause();
            imgToggle.src = `${domain}/svg/simplify/play.svg`;
            text.innerHTML = "play";
        }
    });

    let btn = document.querySelectorAll(".btn-reply");
    btn.forEach((button) => {
        button.addEventListener("click", function () {
            const headerValue = button.dataset.header;
            const bodyValue = button.dataset.body;
            const classForm = document.querySelector(".form");
            const form = document.querySelector("form");
            const id = button.dataset.id;

            Livewire.emit("setParentId", id);

            if (document.querySelector(".cardReply")) {
                document.querySelector(".cardReply").remove();
            }

            let cardReply = document.createElement("div");
            cardReply.classList.add("cardReply");

            let nameReply = document.createElement("div");
            nameReply.classList.add("nameReply");
            nameReply.innerHTML = headerValue;

            let bodyReply = document.createElement("div");
            bodyReply.classList.add("bodyReply");
            bodyReply.innerHTML = bodyValue;

            cardReply.appendChild(nameReply);
            cardReply.appendChild(bodyReply);

            classForm.insertBefore(cardReply, form);

            cardReply.scrollIntoView({ behavior: "smooth" });
        });

        // Event listener untuk menangkap tombol "Esc"
        const handleEscape = (event) => {
            if (event.key === "Escape") {
                cancelReply();
            }
        };

        const cancelReply = () => {
            if (document.querySelector(".cardReply")) {
                Livewire.emit("resetInput");
                document.querySelector(".cardReply").remove();
            }
        };

        // Tambahkan event listener saat tombol "Esc" ditekan
        document.addEventListener("keydown", handleEscape);
    });
});
