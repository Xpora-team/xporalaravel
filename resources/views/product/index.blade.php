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
                        <th>ID Produk</th>
                        <th>User ID</th>
                        <th>Produk</th>
                        <th>Min Pengajuan</th>
                        <th>Realisasi Dana</th>
                        <th>Status</th>
                        <th>Create Date</th>
                        <th>Action</th>
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
                        <td><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick="setSelectedId({{ $w->product_id }})">
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <p>ID Produk BNI :</p>
                                <p>ID User :</p>
                                <p>Product Apply :</p>
                                <p>Minimun Dana Diajukan :</p>
                                <p>Realisasi Dana :</p>
                                <p>Status :</p>
                                <p>Create Date :</p>

                            </div>
                            <div class="col-sm-6 text-secondary">
                                <p id="product_id"></p>
                                <p id="kd_data_diri"></p>
                                <p id="product_apply"></p>
                                <p id="min_pengajuan"></p>
                                <p id="realisasi_dana"></p>
                                <p id="status"></p>
                                <p id="create_date"></p>

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
    var productId = <?= json_encode($product) ?>;
    var selectedId = undefined;
    var selectedData = undefined;

    function setSelectedId(id) {
        selectedId = id;
        console.log(selectedId);
        for (const product of productId) {
            if (product.product_id == selectedId) {
                selectedData = product;
                console.log(selectedData);
                document.getElementById('product_id').innerHTML = selectedData.product_id;
                document.getElementById('kd_data_diri').innerHTML = selectedData.kd_data_diri;
                document.getElementById('product_apply').innerHTML = selectedData.product_apply;
                document.getElementById('min_pengajuan').innerHTML = selectedData.min_pengajuan;
                document.getElementById('realisasi_dana').innerHTML = selectedData.realisasi_dana;
                document.getElementById('status').innerHTML = selectedData.status;
                document.getElementById('create_date').innerHTML = selectedData.create_date;
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