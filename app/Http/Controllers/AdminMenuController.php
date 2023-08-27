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
        return view('admin_menu.index');
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



        // Upload and save the image
        $imageName = time() . '.' . $request->gambar->getClientOriginalExtension();
        $request->gambar->move(public_path('gambar'), $imageName);

        // Create data array
        $data = [
            'menu' => $request->input('menu'), // Provide the 'menu' value
            'detail_menu' => $request->input('detail_menu'),
            'harga' => $request->input('harga'),
            'kategori' => $request->input('kategori'),
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
