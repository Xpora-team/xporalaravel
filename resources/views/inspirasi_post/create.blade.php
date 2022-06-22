@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ $title ?? __('Create Inspirasi Post') }}</h1>

    <!-- Main Content goes here -->

    <div class="card">
        <div class="card-body">
            <form action="{{ route('basic.store') }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="name">Nama Kelas</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nama Kelas"
                        autocomplete="off" value="{{ old('name') }}">

                </div>

                <div class="form-group">
                    <label for="last_name">Kategori</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Kategori"
                        autocomplete="off" value="{{ old('last_name') }}">

                </div>

                <div class="form-group">
                    <label for="email">Level</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Level"
                        autocomplete="off" value="{{ old('email') }}">

                </div>

                <div class="form-group">
                    <label for="password">Application</label>
                    <input type="text" class="form-control" name="password" id="password" placeholder="Application"
                        autocomplete="off">

                </div>
                <div class="form-group">
                    <label for="password">Foto</label>
                    <input type="file" class="form-control" name="password" id="password" autocomplete="off">

                </div>
                <div class="form-group">
                    <label for="password">Deskripsi</label>
                    <input type="text" class="form-control" name="password" id="password" placeholder="Deskripsi"
                        autocomplete="off">

                </div>


                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{ route('basic.index') }}" class="btn btn-default">Back to list</a>

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
