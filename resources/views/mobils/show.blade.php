@extends('layout/main')

@section('title','detail pengajar')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">DETAIL</h1>

            <div class="card" >
                <div class="card-body">
                    <hr color="red">
                    <b><h3>DATA KENDARAAN</h3></b>
                    <hr color="red">
                    <h5 class="card-title">NAMA KENADARAAN : {{ $mobil->nama_kendarann }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">NOMOR POLISI : {{ $mobil->no_polisi }}</h6>
                    <p class="card-ext">WARNA KENDARAAN : {{ $mobil->warna }}</p>
                    <hr color="red">
                    <b><h3>PEMILIK KENADARAAN</h3></b>
                    <hr color="red">
                    <h5 class="card-title">NIK GURU : {{ $mobil->teacher->nik }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">NAMA PENGAJAR : {{ $mobil->teacher->nama }}</h6>
                    <a href="{{ $mobil->id }}/edit" class="btn btn-primary">EDIT</a>
                    
                    <div id='modal'  class="d-inline">
                    <button class="btn btn-danger " data-toggle="modal" data-target="#exampleModal"  class="card-link">Hapus</button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">PEMBERITAHUAN</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            <p>Apakah Anda Ingin Mengapus data {{$mobil->nama_kendarann}}</p>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal">TIDAK</button>
                            <form action="{{$mobil->id}}" method="POST">
                                {{ method_field('delete') }}
                                @csrf
                            <button type="submit" class="btn btn-danger" type="submit">YA</button>
                            </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                    <a href="/mobils" class="card-link">KEMBALI</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
