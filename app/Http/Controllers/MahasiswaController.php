<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Carbon\Carbon;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::latest()->paginate(10);
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'npm' => 'required | numeric',
            'email' => 'required',
            'jurusan' => 'required',
        ]);

        Mahasiswa::create($request->all());

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Mahasiswa created successfully.');
    }

    public function show($id)
    {
        $mahasiswa = Mahasiswa::where('id', $id)->first();
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'npm' => 'required | numeric',
            'email' => 'required',
            'jurusan' => 'required',
        ]);

        Mahasiswa::find($request->id)
            ->update([
                'nama' => $request->nama,
                'npm' => $request->npm,
                'email' => $request->email,
                'jurusan' => $request->jurusan,
            ]);

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Mahasiswa updated successfully');
    }

    public function destroy($id)
    {
        Mahasiswa::where('id', $id)->delete();
        return redirect()->route('mahasiswa.index')
            ->with('success', 'Mahasiswa deleted successfully');
    }

}
