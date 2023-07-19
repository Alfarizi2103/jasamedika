@extends('layouts.app')

@section('title')
    Kelurahan
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
                        <a href="{{ route('home') }}" class="btn btn-secondary">Home</a>
                        <a href="{{ route('kelurahan.create') }}" class="btn btn-outline-secondary">Input Data</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="table-dark text-nowrap">
                                <tr>
                                    <th style="width: 5%">No</th>
                                    <th style="width: 30%">Kelurahan</th>
                                    <th style="width: 30%">Kecamatan</th>
                                    <th style="width: 30%">Kota</th>
                                    <th style="width: 5%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kelurahan as $key => $data)
                                    <tr class="text-center text-nowrap">
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $data->kelurahan }}</td>
                                        <td>{{ $data->kecamatan }}</td>
                                        <td>{{ $data->kota }}</td>
                                        <td><a href="{{ route('kelurahan.edit', $data->id) }}"
                                                class="btn btn-warning">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
