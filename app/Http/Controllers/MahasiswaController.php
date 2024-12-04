<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|unique:mahasiswa,nim',
            'nama' => 'required',
            'jurusan' => 'required',
            'semester' => 'required|numeric',
            'email' => 'required|email',
            'no_hp' => 'required'
        ]);

        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required|unique:mahasiswa,nim,'.$id,
            'nama' => 'required',
            'jurusan' => 'required',
            'semester' => 'required|numeric',
            'email' => 'required|email',
            'no_hp' => 'required'
        ]);

        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update($request->all());
        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil dihapus!');
    }

    public function api()
    {
        $mahasiswa = Mahasiswa::all();
        return response()->json([
            'success' => true,
            'message' => 'Data Mahasiswa berhasil diambil',
            'data' => $mahasiswa
        ]);
    }
}
