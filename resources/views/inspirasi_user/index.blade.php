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
                                <                                <td><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                                    onclick="setSelectedId({{ $item['user_id'] }})">
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
                                <p>User id :</p>
                                <p>User name :</p>
                                <p>Level :</p>
                                <p>Produk BNI :</p>
                                <p>View :</p>
                                <p>Application :</p>
                                <p>Verification :</p>
                                <p>Create Date :</p>

                            </div>
                            <div class="col-sm-6 text-secondary">
                                <p id="user_id"></p>
                                <p id="user_name"></p>
                                <p id="level"></p>
                                <p id="produkbni"></p>
                                <p id="view"></p>
                                <p id="application"></p>
                                <p id="verification"></p>
                                <p id="date"></p>

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
        var userId = <?= json_encode($inspirasi_user) ?>;
        var selectedId = undefined;
        var selectedData = undefined;

        function setSelectedId(id) {
            selectedId = id;
            console.log(selectedId);
            for (const inspirasi_user of userId) {
                if (inspirasi_user.user_id == selectedId) {
                    selectedData = inspirasi_user;
                    console.log(selectedData);
                    document.getElementById('user_name').innerHTML=selectedData.user_name;
                    document.getElementById('level').innerHTML=selectedData.level;
                    document.getElementById('produkbni').innerHTML=selectedData.produkbni;
                    document.getElementById('view').innerHTML=selectedData.view;
                    document.getElementById('application').innerHTML=selectedData.application;
                    document.getElementById('verification').innerHTML=selectedData.verification;
                    document.getElementById('date').innerHTML=selectedData.create_date;
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
