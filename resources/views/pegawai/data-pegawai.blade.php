@extends('main')

@section('title', 'Pegawai')

@section('header')
    <div class="section-header">
        <h1>Data Pegawai</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Home</a></div>
            <div class="breadcrumb-item">Pegawai</a></div>
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
                            <a href="{{ url('pegawai/create') }}" class="btn btn-icon btn-md btn-primary"><i
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
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        <th>Departemen</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pegawai as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}. </td>
                                            <td>{{ $data->nip }}</td>
                                            <td>{{ $data->nama }}</td>
                                            <td>{{ $data->jk }}</td>
                                            <td>{{ $data->alamat }}</td>
                                            <td>{{ $data->departemen }}</td>
                                            @if ($data->status_aktif == 1)
                                                <td><button class="btn btn-sm btn-success">Aktif</button></td>
                                            @else
                                                <td><button class="btn btn-sm btn-danger">Tidak Aktif</button></td>
                                            @endif
                                            <td class="text-center">
                                                <a href="{{ url('pegawai/' . $data->id . '/edit') }}"
                                                    class="btn btn-icon btn-sm btn-primary">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <form action="{{ url('pegawai/' . $data->id) }}" method="post"
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
