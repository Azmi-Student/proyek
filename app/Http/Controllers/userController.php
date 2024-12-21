<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    // Validasi data
    $validatedData = $request->validate([
        'username' => 'required|string|max:255',
        'fullname' => 'required|string|max:255',
        'ttl' => 'nullable|date',
        'gol_darah' => 'nullable|string|max:3',
        'email' => 'required|email|unique:users,email,' . $id,
        'no_telp' => 'nullable|string|max:15',
        'nik' => 'nullable|string|max:16',
        'alamat' => 'nullable|string|max:255',
    ]);

    // Cari pengguna berdasarkan ID
    $user = \App\Models\User::findOrFail($id);

    // Perbarui data pengguna
    $user->update([
        'username' => $validatedData['username'],
        'name' => $validatedData['fullname'],
        'ttl' => $validatedData['ttl'],
        'gol_darah' => $validatedData['gol_darah'],
        'email' => $validatedData['email'],
        'no_telp' => $validatedData['no_telp'],
        'nik' => $validatedData['nik'],
        'alamat' => $validatedData['alamat'],
    ]);

    // Redirect dengan pesan sukses
    return redirect()->back()->with('success', 'Profil berhasil diperbarui!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
