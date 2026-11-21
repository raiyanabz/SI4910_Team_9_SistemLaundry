@extends('layouts.app')

@section('title', 'Tambah Servis')

@section('content')
    <div class="max-w-2xl mx-auto">
        <h1 class="text-3xl font-semibold mb-6">Tambah Servis</h1>

        <form action="{{ route('service.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow">
            @csrf

            <div class="mb-4">
                <label for="kode_servis" class="block font-medium mb-2">Kode Servis</label>
                <input type="text" name="kode_servis" id="kode_servis" value="{{ old('kode_servis') }}" class="w-full p-3 border rounded-lg" required>
                @error('kode_servis')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="nama_servis" class="block font-medium mb-2">Nama Servis</label>
                <input type="text" name="nama_servis" id="nama_servis" value="{{ old('nama_servis') }}" class="w-full p-3 border rounded-lg" required>
                @error('nama_servis')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="harga" class="block font-medium mb-2">Harga</label>
                <input type="number" name="harga" id="harga" value="{{ old('harga') }}" class="w-full p-3 border rounded-lg" required>
                @error('harga')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex gap-3">
                <a href="{{ route('service.index') }}" class="bg-gray-300 py-2 px-6 rounded-full hover:bg-gray-400">Kembali</a>
                <button type="submit" class="bg-green-600 text-white py-2 px-6 rounded-full hover:bg-green-700">Simpan</button>
            </div>
        </form>
    </div>
@endsection