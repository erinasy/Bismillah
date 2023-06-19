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
        Schema::table('users',function(Blueprint $table){
            $table->bigInteger('bidang_id')->after('name')->nullable()->unsigned();
            $table->bigInteger('kategori_id')->after('bidang_id')->nullable()->unsigned();


            $table->foreign('bidang_id')->references('id')->on('bidang')
            ->onDelete('cascade');
            $table->foreign('kategori_id')->references('id')->on('kategori')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users',function(Blueprint $table){
            $table->dropColumn('bidang_id');
            $table->dropColumn('kategori_id');
        });
    }
};
