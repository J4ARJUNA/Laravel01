@extends('admin_layout/app')

@section('konten')
<div class="container-fluid py-4 ">


    <div class="col-12">

        <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        + Tambah Data
    </button>
@extends('admin_menu.create')

    <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">

        </div>
        <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0 ">
            <table class="table align-items-center mb-0 ">
            <thead>
                <tr>
                <th class="text-uppercase  ">Gambar Menu</th>
                <th class="text-uppercase ">Nama Menu</th>
                <th class="text-center text-uppercase  ">Detail</th>
                <th class="text-center text-uppercase  ">Harga</th>
                <th class="text-secondary text-uppercase ">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>
                    <div class="d-flex px-2 py-1">

                    <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">John Michael</h6>
                        <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                    </div>
                    </div>
                </td>
                <td>
                    <p class="text-xs font-weight-bold mb-0">Manager</p>
                    <p class="text-xs text-secondary mb-0">Organization</p>
                </td>
                <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-success">Online</span>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                </td>
                <td class="align-middle">
                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                    Edit
                    </a>
                </td>
                </tr>

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
