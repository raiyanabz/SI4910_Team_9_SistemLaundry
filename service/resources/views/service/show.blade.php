@extends('layouts.app')

@section('title', 'Detail Servis')

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow">
        <h1 class="text-3xl font-bold mb-4">Detail Servis</h1>
        <p class="mb-2"><strong>Kode Servis:</strong> {{ $service->kode_servis }}</p>
        <p class="mb-2"><strong>Nama Servis:</strong> {{ $service->nama_servis }}</p>
        <p class="mb-4"><strong>Harga:</strong> {{ $service->harga }}</p>
        <a href="{{ route('service.index') }}" class="inline-block bg-gray-300 py-2 px-6 rounded-full hover:bg-gray-400">Kembali</a>
    </div>
@endsection