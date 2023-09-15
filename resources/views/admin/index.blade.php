@extends('admin_layout/app')

@section('konten')
<div class="container-fluid py-4 mt-2 color-grey ">
    <div class="p-5 text-center bg-body-tertiary rounded-3">
        <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 ">
            <i class="material-icons opacity-10">person</i>
        </div>
        <h1 class="text-body-emphasis pb-4">Akun Anda</h1>
        @foreach ($data as $admin)
        <form role="form" class="text-start" method="POST" action="{{ route('admin.update', ['id' => $admin->id]) }}">
            @method('PUT')
            @csrf
            <h4>Username</h4>
            <div class="input-group input-group-outline mb-3">
                <input name="user_admin" value="{{ $admin->user_admin }}" type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
            </div>


            <h4>Password</h4>
            <div class="input-group input-group-outline mb-3">
                <input name="password_admin" value="{{ $admin->password_admin }}" type="password" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
            </div>




            <div class="text-center">
                <button type="submit" class="btn bg-gradient-primary w-30 my-4 mb-2">Update</button>
            </div>
        </form>
    @endforeach


    </div>


@endsection
