@extends('layout/main')

@section('container')
    <div class="container mt-5">
        <h1>Daftar Siswa</h1>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">NIK</th>
                <th scope="col">NAMA</th>
                <th scope="col">ALAMAT</th>
                <th scope="col">Nama Kendaraan</th>
                <th scope="col">No polisi</th>
                <th scope="col">warna</th>
                <th scope="col">Keterangan</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $t)
              <tr> 
              <th scope="row">{{$t->id}}</th>
              <td>{{$t->nik}}</td>
              <td>{{$t->nama}}</td>
              <td>{{$t->alamat}}</td>
              <td>{{$t->mobil->nama_kendarann}}</td>
              <td>{{$t->mobil->no_polisi}}</td>
              <td>{{$t->mobil->warna}}</td>
              <td>
                <a href="/teachers/{{$t->id}}" class="btn btn-success">detail</a>
              </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <a href="/teachers/create"  type="button" class="btn btn-primary">Tambah Siswa</a>
    </div>
@endsection