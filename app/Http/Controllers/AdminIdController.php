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
        $data = AdminId::get();

        //render view with posts
        return view('admin_id.index', compact('data'));
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
    // AdminIdController.php

// Show the edit form
public function edit($id)
{
    $admin_id = AdminId::find($id);
    return view('admin_id.edit', compact('admin_id'));
}

// Update the data
// AdminIdController.php

public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Assuming 'logo' is an image file
            'instagram' => 'nullable|string|max:255',
            'tiktok' => 'nullable|string|max:255',
            'youtube' => 'nullable|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'kontak' => 'nullable|string|max:255',
        ]);

        // Find the admin record by ID
        $admin = AdminId::findOrFail($id);

        // Update the admin record with the validated data
        $admin->update([
            'judul' => $validatedData['judul'],
            'instagram' => $validatedData['instagram'],
            'tiktok' => $validatedData['tiktok'],
            'youtube' => $validatedData['youtube'],
            'facebook' => $validatedData['facebook'],
            'kontak' => $validatedData['kontak'],
        ]);

        // Handle the logo file upload if provided
        if ($request->hasFile('logo')) {
            $imageName = time() . '.' . $request->file('logo')->getClientOriginalExtension();
            $request->file('logo')->move(public_path('logo'), $imageName);
            $admin->logo = $imageName;
            $admin->save();
        }

        // Redirect back to the admin profile page or wherever you want
        return redirect()->route('admin_id.index'); // Replace 'admin.profile' with the actual route name
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
