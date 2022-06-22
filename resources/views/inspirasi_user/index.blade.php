@extends('layouts.admin')
@section('main-content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">

<div class="card shadow mb-4">
    <div class="card-body">
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <h1>Tabel Inspirasi User</h1>
    <tr>
        <th>User ID</th>
        <th>User Name</th>
        <th>Level</th>
        <th>Produk BNI</th>
        <th>Number of view</th>
        <th>Number of application</th>
        <th>Verification</th>
        <th>Last Access</th>
        <th rowspan="2" class="align-middle">Action</th>
    </tr>
    @foreach ($data as $item)
        <tr onclick="sData(this)">
        <td>{{ $item['user_id'] }}</td>
        <td>{{ $item['user_name'] }}</td>
        <td>{{ $item['level'] }}</td>
        <td>{{ $item['produkbni'] }}</td>
        <td>{{ $item['user_id'] }}</td>
        <td>{{ $item['view'] }}</td>
        <td>{{ $item['application'] }}</td>
        <td>{{ $item['verification'] }}</td>
        <td>{{ $item['date'] }}</td>
        <td style="text-align:center; white-space:nowrap;"><a href="#" class="btn btn-info btn-sm">Detail</a></td>
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