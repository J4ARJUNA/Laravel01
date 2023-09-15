
<!-- Modal -->
<div class="modal fade " id="EditModal{{$menu->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EDIT DATA</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="post" action="{{ route('admin_menu.update',$menu->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="menu" class="form-label">menu</label>
                    <input type="text" class="form-control" name='menu' id="menu" value="{{ $menu->menu }}" >
                </div>
                <div class="mb-3">
                    <label for="detail_menu" class="form-label">Detail menu</label>
                    <input type="text" class="form-control" name='detail_menu' id="detail_menu" value="{{ $menu->detail_menu }}">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">harga</label>
                    <input type="text" class="form-control" name='harga' id="harga" value="{{ $menu->harga }}">
                </div>

                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select class="form-control" name="kategori" id="kategori">
                        <option value="" disabled>Pilih Kategori</option>
                        @foreach ($admin_kategoris as $kategoriOption)
                            <option value="{{ $kategoriOption->id }}" {{ $kategoriOption->id == $menu->kategori ? 'selected' : '' }}>
                                {{ $kategoriOption->kategori }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" class="form-control" name='gambar' id="gambar" value="{{ $menu->gambar }}">
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







