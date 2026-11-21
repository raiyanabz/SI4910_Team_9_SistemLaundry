@extends('layouts.app')

@section('title', 'Detail Mesin')

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow">
        <h1 class="text-3xl font-bold mb-4">Detail Mesin</h1>
        <p class="mb-2"><strong>Kode Mesin:</strong> {{ $mesin->kode_mesin }}</p>
        <p class="mb-2"><strong>Merek:</strong> {{ $mesin->merek }}</p>
        <p class="mb-4"><strong>Model:</strong> {{ $mesin->model }}</p>
        <a href="{{ route('mesins.index') }}" class="inline-block bg-gray-300 py-2 px-6 rounded-full hover:bg-gray-400">Kembali</a>
    </div>
@endsection