<?php

namespace App\Http\Controllers;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
       public function index()
    {
        $pengumuman = Pengumuman::all();
        return view('pengumuman.index', compact('pengumuman'));
    }
    public function show(Pengumuman $pengumuman){
           return view('pengumuman.show',compact('pengumuman'));
    }
}
