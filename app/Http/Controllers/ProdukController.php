<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class ProdukController extends Controller
{

    // Menampilkan daftar produk
    public function index(Request $request)
    {
        //untuk serach dan pagination
        $katakunci = $request->katakunci;
        $jumlahbaris = 3;
        if (strlen($katakunci)  ){
            $data = produk::where('no_produk','like', "%$katakunci%")
                 ->orWhere('nama_produk', 'like', "%$katakunci%")
                 ->orWhere('harga', 'like',"%$katakunci%")
                 ->paginate($jumlahbaris);
        }else{
            $data = produk::orderBy('no_produk', 'desc')->paginate($jumlahbaris);
        }

        return view('produk.index',compact('data')); // Mengembalikan view dengan data produk
    }

    // menampilkan about
    public function about(){
        return view('produk.about');
    }

    //start crud
    // Menampilkan form untuk menambahkan produk baru
    public function create()
    {
        return view('produk.create'); // Mengembalikan view untuk form pembuatan produk
    }

    public function konsumen(){
        return view('petugas.konsumen.index');
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

        return redirect()->route('produk.index')->with('success','selamat anda sudah menambahkan produk!');
    }

    //fungsi editnya
    public function edit($id){

        $data = Produk::findOrFail($id);
        return view('produk.edit',compact('data'));
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
        return redirect()->route('produk.index')->with('success','selamat anda berhasil edit');
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

        return redirect()->route('produk.index')->with('success','Kamu sudah mengahapus data ');
    }

    // Menyimpan produk baru ke dalam database
    //end crud

}
