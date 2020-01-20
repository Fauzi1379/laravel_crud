@extends('layout/main')

@section('title','dashboard')

@section('container')
<div class="container">
<br>
<br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    Selamat Datang, <b><span>{{ auth()->user()->name }}</span></b> 
                    <my-button text="My New Text Button" type="submit"></my-button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection