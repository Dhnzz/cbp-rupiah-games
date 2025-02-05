<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rupa Rupiah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>
<style>
    body {
        background-image: url('/assets/RupaRupiahQuestion.png');
        background-size: cover
    }

    .button-start {
        position: absolute;
        top: 75vh;
        color: #ca2424;
        font-weight: 900;
        font-size: 32px;
        width: 200px;
        height: 60px;
        z-index: 1000;
    }
    .button-start:hover{
        color:#e02020;
    }
    .button-start:active{
        color:#f32424;
    }

    .wave {
        z-index: -1;
        position: absolute;
        width: 200px;
        height: 60px;
        top: 75vh;
        border: 5px solid;
        opacity: 0;
        pointer-events: none;
    }
</style>

<body>
    <div class="d-flex justify-content-center">

        <div class="bg-white rounded-4 p-5 text-center" style="margin-top: 150px; width: 500px">
            <h1 class="fw-bold text-danger mb-4">Skor Anda</h1>
            <div class="d-flex justify-content-center align-items-center mb-5">
                <div class="bg-warning rounded-circle d-flex justify-content-center align-items-center" style="width: 200px; height: 200px">
                    <span class="fw-bold text-danger" style="font-size: 72px">100</span>
                </div>
            </div>
            <a id="startButton" href="{{route('rupa_rupiah')}}" class="btn btn-warning rounded-pill px-5 fw-bold text-danger">Main Lagi</a>
        </div>
        <div class="wave rounded-pill"></div>
        <div class="wave rounded-pill"></div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js"></script>
    <script>
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
