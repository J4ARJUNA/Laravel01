<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Admin::get();
        return view('admin.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

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
        $this->validate($request, [
            'user_admin' => 'required',
            'password_admin' => 'required'
        ], [
            'user_admin.required' => 'Silahkan masukkan user',
            'password_admin.required' => 'Silahkan masukkan password',
        ]);

        // Ambil nilai input dari formulir
        $user_admin = $request->input('user_admin');
        $password_admin = $request->input('password_admin');

        // Hash the password
        $hashedPassword = Hash::make($password_admin);

        // Buat data yang akan diupdate
        $data = [
            'user_admin' => $user_admin,
            'password_admin' => $hashedPassword, // Store the hashed password
        ];

        // Update data ke tabel
        Admin::where('id', $id)->update($data);

        // Redirect ke halaman yang sesuai atau tampilkan pesan sukses
        return redirect()->route('admin.index')->with('success', 'Berhasil memasukkan Edit data');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
