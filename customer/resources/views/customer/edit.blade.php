@extends('layouts.app')

@section('title', 'Edit Customer')

@section('content')
    <div class="max-w-2xl mx-auto">
        <h1 class="text-3xl font-semibold mb-6">Edit Customer</h1>

        <form action="{{ route('customer.update', $customer) }}" method="POST" class="bg-white p-6 rounded-lg shadow">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nama_customer" class="block font-medium mb-2">Nama Customer</label>
                <input type="text" name="nama_customer" id="nama_customer" value="{{ old('nama_customer', $customer->nama_customer) }}" class="w-full p-3 border rounded-lg" required>
                @error('nama_customer')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="no_hp" class="block font-medium mb-2">No HP</label>
                <input type="text" name="no_hp" id="no_hp" value="{{ old('no_hp', $customer->no_hp) }}" class="w-full p-3 border rounded-lg" required>
                @error('no_hp')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="alamat" class="block font-medium mb-2">Alamat</label>
                <textarea name="alamat" id="alamat" rows="3" class="w-full p-3 border rounded-lg" required>{{ old('alamat', $customer->alamat) }}</textarea>
                @error('alamat')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex gap-3">
                <a href="{{ route('customer.index') }}" class="bg-gray-300 py-2 px-6 rounded-full hover:bg-gray-400">Kembali</a>
                <button type="submit" class="bg-yellow-500 text-white py-2 px-6 rounded-full hover:bg-yellow-600">Update</button>
            </div>
        </form>
    </div>
@endsection