@extends('layouts.app')

@section('content')
<div class="container mt-5">
<div class=" p-3 bg-body  shadow-sm">
    <!--Nama DIatas-->
    <div class="text-center fs-4">
        <p><strong>Data Produk</strong></p>
    </div>

    <!-- FORM PENCARIAN -->
    <div class="pb-3">
        <form class="d-flex" action="{{ route('produk.index') }}" method="get">
            <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
            <button class="btn btn-secondary" type="submit">Cari</button>
        </form>
    </div>

    <!-- TOMBOL TAMBAH DATA -->
    <div class="pb-3">
        <a href='{{ route('produk.create') }}' class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-plus-fill" viewBox="0 0 16 16">
                <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M8.5 7v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 1 0"/>
            </svg> Tambah Data
        </a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-2">No Produk</th>
                <th class="col-md-2">Nama Produk</th>
                <th class="col-md-2">Harga</th>
                <th class="col-md-2">Gambar</th>
                <th class="col-md-2 ">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = $data->firstItem() ?>
            @foreach ($data as $item)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $item->no_produk }}</td>
                <td>{{ $item->nama_produk }}</td>
                <td>{{ $item->harga }}</td>
                <td><img src="{{asset('upload/'.$item->gambar)}}" width="50"></td>
                <td>

                    <!--Edit-->
                    <a href="{{route('produk.edit',$item->id)}}" class="btn btn-warning ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                        </svg> Edit
                    </a>

                    <!--Hapus-->
                    <button type="submit" name="submit" class="btn btn-danger " onclick="confirmDelete({{$item->id}})">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">
                            <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5zm13-3H1v2h14zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
                        </svg> Delete
                    </button>
                    <form id="deleteForm-{{$item->id}}"  class='d-inline' action="{{route('produk.destroy',$item->id)}}" method="post" >
                        @csrf
                        @method('DELETE')
                    </form>

                </td>
            </tr>
            <?php $i++ ?>
            @endforeach

        </tbody>
    </table>
    <div class="d-flex ">
        {{ $data->links('pagination::bootstrap-5') }}
    </div>
</div>
</div>
    <script >
        function confirmDelete(id){
            Swal.fire({
                title: "Apakah kamu yakin ?",
                text: "Kamu tidak bisa lagi mengembalikan data ini!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus!"
            }).then((result) => {
                if (result.isConfirmed) {
                document.getElementById('deleteForm-'+id).submit();
                Swal.fire({
                title: "Deleted!",
                text: "Your file has been deleted.",
                icon: "success",
            });
            }
            });
        }
    </script>

@endsection
