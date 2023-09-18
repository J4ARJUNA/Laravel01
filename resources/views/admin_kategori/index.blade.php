@extends('admin_layout/app')

@section('konten')
<div class="container-fluid py-4 ">


    <div class="col-12">

        <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        + Tambah Kategori
    </button>
@extends('admin_kategori.create')

    <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">

        </div>
        <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0 ">
            <table class="table align-items-center mb-0  ">
            <thead>
                <tr>
                    <th class="text-uppercase   font-weight-bolder  ps-3 ">Kategori</th>
                    <th class="text-uppercase   font-weight-bolder  ps-3 ">Detail</th>
                    <th class="text-uppercase   font-weight-bolder  ps-3 ">Tools</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($data as $kategori)
                        <td>
                            <div class="d-flex px-2 py-1">
                                <div>

                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                <h6 class="ml-2 text-sm">{{$kategori->kategori}}</h6>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <div>

                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                <h6 class="ml-2 text-sm">{{$kategori->detail_kategori }}</h6>
                                </div>
                            </div>
                        </td>
                        <td>

                            <form method="post" action="{{ route('admin_kategori.destroy', $kategori->id) }}" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn bg-gradient-danger toast-btn" onclick="return confirm('Anda yakin ingin menghapus kategori ini?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>
</div>

<!------------------------------------------------------------------------------------->


</div>
@endsection
