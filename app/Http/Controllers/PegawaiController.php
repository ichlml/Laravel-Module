<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::all();
        return view('pegawai.data-pegawai', compact('pegawai'));
    }

    public function create()
    {
        return view('pegawai.create');
    }

    public function store(Request $request)
    {
        $cek_pegawai = Pegawai::latest()->first();
        $kode_cv = 'PKS';
        $kode_bln = date('m');
        $kode_thn = date('Y');

        if ($cek_pegawai == null) {
            $no_urut = '0001';
        } else {
            $no_urut = substr($cek_pegawai->nip, 9, 4) + 1;
            $no_urut = str_pad($no_urut, 4, '0', STR_PAD_LEFT);
        }

        $nip = $kode_cv . $kode_thn . $kode_bln . $no_urut;
        // dd($nip);

        $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'departemen' => 'required',
            'pendidikan' => 'required',
            'mulai_kontrak' => 'required',
        ]);

        $add = Pegawai::create([
            'nip' => $nip,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'jk' => $request->jk,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'departemen' => $request->departemen,
            'pendidikan' => $request->pendidikan,
            'mulai_kontrak' => $request->mulai_kontrak,
            'status_aktif' => 1
        ]);

        if ($add) {
            return redirect('pegawai')->with(['message' => 'Data Pegawai Berhasil Ditambahkan!!', 'alert-type' => 'success']);
        } else {
            return redirect('pegawai')->with(['message' => 'Data Pegawai Gagal Ditambahkan!!', 'alert-type' => 'error']);
        }
    }

    public function edit($id)
    {
        $data = DB::table('pegawais')->where('id', $id)->first();
        // dd($data);

        return view('pegawai.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'departemen' => 'required',
            'pendidikan' => 'required',
            'mulai_kontrak' => 'required',
            'status_aktif' => 'required',
        ]);

        $update = Pegawai::where('id', $id)->update([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'jk' => $request->jk,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'departemen' => $request->departemen,
            'pendidikan' => $request->pendidikan,
            'mulai_kontrak' => $request->mulai_kontrak,
            'status_aktif' => $request->status_aktif,
        ]);

        if ($update) {
            return redirect('pegawai')->with(['message' => 'Data Pegawai Berhasil Diubah!!', 'alert-type' => 'success']);
        } else {
            return redirect('pegawai')->with(['message' => 'Data Pegawai Gagal Diubah!!', 'alert-type' => 'error']);
        }
    }

    public function destroy(Request $request)
    {
        $del = Pegawai::where('id', $request->id)->delete();
        if ($del) {
            return redirect('pegawai')->with(['message' => 'Data Pegawai Berhasil Dihapus!!', 'alert-type' => 'success']);
        } else {
            return redirect('pegawai')->with(['message' => 'Data Pegawai Berhasil Dihapus!!', 'alert-type' => 'error']);
        }
    }
}
