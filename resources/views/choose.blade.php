@extends('layout.games')

@push('style')
    <style>
        .rupaRupiah {
            border: 0px;
            background: transparent;
            background-image: url('/assets/rupaRupiah/logo.png');
            background-size: cover;
            height: 250px;
            width: 333px;
            border-radius: 20px;
            pointer-events: none;
            /* Nonaktifkan hover dulu */
        }

        .rupaRupiah.animate-ready {
            transition: all 0.3s ease;
            pointer-events: auto;
            /* Aktifkan hover setelah animasi */
        }

        .rupaRupiah.animate-ready:hover {
            transform: scale(1.2) translateY(-10px);
            filter: drop-shadow(0 10px 15px rgba(0, 0, 0, 0.5));
        }

        .ingatRupiah {
            border: 0px;
            background: transparent;
            background-image: url('/assets/ingatRupiah/logo.png');
            background-size: cover;
            height: 200px;
            width: 333px;
            border-radius: 20px;
            pointer-events: none;
            /* Nonaktifkan hover dulu */
        }

        .ingatRupiah.animate-ready {
            transition: all 0.3s ease;
            pointer-events: auto;
            /* Aktifkan hover setelah animasi */
        }

        .ingatRupiah.animate-ready:hover {
            transform: scale(1.2) translateY(-10px);
            filter: drop-shadow(0 10px 15px rgba(0, 0, 0, 0.5));
        }
    </style>
@endpush

@section('content')
    <div class="d-flex justify-content-center">
        <div class="row" style="gap: 150px; margin-top: 300px">
            <div class="col">
                <button id="button-choose" class="rupaRupiah"></button>
            </div>
            <div class="col">
                <button id="button-choose" class="ingatRupiah"></a>
            </div>
        </div>
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
            let buttons = document.querySelectorAll('#button-choose');
            buttons.forEach((button, index) => {
                gsap.from(button, {
                    scale: 0,
                    duration: 0.8,
                    ease: "back.inOut",
                    stagger: 0.8,
                    onComplete: function() {
                        // Tambahkan class animate-ready setelah animasi GSAP selesai
                        button.classList.add('animate-ready');
                    }
                });
            });
        });

        let user_id = {{ $user_id }}
        document.querySelector('.rupaRupiah').addEventListener('click', function() {
            window.location.href = "/RupaRupiah/" + user_id;
        });
        document.querySelector('.ingatRupiah').addEventListener('click', function() {
            window.location.href = "/IngatRupiah/" + user_id;
        });
    </script>
@endpush
