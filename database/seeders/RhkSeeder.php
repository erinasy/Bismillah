<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RhkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rhk')->insert([
            'id'=> '401',
            'nama_rhk' => '1. Penyusunan Dokumen 
                           2. Dokumen Pendukung
                           3. Meningkatkan penataan terhadap',
            'bidang_id' => '1101',
            'user_id' => '3',
        ]);
        DB::table('rhk')->insert([
            'id'=> '402',
            'nama_rhk' => '1. Penyusunan Dokumen 
                           2. Dokumen Pendukung
                           3. Meningkatkan penataan terhadap',
            'bidang_id' => '1101',
            'user_id' => '1',
        ]);
    }
}
