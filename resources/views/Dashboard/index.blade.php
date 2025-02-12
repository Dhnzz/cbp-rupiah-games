@extends('Dashboard.layout.app')
@section('content')
    <div class="row row-cols-2 justify-content-center align-items-center g-2">
        <div class="col">
            <div class="card info-card sales-card">

                <div class="card-body">
                    <h5 class="card-title">Jumlah Pemain Rupa Rupiah</h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center text-success">
                            <i class="bi bi-puzzle"></i>
                        </div>
                        <div class="ps-3">
                            <h6>{{$rupaRupiah}}</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col">
            <div class="card info-card sales-card">

                <div class="card-body">
                    <h5 class="card-title">Jumlah Pemain Ingat Rupiah</h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center text-danger">
                            <i class="bi bi-puzzle"></i>
                        </div>
                        <div class="ps-3">
                            <h6>{{$ingatRupiah}}</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col">
            <div class="card info-card sales-card">

                <div class="card-body">
                    <h5 class="card-title">Jumlah Total Pemain</h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center text-danger">
                            <i class="bi bi-person"></i>
                        </div>
                        <div class="ps-3">
                            <h6>{{$pemain}}</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
