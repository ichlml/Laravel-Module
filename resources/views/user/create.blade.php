@extends('main')

@section('title', 'Tambah User Baru')

@section('header')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <div class="section-header">
        <h1>Tambah Data User</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ url('user') }}">Data User</a></div>
            <div class="breadcrumb-item">Tambah Data User</div>
        </div>
    @endsection

    @section('content')
        <h2 class="section-title">Form Tambah Data User</h2>
        <p class="section-lead"><i>
                <font color="#f00">*</font> isi data dengan sebenar-benarnya.
            </i></p>
        <div class="row">
            <div class="col-12">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <form action="{{ url('user') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama Pegawai <font color="#f00">*</font></label>
                                        <select name="id_pegawai" id="id_pegawai"
                                            class="form-control id_pegawai @error('id_pegawai') is-invalid @enderror">
                                            <option value="">-- pilih --</option>
                                            @foreach ($pegawai as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ old('id_pegawai') == $item->id ? 'selected' : null }}>
                                                    {{ $item->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('jk')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Nama <font color="#f00">*</font></label>
                                        <input type="text" name="nama" id="nama" readonly
                                            class="form-control @error('nama') is-invalid @enderror"
                                            value="{{ old('nama') }}">
                                        @error('nama')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Username <font color="#f00">*</font></label>
                                        <input type="text" name="username"
                                            class="form-control @error('username') is-invalid @enderror"
                                            value="{{ old('username') }}" placeholder="masukan username" autocomplete="off"
                                            autofocus>
                                        @error('username')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Password <font color="#f00">*</font></label>
                                        <input type="password" name="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            value="{{ old('password') }}" placeholder="masukan password" autocomplete="off"
                                            autofocus>
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Role <font color="#f00">*</font></label>
                                        <select name="role" class="form-control @error('role') is-invalid @enderror">
                                            <option value="">-- pilih --</option>
                                            <option value="superuser" {{ old('role') == 'superuser' ? 'selected' : null }}>
                                                Super User</option>
                                            <option value="admin" {{ old('role') == 'admin' ? 'selected' : null }}>
                                                Admin</option>
                                        </select>
                                        @error('role')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="card-footer bg-whitesmoke">
                        Pakis Integrated System
                    </div>
                </div>
            </div>
        </div>

    @endsection

    @section('script')
        <script>
            $(document).ready(function() {
                $(document).on('change', '#id_pegawai', function() {
                    var id = $(this).val();
                    // console.log(id);
                    $.ajax({
                        type: 'post',
                        url: "/getPegawai",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: {
                            'id': id,
                        },
                        dataType: 'json',
                        success: function(data) {
                            // console.log(data);
                            $('#nama').val(data.nama);
                        }
                    });
                });
                //select2
                $('.id_pegawai').select2();
            });
        </script>
    @endsection
