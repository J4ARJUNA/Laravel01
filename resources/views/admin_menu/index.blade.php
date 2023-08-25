@extends('admin_layout/app')

@section('konten')
<div class="container-fluid py-4 ">


    <div class="col-12">

        <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#CreateModal">
        + Tambah Data
    </button>
@extends('admin_menu.create')

<div class="card my-4">
    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">

    </div>
    <div class="card-body px-0 pb-2">
    <div class="table-responsive p-0 ">
        <table class="table align-items-center mb-0  ">
        <thead>
            <tr>
                <th class="text-uppercase   font-weight-bolder  ps-3 ">Gambar</th>
                <th class="text-uppercase   font-weight-bolder  ps-3 ">Menu</th>
                <th class="text-uppercase   font-weight-bolder  ps-3 ">Detail</th>
                <th class="text-uppercase   font-weight-bolder  ps-3 ">Harga</th>
                <th class="text-uppercase   font-weight-bolder  ps-3 ">Kategori</th>

            </tr>
        </thead>
        <tbody>

        </tbody>
        </table>
    </div>
    </div>
</div>
    </div>
</div>

<!------------------------------------------------------------------------------------->


</div>
@endsection
