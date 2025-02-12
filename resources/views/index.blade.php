@extends('layout.start')

@push('style')
    <style>
        .pixel-button {
            text-decoration: none;
            margin-top: 500px;
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
            z-index: 100;
        }

        .pixel-button:hover {
            transform: scale(1.1);
        }

        .pixel-button:active {
            box-shadow: 0 2px #005f7a, 0 -2px #005f7a inset;
            transform: scale(0.95);
        }
    </style>
@endpush

@section('content')
    <div class="d-flex justify-content-between align-items-center mx-auto" style="width: 90vw; position: fixed; left: 100px">
        <img src="{{asset('assets/BI_logo.png')}}" width="250px" style="height: max-content" alt="">
        <img src="{{asset('assets/CBP_blue_logo.png')}}" width="300px" alt="">
    </div>
    <div class="d-flex align-items-center bg-bunga">
        <div class="bunga-kiri">
            <img src="{{ asset('assets/bunga-bg.png') }}" alt="" style="width: 800px; position: fixed; top: 170px; left: -400px">
        </div>
        <div class="bunga-tengah">
            <img src="{{ asset('assets/bunga-bg.png') }}" alt="" style="width: 1200px; position: fixed; top: 100px; left: 7%; transform: translateX(-50%)">
        </div>
        <div class="bunga-kanan">
            <img src="{{ asset('assets/bunga-bg.png') }}" alt="" style="width: 800px; position: fixed; top: 170px; right: -400px">
        </div>
    </div>
    <img src="{{asset('assets/Title-logo.png')}}" style="position: fixed" alt="">
    <div class="d-flex">
        <a href="{{ route('inputBio') }}" class="pixel-button rounded-pill fw-bold">Mulai</a>
    </div>
    <img src="{{asset('assets/pahlawan-bg.png')}}" width="800px" style="position: fixed; top: 350px; left:290px" alt="">
@endsection

@push('script')
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
@endpush
