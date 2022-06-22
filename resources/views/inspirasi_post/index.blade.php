@extends('layouts.admin')
@section('main-content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">

<div class="card shadow mb-4">
    <div class="card-body">
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <h1>Tabel Inspirasi Post</h1>
    <tr>
        <th>ID_Inspirasi</th>
        <th>Posting Name</th>
        <th>Category</th>
        <th>Level</th>
        <th>Number of view</th>
        <th>Number of application</th>
        <th>status</th>
        <th>upload_date</th>
    </tr>
    @foreach ($inspirasi_post as $w)
        <tr onclick="sData(this)">
        <td>{{$w->ID_Inspirasi}}</td>
        <td>{{$w->Nama_Kelas}}</td>
        <td>{{$w->Category}}</td>
        <td>{{$w->Level}}</td>
        <td>{{$w->view}}</td>
        <td>{{$w->application}}</td>
        <td>{{$w->status}}</td>
        <td>{{$w->upload_date}}</td>
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