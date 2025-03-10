ndex<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rupa Rupiah</title>
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
        background-image: url('assets/TitleScreen.png');
        background-size: cover
    }

    .pixel-button {
        text-decoration: none;
        margin-top: 450px;
        margin-left: 619px;
        height: 52px;
        width: 130px;
        font-family: 'Press Start 2P', sans-serif;
        /* Font pixelated */
        font-size: 16px;
        color: white;
        background-color: #8b0000;
        /* Warna merah */
        padding: 10px 20px;
        box-shadow: 0 4px #005f7a, 0 -4px #005f7a inset;
        text-align: center;
        text-transform: uppercase;
        cursor: pointer;
        transition: transform 0.2s ease-in-out;
    }

    .pixel-button:hover {
        transform: scale(1.1);
    }

    .pixel-button:active {
        box-shadow: 0 2px #005f7a, 0 -2px #005f7a inset;
        transform: scale(0.95);
    }
</style>

<body>
    <audio id="musik" autoplay loop>
        <source src="{{ asset('assets/start-song.mp3') }}" type="audio/mpeg">
    </audio>
    <div class="d-flex w-100 d-none">
        <button id="musicController" class="p-3 rounded m-3 ms-auto btn btn-warning text-danger border border-0">
            <i id="logoMusic" class="fa-solid fa-volume-xmark" style="font-size: 25px"></i>
        </button>
    </div>
    <div class="d-flex">
        <a href="{{ route('choose') }}" class="pixel-button rounded-pill fw-bold">START</a>
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
    </script>
</body>

</html>
