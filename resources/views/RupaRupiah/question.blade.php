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
    <audio id="musik" autoplay loop>
        <source src="{{ asset('assets/games-song.m4a') }}" type="audio/mpeg">
    </audio>
    <div class="d-flex w-100 d-none">
        <button id="musicController" class="p-3 rounded m-3 ms-auto btn btn-warning text-danger border border-0">
            <i id="logoMusic" class="fa-solid fa-volume-xmark" style="font-size: 25px"></i>
        </button>
    </div>

    <div class="d-flex justify-content-between align-items-start mx-auto" id="image_box"
        style="width: 100%; margin-top: 80px">
        <div id="questionNumber"
            class="fw-bold text-danger bg-warning mx-auto d-inline-flex justify-content-center align-items-center rounded"
            style="font-size: 30px; width: 100px; height: 50px;">1/10</div>
        <img class="" style="height: 200px; width:200px; border-radius: 30px" alt="">
        <div id="timer"
            class="fw-bold text-danger bg-warning mx-auto d-inline-flex justify-content-center align-items-center rounded"
            style="font-size: 30px; width: 100px; height: 50px;">30</div>
    </div>

    <div class="rounded mt-5 d-flex mx-auto px-3 py-2 border border-start-0 border-white" id="question_box"
        style="width: max-content; background-color: #ffffffb6">
        <h3 class="fw-bold text-danger">Potongan gambar pecahan uang berapakah ini?</h3>
    </div>


    <div class="row row-cols-2 gap-3 mx-auto justify-content-center mt-5 w-100" id="optionsContainer">
        <!-- Opsi akan dihasilkan di sini -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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


        var question_box = document.querySelector('#question_box');
        var timers = document.querySelector('#timers');
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
                timers, {
                    scale: 0,
                    opacity: 0,
                    duration: 1,
                    delay: 0.3,
                    ease: 'back.out'
                }
            );
        })

        const questions = [{
                images: [
                    "{{ asset('assets/uang/potongan/1000_1.jpg') }}",
                    "{{ asset('assets/uang/potongan/1000_2.jpg') }}",
                    "{{ asset('assets/uang/potongan/1000_3.jpg') }}"
                ],
                answer: "Rp.1000"
            },
            {
                images: [
                    "{{ asset('assets/uang/potongan/1000_TE00_1.jpg') }}",
                    "{{ asset('assets/uang/potongan/1000_TE00_2.jpg') }}",
                    "{{ asset('assets/uang/potongan/1000_TE00_3.jpg') }}"
                ],
                answer: "Rp.1000"
            },
            {
                images: [
                    "{{ asset('assets/uang/potongan/1000_TE16_1.jpg') }}",
                    "{{ asset('assets/uang/potongan/1000_TE16_2.jpg') }}",
                    "{{ asset('assets/uang/potongan/1000_TE16_3.jpg') }}"
                ],
                answer: "Rp.1000"
            },
            {
                images: [
                    "{{ asset('assets/uang/potongan/2000_1.jpg') }}",
                    "{{ asset('assets/uang/potongan/2000_2.jpg') }}",
                    "{{ asset('assets/uang/potongan/2000_3.jpg') }}"
                ],
                answer: "Rp.2000"
            },
            {
                images: [
                    "{{ asset('assets/uang/potongan/2000_TE09_1.jpg') }}",
                    "{{ asset('assets/uang/potongan/2000_TE09_2.jpg') }}",
                    "{{ asset('assets/uang/potongan/2000_TE09_3.jpg') }}"
                ],
                answer: "Rp.2000"
            },
            {
                images: [
                    "{{ asset('assets/uang/potongan/2000_TE16_1.jpg') }}",
                    "{{ asset('assets/uang/potongan/2000_TE16_2.jpg') }}",
                    "{{ asset('assets/uang/potongan/2000_TE16_3.jpg') }}"
                ],
                answer: "Rp.2000"
            },
            {
                images: [
                    "{{ asset('assets/uang/potongan/5000_1.jpg') }}",
                    "{{ asset('assets/uang/potongan/5000_2.jpg') }}",
                    "{{ asset('assets/uang/potongan/5000_3.jpg') }}"
                ],
                answer: "Rp.5000"
            },
            {
                images: [
                    "{{ asset('assets/uang/potongan/5000_TE01_1.jpg') }}",
                    "{{ asset('assets/uang/potongan/5000_TE01_2.jpg') }}",
                    "{{ asset('assets/uang/potongan/5000_TE01_3.jpg') }}"
                ],
                answer: "Rp.5000"
            },
            {
                images: [
                    "{{ asset('assets/uang/potongan/5000_TE16_1.jpg') }}",
                    "{{ asset('assets/uang/potongan/5000_TE16_2.jpg') }}",
                    "{{ asset('assets/uang/potongan/5000_TE16_3.jpg') }}"
                ],
                answer: "Rp.5000"
            },
            {
                images: [
                    "{{ asset('assets/uang/potongan/10000_1.jpg') }}",
                    "{{ asset('assets/uang/potongan/10000_2.jpg') }}",
                    "{{ asset('assets/uang/potongan/10000_3.jpg') }}"
                ],
                answer: "Rp.10000"
            },
            {
                images: [
                    "{{ asset('assets/uang/potongan/10000_TE05_1.jpg') }}",
                    "{{ asset('assets/uang/potongan/10000_TE05_2.jpg') }}",
                    "{{ asset('assets/uang/potongan/10000_TE05_3.jpg') }}"
                ],
                answer: "Rp.10000"
            },
            {
                images: [
                    "{{ asset('assets/uang/potongan/10000_TE16_1.jpg') }}",
                    "{{ asset('assets/uang/potongan/10000_TE16_2.jpg') }}",
                    "{{ asset('assets/uang/potongan/10000_TE16_3.jpg') }}"
                ],
                answer: "Rp.10000"
            },
            {
                images: [
                    "{{ asset('assets/uang/potongan/20000_1.jpg') }}",
                    "{{ asset('assets/uang/potongan/20000_2.jpg') }}",
                    "{{ asset('assets/uang/potongan/20000_3.jpg') }}"
                ],
                answer: "Rp.20000"
            },
            {
                images: [
                    "{{ asset('assets/uang/potongan/20000_TE04_1.jpg') }}",
                    "{{ asset('assets/uang/potongan/20000_TE04_2.jpg') }}",
                    "{{ asset('assets/uang/potongan/20000_TE04_3.jpg') }}"
                ],
                answer: "Rp.20000"
            },
            {
                images: [
                    "{{ asset('assets/uang/potongan/20000_TE16_1.jpg') }}",
                    "{{ asset('assets/uang/potongan/20000_TE16_2.jpg') }}",
                    "{{ asset('assets/uang/potongan/20000_TE16_3.jpg') }}"
                ],
                answer: "Rp.20000"
            },
            {
                images: [
                    "{{ asset('assets/uang/potongan/50000_1.jpg') }}",
                    "{{ asset('assets/uang/potongan/50000_2.jpg') }}",
                    "{{ asset('assets/uang/potongan/50000_3.jpg') }}"
                ],
                answer: "Rp.50000"
            },
            {
                images: [
                    "{{ asset('assets/uang/potongan/50000_TE05_1.jpg') }}",
                    "{{ asset('assets/uang/potongan/50000_TE05_2.jpg') }}",
                    "{{ asset('assets/uang/potongan/50000_TE05_3.jpg') }}"
                ],
                answer: "Rp.50000"
            },
            {
                images: [
                    "{{ asset('assets/uang/potongan/50000_TE16_1.jpg') }}",
                    "{{ asset('assets/uang/potongan/50000_TE16_2.jpg') }}",
                    "{{ asset('assets/uang/potongan/50000_TE16_3.jpg') }}"
                ],
                answer: "Rp.50000"
            },
            {
                images: [
                    "{{ asset('assets/uang/potongan/100000_1.jpg') }}",
                    "{{ asset('assets/uang/potongan/100000_2.jpg') }}",
                    "{{ asset('assets/uang/potongan/100000_3.jpg') }}"
                ],
                answer: "Rp.100000"
            },
            {
                images: [
                    "{{ asset('assets/uang/potongan/100000_TE04_1.jpg') }}",
                    "{{ asset('assets/uang/potongan/100000_TE04_2.jpg') }}",
                    "{{ asset('assets/uang/potongan/100000_TE04_3.jpg') }}"
                ],
                answer: "Rp.100000"
            },
            {
                images: [
                    "{{ asset('assets/uang/potongan/100000_TE14_1.jpg') }}",
                    "{{ asset('assets/uang/potongan/100000_TE14_2.jpg') }}",
                    "{{ asset('assets/uang/potongan/100000_TE14_3.jpg') }}"
                ],
                answer: "Rp.100000"
            },
            {
                images: [
                    "{{ asset('assets/uang/potongan/100000_TE16_1.jpg') }}",
                    "{{ asset('assets/uang/potongan/100000_TE16_2.jpg') }}",
                    "{{ asset('assets/uang/potongan/100000_TE16_3.jpg') }}"
                ],
                answer: "Rp.100000"
            },
        ];

        const optionsPool = ["Rp.1000", "Rp.2000", "Rp.5000", "Rp.10000", "Rp.20000", "Rp.50000", "Rp.75000", "Rp.100000"];
        let currentQuestionIndex = 0;
        let score = 0;
        const totalQuestions = 10;
        const timerDuration = 2; // 30 detik
        let timer;

        function startQuiz() {
            shuffleQuestions();
            startTimer();
            loadQuestion();
        }

        function shuffleQuestions() {
            questions.sort(() => Math.random() - 0.5);
        }

        function loadQuestion() {
            if (currentQuestionIndex < totalQuestions) {
                const currentQuestion = questions[currentQuestionIndex];
                document.querySelector('#question_box h3').innerText = "Potongan gambar pecahan uang berapakah ini?";

                // Tampilkan gambar secara acak dari pertanyaan
                const imageBox = document.querySelector('#image_box img');
                const randomImageIndex = Math.floor(Math.random() * currentQuestion.images.length);
                imageBox.src = currentQuestion.images[randomImageIndex]; // Tampilkan gambar acak

                const options = shuffleOptions(currentQuestion.answer);

                // Hapus opsi yang ada sebelumnya
                const optionsContainer = document.getElementById('optionsContainer');
                optionsContainer.innerHTML = ''; // Kosongkan kontainer opsi

                // Buat elemen opsi baru
                options.forEach((option, index) => {
                    const optionElement = document.createElement('div');
                    optionElement.className =
                        "options rounded-pill col-4 d-flex flex-row align-items-center p-2 border border-warning border-2";
                    optionElement.tabIndex = 0; // Agar bisa diakses dengan keyboard
                    optionElement.innerHTML = `
                        <div class="rounded-circle bg-warning p-2 text-center me-3 fw-bold text-danger" style="width: 40px; height: 40px">${String.fromCharCode(65 + index)}</div>
                        <span class="fw-bold text-danger mx-auto" id="optionSelect">${option}</span>
                    `;
                    optionElement.addEventListener('click', () => selectOption(
                        optionElement.querySelector('#optionSelect').innerText)); // Tambahkan event listener
                    optionsContainer.appendChild(optionElement); // Tambahkan opsi ke kontainer

                    // Tambahkan animasi GSAP untuk opsi
                    gsap.from(optionElement, {
                        scale: 0,
                        opacity: 0,
                        duration: 0.5,
                        ease: "back.out",
                        delay: index * 0.1 // Delay untuk efek stagger
                    });
                });

                // Update nomor urut pertanyaan
                document.getElementById('questionNumber').innerText = `${currentQuestionIndex + 1}/10`;

                // Tambahkan animasi GSAP untuk image_box dan question_box
                gsap.from('#image_box', {
                    scale: 0,
                    opacity: 0,
                    duration: 0.5,
                    ease: "back.out"
                });
                gsap.from('#question_box', {
                    scale: 0,
                    opacity: 0,
                    duration: 0.5,
                    delay: 0.2,
                    ease: "back.out"
                });
            } else {
                endQuiz();
            }
        }

        function shuffleOptions(correctAnswer) {
            const options = [correctAnswer];
            while (options.length < 4) {
                const randomOption = optionsPool[Math.floor(Math.random() * optionsPool.length)];
                if (!options.includes(randomOption)) {
                    options.push(randomOption);
                }
            }
            return options.sort(() => Math.random() - 0.5); // Acak opsi
        }

        function selectOption(selectedOption) {
            const currentQuestion = questions[currentQuestionIndex];

            if (selectedOption === currentQuestion.answer) {
                score++;
            }
            currentQuestionIndex++;
            console.log(score);



            // Cek apakah sudah mencapai pertanyaan ke-10
            if (currentQuestionIndex < totalQuestions) {
                loadQuestion();
            } else {
                // Jika sudah di pertanyaan ke-10, alihkan ke halaman hasil
                window.location.href = '/RupaRupiah/result/' +
                    score; // Ganti '/RupaRupiah/result/' dengan URL halaman hasil Anda
            }
        }

        function startTimer() {
            let timeLeft = timerDuration;
            document.getElementById('timer').innerText = timeLeft; // Menampilkan waktu awal
            timer = setInterval(() => {
                if (timeLeft <= 0) {
                    clearInterval(timer);
                    endQuiz();
                } else {
                    timeLeft--;
                    document.getElementById('timer').innerText = timeLeft; // Memperbarui tampilan timer
                }
            }, 1000);
        }

        function endQuiz() {
            Swal.fire({
                title: "Waktu Habis!",
                icon: "error",
                // imageUrl: '{{ asset('assets/albert-einstein.png') }}',
                // imageWidth: 200,
                // imageHeight: 200,
                confirmButtonText: "Lihat Skor",
                background: '#ffffff',
                titleColor: '#dc3545',
                allowOutsideClick: false,
                allowEscapeKey: false,
                allowEnterKey: false,
                customClass: {
                    title: 'fw-bold text-danger',
                    popup: 'swal2-title-large',
                    confirmButton: 'btn btn-warning text-danger rounded-pill fw-bold px-5'
                },
                html: '<style>.swal2-title-large .swal2-title { font-size: 38px !important; }</style>'
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    window.location.href = "/RupaRupiah/result/" + score;
                }
            });
        }

        document.addEventListener('DOMContentLoaded', startQuiz);
    </script>
</body>

</html>
