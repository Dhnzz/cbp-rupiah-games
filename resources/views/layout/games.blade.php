<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pilih Games</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- FontAwesome 6.2.0 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            width: 100vw;
            height: 100vh;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-image: url('/assets/bg-gradient.png');
            background-size: cover
        }

        .bg-bunga {
            width: 100vw;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            pointer-events: none;
        }

        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .bunga-kiri img,
        .bunga-tengah img,
        .bunga-kanan img {
            animation: rotate 20s linear infinite;
        }

        .bunga-tengah img {
            animation-duration: 25s;
        }
    </style>
    @stack('style')
</head>

<body>
    <audio id="musik" autoplay loop>
        <source src="{{ asset('assets/games-song.m4a') }}" type="audio/mpeg">
    </audio>
    <div class="d-flex w-100 d-none">
        <button id="musicController" class="p-3 rounded m-3 ms-auto btn btn-warning text-danger border border-0">
            <i id="logoMusic" class="fa-solid fa-volume-xmark" style="font-size: 25px"></i>
        </button>
    </div>
    <div class="d-flex justify-content-between align-items-start mx-auto"
        style="width: 90vw; position: fixed; left: 100px; top:10px">
        <img src="{{ asset('assets/BI_logo.png') }}" width="250px" style="height: max-content" alt="">
        <img src="{{ asset('assets/CBP_blue_logo.png') }}" width="300px" alt="">
    </div>
    <div class="d-flex align-items-center bg-bunga">
        <div class="bunga-kiri">
            <img src="{{ asset('assets/bunga-bg.png') }}" alt=""
                style="width: 800px; position: fixed; top: 170px; left: -400px">
        </div>
        <div class="bunga-tengah">
            <img src="{{ asset('assets/bunga-bg.png') }}" alt=""
                style="width: 1200px; position: fixed; top: 100px; left: 7%; transform: translateX(-50%)">
        </div>
        <div class="bunga-kanan">
            <img src="{{ asset('assets/bunga-bg.png') }}" alt=""
                style="width: 800px; position: fixed; top: 170px; right: -400px">
        </div>
    </div>
    @yield('content')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
        integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @stack('script')
</body>

</html>
