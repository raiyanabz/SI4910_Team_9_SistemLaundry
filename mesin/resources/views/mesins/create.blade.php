@extends('layouts.app')

@section('title', 'Tambah Mesin')

@section('content')
    <div class="max-w-2xl mx-auto">
        <h1 class="text-3xl font-semibold mb-6">Tambah Mesin</h1>

        <form action="{{ route('mesins.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow">
            @csrf

            <div class="mb-4">
                <label for="kode_mesin" class="block font-medium mb-2">Kode Mesin</label>
                <input type="text" name="kode_mesin" id="kode_mesin" value="{{ old('kode_mesin') }}" class="w-full p-3 border rounded-lg" required>
                @error('kode_mesin')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="merek" class="block font-medium mb-2">Merek</label>
                <input type="text" name="merek" id="merek" value="{{ old('merek') }}" class="w-full p-3 border rounded-lg" required>
                @error('merek')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="model" class="block font-medium mb-2">Model</label>
                <input type="text" name="model" id="model" value="{{ old('model') }}" class="w-full p-3 border rounded-lg" required>
                @error('model')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex gap-3">
                <a href="{{ route('mesins.index') }}" class="bg-gray-300 py-2 px-6 rounded-full hover:bg-gray-400">Kembali</a>
                <button type="submit" class="bg-green-600 text-white py-2 px-6 rounded-full hover:bg-green-700">Simpan</button>
            </div>
        </form>
    </div>
@endsection