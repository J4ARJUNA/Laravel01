<?php

namespace App\Http\Controllers;

use App\Models\AdminKategori;
use Illuminate\Http\Request;
use App\Models\AdminMenu;
class AdminMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin_kategoris = AdminKategori::all();
        $data = AdminMenu::get();
        return view('admin_menu.index', compact('admin_kategoris','data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $admin_kategoris = AdminKategori::all();
        return view('admin_menu.create', compact('admin_kategoris'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'menu' => 'required',
            'detail_menu' => 'required',
            'harga' => 'required',
            'kategori' => 'required',
            'gambar' => 'required|mimes:jpeg,jpg,png',
        ], [
            'menu.required' => 'Silahkan masukkan menu',
            'detail_menu.required' => 'Silahkan masukkan detail menu',
            'harga.required' => 'Silahkan masukkan harga',
            'kategori.required' => 'Silahkan masukkan kategori',
            'gambar.required' => 'Silahkan masukkan gambar',
            'gambar.mimes' => 'File gambar harus berformat jpeg, jpg, atau png',
        ]);

        // Mendapatkan ID kategori berdasarkan nilai yang dikirim dari form
        $kategoriId = $request->input('kategori');

        // Menemukan objek kategori berdasarkan ID
        $kategori = AdminKategori::find($kategoriId);
        // Menghapus tanda titik dan mengonversi string ke numerik

        // Mengambil input harga dalam bentuk string (misal: '15.000')
        $inputHarga = $request->input('harga');

        // Menghapus tanda titik dan mengonversi string ke numerik
        $harga = (float) str_replace('.', '', $inputHarga);

        // Upload and save the image
        $imageName = time() . '.' . $request->file('gambar')->getClientOriginalExtension();
        $request->file('gambar')->move(public_path('gambar'), $imageName);

        // Create data array
        $data = [
            'menu' => $request->input('menu'),
            'detail_menu' => $request->input('detail_menu'),
            'harga' => $harga,
            'kategori' => $kategori->kategori,
            'gambar' => $imageName,
        ];

        // Insert data into the database
        AdminMenu::create($data);

        // Redirect with success message
        return redirect('admin_menu')->with('success', 'Data berhasil ditambahkan');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
