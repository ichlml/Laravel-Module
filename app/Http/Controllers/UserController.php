<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();

        return view('user.data-user', compact('user'));
    }

    public function create()
    {
        $pegawai = Pegawai::all();
        return view('user.create', compact('pegawai'));
    }

    public function getPegawai(Request $request)
    {
        $id = $request->id;
        $data = DB::table('pegawais')->where('id', $id)->first();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_pegawai' => 'required',
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        $add = User::create([
            'id_pegawai' => $request->id_pegawai,
            'name' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        if ($add) {
            return redirect('user')->with(['message' => 'Data User Berhasil Ditambahkan!!', 'alert-type' => 'success']);
        } else {
            return redirect('user')->with(['message' => 'Data User Gagal Ditambahkan!!', 'alert-type' => 'error']);
        }
    }

    public function destory(Request $request)
    {
        $del = User::where('id', $request->id)->delete();
        if ($del) {
            return redirect('user')->with(['message' => 'Data user Berhasil Dihapus!!', 'alert-type' => 'success']);
        } else {
            return redirect('user')->with(['message' => 'Data user Berhasil Dihapus!!', 'alert-type' => 'error']);
        }
    }
}
