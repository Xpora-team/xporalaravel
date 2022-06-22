@extends('layouts.admin')
@section('main-content')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <h1>Tabel Produk BNI</h1>
                    <tr>
                        <th>ID_Produk</th>
                        <th>ID user</th>
                        <th>Product apply</th>
                        <th>Min pengajuan</th>
                        <th>Realisasi dana</th>
                        <th>Status</th>
                        <th>Create Date</th>
                    </tr>
                    @foreach ($data as $w)
                        <tr onclick="sData(this)">
                            <td>{{ $w->product_id }}</td>
                            <td>{{ $w->kd_data_diri }}</td>
                            <td>{{ $w->product_apply }}</td>
                            <td>{{ $w->min_pengajuan }}</td>
                            <td>{{ $w->realisasi_dana }}</td>
                            <td>{{ $w->status }}</td>
                            <td>{{ $w->create_date }}</td>
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
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
@endpush
