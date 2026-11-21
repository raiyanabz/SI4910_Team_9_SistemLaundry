@extends('layouts.app')

@section('title', 'Daftar Mesin')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-semibold">Daftar Mesin</h1>
        <a href="{{ route('mesins.create') }}" class="bg-blue-600 text-white py-2 px-6 rounded-full hover:bg-blue-700">
            Tambah Mesin
        </a>
    </div>

    <div class="bg-white p-4 rounded-lg shadow overflow-x-auto">
        <table class="w-full border-collapse border">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border p-3 text-left">Kode Mesin</th>
                    <th class="border p-3 text-left">Merek</th>
                    <th class="border p-3 text-left">Model</th>
                    <th class="border p-3 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($mesins as $mesin)
                    <tr>
                        <td class="border p-3">{{ $mesin->kode_mesin }}</td>
                        <td class="border p-3">{{ $mesin->merek }}</td>
                        <td class="border p-3">{{ $mesin->model }}</td>
                        <td class="border p-3">
                            <div class="flex items-center gap-4">
                                <a href="{{ route('mesins.show', $mesin) }}" class="text-blue-600 hover:underline">Detail</a>
                                <a href="{{ route('mesins.edit', $mesin) }}" class="text-yellow-600 hover:underline">Edit</a>
                                <form action="{{ route('mesins.destroy', $mesin) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="border p-4 text-center text-gray-500">Belum ada data mesin.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection