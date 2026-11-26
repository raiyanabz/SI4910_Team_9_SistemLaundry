@extends('layouts.app')

@section('title', 'Detail Customer')

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow">
        <h1 class="text-3xl font-bold mb-4">Detail Customer</h1>
        <p class="mb-2"><strong>Nama Customer:</strong> {{ $customer->nama_customer }}</p>
        <p class="mb-2"><strong>No HP:</strong> {{ $customer->no_hp }}</p>
        <p class="mb-4"><strong>Alamat:</strong> {{ $customer->alamat }}</p>
        <a href="{{ route('customer.index') }}" class="inline-block bg-gray-300 py-2 px-6 rounded-full hover:bg-gray-400">Kembali</a>
    </div>
@endsection