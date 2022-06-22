@extends('layouts.admin')
@section('main-content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">

<div class="card shadow mb-4">
    <div class="card-body">
<div class="table-responsive">
<table class="table" id="myTable">
    <thead>
<h1>Tabel Akun Admin</h1>
    <tr>
        <th>NIP</th>
        <th>username</th>
        <th>nama_pegawai</th>
        <th>password</th>
        <th>email</th>
        <th>no_telpon</th>
        <th>role</th>
        <th>create_date</th>
    </tr>
    @foreach ($akun_admin as $w)
        <tr>
        <td>{{$w->nip}}</td>
        <td>{{$w->username}}</td>
        <td>{{$w->nama_pegawai}}</td>
        <td>{{$w->password}}</td>
        <td>{{$w->email}}</td>
        <td>{{$w->no_telp}}</td>
        <td>{{$w->role}}</td>
        <td>{{$w->create_date}}</td>
        </tr>
        </thead>
    @endforeach
    </table>
    </div>
    </div>
    </div>

    @endsection
    

    @push('scripts')
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
        </script>
    
    @endpush