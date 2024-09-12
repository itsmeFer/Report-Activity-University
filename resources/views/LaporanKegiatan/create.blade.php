@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Kegiatan</h1>

    <form action="{{ route('kegiatan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_kegiatan">Nama Kegiatan</label>
            <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" required>
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
        </div>

        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
        </div>

        <div class="form-group">
            <label for="waktu">Waktu</label>
            <input type="time" class="form-control" id="waktu" name="waktu" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
