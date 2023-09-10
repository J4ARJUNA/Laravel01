<!-- Modal -->
<div class="modal fade " id="EditModal{{$admin_id->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="EditModal">EDIT DATA</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="post" action="{{ route('admin_id.update', $admin_id->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul Utama</label>
                    <input type="text" class="form-control" name='judul' id="judul" value="{{ $admin_id->judul }}" >
                </div>
                <div class="mb-3">
                    <label for="logo" class="form-label">Logo</label>
                    <input type="file" class="form-control" name='logo' id="logo" value="{{ $admin_id->logo }}">
                </div>
                <div class="mb-3">
                    <label for="instagram" class="form-label">instagram</label>
                    <input type="text" class="form-control" name='instagram' id="instagram" value="{{ $admin_id->instagram }}">
                </div>
                <div class="mb-3">
                    <label for="tiktok" class="form-label">tiktok</label>
                    <input type="text" class="form-control" name='tiktok' id="tiktok" value="{{ $admin_id->tiktok }}">
                </div>
                <div class="mb-3">
                    <label for="youtube" class="form-label">youtube</label>
                    <input type="text" class="form-control" name='youtube' id="youtube" value="{{ $admin_id->youtube }}">
                </div>
                <div class="mb-3">
                    <label for="facebook" class="form-label">facebook</label>
                    <input type="text" class="form-control" name='facebook' id="facebook" value="{{ $admin_id->facebook }}">
                </div>
                <div class="mb-3">
                    <label for="kontak" class="form-label">kontak</label>
                    <input type="text" class="form-control" name='kontak' id="kontak" value="{{ $admin_id->kontak }}">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>

    </div>
    </div>
</div>
</div>


<!-- Script Bootstrap & jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"></script>







