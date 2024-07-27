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
        Schema::create('tb_kodefbmns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('satuan',10);
            $table->string('ur_sskel',65);
            $table->string('kd_perk',6);
            $table->string('kd_brg',10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_kodefbmns');
    }
};
