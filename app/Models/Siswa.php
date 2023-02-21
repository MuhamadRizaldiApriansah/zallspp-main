<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';

    protected $primarykey = 'id';

    protected $fillable = [
        'nisn',
        'nis',
        'nama',
        'id_kelas',
        'no_telp',
        'created_at',
        'updated_at'
    ];

    public function kelas()
    {
        return $this->belongsTo('App\Models\Kelas', 'id_kelas', 'id');
    }
}
