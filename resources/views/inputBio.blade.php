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
@endpush

@section('content')
    <div class="d-flex justify-content-between align-items-center mx-auto" style="width: 90vw; position: fixed; left: 100px">
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

    <div class="card mx-auto"
        style="position: relative; top: 100px; width: 75vw; height: 75vh; background: transparent; border:0px; box-shadow: 0 0 20px rgba(0,0,0,0.2);">
        <div class="card-body pt-5">
            <div class="d-flex flex-column justify-content-center w-75 mx-auto">
                <h3 class="text-center w-100 fw-bold text-danger mb-5">Biodata Pemain</h3>
                <form action="{{ route('input') }}" method="post">
                    @csrf
                    @method('POST')

                    <div class="row justify-content-center">
                        <div class="col-5 mb-3">
                            <label for="exampleInputEmail1" class="form-label fw-bold text-danger">Nama</label>
                            <input type="text" name="name"
                                class="form-control rounded-pill bg-warning text-danger fw-bold border border-warning"
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="col-5 mb-3">
                            <label for="exampleInputEmail1" class="form-label fw-bold text-danger">Nomor Telepon</label>
                            <input type="number" name="phone"
                                class="form-control rounded-pill bg-warning text-danger fw-bold border border-warning"
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-10 mb-3">
                            <label for="exampleInputEmail1" class="form-label fw-bold text-danger">Alamat</label>
                            <textarea name="address" id="" cols="" rows="5"
                                class="form-control bg-warning text-danger fw-bold border border-warning"></textarea>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-5 mb-3">
                            <label for="exampleInputEmail1" class="form-label fw-bold text-danger">Umur</label>
                            <input type="number" name="age"
                                class="form-control rounded-pill bg-warning text-danger fw-bold border border-warning"
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="col-5 mb-3">
                            <label for="exampleInputEmail1" class="form-label fw-bold text-danger">Jenis Kelamin</label>
                            <select name="gender" id=""
                                class="form-control rounded-pill bg-warning text-danger fw-bold border border-warning">
                                <option value="">Jenis Kelamin</option>
                                <option value="1">Pria</option>
                                <option value="0">Wanita</option>
                            </select>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-10">
                            <input type="submit" value="Submit"
                                class="btn btn-warning fw-bold text-danger border border-warning block w-100">
                        </div>
                    </div>
                </form>
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
    </script>
@endpush
