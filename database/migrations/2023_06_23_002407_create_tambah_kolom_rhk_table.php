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
        Schema::table('rhk', function (Blueprint $table) {
            $table->bigInteger('intervensi_id')->after('nama_rhk')->nullable()->unsigned();


            $table->foreign('intervensi_id')->references('id')->on('intervensi')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rhk',function(Blueprint $table){
            $table->dropColumn('intervensi_id');
        });
    }
};
