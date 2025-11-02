<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>@yield('title', 'Desa Kerang')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<header class=" sticky top-0 bg-white shadow-md flex items-center justify-between px-8 md:py-0 py-5 z-30"
   x-data="{ open: false }"
>
    <!-- logo -->
    <h1 class="w-3/12 text-2xl font-bold ">
        Desaku
    </h1>

      <button 
        @click="open = !open" 
        class="md:hidden text-3xl text-blue-600 focus:outline-none"
    >
        ☰
    </button>

    <!-- navigation -->
    <nav  :class="open ? 'block' : 'hidden'"
    class=" absolute md:static top-full left-0 w-full md:w-auto bg-white md:flex  font-semibold text-lg shadow-md md:shadow-none">
        <ul class="flex flex-col md:flex-row md:items-center">
            <li class="p-4 border-b-2 border-blue-500 border-opacity-0 hover:border-opacity-100 hover:text-blue-500 duration-200 cursor-pointer active">
              <a href="{{ route('coba') }}#home">Beranda</a>
            </li>
            <li class="p-4 border-b-2 border-blue-500 border-opacity-0 hover:border-opacity-100 hover:text-blue-500 duration-200 cursor-pointer">
              <a href="{{ route('coba') }}#pengumuman">Pengumuman</a>
            </li>
            <li class="p-4 border-b-2 border-blue-500 border-opacity-0 hover:border-opacity-100 hover:text-blue-500 duration-200 cursor-pointer">
              <a href="{{ route('coba') }}#galery">Galery</a>
            </li>
            <li class="p-4 border-b-2 border-blue-500 border-opacity-0 hover:border-opacity-100 hover:text-blue-500 duration-200 cursor-pointer">
              <a href="{{ route('coba') }}#tentang-kami">Tentang Kami</a>
            </li>
            <!-- Tombol Login (Mobile) -->
            <li class="p-4 md:hidden w-full text-center">
                <a href="{{ route('login') }}" 
                   class="block w-full bg-blue-500 px-4 py-2 rounded text-white hover:bg-blue-400 duration-200">
                    Login
                </a>
          
        </ul>
    </nav>

    <!-- buttons --->
    <div class="w-3/12 hidden md:flex justify-end">
        <a href="{{ route('login') }}" class="bg-blue-500 px-4 py-2 rounded text-white hover:bg-blue-400">
        Login
        </a>
       
    </div>
</header>

<body>
    <main>
        @yield('content')
    </main>

      @include('layouts.footer')
  </body>

</html>
