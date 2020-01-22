@extends('layout/main')

@section('title','list data pengajar')
 
@section('content')
<div class="container mt-5">
    <table class="table table table-striped" id="users-table">
        <thead class="thead-dark">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
            <tr>
                <th>Id</th>
                <th>NIK</th>
                <th>NAMA</th>
                <th>Kendaraan</th>
                <th>ALAMAT</th>
                <th>KET</th>
            </tr>
        </thead>
    </table>
</div>
@stop
 
@push('scripts')
<script>
$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'user/json',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'nik', name: 'nik' },
            { data: 'nama', name: 'nama' },
            { data: 'mobils_id', nama : 'mobils_id'},
            { data: 'alamat', name: 'alamat' },
           
        { data: null,
                            render: function(data){
                                var view_button = '<a href="/teachers/' + data.id + '" class="btn btn-primary" role="button" aria-pressed="true">Detail</a>';
                            
                                return view_button;}
                        },
        ]
    });
});
</script>
@endpush