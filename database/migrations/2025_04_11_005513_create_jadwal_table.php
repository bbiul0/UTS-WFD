<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::create('jadwal', function (Blueprint $table) {
    //         $table->id();
    //         $table->timestamps();
    //     });

        
    // }

    public function up()
{
    Schema::create('jadwal', function (Blueprint $table) {
        $table->id();
        $table->integer('nomor_lapangan');
        $table->string('jam_mulai');
        $table->string('jam_selesai');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal');
    }
};


