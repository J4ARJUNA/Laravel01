<?php

namespace App\Http\Controllers;

use App\Models\AdminKategori;
use Illuminate\Http\Request;
use App\Models\AdminMenu;
use PhpParser\Node\Stmt\Return_;

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

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori = AdminMenu::findOrFail($id);
        return view('admin_kategori.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */

public function update(Request $request, string $id)
{
    $this->validate($request, [
        'menu' => 'required',
        'detail_menu' => 'required',
        'harga' => 'required',
        'kategori' => 'required',
        'gambar' => 'nullable|mimes:jpeg,jpg,png', // Make 'gambar' field optional
    ], [
        'menu.required' => 'Silahkan masukkan menu',
        'detail_menu.required' => 'Silahkan masukkan detail menu',
        'harga.required' => 'Silahkan masukkan harga',
        'kategori.required' => 'Silahkan masukkan kategori',
        'gambar.mimes' => 'File gambar harus berformat jpeg, jpg, atau png',
    ]);

    // Retrieve the existing menu record
    $menu = AdminMenu::find($id);

    if (!$menu) {
        // Handle the case where the menu item with the given ID is not found
        return redirect('admin_menu')->with('error', 'Menu not found');
    }

    // Check if a new 'gambar' file was uploaded
    if ($request->hasFile('gambar')) {
        // Upload and save the new 'gambar' file
        $imageName = time() . '.' . $request->file('gambar')->getClientOriginalExtension();
        $request->file('gambar')->move(public_path('gambar'), $imageName);
        $menu->gambar = $imageName;
    }

    // Update only the fields that were submitted in the form
    $menu->menu = $request->input('menu');
    $menu->detail_menu = $request->input('detail_menu');
    $menu->kategori = AdminKategori::find($request->input('kategori'))->kategori;

    // Convert and update the harga field
    $inputHarga = $request->input('harga');
    $harga = (float) str_replace('.', '', $inputHarga);
    $menu->harga = $harga;

    // Save the updated menu item
    $menu->save();

    // Redirect with success message
    return redirect('admin_menu')->with('success', 'Data berhasil diperbarui');
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = AdminMenu::find($id);

        if (!$data){
            return redirect('admin_menu')->with('error','Data tidak ditemukan');
        }

        $data->delete();

        return redirect('admin_menu')->with('succes','Data berhasil dihapus');
    }
}
