<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class PetugasController extends Controller
{
   public function home(){
    return view ('petugas.index');
   }

   public function index(){
    $data = Produk::paginate(10);
    return view('petugas.konsumen.index', compact('data'));
}

public function create(){
    return view('petugas.konsumen.create');
}


//validasi data untuk menambahkan crud
public function store(Request $request){

    $request->validate([
        'no_produk'=> 'required|numeric|unique:produk,no_produk',
        'nama_produk'=> 'required|string',
        'harga'=> 'required|numeric',
        'gambar'=> 'nullable|image|mimes:jpeg,png,jpg,gif|max:2050',
    ],[
        'no_produk.required'=> 'No produk wajib diisi',
        'no_produk.numeric'=> 'No produk harus angka',
        'no_produk.unique'=> 'No produk harus berbeda',
        'nama_produk.required'=> 'Masukan nama Produk',
        'harga.required'=> 'Masukan harga',
    ]);

    $data = [
        'no_produk'=> $request->no_produk,
        'nama_produk'=> $request->nama_produk,
        'harga'=> $request->harga,
    ];

    if($request->hasFile('gambar')){
        $file = $request->file('gambar');
        $filename = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('upload/'),$filename);
        $data['gambar'] = $filename;
    }else{
        $data['gambar'] = null;
    }

    Produk::create($data);

    return redirect()->route('petugas.konsumen.index')->with('success','selamat anda sudah menambahkan produk!');
}

//fungsi editnya
public function edit($id){

    $data = Produk::findOrFail($id);
    return view('petugas.konsumen.edit',compact('data'));
}


//fungsi update
public function update(Request $request, $id){
    $validateData = $request->validate([
        'no_produk'=> 'required|numeric|unique:produk,no_produk,'. $id,
        'nama_produk' => 'required|string',
        'harga' => 'required|numeric',
        'gambar'=> 'nullable|image|mimes:jpeg,png,jpg,gif|max:2050',

    ]);
//cari produk berdasarkan id
    $data = Produk::findOrFail($id);

//update produknya
//untuk mengedit satu satu

if (isset($validateData['no_produk'])){
    $data->no_produk = $validateData['no_produk'];
}
if (isset($validateData['nama_produk'])){
    $data->nama_produk = $validateData['nama_produk'];
}
if (isset($validateData['harga'])){
    $data->harga = $validateData['harga'];
}

//unruk mengupdate gambar
    if ($request->hasFile('gambar')){
        if ($data->gambar && file_exists(public_path('upload/'. $data->gambar))){
            unlink(public_path('upload/'. $data->gambar));
        }
        $file = $request->file('gambar');
        $filename = time().'.'. $file->getClientOriginalName();
        $file->move(public_path('upload/'),$filename);
        $data->gambar = $filename;
    }

    //jika gamabr tidak di upload atau gak ada
    if(!$request->hasFile('gambar')&& !$data->gambar){
        $data->gambar = null;
    }

    $data->save();
    return redirect()->route('petugas.konsumen.index')->with('success','selamat anda berhasil edit');
}


//fungsi buat hapus data
public function destroy($id){
    $item = Produk::findOrFail($id);
    if ($item->gambar){
        $image_path = public_path('upload/'.$item->gambar);
        if(file_exists($image_path)){
            unlink($image_path);
        }
    }
    $item->delete();

    return redirect()->route('petugas.konsumen.index')->with('success','Kamu sudah mengahapus data ');
}

// Menyimpan produk baru ke dalam database
//end crud

}
