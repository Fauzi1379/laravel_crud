@extends('layout/main')

@section('title','Tambah kendaraan')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Isi form dibawah ini</h1>
            
            <div class="container mt-5">
        <div class="col-8">
            <h1>Tambah Pengajar</h1>
            <form method="post" action="/mobils">
                @csrf
                <div class="form-group">
                    <label for="nama_kendarann">Nama Kendaraan</label>
                    <input type="text" class="form-control @error('nama_kendarann') is-invalid @enderror" id="nama_kendarann" placeholder="Masukkan nama kendaraan" name="nama_kendarann" value="{{old('nama_kendarann')}}">
                    @error('nama_kendarann')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="no_polisi">Nomor Polisi</label>
                    <input type="text" class="form-control @error('no_polisi') is-invalid @enderror" id="no_polisi" placeholder="Masukkan Nomor Polisi" name="no_polisi" value="{{old('no_polisi')}}">
                    @error('no_polisi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="warna">Warna</label>
                    <textarea type="text" class="form-control" id="warna" placeholder="Masukkan Warna" name="warna"></textarea>
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
