
<!-- Modal -->

<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TAMBAH DATA</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="post" action="{{ route('admin_kategori.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="kategori" class="form-label"> Kategori</label>
                    <input type="text" class="form-control" name='kategori' id="kategori"  >
                </div>
                <div class="mb-3">
                    <label for="detail_kategori" class="form-label"> Detail Kategori</label>
                    <input type="text" class="form-control" name='detail_kategori' id="detail_kategori" >
                </div>

                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>


    </div>
    </div>
</div>




