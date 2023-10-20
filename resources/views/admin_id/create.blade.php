

<!-- Modal -->
<div class="modal fade " id="CreateModal" tabindex="-1" aria-labelledby="CreateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="CreateModalLabel">TAMBAH DATA</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="post" action="{{route ('admin_id.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">

                    <label for="judul" class="form-label">Nama judul</label>
                    <input type="text" class="form-control" name="judul" id="judul" >
                </div>
                <div class="mb-3">

                    <label for="paragraph" class="form-label">Paragraph</label>
                    <input type="text" class="form-control" name="paragraph" id="paragraph" >
                </div>
                <div class="mb-3">
                    <label for="logo" class="form-label">logo</label>
                    <input type="file" class="form-control" name='logo' id="logo" >
                </div>
                <div class="mb-3">

                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" >
                </div>
                <div class="mb-3">
                    <label for="instagram" class="form-label">Instagram</label>
                    <textarea class="form-control" name="instagram" id="instagram"></textarea>
                </div>
                <div class="mb-3">
                    <label for="tiktok" class="form-label">tiktok</label>
                    <textarea class="form-control" name="tiktok" id="tiktok"></textarea>
                </div>
                <div class="mb-3">
                    <label for="youtube" class="form-label">youtube</label>
                    <textarea class="form-control" name="youtube" id="youtube"></textarea>
                </div>
                <div class="mb-3">
                    <label for="facebook" class="form-label">facebook</label>
                    <textarea class="form-control" name="facebook" id="facebook"></textarea>
                </div>
                <div class="mb-3">
                    <label for="kontak" class="form-label">kontak</label>
                    <textarea class="form-control" name="kontak" id="kontak"></textarea>
                </div>
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary">SIMPAN</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
    </form>
    </div>
    </div>
</div>


