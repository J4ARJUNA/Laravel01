

<!-- Modal -->
<div class="modal fade " id="CreateModal" tabindex="-1" aria-labelledby="CreateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="CreateModalLabel">TAMBAH DATA</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="post" action="{{route ('admin_menu.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">

                    <label for="menu" class="form-label">Nama Menu</label>
                    <input type="text" class="form-control" name="menu" id="menu" >
                </div>
                <div class="mb-3">
                    <label for="detail_menu" class="form-label">Detail Menu</label>
                    <textarea class="form-control" name="detail_menu" id="detail_menu"></textarea>
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="text" class="form-control" name='harga' id="harga" >
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" class="form-control" name='gambar' id="gambar" >
                </div>
                <div class="mb-3">
                    <label for="kategoriSelect" class="form-label">Pilih Kategori</label>
                    <select class="form-control" id="kategoriSelect">
                        <option value="" disabled selected>Pilih Kategori</option>
                        @foreach ($admin_kategoris as $item)
                            <option value="{{ $item->id }}">{{ $item->kategori }}</option>
                        @endforeach

                    </select>
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


