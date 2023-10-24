<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masyarakat;

class MasyarakatController extends Controller
{
    public function index()
    {
        $masyarakat = Masyarakat::latest()->paginate(6);
        return view('masyarakat.index', compact('masyarakat'));
    }

    public function store(Request $request)
    {
    }

    public function edit($id)
    {
        $masyarakat = Masyarakat::find($id);
        return view('masyarakat.edit', compact('masyarakat'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nohp' => 'required | numeric',
            'email' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'status' => 'required',
        ]);

        Masyarakat::find($request->id)
            ->update([
                'nama' => $request->nama,
                'nohp' => $request->nohp,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'jenis_kelamin' => $request->jenis_kelamin,
                'status' => $request->status,
            ]);

        return redirect()->route('masyarakat.index')
            ->with('success', 'Masyarakat updated successfully');
    }

    public function show($id)
    {
        $masyarakat = Masyarakat::find($id);
        return view('masyarakat.show', compact('masyarakat'));
    }

    public function approved()
    {
        $masyarakat = Masyarakat::where('status', 'sudah disetujui')->paginate(6);
        return view('masyarakat.approved', compact('masyarakat'));
    }
    public function not_approved()
    {
        $masyarakat = Masyarakat::where('status', 'belum disetujui')->paginate(6);
        return view('masyarakat.not_approved', compact('masyarakat'));
    }
}
