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
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($inspirasi_post as $w)
                            <tr onclick="sData(this)">
                                <td>{{ $w->ID_Inspirasi }}</td>
                                <td>{{ $w->Nama_Kelas }}</td>
                                <td>{{ $w->Category }}</td>
                                <td>{{ $w->Level }}</td>
                                <td>{{ $w->view }}</td>
                                <td>{{ $w->application }}</td>
                                <td>{{ $w->status }}</td>
                                <td>{{ $w->upload_date }}</td>
                                <td>{{ $w->Photo }}</td>
                                <td>{{ $w->Deskripsi }}</td>
                                <td><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                                        onclick="setSelectedId({{ $w->ID_Inspirasi }})">
                                        Detail
                                    </button></td>
                            </tr>
                            </thead>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

{{-- <---Modal Detail--> --}}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-6">
                            <div class="col-sm-6 text-secondary">
                                <p>ID_Inspirasi :</p>
                                <p>Nama Kelas :</p>
                                <p>Category :</p>
                                <p>Level :</p>
                                <p>Number of view :</p>
                                <p>Number of application :</p>
                                <p>status :</p>
                                <p>upload_date :</p>
                                <p>Deskripsi :</p>

                            </div>
                            <div class="col-sm-6 text-secondary">
                                <p id="ID_Inspirasi"></p>
                                <p id="Nama_Kelas"></p>
                                <p id="Category"></p>
                                <p id="Level"></p>
                                <p id="view"></p>
                                <p id="application"></p>
                                <p id="status"></p>
                                <p id="upload_date"></p>
                                <p id="Deskripsi"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end modal --}}

@push('js')
    <script>
        var userId = <?= json_encode($inspirasi_post) ?>;
        var selectedId = undefined;
        var selectedData = undefined;

        function setSelectedId(id) {
            selectedId = id;
            console.log(selectedId);
            for (const inspirasi_post of postId) {
                if (inspirasi_post.ID_Inspirasi == selectedId) {
                    selectedData = inspirasi_post;
                    console.log(selectedData);
                    document.getElementById('ID_Inspirasi').innerHTML = selectedData.ID_Inspirasi;
                    document.getElementById('Nama_Kelas').innerHTML = selectedData.Nama_Kelas;
                    document.getElementById('Category').innerHTML = selectedData.Category;
                    document.getElementById('Level').innerHTML = selectedData.Level;
                    document.getElementById('view').innerHTML = selectedData.view;
                    document.getElementById('application').innerHTML = selectedData.application;
                    document.getElementById('status').innerHTML = selectedData.status;
                    document.getElementById('upload_date').innerHTML = selectedData.upload_date;
                    document.getElementById('Deskripsi').innerHTML = selectedData.Deskripsi;
                    break;
                }
            }
        }
        $(document).ready(function() {
            console.log('table')
            window.setTimeout(
                () => {
                    $('#myTable').DataTable({
                        dom: 'Bfrtip',
                        buttons: [{
                                extend: 'excel',
                                text: 'Excel Selected',
                                filename: 'inspirasipostselected',
                                title: null
                            },
                            {
                                extend: 'excel',
                                text: 'Excel All',
                                exportOptions: {
                                    modifier: {
                                        selected: null
                                    }
                                },
                                filename: 'inspirasipost',
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
