@extends('layouts.app')
@section('content')
<div class="p-3"></div>
<div class="container">
    <form action="{{route('produk.update',$data->id)}} " method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="no_produk">No Produk</label>
            <input class="form-control" type="number" name="no_produk" id="no_produk" value="{{ old('no_produk', $data->no_produk) }}" required>
        </div>
        <div class="form-group">
            <label for="nama_produk">Nama Produk</label>
            <input class="form-control" type="text" name="nama_produk" id="nama_produk" value="{{ old('nama_produk', $data->nama_produk) }}" required>
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input class="form-control" type="number" name="harga" id="harga" value="{{ old('harga', $data->harga) }}" required>
        </div>
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input class="form-control" type="file" name="gambar" id="gambar" accept="image/*">

        <!--buat munculin gambar di edit-->
            @if ($data->gambar)
                <img src="{{asset('upload/'.$data->gambar)}}" alt="gambar" width="50">
                @else
                <p>gambar Produk belum di isi</p>
            @endif
        </div>
        <div class="col-auto mb-3">
            <button class="btn btn-primary mb-3 row" type="submit">Edit Produk</button>
        </div>
    </form>
</div>
@endsection

