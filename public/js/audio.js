$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
        }
    });
    let url = window.location.href;
    let idSong = url.substring(url.lastIndexOf('-') + 1, url.lastIndexOf('.'));
    let audio = document.getElementById("audioArea");
    let is_bought = false;
    let lastSecondSent = 0;
    let playing = true;

    audio.onpause = function () {
        playing = false;
        let count = Math.abs(parseInt(audio.played.end(0)) - lastSecondSent);
        payment(count);
    };

    audio.onplay = function () {
        playing = true;
    };

    audio.onended = function endAudio() {
        if (is_bought === false) {
            $.ajax({
                url: '/payment',
                type: 'POST',
                data: {
                    id: idSong
                }
            });
        }
        clearInterval(paidForFive);
        audio.loop = true;
        audio.play();
    };

    function payment(count = 5) {
        console.log("count: "+ count);
        console.log("last:"+lastSecondSent);
        lastSecondSent = audio.currentTime;
        $.ajax({
            url: '/payment',
            type: 'PUT',
            data: {
                id: idSong,
                time: count,
                duration: parseInt(audio.duration)
            },
            success: (data) => {
                if (data.hasOwnProperty("is_bought")) {
                    if (data.is_bought) {
                        is_bought = true;
                        playing = false;
                        clearInterval(paidForFive);
                    }
                }

            }
        });
    }

    let paidForFive = setInterval(function () {
        if (playing) {
            payment();
        }
    }, 5000);
});