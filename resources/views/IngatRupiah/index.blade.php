@extends('layout.games')
@push('style')
    <style>
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
@endpush

@section('content')
    <div class="d-flex justify-content-center w-100" style="z-index: 100; position: fixed; margin-top:200px">
        <img src="{{ asset('assets/ingatRupiah/logo.png') }}" class="mx-auto" alt="">
    </div>
    <div class="d-flex justify-content-center">
        <a id="startButton" href="{{ route('ingat_rupiah.question', $user_id) }}"
            class="btn btn-warning d-inline rounded-pill px-5 button-start">START</a>
        <div class="wave rounded-pill"></div>
        <div class="wave rounded-pill"></div>
    </div>
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
@endpush
