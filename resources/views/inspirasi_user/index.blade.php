@extends('layouts.admin')
@section('main-content')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <h1>Tabel Inspirasi User</h1>
                <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>User id</th>
                            <th>User name</th>
                            <th>Level</th>
                            <th>Produk BNI</th>
                            <th>View</th>
                            <th>Application</th>
                            <th>Verification</th>
                            <th>Create Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($inspirasi_user as $item)
                            <tr onclick="sData(this)">
                                <td>{{ $item['user_id'] }}</td>
                                <td>{{ $item['user_name'] }}</td>
                                <td>{{ $item['level'] }}</td>
                                <td>{{ $item['produkbni'] }}</td>
                                <td>{{ $item['view'] }}</td>
                                <td>{{ $item['application'] }}</td>
                                <td>{{ $item['verification'] }}</td>
                                <td>{{ $item['date'] }}</td>
                                <td style="text-align:center; white-space:nowrap;"><a href="#"
                                        class="btn btn-info btn-sm">Detail</a></td>
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
                                filename: 'Filter Inspirasi User',
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
                                filename: 'Inspirasi User',
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
