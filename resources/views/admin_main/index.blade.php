@extends('admin_layout/app')

@section('konten')
<div class="container-fluid py-4 mt-2 color-grey ">
    <div class="p-5 text-center bg-body-tertiary rounded-3">
        <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 ">
            <i class="material-icons opacity-10">person</i>
        </div>
        <h1 class="text-body-emphasis pb-4">Akun Anda</h1>
        <form role="form" class="text-start">
            <h4>Username</h4>
            <div class="input-group input-group-outline my-3">

                <input type="email" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
            </div>
            <h4>Password</h4>
            <div class="input-group input-group-outline mb-3">
                <input type="password" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
            </div>
            <div class="text-center">
                <button type="button" class="btn bg-gradient-primary w-100 my-4 mb-2">Update</button>
            </div>
        </form>
    </div>

@endsection
