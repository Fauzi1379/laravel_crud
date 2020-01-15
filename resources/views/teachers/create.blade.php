@extends('layout/main')

@section('title','Tambah detail pengajar')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Isi form dibawah ini</h1>

            <div class="container mt-5">
        <div class="col-8">
            <h1>Tambah Pengajar</h1>
            <form method="post" action="/teachers">
                @csrf
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" class="form-control" id="nik" placeholder="Masukkan NIK" name="nik">
                </div>
                <div class="form-group">
                    <label for="nama">NAMA</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
                </div>
                <div class="form-group">
                    <label for="Alamat">Alamat</label>
                    <textarea type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat"></textarea>
                </div>
                <button class="btn btn-primary" type="submit">Simpan</button>
            </form>
        </div>
    </div>
            </div>
        </div>
    </div>
</div>
@endsection
