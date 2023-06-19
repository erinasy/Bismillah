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
            'id'=> '1101',
            'nama_bidang' => 'Penataaan dan Penaatan Lingkungan',
            'kategori_id' =>'9011'
        ]);
        DB::table('bidang')->insert([
            'id'=> '1102',
            'nama_bidang' => 'Penataaan dan Penaatan Lingkungan',
            'kategori_id' =>'9012'
        ]);
        DB::table('bidang')->insert([
            'id'=> '1103',
            'nama_bidang' => 'Penataaan dan Penaatan Lingkungan',
            'kategori_id' =>'9013'
        ]);
        DB::table('bidang')->insert([
            'id'=> '2201',
            'nama_bidang' => 'Pengendalian Pencemaran Pemeliharaan Lingkungan dan Pertamanan',
            'kategori_id' =>'9011'
        ]);
        DB::table('bidang')->insert([
            'id'=> '2202',
            'nama_bidang' => 'Pengendalian Pencemaran Pemeliharaan Lingkungan dan Pertamanan',
            'kategori_id' =>'9012'
        ]);
        DB::table('bidang')->insert([
            'id'=> '2203',
            'nama_bidang' => 'Pengendalian Pencemaran Pemeliharaan Lingkungan dan Pertamanan',
            'kategori_id' =>'9013'
        ]);
        DB::table('bidang')->insert([
            'id'=> '3301',
            'nama_bidang' => 'Pengendalian Sampah dan Bahan Berbahaya Beracun',
            'kategori_id' =>'9011'
        ]);
        DB::table('bidang')->insert([
            'id'=> '3302',
            'nama_bidang' => 'Pengendalian Sampah dan Bahan Berbahaya Beracun',
            'kategori_id' =>'9012'
        ]);
        DB::table('bidang')->insert([
            'id'=> '3303',
            'nama_bidang' => 'Pengendalian Sampah dan Bahan Berbahaya Beracun',
            'kategori_id' =>'9013'
        ]);
    }
}
