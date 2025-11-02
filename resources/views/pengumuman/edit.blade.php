@vite('resources/css/app.css')

<body class="bg-gray-100 min-h-screen flex flex-col items-center pt-20">
    <div class="bg-white shadow-2xl rounded-2xl w-full max-w-2xl p-8">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800">📰 Tambah Pengumuman</h1>

        </div>

        <form action="{{ route('pengumuman.update', $pengumuman->id_pengumuman) }}" method="POST" class="space-y-5"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div>
                <label for="judul" class="block text-gray-700 font-semibold mb-2">Judul</label>
                <input type="text" name="judul" id="title"
                    class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-400 transition"
                    placeholder="Masukkan judul postingan..." value="{{ old('judul', $pengumuman->judul) }}" required>
            </div>
            <div>
                <label for="content" class="block text-gray-700 font-semibold mb-2">isi</label>
                <textarea name="isi" id="content" rows="6"
                    class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-400 transition"
                    placeholder="Tulis isi artikel kamu di sini..."
                    required>{{ old('isi', $pengumuman->isi) }}</textarea>
            </div>
            <div>
                <label for="gambar" class="block text-gray-700 font-semibold mb-2">Gambar</label>
                <input type="file" name="gambar" id="gambar"
                    class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-400 transition">
                @if ($pengumuman->gambar)
                    <div class="mt-3">
                        <p class="text-gray-700 mb-1">Gambar saat ini:</p>
                        <img src="{{ asset('storage/img/' . $pengumuman->gambar) }}" alt="Gambar"
                            class="w-32 h-32 object-cover rounded border">
                    </div>
                @else
                    <p class="text-gray-500 mt-2">Tidak ada gambar</p>
                @endif
            </div>

            <div class="flex justify-end space-x-3 pt-4">
                <a href="{{ route('pengumuman.index') }}"
                    class="bg-gray-400 hover:bg-gray-500 text-white font-medium py-2 px-4 rounded-lg transition">
                    Batal
                </a>
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-5 rounded-lg shadow transition">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</body>