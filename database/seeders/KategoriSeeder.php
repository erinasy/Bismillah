<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategori')->insert([
            'id'=> '1',
            'nama_kategori' => 'Pedal'
        ]);
        DB::table('kategori')->insert([
            'id'=> '2',
            'nama_kategori' => 'Penyuluh'
        ]);
        DB::table('kategori')->insert([
            'id'=> '3',
            'nama_kategori' => 'Pengawas'
        ]);
    }
}
