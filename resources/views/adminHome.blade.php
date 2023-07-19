@extends('layouts.app')

@section('title')
    Kelurahan
@endsection



@section('content')
    <!-- Main content -->
    <section>
        <div class="container mt-4">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0">Kelurahan Data</h4>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-end mb-3">
                                <a href="{{ route('kelurahan.create') }}" class="btn btn-outline-primary">Input Data</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead class="table-primary text-nowrap">
                                        <tr>
                                            <th style="width: 5%">No</th>
                                            <th style="width: 25%">Kelurahan</th>
                                            <th style="width: 25%">Kecamatan</th>
                                            <th style="width: 25%">Kota</th>
                                            <th style="width: 20%">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kelurahan as $key => $data)
                                            <tr class="text-nowrap">
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $data->kelurahan }}</td>
                                                <td>{{ $data->kecamatan }}</td>
                                                <td>{{ $data->kota }}</td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <a href="{{ route('kelurahan.edit', $data->id) }}"
                                                            class="btn btn-warning btn-sm mr-2" style="margin-right:5px;">Edit</a>
                                                        <form action="{{ route('kelurahan.destroy', $data->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                                                        </form>
                                                    </div>
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
