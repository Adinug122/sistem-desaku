<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengumumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pengumuman = [
            [
                'judul' =>'Ada orang hilang',
                'isi' => 'banyak orang hilangh pada hari sekian',
                'gambar' => 'uploads/img/hilang.png',
                'created_at' => NOW(),
                'updated_at' => NOW()
            ],
            
            [
                'judul' =>'Ada orang hilang',
                'isi' => 'banyak orang hilangh pada hari sekian',
                'gambar' => 'uploads/img/hilang.png',
                'created_at' => NOW(),
                'updated_at' => NOW()
            ]
            ];
            DB::table('pengumuman_tables')->insert($pengumuman);
    }

}
