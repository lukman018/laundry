@extends('layouts.app')
@section('content')
    <form action="{{route('admin.transaksi.store')}}" method="POST">
        @csrf
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name='tanggal'  id="tanggal">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='jumlah' id="jumlah">
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
@endsection
