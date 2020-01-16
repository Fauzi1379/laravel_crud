@extends('layout/main')

@section('title','Ubah data pengajar')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form ubah data</h1>

            <div class="container mt-5">
        <div class="col-8">
            <h1>Tambah Pengajar</h1>
            <form method="post" action="/teachers/{{ $teacher->id }}">
            @method('patch')
                @csrf
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" placeholder="Masukkan NIK" name="nik" value="{{ $teacher->nik}}">
                    @error('nik')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama">NAMA</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ $teacher->nama}}">
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat" value="{{ $teacher->alamat}}"></input>
                </div>
                <button class="btn btn-primary" type="submit">ubah data</button>
            </form>
        </div>
    </div>
            </div>
        </div>
    </div>
</div>
@endsection
