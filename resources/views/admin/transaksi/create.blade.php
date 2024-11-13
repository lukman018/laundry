@extends('layouts.app')
@section('content')
<div class="p-3"></div>
<div class="container">
    @include('komponen.pesan')
</div>
<div class="container mt-5">
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
                <label for="id_jenis_pembayaran" class="col-sm-2 col-form-label">Jenis Pembayaran</label>
                <div class="col-sm-10">
                    <select name="id_jenis_pembayaran" id="id_jenis_pembayaran" class="form-control" required>
                        @foreach($jenispembayaran as $pembayaran)
                            <option value="{{ $pembayaran->id_jenis_pembayaran }}">{{ $pembayaran->nama_pembayaran }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
                <div class="mb-3 row">
                    <label for="status" class="col-sm-2 col-form-label">status</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='status' id="status">
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
                        <a href='{{ route('admin.pembayaran.index') }}' class="btn btn-danger">KEMBALI</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
