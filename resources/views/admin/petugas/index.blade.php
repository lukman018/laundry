@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="p-3 bg-body  shadow-sm">
        <div class="text-center fs-4">
            <p><strong>Data Petugas</strong></p>
        </div>
        <!-- FORM PENCARIAN -->
    <div class="pb-3">
        <form class="d-flex" action="{{ route('admin.petugas.index') }}" method="get">
            <input class="form-control me-1" type="search" name="cari_data_petugas" value="{{ Request::get('cari_data_petugas') }}" placeholder="Masukkan kata kunci" aria-label="Search">
            <button class="btn btn-secondary" type="submit">Cari</button>
        </form>
    </div>


        <!-- TOMBOL TAMBAH DATA -->
    <div class="pb-3">
        <a href='{{route('admin.petugas.create')}}' class="btn btn-primary">
            <i class='bx bxs-add-to-queue'></i> Tambah Data
        </a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-2">Nama Petugas</th>
                <th class="col-md-2">Alamat</th>
                <th class="col-md-2">Kontak</th>
                <th class="col-md-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = $petugas->firstItem() ?>
            @foreach ($petugas as $petugass)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $petugass->nama_petugas }}</td>
                <td>{{ $petugass->alamat }}</td>
                <td>{{ $petugass->kontak}}</td>
                <td>

                    <!--Edit-->
                    <a href="{{route('admin.petugas.edit',$petugass->id_petugas)}}" class="btn btn-warning ">
                        <i class='bx bxs-edit'></i> Edit
                    </a>

                    <!--Hapus-->
                    <button type="submit" name="submit" class="btn btn-danger " onclick="confirmDelete({{$petugass->id_petugas}})">
                        <i class='bx bxs-trash-alt'></i> Delete
                    </button>
                    <form id="deleteForm-{{$petugass->id_petugas}}"  class='d-inline' action="{{route('admin.petugas.destroy',$petugass->id_petugas)}}" method="post" >
                        @csrf
                        @method('DELETE')
                    </form>

                </td>
            </tr>
            <?php $i++ ?>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex">
        {{ $petugas->links('pagination::bootstrap-5') }}
    </div>
    </div>
</div>
<script >
    function confirmDelete(id_petugas){
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
            document.getElementById('deleteForm-'+id_petugas).submit();
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


