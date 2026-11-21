@extends('layouts.app')

@section('title', 'Daftar Servis')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-semibold">Daftar Servis</h1>
        <a href="{{ route('service.create') }}" class="bg-blue-600 text-white py-2 px-6 rounded-full hover:bg-blue-700">
            Tambah Servis
        </a>
    </div>

    <div class="bg-white p-4 rounded-lg shadow overflow-x-auto">
        <table class="w-full border-collapse border">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border p-3 text-left">Kode Servis</th>
                    <th class="border p-3 text-left">Nama Servis</th>
                    <th class="border p-3 text-left">Harga</th>
                    <th class="border p-3 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($services as $item)
                    <tr>
                        <td class="border p-3">{{ $item->kode_servis }}</td>
                        <td class="border p-3">{{ $item->nama_servis }}</td>
                        <td class="border p-3">{{ $item->harga }}</td>
                        <td class="border p-3">
                            <div class="flex items-center gap-4">
                                <a href="{{ route('service.show', $item) }}" class="text-blue-600 hover:underline">Detail</a>
                                <a href="{{ route('service.edit', $item) }}" class="text-yellow-600 hover:underline">Edit</a>
                                <form action="{{ route('service.destroy', $item) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="border p-4 text-center text-gray-500">Belum ada data servis.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection