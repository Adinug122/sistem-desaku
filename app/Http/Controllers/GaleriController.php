<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     */
 
    public function index(){
        $galery = Galery::all();

        return view('galery.index',compact('galery'));
    }
    public function create()
    {
        return view('galery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul'  => 'required|string|max:150',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $data = $request->only(['judul']);
        $data['id_user'] = Auth::id();

        if($request->hasFile('gambar')){
            $path = $request->file('gambar')->store('img','public');
        $data['gambar'] = basename($path);
        }

        Galery::create($data);

        return redirect()->route('galery.index')->with('succes','data berhasil disimpan');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $galery = Galery::findOrFail($id);

        return view('galery.edit',compact('galery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

      $request->validate([
            'judul'  => 'required|string|max:150',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $galery = Galery::findOrFail($id);
        $data = $request->only(['judul']);
        
        if($request->hasFile('gambar')){
          Storage::delete('img'. $galery->gambar);
            $path = $request->file('gambar')->store('img','public');
        $data['gambar'] = basename($path);
        
        }
        $galery->update($data);
        return redirect()->route('galery.index')->with('succes','data berhasil diupdate');   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $galery = Galery::findOrFail($id);

        if($galery->gambar){
            Storage::delete('img'.$galery->gambar);
        }

        $galery->delete();
        return redirect()->route('galery.index')->with('succes','data berhasil dihapus');
    }
}
