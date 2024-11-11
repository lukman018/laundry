@extends('layouts.app')
@section('content')
<div class="p-3"></div>
<div class="container">
    <form action="{{route('admin.petugas.update' ,$petugas->id_petugas)}} " method="POST" enctype="multipart/form-petugas">
        @csrf
        @method('PUT')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="nama_petugas" class="col-sm-2 col-form-label">Nama Petugas</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama_petugas'  id="nama_petugas" value="{{old('nama_petugas',$petugas->nama_petugas)}}" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='alamat' id="alamat" value="{{old('alamat',$petugas->alamat)}}" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="kontak" class="col-sm-2 col-form-label">Kontak</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='kontak'  id="kontak" value="{{old('kontak',$petugas->kontak)}}" required>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
                <a href='{{ route('admin.petugas.index') }}' class="btn btn-danger">KEMBALI</a>
            </div>
        </div>
    </div>
    </form>
</div>
@endsection
