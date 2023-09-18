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
                    <img src="{{asset('logo/'.$admin_id->logo)}}" alt="{{$admin_id->logo}}" width="200" srcset="">
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
                    <button type="button" data-bs-toggle="modal" data-bs-target="#EditModal{{$admin_id->id}}" class="btn bg-gradient-primary w-30 my-4 mb-2">Update</button>
                </div>
            </form>
            @endforeach
        </div>

@endsection
