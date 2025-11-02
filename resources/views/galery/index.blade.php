@extends('layouts.app')

@section('content')


        <div class=" p-5 mt-20 mb-5 rounded-lg shadow-sm  overflow-x-auto">
            <a href="{{ route('galery.create') }}" class="bg-blue-500 px-5 py-3 mt-5 hover:bg-blue-600 text-white rounded">
                Tambah Galery</a>
            <table class="min-w-full bg-white border  rounded-lg shadow-sm mt-5">
                <thead class="bg-gray-100 ">
                    <tr>
                        <th class="px-4 py-2 text-left text-white uppercase text-sm font-medium bg-blue-500">Judul</th>
                        <th class="px-4 py-2 text-left text-white uppercase text-sm font-medium bg-blue-500">Gambar</th>
                        <th class="px-4 py-2 text-left text-white uppercase text-sm font-medium bg-blue-500">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                     @if($galery->isEmpty())
        <div class="text-center py-10 text-gray-500 italic">
            Tidak ada data galery.
        </div>
                    @else
                    @foreach ($galery as $item)
                        <tr class="border-b hover:bg-gray-50 transition">
                            <td class="px-4 py-2">{{ $item->judul }}</td>

                            <td class="px-4 py-2">
                                @if($item->gambar)
                                    <img src="{{ asset('storage/img/' . $item->gambar) }}" alt="Gambar" class="w-20 h-20 object-cover rounded">
                                @else
                                    -
                                @endif
                            </td>
                            <td class="px-4 py-2 flex gap-2 items-start">
                                <a href="{{ route('galery.edit', $item->id_galery) }}"
                                    class="bg-blue-500 px-3 py-2 hover:bg-blue-600 text-white rounded transition text-sm">
                                    Edit
                                </a>
                                <form action="{{ route('galery.destroy', $item->id_galery) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 px-3 py-2 hover:bg-red-600 text-white rounded transition text-sm">
                                        Hapus
                                    </button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
@endsection