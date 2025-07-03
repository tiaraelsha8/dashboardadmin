<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Support\Facades\Storage;

class BeritabackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = Berita::latest()->get();
        return view('backend.berita.index', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate form
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        //upload image
        $image = $request->file('foto');
        $image->storeAs('berita', $image->hashName());

        //create berita
        Berita::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'penulis' => $request->penulis,
            'foto' => $image->hashName(),
        ]);

        //redirect to index
        return redirect()->route('berita.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        //get by ID
        $berita = Berita::findOrFail($id);

        //delete image
        Storage::delete('berita/' . $berita->foto);

        //delete image
        $berita->delete();

        //redirect to index
        return redirect()->route('berita.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
