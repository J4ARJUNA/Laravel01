<?php

namespace App\Http\Controllers;

use App\Models\AdminId;
use App\Models\AdminKategori;
use App\Models\AdminMenu;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request){
        $data = AdminId::get();
        $ckategori = AdminMenu::distinct('kategori')->pluck('kategori'); // Get distinct categories

        // Ambil nilai kategori yang dipilih oleh pengguna dari permintaan
        $selectedCategory = $request->session()->get('selectedCategory', 'all');


        if ($selectedCategory === 'all') {
            // If "All Items" is selected, fetch all items without filtering by category
            $menu = AdminMenu::paginate(2);
        } else {
            // Mengambil data menu berdasarkan kategori yang dipilih
            $menu = AdminMenu::where('kategori', $selectedCategory)->paginate(2);
        }

        // Kemudian, kirim data menu_k dan selectedCategory ke tampilan yang sesuai
        return view('user.index', ['data' => $data, 'menu' => $menu, 'ckategori' => $ckategori, 'selectedCategory' => $selectedCategory]);
    }




    public function option(Request $request)
    {
        $data = AdminId::get();
        $ckategori = AdminMenu::distinct('kategori')->pluck('kategori'); // Get distinct categories

        // Ambil nilai kategori yang dipilih oleh pengguna dari permintaan
        $selectedCategory = $request->input('kategori');

        if ($selectedCategory === 'all') {
            // If "All Items" is selected, fetch all items without filtering by category
            $menu = AdminMenu::paginate(2);
        } else {
            // Mengambil data menu berdasarkan kategori yang dipilih
            $menu = AdminMenu::where('kategori', $selectedCategory)->paginate(2);
        }

        $request->session()->put('selectedCategory', $selectedCategory);

        // Kemudian, kirim data menu_k dan selectedCategory ke tampilan yang sesuai
        return view('user.index', ['data' => $data, 'menu' => $menu, 'ckategori' => $ckategori, 'selectedCategory' => $selectedCategory]);
    }

    public function show(){
        return view('user.information');
    }






}
