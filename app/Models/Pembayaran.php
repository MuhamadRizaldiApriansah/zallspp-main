<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayaran';

    protected $primarykey = 'id_pembayaran';

    protected $fiilable = [
        'id_petugas',
        'nisn',
        'tanggal_bayar',
        'bulan_bayar',
        'tahun_bayar',
        'id_spp',
        'jumlah_bayar'
    ];
}
