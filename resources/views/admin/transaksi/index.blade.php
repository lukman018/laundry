@extends('layouts.app')
@section('content')
<div class="p-3"></div>
<div class="container">
    <div class="text-center fs-4">
        <p><strong>Data Transaksi</strong></p>
    </div>
    @include('komponen.pesan')

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Jumlah</th>
                <th>Jenis Pembayaran</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
            <tbody>

            </tbody>
        </thead>
    </table>
</div>

@endsection
