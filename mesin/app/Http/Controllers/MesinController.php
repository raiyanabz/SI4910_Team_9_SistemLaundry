<?php

namespace App\Http\Controllers;

use App\Models\Mesin;
use Illuminate\Http\Request;

class MesinController extends Controller
{
    public function index()
    {
        $mesins = Mesin::latest()->get();
        return view('mesins.index', compact('mesins'));
    }

    public function create()
    {
        return view('mesins.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_mesin' => 'required|string|max:50',
            'merek' => 'required|string|max:100',
            'model' => 'required|string|max:100',
        ]);

        Mesin::create($request->only(['kode_mesin', 'merek', 'model']));

        return redirect()->route('mesins.index')
            ->with('success', 'Data mesin berhasil ditambahkan!');
    }

    public function show(Mesin $mesin)
    {
        return view('mesins.show', compact('mesin'));
    }

    public function edit(Mesin $mesin)
    {
        return view('mesins.edit', compact('mesin'));
    }

    public function update(Request $request, Mesin $mesin)
    {
        $request->validate([
            'kode_mesin' => 'required|string|max:50',
            'merek' => 'required|string|max:100',
            'model' => 'required|string|max:100',
        ]);

        $mesin->update($request->only(['kode_mesin', 'merek', 'model']));

        return redirect()->route('mesins.index')
            ->with('success', 'Data mesin berhasil diperbarui!');
    }

    public function destroy(Mesin $mesin)
    {
        $mesin->delete();

        return redirect()->route('mesins.index')
            ->with('success', 'Data mesin berhasil dihapus!');
    }
}