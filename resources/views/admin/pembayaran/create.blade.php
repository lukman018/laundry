@extends('layouts.app')
@section('content')
<div class="container">
    <div class="p-3"> </div>
    @include('komponen.pesan')
    <form action="{{route('admin.pembayaran.store')}}" method="post">
        @csrf
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label for="nama_pembayaran" class="col-sm-2 col-form-label">Nama Pembayaran</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama_pembayaran'  id="nama_pembayaran">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='deskripsi' id="deskripsi">
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
