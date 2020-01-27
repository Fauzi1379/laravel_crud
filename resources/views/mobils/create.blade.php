@extends('layout/main')

@section('title','Tambah kendaraan')

@section('content')
<<div class="container mt-5">
        <div class="col-8">
            <h1>Tambah Kendaraan Siswa</h1>
            <form method="post" action="/mobils">
                @csrf
                <div class="form-group">
                    <label for="nama_kendarann">Nama Kendaraan</label>
                    <input type="text" class="form-control @error('nama_kendarann') is-invalid @enderror" id="nama_kendarann" placeholder="Masukkan Nama Kendaraan" name="nama_kendarann" value="{{old('nama_kendarann')}}">
                    @error ('nama_kendarann')<div class="invalin-feedback">{{ $message}}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="nama">Pilih Guru</label>
                    <select name="teacher_id" class="form-control @error('teacher_id') is-invalid @enderror">
                        <option selected value="">Pilih</option>
                        @foreach ($teacher as $t)
                        <option  value="{{$t->id}}">{{$t->nik}} - {{$t->nama}}</option>
                        @endforeach
                      </select>
                      @error ('teacher_id')<div class="invalin-feedback">{{ $message}}</div>@enderror
                </div>
                
                <div class="form-group">
                    <label for="no_polisi">No Polisi</label>
                    <input type="text" class="form-control @error('no_polisi') is-invalid @enderror" id="no_polisi" placeholder="Masukkan No Polisi" name="no_polisi" value="{{old('no_polisi')}}">
                    @error ('no_polisi')<div class="invalin-feedback">{{ $message}}</div>@enderror 
                </div>
                <div class="form-group">
                    <label for="warna">Warna Kendaraan</label>
                    <input type="text" class="form-control @error('warna') is-invalid @enderror" id="warna" placeholder="Masukkan warna" name="warna" value="{{old('warna')}}">
                    @error ('warna')<div class="invalin-feedback">{{ $message}}</div>@enderror 
                </div>
                <button class="btn btn-primary" type="submit">Simpan</button>
            </form>
        </div>
    </div>
@endsection
