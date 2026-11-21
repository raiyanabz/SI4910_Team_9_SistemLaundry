<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::latest()->get();
        return view('service.index', compact('services'));
    }

    public function create()
    {
        return view('service.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_servis' => 'required|string|max:30',
            'nama_servis' => 'required|string|max:100',
            'harga' => 'required|integer',
        ]);

        Service::create($request->only(['kode_servis', 'nama_servis', 'harga']));

        return redirect()->route('service.index')
            ->with('success', 'Data servis berhasil ditambahkan!');
    }

    public function show(Service $service)
    {
        return view('service.show', compact('service'));
    }

    public function edit(Service $service)
    {
        return view('service.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'kode_servis' => 'required|string|max:30',
            'nama_servis' => 'required|string|max:100',
            'harga' => 'required|integer',
        ]);

        $service->update($request->only(['kode_servis', 'nama_servis', 'harga']));

        return redirect()->route('service.index')
            ->with('success', 'Data servis berhasil diperbarui!');
    }

    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()->route('service.index')
            ->with('success', 'Data servis berhasil dihapus!');
    }
}