@extends('layouts.admin')
@section('main-content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                <thead>
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
                </thead>
                <tbody>
                    @foreach ($product as $w)
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
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@push('js')

<script>
    $(document).ready(function() {
        console.log('table')
        window.setTimeout(
            () => {
                $('#myTable').DataTable({
                    dom: 'Bfrtip',
                    buttons: [{
                            extend: 'excel',
                            text: 'Download Filter Data',
                            filename: 'Filter Produk BNI',
                            title: null
                        },
                        {
                            extend: 'excel',
                            text: 'Download All Data',
                            exportOptions: {
                                modifier: {
                                    selected: null
                                }
                            },
                            filename: 'Produk BNI',
                            title: null
                        }
                    ],
                    select: true
                });
            }, 500
        )
    });
</script>

@endpush