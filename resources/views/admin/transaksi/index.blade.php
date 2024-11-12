@extends('layouts.app')
@section('content')
<div class="p-3"></div>
<div class="container">
    <div class="text-center fs-4">
        <p><strong>Data Transaksi</strong></p>
    </div>
    @include('komponen.pesan')

       <!-- TOMBOL TAMBAH DATA -->
       <div class="pb-3">
        <a href='{{route('admin.transaksi.create')}}' class="btn btn-primary">
            <i class='bx bxs-add-to-queue'></i> Tambah Data
        </a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-2">Tanggal</th>
                <th class="col-md-2">Jumlah</th>
                <th class="col-md-3">Jenis Pembayaran</th>
                <th class="col-md-2">Status</th>
                <th class="col-md-1">Aksi</th>
            </tr>
            <tbody>
                <?php $i = $transaksi->firstItem()  ?>
                    @foreach ( $transaksi as $transaksis)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $transaksis->tanggal }}</td>
                            <td>{{ $transaksis->jumlah }}</td>
                            <td>{{ $transaksis->jenis_pembayaran->nama_pembayaran }}</td>
                            <td>{{ $transaksis->status }}</td>
                            <td>
                                <a href="{{route('admin.transaksi.edit',$transaksis->id_transaksi)}}">Edit</a>
                                <form action="{{route('admin.transaksi.destroy',$transaksis->id_transaksi)}}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('yakin mau hapus')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                <?php $i++?>
            </tbody>
        </thead>
    </table>
    <div class="d-flex">
        {{ $transaksi->links('pagination::bootstrap-5')}}
    </div>
</div>

@endsection
