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
        background-image: url('assets/RupaRupiahQuestion.png');
        background-size: cover
    }

    .question-box {
        top: 50px;
        /* height: 300px; */
        height: max-content;
        width: 690px;
        border-radius: 10px;
        background: #cccccc;
        text-align: center;
        padding: 20px
    }

    .answer {
        height: 50px;
    }

    .timer {
        float: right;
        top: -254px;
        right: 100px;
        position: relative;
        height: max-content;

    }
</style>

<body>
    <div class="d-flex flex-column justify-content-center align-items-center gap-4 mt-5">
        <div class="question-box bg-warning text-white fw-bold d-flex flex-column justify-content-center mt-5">
            <img src="{{ asset('assets/1000.jpg') }}" class="mx-auto mb-4 mt-3" width="300px" alt="">
            <p class="text-wrap">Lorem ipsum dolor sit amet consectetur adipisicing elit. In, tempora.</p>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js"></script>
    <script>
        document.getElementById('startButton').addEventListener('click', function() {

        });
    </script>
</body>

</html>
