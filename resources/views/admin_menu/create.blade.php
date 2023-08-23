

<!-- Modal -->
<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TAMBAH DATA</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="post" action="/AdminController" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    
                    <label for="nomor_induk" class="form-label">Nama Menu</label>
                    <input type="text" class="form-control" name='nomor_induk' id="nomor_induk" >
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Detail</label>
                    <input type="text" class="form-control" name='nama' id="nama" >
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Harga</label>
                    <textarea class="form-control" name="alamat"></textarea>
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Gambar</label>
                    <input type="file" class="form-control" name="foto" id="foto">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                </div>
            </form>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </div>
    </div>
</div>


