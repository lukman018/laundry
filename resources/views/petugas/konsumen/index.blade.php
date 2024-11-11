@extends('layouts.petugas')
<div class="container mt-5">
    <div class="pt-5"></div>
    <div class=" p-3 bg-body  shadow-sm">
        <!-- FORM PENCARIAN -->
        <div class="pb-3">
            <form class="d-flex" action="{{ route('petugas.konsumen.index') }}" method="get">
                <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                <button class="btn btn-secondary" type="submit">Cari</button>
            </form>
        </div>

        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-3">
            <a href='{{ route('petugas.konsumen.create') }}' class="btn btn-primary">
                <i class='bx bxs-add-to-queue'></i> Tambah Data
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
                        <a href="{{route('petugas.konsumen.edit',$item->id)}}" class="btn btn-warning ">
                            <i class='bx bxs-edit'></i> Edit
                        </a>

                        <!--Hapus-->
                        <button type="submit" name="submit" class="btn btn-danger " onclick="confirmDelete({{$item->id}})">
                            <i class='bx bxs-trash-alt'></i> Delete
                        </button>
                        <form id="deleteForm-{{$item->id}}"  class='d-inline' action="{{route('petugas.konsumen.destroy',$item->id)}}" method="post" >
                            @csrf
                            @method('DELETE')
                        </form>

                    </td>
                </tr>
                <?php $i++ ?>
                @endforeach

            </tbody>
        </table>
        {{ $data->links() }}
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
