@extends('layouts.app')

@section('title', 'Daftar Customer')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-semibold">Daftar Customer</h1>
        <a href="{{ route('customer.create') }}" class="bg-blue-600 text-white py-2 px-6 rounded-full hover:bg-blue-700">
            Tambah Customer
        </a>
    </div>

    <div class="bg-white p-4 rounded-lg shadow overflow-x-auto">
        <table class="w-full border-collapse border">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border p-3 text-left">Nama Customer</th>
                    <th class="border p-3 text-left">No HP</th>
                    <th class="border p-3 text-left">Alamat</th>
                    <th class="border p-3 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($customers as $item)
                    <tr>
                        <td class="border p-3">{{ $item->nama_customer }}</td>
                        <td class="border p-3">{{ $item->no_hp }}</td>
                        <td class="border p-3">{{ $item->alamat }}</td>
                        <td class="border p-3">
                            <div class="flex items-center gap-4">
                                <a href="{{ route('customer.show', $item) }}" class="text-blue-600 hover:underline">Detail</a>
                                <a href="{{ route('customer.edit', $item) }}" class="text-yellow-600 hover:underline">Edit</a>
                                <form action="{{ route('customer.destroy', $item) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="border p-4 text-center text-gray-500">Belum ada data customer.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection