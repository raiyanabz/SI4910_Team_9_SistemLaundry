@extends('layouts.app')

@section('title', 'Tambah Customer')

@section('content')
    <div class="max-w-2xl mx-auto">
        <h1 class="text-3xl font-semibold mb-6">Tambah Customer</h1>

        <form action="{{ route('customer.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow">
            @csrf

            <div class="mb-4">
                <label for="nama_customer" class="block font-medium mb-2">Nama Customer</label>
                <input type="text" name="nama_customer" id="nama_customer" value="{{ old('nama_customer') }}" class="w-full p-3 border rounded-lg" required>
                @error('nama_customer')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="no_hp" class="block font-medium mb-2">No HP</label>
                <input type="text" name="no_hp" id="no_hp" value="{{ old('no_hp') }}" class="w-full p-3 border rounded-lg" required>
                @error('no_hp')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="alamat" class="block font-medium mb-2">Alamat</label>
                <textarea name="alamat" id="alamat" rows="3" class="w-full p-3 border rounded-lg" required>{{ old('alamat') }}</textarea>
                @error('alamat')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex gap-3">
                <a href="{{ route('customer.index') }}" class="bg-gray-300 py-2 px-6 rounded-full hover:bg-gray-400">Kembali</a>
                <button type="submit" class="bg-green-600 text-white py-2 px-6 rounded-full hover:bg-green-700">Simpan</button>
            </div>
        </form>
    </div>
@endsection