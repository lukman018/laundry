<?php

namespace App\Http\Controllers;

use App\Models\JenisPembayaran;
use Illuminate\Http\Request;

class JenisPembayaranController extends Controller
{
    public function index(){
        $jenispembayaran = JenisPembayaran::paginate(10);
        return view('admin.pembayaran.index', compact('jenispembayaran'));
    }

    //create data Pembayaran
    public function create(){
        return view('admin.pembayaran.create');
    }

    public function store(Request $request){
        $request->validate([
            'nama_pembayaran'=> 'required|string|max:255',
            'deskripsi' => 'nullable|string'
        ],[
            'nama_pembayaran.required' => 'nama pembayaran harus di isi',
        ]);

        $jenispembayaran = [
            'nama_pembayaran' => $request->nama_pembayaran,
            'deskripsi' => $request->deskripsi,
        ];

        JenisPembayaran::create($jenispembayaran);
        return redirect()->route('admin.pembayaran.index')->with('success', 'data pembayaran berhasil di tambahkan');
    }

    //edit data pembayaran
    public function edit($id_jenis_pembayaran){
        $jenispembayaran = JenisPembayaran::findOrFail($id_jenis_pembayaran);
        return view('admin.pembayaran.edit', compact('jenispembayaran'));
    }

    public function update(Request $request , $id_jenis_pembayaran){
        $validateData = $request->validate([
             'nama_pembayaran'=> 'required|string|max:255'.$id_jenis_pembayaran,
            'deskripsi' => 'nullable|string'
        ]);
        $jenispembayaran = JenisPembayaran::findOrFail($id_jenis_pembayaran);
        if(isset($validateData['nama_pembayaran'])){
            $jenispembayaran->nama_pembayaran = $validateData['nama_pembayaran'];
        }if(isset($validateData['deskripsi'])){
            $jenispembayaran->deskripsi = $validateData['deskripsi'];
        }

        $jenispembayaran->save();
        return redirect()->route('admin.pembayaran.index');
    }


    //hapus data pembayaran
    public function destroy($id_jenis_pembayaran){
        $id_jenis_pembayaran = JenisPembayaran::findOrFail($id_jenis_pembayaran);
        $id_jenis_pembayaran ->delete();
        return redirect()->route('admin.pembayaran.index')->with('succes', 'data berhasil di hapus');
    }
}
