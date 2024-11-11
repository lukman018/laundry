@extends('layouts.app')
@section('content')
@include('komponen.pesan')
<div class="p-3"></div>
<div class="container">
    <a href="{{route('admin.pembayaran.create')}}" class="btn btn-primary">Tambah Pembayaran</a>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pembayaran</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
            <tbody>
                <?php $i = $jenispembayaran->firstItem()?>
                @foreach ($jenispembayaran as $js )
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $js->nama_pembayaran }}</td>
                    <td>{{ $js->deskripsi }}</td>
                    <td>
                        <a href="{{route('admin.pembayaran.edit',$js->id_jenis_pembayaran)}}" class="btn btn-warning">Edit</a>
                        <form action="{{route('admin.pembayaran.destroy',$js->id_jenis_pembayaran)}}" method="POST" class='d-inline'>
                            <button type="submit" class="btn btn-danger" onclick="return confirm('yakin mau di hapus')">Hapus</button>
                            @method('DELETE')
                            @csrf
                        </form>
                    </td>
                </tr>
                @endforeach
                <?php $i++ ?>
            </tbody>
        </thead>
    </table>
</div>


@endsection
