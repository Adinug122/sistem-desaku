<?php

use App\Http\Controllers\GaleriController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArtikelController;
use App\Models\Galery;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('coba');
})->name('coba'); 



Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman.index');

Route::get('/dashboard', function () {
    $user = Auth::user();
    return view('dashboard',compact('user'));

})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
Route::resource('galery',GaleriController::class)->middleware('auth');
Route::resource('pengumuman',PengumumanController::class)->middleware('auth')->except('index','show');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/pengumuman/{pengumuman}', [ArtikelController::class, 'show'])->name('pengumuman.show');


require __DIR__.'/auth.php';
