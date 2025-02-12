@extends('Dashboard.layout.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Detail Pemain</h3>

            <div class="row align-items-center g-2 mb-3">
                <div class="col-3">Nama</div>
                <div class="col-1">:</div>
                <div class="col-auto">{{$pemain->name}}</div>
            </div>
            <div class="row align-items-center g-2 mb-3">
                <div class="col-3">Umur</div>
                <div class="col-1">:</div>
                <div class="col-auto">{{$pemain->age}} Tahun</div>
            </div>
            <div class="row align-items-center g-2 mb-3">
                <div class="col-3">No. Telp</div>
                <div class="col-1">:</div>
                <div class="col-auto">{{$pemain->phone}}</div>
            </div>
            <div class="row align-items-center g-2 mb-3">
                <div class="col-3">Alamat</div>
                <div class="col-1">:</div>
                <div class="col-auto">{{$pemain->address}}</div>
            </div>
            <div class="row align-items-center g-2 mb-3">
                <div class="col-3">Jenis Kelamin</div>
                <div class="col-1">:</div>
                <div class="col-auto">
                    @if ($pemain->gender == 1)
                        Pria
                    @else
                        Wanita
                    @endif
                </div>
            </div>
            <div class="row align-items-center g-2 mb-3">
                <div class="col-3">Game Yang Dimainkan</div>
                <div class="col-1">:</div>
                <div class="col-auto">{{$pemain->game}}</div>
            </div>
            <div class="row align-items-center g-2 mb-3">
                <div class="col-3">Skor</div>
                <div class="col-1">:</div>
                <div class="col-auto">{{$pemain->skor}}</div>
            </div>

            <a class="btn btn-sm btn-danger" href="{{route('pemain.index')}}">
                <i class="bi bi-arrow-left"></i> Kembali
            </a>

        </div>
    </div>
@endsection
