@extends('admin_layout/app')

@section('konten')
<div class="container-fluid py-4 ">


    <div class="col-12">
    @extends('admin_id.edit')
    <div class="container-fluid py-4 mt-2 color-grey ">
        <div class="p-5 text-center bg-body-tertiary rounded-3">
            <h1 class="text-body-emphasis pb-4">Konfigurasi Halaman Anda</h1>
            @foreach ($data as $admin_id)


            <form role="form" class="text-start">
                <h5>Judul Utama</h5>
                <div class="input-group input-group-outline my-3">

                    <input type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" value="{{$admin_id->judul}}" readonly>
                </div>
                <h5>Logo</h5>
                <div class="input-group input-group-outline my-3">

                    <input type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" value="{{$admin_id->logo}}" readonly>
                </div>
                <h5>Instagram</h5>
                <div class="input-group input-group-outline my-3">

                    <input type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" value="{{$admin_id->instagram}}" readonly>
                </div>
                <h5>Tiktok</h5>
                <div class="input-group input-group-outline my-3">

                    <input type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" value="{{$admin_id->tiktok}}" readonly>
                </div>
                <h5>Youtube</h5>
                <div class="input-group input-group-outline my-3">

                    <input type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" value="{{$admin_id->youtube}}" readonly>
                </div>
                <h5>Facebook</h5>
                <div class="input-group input-group-outline my-3">

                    <input type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" value="{{$admin_id->facebook}}" readonly>
                </div>
                <h5>Kontak</h5>
                <div class="input-group input-group-outline my-3">

                    <input type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" value="{{$admin_id->kontak}}" readonly>
                </div>
                <div class="text-center">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#EditModal{{$admin_id->id}}" class="btn bg-gradient-primary w-100 my-4 mb-2">Update</button>
                </div>
            </form>
            @endforeach
        </div>

    <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">

        </div>
        <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0 ">
            <table class="table align-items-center mb-0  ">
            <thead>
                <tr>
                    <th class="text-uppercase   font-weight-bolder  ps-3 ">Judul Utama</th>
                    <th class="text-uppercase   font-weight-bolder  ps-3 ">Logo</th>
                    <th class="text-uppercase   font-weight-bolder  ps-3 ">Instagram</th>
                    <th class="text-uppercase   font-weight-bolder  ps-3 ">Tiktok</th>
                    <th class="text-uppercase   font-weight-bolder  ps-3 ">Youtube</th>
                    <th class="text-uppercase   font-weight-bolder  ps-3 ">Facebook</th>
                    <th class="text-uppercase   font-weight-bolder  ps-3 ">Kontak</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($data as $admin_id)

                        <td>
                            <div class="d-flex px-2 py-1">
                                <div class="d-flex flex-column justify-content-center">
                                <h6 class="ml-2 text-sm">{{$admin_id->judul}}</h6>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <div class="d-flex flex-column justify-content-center">
                                <h6 class="ml-2 text-sm">{{$admin_id->logo}}</h6>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <div class="d-flex flex-column justify-content-center">
                                <h6 class="ml-2 text-sm">{{$admin_id->instagram}}</h6>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <div class="d-flex flex-column justify-content-center">
                                <h6 class="ml-2 text-sm">{{$admin_id->tiktok}}</h6>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <div class="d-flex flex-column justify-content-center">
                                <h6 class="ml-2 text-sm">{{$admin_id->youtube}}</h6>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <div class="d-flex flex-column justify-content-center">
                                <h6 class="ml-2 text-sm">{{$admin_id->facebook}}</h6>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <div class="d-flex flex-column justify-content-center">
                                <h6 class="ml-2 text-sm">{{$admin_id->kontak}}</h6>
                                </div>
                            </div>
                        </td>


                    </tr>
                @endforeach
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
