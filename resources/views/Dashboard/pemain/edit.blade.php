@extends('Dashboard.layout.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Detail Pemain</h3>

            <form action="{{ route('pemain.update', $pemain->id) }}" method="post">
                @csrf
                @method('PUT')

                <div class="row align-items-center g-2 mb-3">
                    <div class="col-3">Nama</div>
                    <div class="col-auto">:</div>
                    <div class="col-5">
                        <input type="text" value="{{ $pemain->name }}" name="name"
                            class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row align-items-center g-2 mb-3">
                    <div class="col-3">Umur</div>
                    <div class="col-auto">:</div>
                    <div class="col-5">
                        <input type="number" value="{{ $pemain->age }}" name="age"
                            class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row align-items-center g-2 mb-3">
                    <div class="col-3">No. Telp</div>
                    <div class="col-auto">:</div>
                    <div class="col-5">
                        <input type="text" value="{{ $pemain->phone }}" name="phone"
                            class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row align-items-start g-2 mb-3">
                    <div class="col-3">Alamat</div>
                    <div class="col-auto">:</div>
                    <div class="col-5">
                        <textarea name="address" cols="30" rows="5" class="form-control form-control-sm">
                            {{ $pemain->address }}
                        </textarea>
                    </div>
                </div>
                <div class="row align-items-center g-2 mb-3">
                    <div class="col-3">Jenis Kelamin</div>
                    <div class="col-auto">:</div>
                    <div class="col-5">
                        <select name="gender" id="" class="form-control form-control-sm">
                            <option value="1" {{ $pemain->gender == 1 ? 'selected' : '' }}>Pria</option>
                            <option value="0" {{ $pemain->gender == 0 ? 'selected' : '' }}>Wanita</option>
                        </select>
                    </div>
                </div>
                <div class="row align-items-center g-2 mb-3">
                    <div class="col-3">Game Yang Dimainkan</div>
                    <div class="col-auto">:</div>
                    <div class="col-5">
                        <select name="game" id="" class="form-control form-control-sm">
                            <option value="Rupa Rupiah" {{ $pemain->game == 'Rupa Rupiah' ? 'selected' : '' }}>Rupa Rupiah
                            </option>
                            <option value="Ingat Rupiah" {{ $pemain->game == 'Ingat Rupiah' ? 'selected' : '' }}>Ingat
                                Rupiah</option>
                        </select>
                    </div>
                </div>
                <div class="row align-items-center g-2 mb-5">
                    <div class="col-3">Skor</div>
                    <div class="col-auto">:</div>
                    <div class="col-5">
                        <input type="text" value="{{ $pemain->skor }}" name="skor"
                            class="form-control form-control-sm">
                    </div>
                </div>

                <a class="btn btn-sm btn-danger" href="{{ route('pemain.index') }}">
                    <i class="bi bi-arrow-left"></i> Kembali
                </a>

                <button type="submit" class="btn btn-sm btn-primary">
                    <i class="bi bi-floppy"></i> Simpan
                </button>

            </form>
        </div>
    </div>
@endsection
