<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MahasiswaController extends Controller
{
    //
    public function index(){    
        $data1 = Mahasiswa::all();
        return view('welcome', compact('data1'));
    }
    public function tambah(){    
        return view('tambah');
    }

    public function logout()
    {
        
        Auth::logout();
        return redirect('/');
    }
    public function tambahdata(Request $request)
    {
        Mahasiswa::create($request->all());
        return redirect('')->with('Sukses, Data Berhasil Ditambah');
    }

    public function editdata($id)
    {
        $data = Mahasiswa::find($id);
        return view('edit', compact('data'));
    }

    public function simpan(Request $request, $id)
    {
        $data = Mahasiswa::find($id);
        $data->update([
            'nama' => $request['nama'],
            'nim' => $request['nim'],
            'fakultas' => $request['fakultas']
        ]);
        return redirect('/');
    }

    public function hapus($id)
    {
        $data = Mahasiswa::find($id);
        $data->delete();
        return redirect('/');
    }
}
