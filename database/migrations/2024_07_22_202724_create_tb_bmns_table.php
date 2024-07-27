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
        Schema::create('tb_bmns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_satker',23);
            $table->string('kd_barang',11);
            $table->string('no_aset',5);
            $table->string('merek_type',255);
            $table->date('tgl_perolehan');
            $table->decimal('nilai_perolehan',15,2);
            $table->decimal('nilai_buku',15,2);
            $table->string('nopsp',100);
            $table->date('tglpsp');
            $table->string('asalpsp',3);
            $table->year('ta');
            $table->string('status_penggunaan',3);
            $table->string('jenis_bmn',3);
            $table->string('jenis_perolehan',3);
            $table->date('tglperolehan2');
            $table->string('status_inventarisasi',3);
            $table->string('alasan_ragu',255);
            $table->string('status_transaksi',3);
            $table->date('created_at');
            $table->date('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_bmns');
    }
};
