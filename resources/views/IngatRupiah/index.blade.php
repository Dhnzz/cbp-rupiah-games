<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ingat Rupiah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- FontAwesome 6.2.0 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    body {
        background-image: url('/assets/IngatRupiahKertas.png');
        background-size: cover
    }

    .button-start {
        position: absolute;
        top: 63vh;
        color: #ca2424;
        font-weight: 900;
        font-size: 32px;
        width: 200px;
        height: 60px;
        z-index: 1000;
    }

    .button-start:hover {
        color: #e02020;
    }

    .button-start:active {
        color: #f32424;
    }

    .wave {
        z-index: -1;
        position: absolute;
        width: 200px;
        height: 60px;
        top: 63vh;
        border: 5px solid;
        opacity: 0;
        pointer-events: none;
    }
</style>

<body>
    <audio id="musik" autoplay loop>
        <source src="{{ asset('assets/games-song.m4a') }}" type="audio/mpeg">
    </audio>
    <div class="d-flex w-100 d-none">
        <button id="musicController" class="p-3 rounded m-3 ms-auto btn btn-warning text-danger border border-0">
            <i id="logoMusic" class="fa-solid fa-volume-xmark" style="font-size: 25px"></i>
        </button>
    </div>
    <div class="d-flex justify-content-center">
        <a id="startButton" href="{{ route('ingat_rupiah.question') }}"
            class="btn btn-warning d-inline rounded-pill px-5 button-start">START</a>
        <div class="wave rounded-pill"></div>
        <div class="wave rounded-pill"></div>
    </div>


    <!-- (Optional) Use CSS or JS implementation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
        integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js"></script>
    <script>
        document.getElementById("musicController").addEventListener("click", () => {
            if (document.getElementById('musik').paused) {
                document.getElementById('logoMusic').classList.remove('fa-volume-xmark');
                document.getElementById('logoMusic').classList.add('fa-volume-high');
                document.getElementById('musik').play();
            } else {
                document.getElementById('logoMusic').classList.remove('fa-volume-high');
                document.getElementById('logoMusic').classList.add('fa-volume-xmark');
                document.getElementById('musik').pause();
            } // Play/Pause audio when the button is clicked.
        });
        document.addEventListener('DOMContentLoaded', () => {
            document.getElementById('musik').play();
        })
        document.getElementById('startButton').addEventListener('click', function() {
            gsap.to('#startButton', {
                scale: 1.1,
                duration: 0.2, // Durasi animasi memperbesar
                yoyo: true, // Kembalikan ke ukuran awal
                repeat: 1, // Ulangi sekali
                ease: "power1.inOut", // Jenis easing
            });
            document.querySelectorAll('.wave').forEach((wave, index) => {
                gsap.fromTo(
                    wave, {
                        scale: 0,
                        opacity: 1,
                        color: "#ca2424"
                    }, {
                        scale: 3,
                        opacity: 0,
                        duration: 0.8,
                        delay: index * 0.1, // Memberikan jeda antara gelombang
                        ease: "power1.out",
                    }
                );
            });
        });
    </script>
</body>

</html>
