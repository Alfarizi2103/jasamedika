<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'id_pasien',
        'no_telp',
        'alamat',
        'rt',
        'rw',
        'tgl_lahir',
        'jenis_kelamin',
    ];

    public function kelurahan()
    {
        return $this->belongsToMany('App\Models\Kelurahan');
    }
}
