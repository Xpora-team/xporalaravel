@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ $title ?? __('Create Inspirasi Post') }}</h1>

    <!-- Main Content goes here -->

    <div class="card">
        <div class="card-body">
            <form action="/insertdata" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="ID_Inspirasi">ID Inspirasi</label>
                    <input type="text" class="form-control" name="ID_Inspirasi" id="ID_Inspirasi" placeholder="ID Inspirasi"
                        autocomplete="off" value="{{ old('name') }}">

                </div>


                <div class="form-group">
                    <label for="Nama_Kelas">Nama Kelas</label>
                    <input type="text" class="form-control" name="Nama_Kelas" id="Nama_Kelas" placeholder="Nama Kelas"
                        autocomplete="off" value="{{ old('name') }}">

                </div>

                <div class="form-group">
                    <label for="Category">Kategori</label>
                    <input type="text" class="form-control" name="Category" id="Category" placeholder="Kategori"
                        autocomplete="off" value="{{ old('last_name') }}">

                </div>

                <div class="form-group">
                    <label for="Level">Level</label>
                    <input type="text" class="form-control" name="Level" id="Level" placeholder="Level"
                        autocomplete="off" value="{{ old('email') }}">

                </div>

                <div class="form-group">
                    <label for="view">Number of view</label>
                    <input type="text" class="form-control" name="view" id="view" placeholder="Number of view"
                        autocomplete="off">

                </div>
                <div class="form-group">
                    <label for="application">Number of application</label>
                    <input type="text" class="form-control" name="application" id="application" placeholder="Number of application">

                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" class="form-control" name="status" id="status" placeholder="Status"
                        autocomplete="off">

                </div>

                <div class="form-group">
                    <label for="upload_date">Upload Date</label>
                    <input type="date" class="form-control" name="upload_date" id="upload_date" placeholder="Upload Date"
                        autocomplete="off">

                </div>

                <div class="form-group">
                    <label for="Photo">Photo</label>
                    <input type="file" class="form-control" name="Photo" id="Photo" placeholder="Photo"
                        autocomplete="off">

                </div>

                <div class="form-group">
                    <label for="Deskripsi">Deskripsi</label>
                    <input type="text" class="form-control" name="Deskripsi" id="Deskripsi" placeholder="Deskripsi"
                        autocomplete="off">

                </div>


                <button type="submit" class="btn btn-primary">Save</button>
                <a href="inspirasipost" class="btn btn-default">Back to list</a>

            </form>
        </div>
    </div>

    <!-- End of Main Content -->
@endsection

@push('notif')
    @if (session('success'))
        <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (session('status'))
        <div class="alert alert-success border-left-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
@endpush
