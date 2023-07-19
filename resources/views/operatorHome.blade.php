@extends('layouts.app')

@section('content')
    <!-- Main content -->
    <section>
        <div class="container mt-4">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                    <div class="card-header bg-primary text-white">
                            <h4 class="mb-0">Pasien Data</h4>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-end mb-3">
                                <a href="{{ route('pasien.create') }}" class="btn btn-outline-primary">Input Data</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead class="table-primary text-nowrap">
                                        <tr>
                                            <th style="width: 10%">ID Pasien</th>
                                            <th style="width: 20%">Nama</th>
                                            <th style="width: 25%">Alamat</th>
                                            <th style="width: 10%">No Telp</th>
                                            <th style="width: 10%">Tanggal Lahir</th>
                                            <th style="width: 10%">Jenis Kelamin</th>
                                            <th style="width: 5%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pasien as $key => $data)
                                            <tr class="text-center text-nowrap">
                                                <td>{{ $data->id_pasien }}</td>
                                                <td>{{ $data->nama }}</td>
                                                <td class="text-wrap">{{ $data->alamat }}, RT {{ $data->rt }}, RW
                                                    {{ $data->rw }},
                                                    {{ $data->kelurahan->first()->kelurahan }},
                                                    {{ $data->kelurahan->first()->kecamatan }},
                                                    {{ $data->kelurahan->first()->kota }}</td>
                                                <td>{{ $data->no_telp }}</td>
                                                <td>{{ $data->tgl_lahir }}</td>
                                                <td>{{ $data->jenis_kelamin }}</td>
                                                <td>
                                                    <a href="{{ route('kartu.pasien', $data->id_pasien) }}" class="btn btn-warning btn-sm" style="margin-right:5px;" target="_blank">Kartu</a>
                                                        <form action="{{ route('pasien.destroy', $data->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                                                        </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
