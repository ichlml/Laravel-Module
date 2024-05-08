@extends('main')

@section('title', 'User')

@section('header')
    <div class="section-header">
        <h1>Data User</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Home</a></div>
            <div class="breadcrumb-item">Data User</a></div>
            {{-- <div class="breadcrumb-item">Data Pegawai</div> --}}
        </div>
    @endsection

    @section('content')

        <div class="row">
            <div class="col-12">
                <div class="card shadow-lg">
                    <div class="card-header">
                        <h4></h4>
                        <div class="card-header-action">
                            <a href="{{ url('user/create') }}" class="btn btn-icon btn-md btn-primary"><i
                                    class="fas fa-plus"></i> Tambah
                                Data</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="myTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pegawai</th>
                                        <th>Username</th>
                                        <th>Role</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}. </td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->username }}</td>
                                            <td>{{ $data->role }}</td>
                                            <td class="text-center">
                                                <a href="{{ url('user/' . $data->id . '/edit') }}" disabled
                                                    class="btn btn-icon btn-sm btn-primary">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <form action="{{ url('user/' . $data->id) }}" method="post"
                                                    class="d-inline"
                                                    onsubmit="return confirm('Apakah anda yakin hapus data ini?')">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-icon btn-sm btn-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @section('script')
        <script>
            $(document).ready(function() {
                $('#myTable').DataTable();
            });
        </script>
    @endsection
