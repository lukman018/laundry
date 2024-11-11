@extends('layouts.app')

@section('content')
@include('komponen.pesan')

    <div class="container">
<div class=" p-3">
    <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="card">
        <div class="card-header text-center text-white bg-dark">Produk</div>
    <div class="card-body">
        <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="no_produk">No Produk :</label>
            <div class="col-sm-10">
                <input class="form-control" type="number" name="no_produk"  id="no_produk" required>
            </div>
        </div>

        <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="nama_produk">Nama :</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="nama_produk" id="nama_produk" required>
            </div>
        </div>

        <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="harga">Harga :</label>
            <div class="col-sm-10">
                <input class="form-control" type="number" name="harga" id="harga" required>
            </div>
        </div>

        <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="gambar">Gambar Produk:</label>
            <div class="col-sm-10">
                <input class="form-control" type="file" name="gambar" id="gambar" required>
            </div>
        </div>
        <div class="col-auto mb-3">
            <button class="btn btn-primary mb-3 row" type="submit">Tambah Produk</button>
        </div>
    </div>
    </div>
    </form>
</div>
</div>
@endsection
