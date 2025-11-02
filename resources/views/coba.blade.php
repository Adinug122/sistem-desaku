@extends('layouts.navbar')
@section('content')
@php
    use App\Models\Galery;
    $galery = Galery::all();
    use App\Models\Pengumuman;
    $pengumuman = Pengumuman::all();
@endphp

    <div id="home" class=" relative w-full h-[730px] bg-cover bg-center bg-fixed "
        style="background-image: url('{{ asset('storage/img/background.jpg') }}')">
        <div class="absolute inset-0 bg-black opacity-40 z-20"></div>

        <div class="relative flex flex-col justify-center items-center  h-full z-20" data-aos="fade-up" data-aos-duration="800">
            <h1 class="text-3xl md:text-5xl font-bold text-white shadow-lg  ">Selamat Datang Di Desa Kerang</h1>
            <h1 class="text-3xl md:text-5xl font-bold text-white shadow-lg mt-3 md:mt-6">Surganya Alam dan Budaya</h1>
            <p class="mt-3 text-xl text-gray-200 shadow-lg max-w-lg">
                Temukan Keindahan alam Yang kami Tawarkan
            </p>
            <a href="{{ route('coba') }}#tentang-kami"
                class="mt-6 px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 transition duration-300">
                Kunjungi
            </a>

        </div>
    </div>

    <section class="mt-10 px-4">
        <div class="max-w-[1450px] mx-auto">
            <h1 class="text-center text-3xl font-bold">Layanan <span class="text-blue-500">Informasi</span></h1>
            <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-3 mt-10">
                <div
                    data-aos="zoom-in" data-aos-delay="100"  class="bg-white p-5 rounded-xl shadow-md  text-center flex flex-col items-center justify-center h-48 hover:shadow-lg  ring-0 hover:ring-1 hover:ring-blue-500 transition-shadow cursor-pointer">

                    <div class="p-3 rounded-full bg-yellow-50 text-yellow-600 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 21l6.935-13.91c.783-1.567 2.62-1.567 3.403 0L20.25 21m-1.875-9L12 16.5m0 0l-2.625-5.25M12 16.5L9.375 21M12 16.5l2.625 4.5M3.75 21h16.5" />
                        </svg>
                    </div>

                    <h3 class="font-semibold text-lg text-gray-800">Informasi Desa</h3>

                    <p class="text-sm text-gray-500 mt-1">Lorem ipsum dolor</p>
                </div>
                <div
                   data-aos="zoom-in" data-aos-delay="200"  class="bg-white p-5 rounded-xl shadow-md text-center flex flex-col items-center justify-center h-48 hover:shadow-lg ring-0 hover:ring-1 hover:ring-blue-500 transition-shadow cursor-pointer">

                    <div class="p-3 rounded-full bg-green-50 text-green-600 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                        </svg>
                    </div>

                    <h3 class="font-semibold text-lg text-gray-800">Tentang Desa</h3>

                    <p class="text-sm text-gray-500 mt-1">Lorem ipsum dolor</p>
                </div>

                <div
                   data-aos="zoom-in" data-aos-delay="300"   class="bg-white p-5 rounded-xl shadow-md text-center flex flex-col items-center justify-center h-48 hover:shadow-lg ring-0 hover:ring-1 hover:ring-blue-500 transition-shadow cursor-pointer">

                    <div class="p-3 rounded-full bg-red-50 text-red-600 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h7.468c.426 0 .842.064 1.246.19M3.75 3.75V7.5m6.75-3.75H12M12 12.75V15m0 0l-3-3m3 3l3-3M6.75 21h9a2.25 2.25 0 002.25-2.25V10.5M17.25 7.5h1.125c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5c-.621 0-1.125-.504-1.125-1.125V8.625c0-.621.504-1.125 1.125-1.125H17.25z" />
                        </svg>
                    </div>

                    <h3 class="font-semibold text-lg text-gray-800 ">Galery Desa</h3>

                    <p class="text-sm text-gray-500 mt-1">Lorem ipsum dolor</p>
                </div>

                <div
                   data-aos="zoom-in" data-aos-delay="400"  class="bg-white p-5 rounded-xl shadow-md text-center flex flex-col items-center justify-center h-48 hover:shadow-lg  ring-0 hover:ring-1 hover:ring-blue-500 transition-shadow cursor-pointer">

                    <div class="p-3 rounded-full bg-blue-50 text-blue-600 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.644-6.374-1.766z" />
                        </svg>
                    </div>

                    <h3 class="font-semibold text-lg text-gray-800">Cek Penduduk</h3>

                    <p class="text-sm text-gray-500 mt-1">Lorem ipsum dolor</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-10" id="tentang-kami" data-aos="fade-up" data-aos-duration="800">
        <div class="max-w-[1450px] mx-auto">
            <h1 class="text-center text-3xl font-bold">Tentang <span class="text-blue-500">Kami</span></h1>
            <div class="flex flex-wrap items-center  mt-40">
                <div class="w-full md:w-1/2 p-5" data-aos="fade-right" data-aos-duration="800">
                    <h1 class="text-4xl font-bold leading-snug">
                        Selamat datang di Website <span class="text-blue-500">Desa Kami</span>
                    </h1>
                    <p class="text-slate-600 mt-3 text-justify">
                        Website ini dibuat sebagai wadah informasi dan komunikasi antara pemerintah desa dan masyarakat.
                        Kami ingin membangun desa yang lebih maju, terbuka, dan berdaya saing melalui teknologi digital
                        yang mudah diakses oleh semua warga.
                        Melalui platform ini, kami berharap masyarakat dapat lebih mudah memperoleh informasi terkait
                        kegiatan,
                        layanan publik, serta potensi desa. Mari bersama-sama wujudkan desa yang mandiri, transparan, dan
                        sejahtera
                        untuk generasi masa depan.

                    </p>
                </div>

                <div class="w-full md:w-1/2 px-4" data-aos="fade-left" data-aos-duration="800">
                    <img src="{{ asset('storage/img/sawah.jpg') }}" alt="sawah"
                        class="w-full h-auto object-cover rounded-2xl">
                </div>

            </div>
        </div>
    </section>

    <section class="mt-20 px-4 " data-aos="fade-up" data-aos-duration="800">
        <div class="max-w-[1320px] mx-auto">
            <h1 class="text-center text-3xl font-bold">Peta <span class="text-blue-500">Desa</span></h1>
            <div class="flex flex-wrap items-center mt-20">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7908.197592071222!2d111.49115714198082!3d-7
                    .672527336557987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79bdea32fa4497%3A0x395b859b6fc34c45!2sKerang%2C%20Kec.%20Takeran%2C%20Kabupaten%2
                    0Magetan%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1762051033342!5m2!1sid!2sid" width="600" height="450"
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                    class=" w-full rounded-xl "></iframe>
            </div>
        </div>
    </section>

        <section class="mt-20 px-4" id="galery">
        <div class="max-w-[1320px] mx-auto">
            <h1 class="text-center text-3xl font-bold" data-aos="fade-down" data-aos-duration="800">Galery  <span class="text-blue-500">Desa</span></h1>
              <div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-4 gap-7 mt-10">
        @foreach ($galery as $item)
            <div class="relative rounded-xl shadow-md overflow-hidden group transform transition duration-300" data-aos="zoom-in" data-aos-delay="100">
                <img 
                    src="{{ asset('storage/img/' . $item->gambar) }}" 
                    alt="{{ $item->judul }}" 
                    class="w-full h-60 object-cover rounded-lg transition group-hover:scale-105"
                >
                 <div class="absolute inset-0 bg-blue-500 opacity-0 group-hover:opacity-40 transition duration-300 rounded-lg">
                       <h1 class="absolute inset-0 flex items-center justify-center text-white text-xl font-semibold opacity-0 
            group-hover:opacity-100 group-hover:translate-y-0 translate-y-4 transition-all duration-300">{{  $item->judul}}</h1>
                 </div>
            </div>
             
        @endforeach
    
            </div>
        </div>
    </section>


    <section class="mt-20 mb-28 px-4" id="pengumuman">
  <div class="max-w-[1320px] mx-auto">
    <h1 class="text-center text-3xl font-bold" data-aos="fade-up" data-aos-duration="800">
      Pengumuman <span class="text-blue-500">Desa</span>
    </h1>
    <p class="text-center text-slate-800 mt-3" data-aos="fade-up" data-aos-duration="800">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, animi.
    </p>

   
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-10">

      @foreach ($pengumuman as $item)
      <div class="relative rounded-lg overflow-hidden 
                  shadow-[0_0_12px_rgba(0,0,0,0.2)] 
                  hover:shadow-[0_0_25px_rgba(0,0,0,0.35)] 
                  transition-all duration-300 group  bg-white
                  "data-aos="fade-up" data-aos-duration="100">

        <img src="{{ asset('storage/img/'.$item->gambar) }}" 
             alt="{{ $item->judul }}"
             class="w-full h-56 object-cover rounded-t-lg transition-transform duration-500 group-hover:scale-105">

        <div class="absolute inset-0 flex items-center justify-center opacity-0 
                    transition-opacity duration-300 bg-black/40 pointer-events-none">
          <p class="text-white text-lg font-semibold text-center px-2 drop-shadow-lg">
            {{ $item->judul }}
          </p>
        </div>

        <div class="p-4">
          <h1 class="text-gray-800 text-start text-xl font-semibold mb-2">
            {{ $item->judul }}
          </h1>
          <p class="text-gray-600 text-sm text-start mb-5">
            {{ Str::limit($item->isi, 50) }}
          </p>

          <a href="{{ route('pengumuman.show', $item) }}" 
             class="flex items-center gap-2 cursor-pointer z-20 text-[13px] text-blue-600 font-semibold hover:text-blue-800 transition group">
            Lihat selengkapnya
            <svg class="w-5 h-5" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M41.9999 24H5.99992" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path>
              <path d="M30 12L42 24L30 36" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </a>

          <div class="flex items-center gap-3 mt-4">
            <div class="w-8 h-8 rounded-full bg-gray-200"></div>
            <div>
              <p class="text-sm font-medium text-gray-800">
                {{ $item->user->name }}
              </p>
              <p class="text-xs text-gray-500">
                {{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('l d F Y') }}
              </p>
            </div>
          </div>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</section>





@endsection