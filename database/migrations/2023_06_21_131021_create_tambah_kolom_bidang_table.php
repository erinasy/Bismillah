<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('bidang', function (Blueprint $table) {
            $table->string('nama_kategori',20)->after('nama_bidang')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bidang',function(Blueprint $table){
            $table->dropColumn('nama_kategori');
        });
    }
};
