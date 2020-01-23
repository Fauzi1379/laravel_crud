@extends('layout/main')

@section('title','Ubah data pengajar')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form ubah data</h1>
            <hr color="black">
            <div class="container mt-5">
        <div class="col-8">
            <form method="post" action="/mobils/{{ $mobil->id }}">
            @method('patch')
                @csrf
                <div class="form-group">
                    <label for="nama_kendarann">Nama Kendaraan</label>
                    <input type="text" class="form-control @error('nama_kendarann') is-invalid @enderror" id="nama_kendarann" placeholder="Masukkan Nama Kendaraan" name="nama_kendarann" value="{{ $mobil->nama_kendarann}}">
                    @error('nama_kendarann')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="no_polisi">Nomor Polisi</label>
                    <input type="text" class="form-control @error('no_polisi') is-invalid @enderror" id="no_polisi" placeholder="Masukkan Nomor Polisi" name="no_polisi" value="{{ $mobil->no_polisi}}">
                    @error('no_polisi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="warna">Warna</label>
                    <input type="text" class="form-control" id="warna" placeholder="Masukkan Warna Kendaraan" name="warna" value="{{ $mobil->warna}}"></input>
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
