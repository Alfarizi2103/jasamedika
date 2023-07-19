@extends('layouts.app')

@section('title')
    Pasien Input
@endsection

@section('content')
    <!-- Main content -->
    <section>
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h3 class="card-title mb-0">Pasien</h3>
                        </div>
                        <form method="POST" enctype="multipart/form-data" action="{{ route('pasien.store') }}">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nama">Nama Pasien</label>
                                            <input type="text" name="nama"
                                                class="form-control @error('nama') is-invalid @enderror" id="nama"
                                                placeholder="Nama Pasien" autocomplete="off" value="{{ old('nama') }}"
                                                required>
                                            @error('nama')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="tgl_lahir">Tanggal Lahir</label>
                                        <div class="form-group">
                                            <input type="date" name="tgl_lahir"
                                                class="form-control @error('tgl_lahir') is-invalid @enderror"
                                                id="tgl_lahir" placeholder="Nomor Handphone"
                                                value="{{ old('tgl_lahir') }}" required>
                                            @error('tgl_lahir')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <div class="form-group">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="jenis_kelamin"
                                                    id="jenis_kelamin1" value="Laki-laki"
                                                    {{ old('jenis_kelamin') == 'Laki-laki' ? 'checked=' . '"' . 'checked' . '"' : '' }}
                                                    required>
                                                <label class="form-check-label" for="jenis_kelamin1">
                                                    Laki-laki
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="jenis_kelamin"
                                                    id="jenis_kelamin2" value="Perempuan"
                                                    {{ old('jenis_kelamin') == 'Perempuan' ? 'checked=' . '"' . 'checked' . '"' : '' }}>
                                                <label class="form-check-label" for="jenis_kelamin2">
                                                    Perempuan
                                                </label>
                                            </div>
                                            @error('jenis_kelamin')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="no_telp">Nomor Handphone</label>
                                            <input type="text" name="no_telp"
                                                class="form-control @error('no_telp') is-invalid @enderror" id="no_telp"
                                                placeholder="Nomor Handphone" autocomplete="off"
                                                value="{{ old('no_telp') }}" required>
                                            @error('no_telp')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" name="alamat"
                                                class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                                                placeholder="Alamat" autocomplete="off" value="{{ old('alamat') }}"
                                                required>
                                            @error('alamat')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="kelurahan">Kelurahan</label>
                                            <select class="form-select @error('kelurahan') is-invalid @enderror"
                                                aria-label="Default select example" id="kelurahan" name="kelurahan"
                                                required>
                                                <option selected disabled value="">Pilih</option>
                                                @foreach ($kelurahan as $data)
                                                    <option value="{{ $data->id }}"
                                                        {{ old('kelurahan') == $data->id ? 'selected' : '' }}>
                                                        {{ $data->kelurahan }}</option>
                                                @endforeach
                                            </select>
                                            @error('kelurahan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="rt">RT</label>
                                            <input type="text" name="rt" class="form-control @error('rt') is-invalid @enderror"
                                                id="rt" placeholder="RT" autocomplete="off" value="{{ old('rt') }}"
                                                required>
                                            @error('rt')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="rw">RW</label>
                                            <input type="text" name="rw" class="form-control @error('rw') is-invalid @enderror"
                                                id="rw" placeholder="RW" autocomplete="off" value="{{ old('rw') }}"
                                                required>
                                            @error('rw')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <a href="{{ route('operator.home') }}" class="btn btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
