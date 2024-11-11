@extends('layouts.app')
@section('content')
<div class="p-3"></div>
<div class="container ">
    <form action="{{route('admin.pembayaran.update',$jenispembayaran->id_jenis_pembayaran)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label for="nama_pembayaran" class="col-sm-2 col-form-label">Nama Pembayaran</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name='nama_pembayaran'  id="nama_jenispembayaran" value="{{old('nama_pembayaran',$jenispembayaran->nama_pembayaran)}}" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="deskripsi" class="col-sm-2 col-form-label">deskripsi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='deskripsi' id="deskripsi" value="{{old('deskripsi',$jenispembayaran->deskripsi)}}" required>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
                <a href='{{ route('admin.pembayaran.index') }}' class="btn btn-danger">KEMBALI</a>
            </div>
        </div>
    </div>
</form>
</div>
@endsection
