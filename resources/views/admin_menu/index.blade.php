@extends('admin_layout/app')

@section('konten')
<div class="container-fluid py-4 ">


    <div class="col-12">

        <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#CreateModal">
        + Tambah Data
    </button>
@extends('admin_menu.create')

<div class="card my-4">
    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">

    </div>
    <div class="card-body px-0 pb-2">
    <div class="table-responsive p-0 ">
        <table class="table align-items-center mb-0  ">
        <thead>
            <tr>
                <th class="text-uppercase   font-weight-bolder  ps-3 ">Gambar</th>
                <th class="text-uppercase   font-weight-bolder  ps-3 ">Menu</th>
                <th class="text-uppercase   font-weight-bolder  ps-3 ">Detail</th>
                <th class="text-uppercase   font-weight-bolder  ps-3 ">Harga</th>
                <th class="text-uppercase   font-weight-bolder  ps-3 ">Kategori</th>
                <th class="text-uppercase   font-weight-bolder  ps-3 ">TOOLS</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($data as $menu)
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div>

                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <img src="{{ asset('gambar/'.$menu->gambar)}}" alt="{{$menu->menu}}" width="200">
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div>

                            </div>
                            <div class="d-flex flex-column justify-content-center">
                            <h6 class="ml-2 text-sm">{{$menu->menu}}</h6>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div>

                            </div>
                            <div class="d-flex flex-column justify-content-center">
                            <h6 class="ml-2 text-sm">{{$menu->detail_menu}}</h6>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div>

                            </div>
                            <div class="d-flex flex-column justify-content-center">
                            <h6 class="ml-2 text-sm">Rp : <img src="" alt="" srcset="">{{$menu->harga}}</h6>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div>

                            </div>
                            <div class="d-flex flex-column justify-content-center">
                            <h6 class="ml-2 text-sm">{{$menu->kategori}}</h6>
                            </div>
                        </div>
                    </td>
                    <td>
                        <button type="button" class="btn bg-gradient-warning  toast-btn" data-bs-toggle="modal" data-bs-target="#EditModal{{$menu->id}}">
                            Edit
                        </button >

                        @include('admin_menu.edit')
                        <form method="post" action="{{ route('admin_menu.destroy', $menu->id) }}" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn bg-gradient-danger toast-btn" onclick="return confirm('Anda yakin ingin menghapus menu ini?')">Delete</button>
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
