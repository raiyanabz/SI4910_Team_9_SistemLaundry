@extends('layouts.app')

@section('title', 'Edit Servis')

@section('content')
    <div class="max-w-2xl mx-auto">
        <h1 class="text-3xl font-semibold mb-6">Edit Servis</h1>

        <form action="{{ route('service.update', $service) }}" method="POST" class="bg-white p-6 rounded-lg shadow">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="kode_servis" class="block font-medium mb-2">Kode Servis</label>
                <input type="text" name="kode_servis" id="kode_servis" value="{{ old('kode_servis', $service->kode_servis) }}" class="w-full p-3 border rounded-lg" required>
                @error('kode_servis')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="nama_servis" class="block font-medium mb-2">Nama Servis</label>
                <input type="text" name="nama_servis" id="nama_servis" value="{{ old('nama_servis', $service->nama_servis) }}" class="w-full p-3 border rounded-lg" required>
                @error('nama_servis')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="harga" class="block font-medium mb-2">Harga</label>
                <input type="number" name="harga" id="harga" value="{{ old('harga', $service->harga) }}" class="w-full p-3 border rounded-lg" required>
                @error('harga')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex gap-3">
                <a href="{{ route('service.index') }}" class="bg-gray-300 py-2 px-6 rounded-full hover:bg-gray-400">Kembali</a>
                <button type="submit" class="bg-yellow-500 text-white py-2 px-6 rounded-full hover:bg-yellow-600">Update</button>
            </div>
        </form>
    </div>
@endsection