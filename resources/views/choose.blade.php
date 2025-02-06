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
        background-image: url('assets/choose.png');
        background-size: cover
    }

    .rupaRupiah {
        border: 0px;
        background: transparent;
        background-image: url('assets/rupaRupiah/logo.png');
        background-size: cover;
        height: 250px;
        width: 333px;
        border-radius: 20px;
    }

    .ingatRupiah {
        border: 0px;
        background: transparent;
        background-image: url('assets/ingatRupiah/logo.png');
        background-size: cover;
        height: 200px;
        width: 333px;
        border-radius: 20px;
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
    <div class="d-flex justify-content-center" style="margin-top: 200px">
        <div class="row" style="gap: 150px">
            <div class="col">
                <button href="{{ route('rupa_rupiah') }}" class="rupaRupiah"></button>
            </div>
            <div class="col">
                <button href="{{ route('ingat_rupiah') }}" class="ingatRupiah"></a>
            </div>
        </div>
    </div>
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


        document.querySelector('.rupaRupiah').addEventListener('click', function() {
            window.location.href = "{{ route('rupa_rupiah') }}";
        });
        document.querySelector('.ingatRupiah').addEventListener('click', function() {
            window.location.href = "{{ route('ingat_rupiah') }}";
        });
    </script>
</body>

</html>
