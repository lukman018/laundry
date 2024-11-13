<?php

namespace App\Http\Controllers;

use App\Models\JenisPembayaran;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index(){
        $transaksi = Transaksi::paginate(10);
        return view('admin.transaksi.index', compact('transaksi'));
    }

    //create
    public function create(){
        $jenispembayaran = JenisPembayaran::all();
        return view ('admin.transaksi.create', compact('jenispembayaran'));
    }

    //store
    public function store(Request $request){
        dd($request->all());
        $request->validate([
                'tanggal' => 'required|date',
                'jumlah' => 'required|numeric',
                'id_jenis_pembayaran'=>'required|exists:jenis_pembayaran,id_jenis_pembayaran',
                'status' => 'nullable|string',
        ],[
            'tanggal.required' => 'Tolong masukan tanggal transaksi',
            'jumlah.required' => 'Wajib masukan jumlah nya',
        ]);
        $transaksi = [
            'tanggal' => $request->tanggal,
            'jumlah' => $request->jumlah,
            'id_jenis_pembayaran' => $request->id_jenis_pembayaran,
            'status' => $request->status,
        ];
        Transaksi::create($transaksi);
        return redirect()->route('admin.transaksi.index')->with('succes', 'data transaksi berhasil di tambah');
    }

    //edit
    public function edit($id_transaksi){
        return view('admin.transaksi.edit');
    }

    //destroy
    public function destroy($id_transaksi){
        $id_transaksi = Transaksi::findOrFail($id_transaksi);
        $id_transaksi -> delete();
        return redirect()->route('admin.transaksi.index')->with('succes', 'data berhasil di hapus');
    }
}
