<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserUpdateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'username'=>'admin2',
            'name' => 'Administrator Update',
            'bidang_id' => '1101',
            'kategori_id' => '9012',
            'email' => 'adminUpdate@admin.com',
            'password' => Hash::make('67890'),
        ]);
        DB::table('users')->insert([
            'username'=>'05062023',
            'name' => 'Puspita',
            'bidang_id' => '1101',
            'kategori_id' => '9011',
            'email' => 'puspita@admin.com',
            'password' => Hash::make('99999'),
        ]);
    }
}
