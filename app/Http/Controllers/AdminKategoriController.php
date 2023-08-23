<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminKategori;

class AdminKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = AdminKategori::get();

        //render view with posts
        return view('admin_kategori.index', compact('data'));



    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin_kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'kategori'     => 'required',
            'detail_kategori'   => 'required'
        ],[
            'kategori.required' => 'silahkan masukkan kategori',
            'detail_kategori.required' => 'silahkan masukkan detail kategori',

        ]);

        //create post
        $data = [
            'kategori' => $request->input('kategori'),
            'detail_kategori' => $request->input('detail_kategori')
        ];
        //database ke tabel
        AdminKategori::create($data);

        // Redirect ke halaman yang sesuai atau tampilkan pesan sukses
        return redirect('admin_kategori')->with('success', 'Berhasil memasukkan data');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kategori = AdminKategori::findOrFail($id);
        return view('admin_kategori.edit', compact('data'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $this->validate($request, [
        'kategori' => 'required',
        'detail_kategori' => 'required'
    ],[
        'kategori.required' => 'Silahkan masukkan kategori',
        'detail_kategori.required' => 'Silahkan masukkan detail kategori',
    ]);

    // Ambil nilai input dari formulir
    $kategori = $request->input('kategori');
    $detail_kategori = $request->input('detail_kategori');

    // Buat data yang akan diupdate
    $data = [
        'kategori' => $kategori,
        'detail_kategori' => $detail_kategori
    ];

    // Update data ke tabel
    AdminKategori::where('id', $id)->update($data);

    // Redirect ke halaman yang sesuai atau tampilkan pesan sukses
    return redirect('admin_kategori')->with('success', 'Berhasil memasukkan Edit data');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
    // Cari data kategori berdasarkan ID
    $kategori = AdminKategori::find($id);

    // Jika data tidak ditemukan, kembalikan response atau tampilkan pesan
    if (!$kategori) {
        return redirect('admin_kategori')->with('error', 'Data kategori tidak ditemukan');
    }

    // Hapus data kategori
    $kategori->delete();

    // Redirect ke halaman yang sesuai atau tampilkan pesan sukses
    return redirect('admin_kategori')->with('success', 'Berhasil menghapus data kategori');
}

}
