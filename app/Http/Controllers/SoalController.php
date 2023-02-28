<?php

namespace App\Http\Controllers;

use App\Models\Pilihan;
use App\Models\Soal;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $soals = Soal::all();

        return response()->json($soals, 200, [], JSON_PRETTY_PRINT);
    }

    public function soalsPilihans()
    {
        $soals = Soal::with('pilihans')->get();

        return response()->json($soals, 200, [], JSON_PRETTY_PRINT);
    }

    public function soalsJawabans() {
        $soals = Soal::with('jawabans')->get();

        return response()->json($soals, 200, [], JSON_PRETTY_PRINT);
    }

    public function soalsPilihansJawabans() {
        $soals = Soal::with('pilihans', 'jawabans')->get();

        return response()->json($soals, 200, [], JSON_PRETTY_PRINT);
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
        Soal::create([
            'soal' => $request->soal,
        ]);

        return response()->json(['message' => 'Create Soal Success'], 200);
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
