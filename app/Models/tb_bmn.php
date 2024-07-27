<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_bmn extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_satker',
        'kd_barang',
        'no_aset',
        'merek_type',
        'tgl_perolehan',
        'nilai_perolehan',
        'nilai_buku',
        'nopsp',
        'tglpsp',
        'asalpsp',
        'ta',
        'status_penggunaan',
        'jenis_bmn',
        'jenis_perolehan',
        'tglperolehan2',
        'status_inventarisasi',
        'alasan_ragu',
        'status_transaksi',
        'created_at',
        'updated_at',
    ];
}
