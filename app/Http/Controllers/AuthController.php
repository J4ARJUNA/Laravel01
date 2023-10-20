<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(){
        return view('admin_login.register');
    }

    public function registerPost(Request $request){
        $user = new User();

        $user->name = $request->name;
        $user->password = $request->password;

        $user->save();

        return back()->with('succes','Register Berhasil');
    }
    public function login(){
        return view('admin_login.login');
    }

    public function loginPost(Request $request)
    {
        $credentials = $request->only('name', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect('admin'); // Change this to your desired redirect path after login
        }

        return back()->with('error', 'Login failed. Please check your credentials.');
    }

    public function logout(){
        Auth::logout();

        return redirect()->route('login');
    }

    public function index()
    {
        $data = User::get();
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
            'name' => 'required',
            'password' => 'required'
        ], [
            'name.required' => 'Silahkan masukkan user',
            'password.required' => 'Silahkan masukkan password',
        ]);

        // Ambil nilai input dari formulir
        $name = $request->input('name');
        $password = $request->input('password');

        // Hash the password
        $hashedPassword = Hash::make($password);

        // Buat data yang akan diupdate
        $data = [
            'name' => $name,
            'password' => $hashedPassword, // Store the hashed password
        ];

        // Update data ke tabel
        User::where('id', $id)->update($data);

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
