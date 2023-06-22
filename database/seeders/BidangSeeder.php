<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BidangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bidang')->insert([
            'id'=> '1',
            'nama_bidang' => 'Bidang Penataan dan Penaatan Lingkungan',
            'nama_kategori' => 'Pedal',
            'kategori_id' =>'1'
        ]);
        DB::table('bidang')->insert([
            'id'=> '2',
            'nama_bidang' => 'Bidang Penataan dan Penaatan Lingkungan',
            'nama_kategori' => 'Penyuluh',
            'kategori_id' =>'2'
        ]);
        DB::table('bidang')->insert([
            'id'=> '3',
            'nama_bidang' => 'Bidang Penataaan dan Penaatan Lingkungan',
            'nama_kategori' => 'Pengawas',
            'kategori_id' =>'3'
        ]);
        DB::table('bidang')->insert([
            'id'=> '4',
            'nama_bidang' => 'Bidang Pengendalian Pencemaran, Pemeliharaan Lingkungan, dan Pertamanan',
            'nama_kategori' => 'Pedal',
            'kategori_id' =>'1'
        ]);
        DB::table('bidang')->insert([
            'id'=> '5',
            'nama_bidang' => 'Bidang Pengelolaan Persampahan dan Pengelolaan Limbah Bahan Berbahaya dan Beracun',
            'nama_kategori' => 'Pedal',
            'kategori_id' =>'1'
        ]);
        DB::table('bidang')->insert([
            'id'=> '6',
            'nama_bidang' => 'Bidang Pengelolaan Persampahan dan Pengelolaan Limbah Bahan Berbahaya dan Beracun',
            'nama_kategori' => 'Penyuluh',
            'kategori_id' =>'2'
        ]);
       
    }
}
