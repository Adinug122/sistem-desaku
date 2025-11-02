<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PengumumanController extends Controller
{
 
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $pengumuman = Pengumuman::all();
        return view('pengumuman.index', compact('pengumuman'));
    }

    public function create()
    {
        return view('pengumuman.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul'  => 'required|string|max:150',
            'isi'    => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->only(['judul','isi']);
        $data['id_user'] = Auth::id();
 
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('img','public');
            $data['gambar'] = basename($path);
        }

        Pengumuman::create($data);

        return redirect()->route('pengumuman.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        return view('pengumuman.edit', compact('pengumuman'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul'  => 'required|string|max:150',
            'isi'    => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $pengumuman = Pengumuman::findOrFail($id);
        $data = $request->only(['judul','isi']);

        if ($request->hasFile('gambar')) {
          
            if ($pengumuman->gambar) {
                Storage::delete('img' . $pengumuman->gambar);
            }

            $path = $request->file('gambar')->store('img','public');
            $data['gambar'] = basename($path);
        }

        $pengumuman->update($data);

        return redirect()->route('pengumuman.index')->with('success', 'Data berhasil diupdate');
    }

    public function show(Pengumuman $pengumuman){
      
        return view('pengumuman.show',compact('pengumuman'));
    }

    public function destroy($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);

        if ($pengumuman->gambar) {
            Storage::delete('img' . $pengumuman->gambar);
        }

        $pengumuman->delete();

        return redirect()->route('pengumuman.index')->with('success', 'Data berhasil dihapus');
    }
}
