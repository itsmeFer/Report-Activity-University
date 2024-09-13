@extends('layouts.app')

@section('title', 'Detail Kegiatan')

@section('content')
<div class="container">
    <h1 class="mb-4">Daftar Kegiatan</h1>

    <div class="mb-3">
        <strong>Nama Kegiatan:</strong>
        <p>{{ $kegiatan->nama_kegiatan }}</p>
    </div>
    <div class="mb-3">
        <strong>Deskripsi:</strong>
        <p>{{ $kegiatan->deskripsi }}</p>
    </div>
    <div class="mb-3">
        <strong>Tanggal:</strong>
        <p>{{ $kegiatan->tanggal }}</p>
    </div>
    <div class="mb-3">
        <strong>Waktu:</strong>
        <p>{{ $kegiatan->waktu }}</p>
    </div>

    <a href="{{ route('kegiatan.edit', $kegiatan->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('kegiatan.destroy', $kegiatan->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Hapus</button>
    </form>
    <a href="{{ route('kegiatan.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
