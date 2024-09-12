@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Laporan Kegiatan</h1>

    <a href="{{ route('kegiatan.create') }}" class="btn btn-primary mb-3">Tambah Kegiatan</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Nama Laporan Kegiatan</th>
                <th>Deskripsi</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($LaporanKegiatans as $LaporanKegiatan)
                <tr>
                    <td>{{ $LaporanKegiatan->nama_LaporanKegiatan }}</td>
                    <td>{{ $LaporanKegiatan->deskripsi }}</td>
                    <td>{{ $LaporanKegiatan->tanggal }}</td>
                    <td>{{ $LaporanKegiatan->waktu }}</td>
                    <td>
                        <a href="{{ route('LaporanKegiatan.show', $LaporanKegiatan->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('LaporanKegiatan.edit', $LaporanKegiatan->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('LaporanKegiatan.destroy', $LaporanKegiatan->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
