@extends('layouts.admin')
@section('main-content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">


<div class="card shadow mb-4">
    <div class="card-body">
<div class="table-responsive">
<h1>Tabel Inspirasi Post</h1>
            <div class="col-md-12 text-right">
            <a class="btn btn-primary" href="/createinspirasi" role="button">Create New Posting</a> <br><br>
            </div>
<table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
    <thead>
    <tr>
        <th>ID_Inspirasi</th>
        <th>Nama Kelas</th>
        <th>Category</th>
        <th>Level</th>
        <th>Number of view</th>
        <th>Number of application</th>
        <th>status</th>
        <th>upload_date</th>
        <th>Photo</th>
        <th>Deskripsi</th>
    </tr>
    </thead>
    <tbody>
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
        <td>{{$w->Photo}}</td>
        <td>{{$w->Deskripsi}}</td>
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
                                    filename : 'inspirasipostselected',
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
                                    filename : 'inspirasipost',
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