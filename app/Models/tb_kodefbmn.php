<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_kodefbmn extends Model
{
    use HasFactory;
    protected $fillable = [
        'satuan',
        'ur_sskel',
        'kd_perk',
        'kd_brg',
       
    ];
}
