<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class IntervensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('intervensi')->insert([
            'id'=> '1',
            'nama_intervensi' =>'Meningkatknya penataan terhadap kebijakan di bidang lingkungan hidup',
            'bidang_id' => '1',
            'user_id' => '2',
        ]);
        DB::table('intervensi')->insert([
            'id'=> '2',
            'nama_intervensi' =>'Terfasilitasnya ketaatan masyarakat terhadap pengelolaan lingkungan hidup',
            'bidang_id' => '1',
            'user_id' => '2',
        ]);
    }
}
