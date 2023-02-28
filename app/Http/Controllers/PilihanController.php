<?php

namespace App\Http\Controllers;

use App\Models\Pilihan;
use Illuminate\Http\Request;

class PilihanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pilihans = Pilihan::all();

        return response()->json($pilihans, 200, [], JSON_PRETTY_PRINT);
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
        Pilihan::create([
            'id_soal' => $request->id_soal,
            'pilihan' => $request->pilihan,
            'nama_pilihan' => $request->nama_pilihan,
        ]);

        return response()->json(['message' => 'Create Pilihan Success'], 200);
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
