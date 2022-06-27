@extends('layouts.admin')
@section('main-content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">

<div class="card shadow mb-4">
    <div class="card-body">
<div class="table-responsive">
<h1>Tabel Akun Admin</h1>
<table class="table" id="myTable">
    <thead>

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
    </thead>
    <tbody>
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
                                    filename : 'akunadminselected',
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
                                    filename : 'akunadmin',
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