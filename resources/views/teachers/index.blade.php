@extends('layout/main')

@section('title','data pengajar')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">daftar pengajar</h1>

            <a href="/teachers/create" class="btn btn-info my-3">+ Tambah data Pengajar</a>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <ul class="list-group">
            @foreach( $teachers as $teacher )
                <li class="list-group-item d-flex justify-content-between align-items-center">
                     {{ $teacher->nama }}
                    <a href="/teachers/{{ $teacher->id }}" class="badge badge-info">detail</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
