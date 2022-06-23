@extends('layouts.admin')
@section('main-content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('js/script.js') }}">

<div class="card shadow mb-4">
    <div class="card-header py-3">
    </div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
        <th rowspan="2" class="align-middle">#</th>
            <th>User ID</th>
            <th>User Name</th>
            <th>Level</th>
            <th>Produk BNI</th>
            <th>Number of view</th>
            <th>Number of application</th>
            <th>Verification</th>
            <th>Last Access</th>
            <th>Action</th>
        </tr>
        <tr>
                            <th class="searchHeader">Search</th>
                            <th class="searchHeader">Search</th>
                            <th class="searchHeader">Search</th>
                            <th class="searchHeader">Search</th>
                            <th class="searchHeader">Search</th>
                            <th class="searchHeader">Search</th>
                            <th class="searchHeader">Verification</th>
                            <th class="searchHeader">Create Date</th>
                        </tr>
    </thead>
    <tbody>

        @foreach ($data as $item)
        <tr onclick="sData(this)">
            <tr onclick="sData(this)">
            <td style="text-align:right; white-space:nowrap;"><input class="form-check-input" type="checkbox" onclick="csData(this)" value="option1"></td>
            <td>{{ $item['user_id'] }}</td>
            <td>{{ $item['user_name'] }}</td>
            <td>{{ $item['level'] }}</td>
            <td>{{ $item['produkbni'] }}</td>
            <td>{{ $item['view'] }}</td>
            <td>{{ $item['application'] }}</td>
            <td>{{ $item['verification'] }}</td>
            <td>{{ $item['date'] }}</td>
            <td style="text-align:center; white-space:nowrap;"><a href="#" class="btn btn-info btn-sm">Detail</a></td>
            </tr>
        </tr>
    </tbody>
        </thead>
    @endforeach
    </table>
    </div>
    </div>
    @endsection
    @push('scripts')
    
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
        </script>
    
    @endpush