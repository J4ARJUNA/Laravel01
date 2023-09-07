<?php

namespace App\Http\Controllers;

use App\Models\AdminId;
use Illuminate\Http\Request;

class AdminIdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin_id.edit');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $kategori = AdminId::findOrFail($id);
        return view('admin_id.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'logo' => 'required',
            'instagram' => 'required',
            'tiktok' => 'required',
            'youtube' => 'required',
            'facebook' => 'required',
            'kontak' => 'required',
        ]);

        // Ambil nilai input dari formulir
        $judul = $request->input('judul');
        $logo = $request->input('logo');
        $instagram = $request->input('instagram');
        $tiktok = $request->input('tiktok');
        $youtube = $request->input('youtube');
        $facebook = $request->input('facebook');
        $kontak = $request->input('kontak');

        // Buat data yang akan diupdate
        $data = [
            'judul' => $judul,
            'logo' => $logo,
            'instagram' => $instagram,
            'tiktok' => $tiktok,
            'youtube' => $youtube,
            'facebook' => $facebook,
            'kontak' => $kontak,
        ];

        // Update data ke tabel
        AdminId::where('id', $id)->update($data);

        // Redirect ke halaman yang sesuai atau tampilkan pesan sukses
        return redirect('admin_kategori')->with('success', 'Berhasil memasukkan Edit data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
