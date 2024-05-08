@extends('main')

@section('title', 'Tambah Pegawai Baru')

@section('header')
    <div class="section-header">
        <h1>Tambah Data Pegawai</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ url('pegawai') }}">Data Pegawai</a></div>
            <div class="breadcrumb-item">Tambah Data Pegawai</div>
        </div>
    @endsection

    @section('content')
        <h2 class="section-title">Form Tambah Data Pegawai</h2>
        <p class="section-lead"><i>
                <font color="#f00">*</font> isi data dengan sebenar-benarnya.
            </i></p>
        <div class="row">
            <div class="col-12">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <form action="{{ url('pegawai') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nomor Induk Kependudukan <font color="#f00">*</font></label>
                                        <input type="text" name="nik"
                                            class="form-control @error('nik') is-invalid @enderror"
                                            value="{{ old('nik') }}" placeholder="masukan nomor induk kependudukan"
                                            autocomplete="off" autofocus>
                                        @error('nik')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Lengkap <font color="#f00">*</font></label>
                                        <input type="text" name="nama"
                                            class="form-control @error('nama') is-invalid @enderror"
                                            value="{{ old('nama') }}" placeholder="masukan nama lengkap"
                                            autocomplete="off" autofocus>
                                        @error('nama')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin <font color="#f00">*</font></label>
                                        <select name="jk" class="form-control @error('jk') is-invalid @enderror">
                                            <option value="">-- pilih --</option>
                                            <option value="Laki-laki" {{ old('jk') == 'Laki-laki' ? 'selected' : null }}>
                                                Laki-laki</option>
                                            <option value="Perempuan" {{ old('jk') == 'Perempuan' ? 'selected' : null }}>
                                                Perempuan</option>
                                        </select>
                                        @error('jk')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Tempat Lahir <font color="#f00">*</font></label>
                                        <input type="text" name="tmp_lahir"
                                            class="form-control @error('tmp_lahir') is-invalid @enderror"
                                            value="{{ old('tmp_lahir') }}" placeholder="masukan tempat lahir"
                                            autocomplete="off" autofocus>
                                        @error('tmp_lahir')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir <font color="#f00">*</font></label>
                                        <input type="date" name="tgl_lahir"
                                            class="form-control @error('tgl_lahir') is-invalid @enderror"
                                            value="{{ old('tgl_lahir') }}" placeholder="masukan tanggal lahir"
                                            autocomplete="off" autofocus>
                                        @error('tgl_lahir')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Alamat <font color="#f00">*</font></label>
                                        <input type="text" name="alamat"
                                            class="form-control @error('alamat') is-invalid @enderror"
                                            value="{{ old('alamat') }}" placeholder="masukan alamat sesuai ktp"
                                            autocomplete="off" autofocus>
                                        @error('alamat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Departemen <font color="#f00">*</font></label>
                                        <select name="departemen"
                                            class="form-control @error('departemen') is-invalid @enderror">
                                            <option value="">-- pilih --</option>
                                            <option value="Admin" {{ old('departemen') == 'Admin' ? 'selected' : null }}>
                                                Admin</option>
                                            <option value="Gudang" {{ old('departemen') == 'Gudang' ? 'selected' : null }}>
                                                Gudang</option>
                                        </select>
                                        @error('departemen')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Pendidikan <font color="#f00">*</font></label>
                                        <select name="pendidikan"
                                            class="form-control @error('pendidikan') is-invalid @enderror">
                                            <option value="">-- pilih --</option>
                                            <option value="SD sederajat"
                                                {{ old('pendidikan') == 'SD sederajat' ? 'selected' : null }}>
                                                SD sederajat</option>
                                            <option value="SMP Sederajat"
                                                {{ old('pendidikan') == 'SMP Sederajat' ? 'selected' : null }}>
                                                SMP Sederajat</option>
                                            <option value="SMK/SMA"
                                                {{ old('pendidikan') == 'SMK/SMA' ? 'selected' : null }}>
                                                SMK/SMA</option>
                                            <option value="S1" {{ old('pendidikan') == 'S1' ? 'selected' : null }}>
                                                S1</option>
                                            <option value="S2" {{ old('pendidikan') == 'S2' ? 'selected' : null }}>
                                                S2</option>
                                        </select>
                                        @error('departemen')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Mulai Kontrak <font color="#f00">*</font></label>
                                        <input type="date" name="mulai_kontrak"
                                            class="form-control @error('mulai_kontrak') is-invalid @enderror"
                                            value="{{ old('mulai_kontrak', date('Y-m-d')) }}"
                                            placeholder="masukan tanggal mulai kontrak" autocomplete="off" autofocus>
                                        @error('tgl_lahir')
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
                        This is card footer
                    </div>
                </div>
            </div>
        </div>

    @endsection
