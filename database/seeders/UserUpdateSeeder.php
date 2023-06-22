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
            'bidang_id' => '1',
            'kategori_id' => '2',
            'email' => 'adminUpdate@admin.com',
            'role' => 'admin',
            'password' => Hash::make('0987654321'),
        ]);
        DB::table('users')->insert([
            'username'=>'200623',
            'name' => 'Puspita',
            'bidang_id' => '1',
            'kategori_id' => '1',
            'email' => 'puspita@admin.com',
            'role' => 'user',
            'password' => Hash::make('1234567890'),
        ]);
    }
}
