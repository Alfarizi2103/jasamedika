@extends('layouts.app')

@section('title')
    Kelurahan Edit
@endsection

@push('css')
@endpush

@section('content')
    <!-- Main content -->
    <section>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Kelurahan</h3>
                    </div>
                    <form method="POST" enctype="multipart/form-data" action="{{ route('kelurahan.update', $data->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="kelurahan">Kelurahan</label>
                                        <input type="text" name="kelurahan"
                                            class="form-control @error('kelurahan') is-invalid @enderror" id="kelurahan"
                                            placeholder="Nama Kelurahan" autocomplete="off" value="{{ $data->kelurahan }}"
                                            required>
                                        @error('kelurahan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="kecamatan">Kecamatan</label>
                                        <input type="text" name="kecamatan"
                                            class="form-control @error('kecamatan') is-invalid @enderror" id="kecamatan"
                                            placeholder="Nama Kecamatan" autocomplete="off" value="{{ $data->kecamatan }}"
                                            required>
                                        @error('kecamatan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="kota">Kota</label>
                                        <input type="text" name="kota"
                                            class="form-control @error('kota') is-invalid @enderror" id="kota"
                                            placeholder="Nama Kota" autocomplete="off" value="{{ $data->kota }}" required>
                                        @error('kota')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('admin.home') }}" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
