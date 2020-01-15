@extends('layout/main')

@section('title','detail pengajar')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">detail pengajar</h1>

            <div class="card" >
                <div class="card-body">
                    <h5 class="card-title">{{ $teacher->nik }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $teacher->nama }}</h6>
                    <p class="card-text">{{ $teacher->alamat }}</p>
                    
                    <button type="submit" class="btn btn-primary">UBAH</button>
                    <button type="submit" class="btn btn-danger">HAPUS</button>
                    <a href="/teachers" class="card-link">KEMBALI</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
