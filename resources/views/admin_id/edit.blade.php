@extends('admin_layout/app')

@section('konten')
<div class="container-fluid py-4 mt-2 color-grey ">
    <div class="p-5 text-center bg-body-tertiary rounded-3">

        <h1 class="text-body-emphasis pb-4">Konfigurasi</h1>
        <form role="form" class="text-start">
            <div class="mb-3">
                <label for="judul" class="form-label">Judul Utama</label>
                <input type="text" class="form-control" name='judul' id="judul"  >
            </div>
            <div class="mb-3">
                <label for="logo" class="form-label">LOGO</label>
                <input type="file" class="form-control" name='logo' id="logo" >
            </div>
            <div class="mb-3">
                <label for="instagram" class="form-label">Instagram</label>
                <input type="text" class="form-control" name='instagram' id="instagram"  >
            </div>
            <div class="mb-3">
                <label for="tiktok" class="form-label">Tiktok</label>
                <input type="text" class="form-control" name='tiktok' id="tiktok"  >
            </div>
            <div class="mb-3">
                <label for="youtube" class="form-label">Youtube</label>
                <input type="text" class="form-control" name='youtube' id="youtube"  >
            </div>
            <div class="mb-3">
                <label for="facebook" class="form-label">Facebook</label>
                <input type="text" class="form-control" name='facebook' id="facebook"  >
            </div>
            <div class="mb-3">
                <label for="kontak" class="form-label">Kontak</label>
                <input type="text" class="form-control" name='kontak' id="kontak"  >
            </div>
            <div class="text-center">
                <button type="button" class="btn bg-gradient-primary w-20 my-4 mb-2">Update</button>
            </div>
        </form>
    </div>

@endsection
