<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ingat Rupiah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>
<style>
    body {
        background-image: url('/assets/IngatRupiahQuestion.png');
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
        top: 75vh;
        border: 5px solid;
        opacity: 0;
        pointer-events: none;
    }
</style>

<body>
    <div class="d-flex justify-content-center">

        <div id="scoreBox" class="p-5 text-center" style="margin-top: 120px; width: 500px; height: 500px">
            <h1 class="fw-bold text-danger mb-4">Skor Anda</h1>
            <div class="d-flex justify-content-center align-items-center mb-5">
                <div class="bg-warning rounded-circle d-flex justify-content-center align-items-center"
                    style="width: 200px; height: 200px">
                    <span class="fw-bold text-danger" style="font-size: 72px">{{ $hasil }}</span>
                </div>
            </div>
            <h3 class="fw-bold text-danger">{{$affirmation}}</h3>
            <h3 class="bg-warning mb-5 p-3 fw-bold text-danger mx-auto rounded" style="width: max-content">{{$poin}}</h3>
            <a id="startButton" href="{{ route('start') }}"
                class="btn btn-warning rounded-pill px-5 fw-bold text-danger" style="font-size: 32px">Main Lagi</a>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js"></script>
    <script>
        let scoreBox = document.getElementById('scoreBox');

        document.addEventListener('DOMContentLoaded', () => {
            gsap.fromTo(scoreBox, {
                opacity: 0,
                scale: 0,
            }, {
                opacity: 1,
                scale: 1,

                duration: 1,
                ease: 'elastic.out(0.7, 0.6)'
            });
        })
    </script>
</body>

</html>
