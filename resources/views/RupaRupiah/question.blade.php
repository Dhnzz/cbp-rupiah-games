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

    .options {
        background-color: #ffffffb6;
        text-decoration: none;
        cursor: pointer;
    }

    .options:hover {
        background-color: #ffffffe8;
        transition: all 0.3s ease-in-out;
    }

    .options:focus {
        box-shadow: 2px 2px 8px 1px black;
        background-color: #ffffffcb;
        outline: none;
        transition: all 0.1s ease-in-out;
    }
</style>

<body>

    <div class="d-flex justify-content-center align-items-end mx-auto" id="image_box"
        style="width: 50%; margin-top: 150px">
        <img src="{{ asset('assets/1000.jpg') }}" class="" style="height: 200px; width:200px; border-radius: 30px"
            alt="">
    </div>
    <h1 class="fw-bold" id="timer" style="color: #dc3545; position: absolute; left:69vw; top: 39vh">00:30</h1>

    <div class="rounded mt-5 d-flex mx-auto px-3 py-2 border border-start-0 border-white" id="question_box"
        style="width: max-content; background-color: #ffffffb6">
        <h3 class="fw-bold text-danger">Potongan gambar pecahan uang berapakah ini?</h3>
    </div>

    <div class="row row-cols-2 gap-3 mx-auto justify-content-center mt-5 w-100">
        <div class="col-4">
            <a tabindex="0" class="options rounded-pill w-100 d-flex flex-row align-items-center p-2 border border-warning border-2">
                <div class="rounded-circle bg-warning p-2 text-center me-3 fw-bold text-danger"
                    style="width: 40px; height: 40px">A</div>
                <span class="fw-bold text-danger mx-auto">Rp.100.000</span>
            </a>
        </div>
        <div class="col-4">
            <a tabindex="0" class="options rounded-pill w-100 d-flex flex-row align-items-center p-2 border border-warning border-2">
                <div class="rounded-circle bg-warning p-2 text-center me-3 fw-bold text-danger"
                    style="width: 40px; height: 40px">B</div>
                <span class="fw-bold text-danger mx-auto">Rp.100.000</span>
            </a>
        </div>
        <div class="col-4">
            <a tabindex="0" class="options rounded-pill w-100 d-flex flex-row align-items-center p-2 border border-warning border-2">
                <div class="rounded-circle bg-warning p-2 text-center me-3 fw-bold text-danger"
                    style="width: 40px; height: 40px">C</div>
                <span class="fw-bold text-danger mx-auto">Rp.100.000</span>
            </a>
        </div>
        <div class="col-4">
            <a tabindex="0" class="options rounded-pill w-100 d-flex flex-row align-items-center p-2 border border-warning border-2">
                <div class="rounded-circle bg-warning p-2 text-center me-3 fw-bold text-danger"
                    style="width: 40px; height: 40px">D</div>
                <span class="fw-bold text-danger mx-auto">Rp.100.000</span>
            </a>
        </div>
    </div>









    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js"></script>
    <script>
        var question_box = document.querySelector('#question_box');
        var timer = document.querySelector('#timer');
        var options = document.querySelectorAll('.options');

        document.addEventListener('DOMContentLoaded', () => {
            gsap.from(
                image_box, {
                    scale: 0,
                    opacity: 0,
                    duration: 2,
                    ease: 'back.out'
                }
            );
            gsap.from(
                question_box, {
                    scale: 0,
                    opacity: 0,
                    duration: 1,
                    delay: 0.2,
                    ease: 'back.out'
                }
            );
            gsap.from(
                timer, {
                    scale: 0,
                    opacity: 0,
                    duration: 1,
                    delay: 0.3,
                    ease: 'back.out'
                }
            );

            options.forEach((option) => {
                gsap.fromTo(
                    options, {
                        scale: 0,
                        opacity: 0,
                    }, {
                        scale: 1,
                        opacity: 1,
                        duration: 0.8,
                        stagger: 0.2,
                        ease: 'back.out'
                    }
                )
            })
        })
    </script>
</body>

</html>
