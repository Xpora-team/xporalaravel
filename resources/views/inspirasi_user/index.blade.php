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
    </thead>
    <tbody>
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
                        $('#myTable').DataTable( {
                            dom: 'Bfrtip',
                            buttons: [
                                {
                                    extend: 'excel',
                                    text: 'Excel Selected',
                                    filename : 'inspirasiuserselected',
                                    title : null
                                },
                                {
                                    extend: 'excel',
                                    text: 'Excel All',
                                    exportOptions: {
                                        modifier: {
                                            selected: null
                                        }
                                    },
                                    filename : 'inspirasiuser',
                                    title : null
                                }
                            ],
                            select : true
                        });
                    }, 500
                )
            } );
        </script>
    
    @endpush