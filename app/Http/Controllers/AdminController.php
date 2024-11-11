<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function data_petugas(Request $request){

        //search dan pagination
        $cari_data_petugas = $request-> cari_data_petugas;
        $jumlahbaris = 3;
        if(strlen ($cari_data_petugas)){
            $petugas = petugas::where('nama_petugas','like',"%$cari_data_petugas%")
                ->orWhere('alamat', 'like', "%$cari_data_petugas%")
                ->orWhere('kontak','like',"%$cari_data_petugas%")
                ->paginate($jumlahbaris);
        }else{
            $petugas = petugas::orderBy('nama_petugas', 'desc')->paginate($jumlahbaris);
        }

       return view('admin.petugas.index',compact('petugas'));
    }

    //data petugas
    public function create_data_petugas(){
        return view('admin.petugas.create');
    }

    public function store_data_petugas(Request $request){
        $request->validate([
            'nama_petugas' => 'required|string',
            'alamat' => 'required|string',
            'kontak' => 'required|nullable'
        ],[
            'nama_petugas.required' => 'nama petugas harus di isi',
            'alamat.required' => 'alamat harus di isi dengan lengkap',
            'kontak.required' => 'kontak harus di isi dengan benar'
        ]);

        $petugas = [
            'nama_petugas' => $request->nama_petugas,
            'alamat' => $request->alamat,
            'kontak' => $request->kontak,
        ];

        Petugas::create($petugas);
        return redirect()->route('admin.petugas.index')->with('success', 'selamat anda berhasil menambahkan data Petugas');

    }

    //hapus data petugas
    public function destroy_data_petugas($id_petugas){
        $petugas = Petugas::findOrFail($id_petugas);
        $petugas ->delete();

        return redirect()->route('admin.petugas.index')->with('success' , 'data berhasil di hapus');
    }


    //edit data petugas
    public function edit_data_petugas($id_petugas){
        $petugas = Petugas::findOrFail($id_petugas);
        return view('admin.petugas.edit', compact('petugas'));

    }

    //update petugas
    public function update_data_petugas(Request $request , $id_petugas){

        $validateData = $request->validate([
            'nama_petugas' => 'required|string|max:250'.$id_petugas,
            'alamat' => 'required|string',
            'kontak' => 'required|nullable'
        ]);

        $petugas = Petugas::findOrFail($id_petugas);
        if(isset($validateData['nama_petugas'])){
            $petugas->nama_petugas = $validateData['nama_petugas'];
        }
        if(isset($validateData['alamat'])){
            $petugas->alamat = $validateData['alamat'];
        }
        if(isset($validateData['kontak'])){
            $petugas->kontak = $validateData['kontak'];
        }

        $petugas->save();
        return redirect()->route('admin.petugas.index')->with('succses', 'data petugas berhasil di update');
    }


    //data Konsumen
    public function data_konsumen(){
        return view('admin.konsumen.index');
    }
}
