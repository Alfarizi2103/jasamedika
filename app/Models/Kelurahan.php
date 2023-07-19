<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'kelurahan',
        'kecamatan',
        'kota',
    ];

    public function pasien()
    {
        return $this->belongsToMany('App\Models\Pasien');
    }
}
