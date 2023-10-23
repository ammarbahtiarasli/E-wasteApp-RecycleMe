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
        return view('mahasiswa.show');
    }

    public function edit($id)
    {
        return view('mahasiswa.edit');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        Mahasiswa::where('id', $id)->delete();
        return redirect()->route('mahasiswa.index')
            ->with('success', 'Mahasiswa deleted successfully');
    }

}
