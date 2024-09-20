@extends('layouts.app')

@section('title', 'Daftar Kegiatan')

@section('content')
<div class="container">
    <h1 class="mb-4">Daftar Kegiatan</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('kegiatan.create') }}" class="btn btn-primary mb-3">Tambah daftar Kegiatan</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Kegiatan</th>
                <th>Deskripsi</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kegiatans as $kegiatan)
                <tr>
                    <td>{{ $kegiatan->nama_kegiatan }}</td>
                    <td>{{ $kegiatan->deskripsi }}</td>
                    <td>{{ $kegiatan->tanggal }}</td>
                    <td>{{ $kegiatan->waktu }}</td>
                    <td>
                        <a href="{{ route('kegiatan.show', $kegiatan->id) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('kegiatan.edit', $kegiatan->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('kegiatan.destroy', $kegiatan->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
