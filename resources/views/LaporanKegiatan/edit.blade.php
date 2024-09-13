@extends('layouts.app')

@section('title', 'Edit Kegiatan')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Kegiatan</h1>

    <form action="{{ route('kegiatan.update', $kegiatan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_kegiatan" class="form-label">Nama Kegiatan</label>
            <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" value="{{ $kegiatan->nama_kegiatan }}" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi">{{ $kegiatan->deskripsi }}</textarea>
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $kegiatan->tanggal }}" required>
        </div>
        <div class="mb-3">
            <label for="waktu" class="form-label">Waktu</label>
            <input type="time" class="form-control" id="waktu" name="waktu" value="{{ $kegiatan->waktu }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
