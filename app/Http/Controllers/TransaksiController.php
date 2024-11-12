<?php

namespace App\Http\Controllers;

use App\Models\JenisPembayaran;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index(){
        return view('admin.transaksi.index');
    }

    public function create(){
        $jenispembayaran = JenisPembayaran::all();
        return view ('admin.transaksi.create', compact('jenispembayaran'));
    }

    public function store(Request $request){
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
        return redirect()->route('admin.pembayaran.index')->with('succes', 'data transaksi berhasil di tambah');
    }
}
