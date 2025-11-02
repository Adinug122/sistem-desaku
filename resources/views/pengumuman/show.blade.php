@extends('layouts.navbar') {{-- Asumsi Anda punya layout utama bernama navbar.blade.php --}}

@section('content')
<div class="bg-gray-50 min-h-screen">
    {{-- Container Utama --}}
    <div class="max-w-4xl mx-auto px-4 py-8 sm:py-12">
        
        <article class="bg-white rounded-lg shadow-lg overflow-hidden">
            {{-- Bagian Gambar Utama (Hero Image) --}}
            @if ($pengumuman->gambar)
                <img src="{{ asset('storage/img/' . $pengumuman->gambar) }}" 
                     alt="{{ $pengumuman->judul }}" 
                     class="w-full h-auto max-h-[500px] object-cover">
            @endif

            <div class="p-6 sm:p-10">
              
                <div class="mb-6 text-sm text-gray-500">
                    <a href="{{ route('coba') }}#pengumuman" class="hover:text-blue-600">Pengumuman</a>
                    <span class="mx-2">&raquo;</span>
                    <span class="text-gray-700">{{ ($pengumuman->judul) }}</span>
                </div>
                <h1 class="text-3xl md:text-5xl font-extrabold text-gray-900 mb-4 leading-tight">
                    {{ $pengumuman->judul }}
                </h1>

              
                <div class="flex items-center text-gray-500 mb-8 pb-4 border-b">
                  
                    <div class="w-10 h-10 rounded-full bg-gray-200 mr-4"></div>
                    <div>
                        <p class="font-semibold text-gray-800">{{ $pengumuman->user->name ?? 'Admin' }}</p>
                        <p class="text-sm">
                            Diterbitkan pada {{ $pengumuman->created_at->translatedFormat('l, d F Y') }}
                        </p>
                    </div>
                </div>

                {{-- Isi Konten Pengumuman --}}
                {{-- Kelas 'prose' dari Tailwind secara otomatis menata paragraf, heading, list, dll. --}}
                <div class="prose max-w-none text-lg text-gray-800 leading-relaxed">
                    {!! nl2br(e($pengumuman->isi)) !!}
                </div>
                
                {{-- Tombol Kembali --}}
                <div class="mt-12 pt-6 border-t">
                    <a href="{{ route('coba') }}#pengumuman" 
                       class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-800 font-semibold transition">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        Kembali ke semua pengumuman
                    </a>
                </div>
            </div>
        </article>

    </div>
</div>
@endsection