@extends('layouts.admin')
@section('main-content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">

<div class="card shadow mb-4">
    <div class="card-body">
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<h1>Tabel Inspirasi User</h1>
    <tr>
        <th>ID</th>
        <th>User ID</th>
        <th>Username</th>
        <th>Level</th>
        <th>Produk BNI</th>
        <th>View</th>
        <th>Application</th>
        <th>Verification</th>
        <th>upload Date</th>
        <th>Created At</th>
        <th>Updated At</th>
    </tr>
    @foreach ($inspirasi_user as $w)
        <tr onclick="sData(this)">
        <td>{{$w->id}}</td>
        <td>{{$w->user_id}}</td>
        <td>{{$w->user_name}}</td>
        <td>{{$w->level}}</td>
        <td>{{$w->produkbni}}</td>
        <td>{{$w->view}}</td>
        <td>{{$w->application}}</td>
        <td>{{$w->verification}}</td>
        <td>{{$w->upload_date}}</td>
        <td>{{$w->created_at}}</td>
        <td>{{$w->updated_at}}</td>
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