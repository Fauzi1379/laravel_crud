@extends('layout/main')

@section('title','data kendaraan')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">daftar kendaraan</h1>
            <a href="/mobils/create"class="btn btn-primary my-3">tambah data kendaraan</a>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">NAMA KENDARAAN</th>
                        <th scope="col">NOMOR POLISI</th>
                        <th scope="col">WARNA</th>
                        <th scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                @foreach( $mobils as $mbl )
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $mbl->nama_kendarann }}</td>
                        <td>{{ $mbl->no_polisi }}</td>
                        <td>{{ $mbl->warna }}</td>
                        <td>
                            <a href="/mobils/{{$mbl->id}}" class="badge badge-success">detail</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
