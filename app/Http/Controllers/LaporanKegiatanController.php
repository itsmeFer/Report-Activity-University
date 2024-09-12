<?php

namespace App\Http\Controllers;

use App\Models\LaporanKegiatan;
use Illuminate\Http\Request;

class LaporanKegiatanController extends Controller
{
    // Menampilkan daftar LaporanKegiatan
    public function index()
    {
        $LaporanKegiatans = LaporanKegiatan::all();
        return view('LaporanKegiatan.index', compact('LaporanKegiatans'));
    }

    // Menampilkan form untuk menambahkan LaporanKegiatan baru
    public function create()
    {
        return view('LaporanKegiatan.create');
    }

    // Menyimpan LaporanKegiatan baru ke database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_LaporanKegiatan' => 'required|max:255',
            'deskripsi' => 'nullable',
            'tanggal' => 'required|date',
            'waktu' => 'required',
        ]);

        LaporanKegiatan::create($validated);

        return redirect()->route('LaporanKegiatan.index')->with('success', 'LaporanKegiatan berhasil ditambahkan');
    }

    // Menampilkan detail LaporanKegiatan
    public function show(LaporanKegiatan $LaporanKegiatan)
    {
        return view('LaporanKegiatan.show', compact('LaporanKegiatan'));
    }

    // Menampilkan form untuk edit LaporanKegiatan
    public function edit(LaporanKegiatan $LaporanKegiatan)
    {
        return view('LaporanKegiatan.edit', compact('LaporanKegiatan'));
    }

    // Mengupdate data LaporanKegiatan
    public function update(Request $request, LaporanKegiatan $LaporanKegiatan)
    {
        $validated = $request->validate([
            'nama_LaporanKegiatan' => 'required|max:255',
            'deskripsi' => 'nullable',
            'tanggal' => 'required|date',
            'waktu' => 'required',
        ]);

        $LaporanKegiatan->update($validated);

        return redirect()->route('LaporanKegiatan.index')->with('success', 'LaporanKegiatan berhasil diperbarui');
    }

    // Menghapus LaporanKegiatan
    public function destroy(LaporanKegiatan $LaporanKegiatan)
    {
        $LaporanKegiatan->delete();

        return redirect()->route('LaporanKegiatan.index')->with('success', 'LaporanKegiatan berhasil dihapus');
    }
}
