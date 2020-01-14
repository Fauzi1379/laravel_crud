@extends('layout/main')

@section('title','data pengajar')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">daftar pengajar</h1>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NIK</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">ALAMAT</th>
                        <th scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                @foreach( $pengajar as $pnr )
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $pnr->nik }}</td>
                        <td>{{ $pnr->nama }}</td>
                        <td>{{ $pnr->alamat }}</td>
                        <td>
                            <a href="" class="badge badge-success">edit</a>
                            <a href="" class="badge badge-danger">delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
