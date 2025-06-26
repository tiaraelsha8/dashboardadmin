<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Probis;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ProbisImport;

class ProbisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $probis = Probis::all();
        return view('backend.probis.index', compact('probis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $probis = Probis::all();
        return view('backend.probis.create', compact('probis'));
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

    public function import(Request $request)
    {

        
        //validate form
        $request->validate([
            'file' => 'required|max:2048'
        ]);

        Excel::import(new ProbisImport, $request->file('file'));
        
        //redirect to index
        return redirect()->route('probis.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
