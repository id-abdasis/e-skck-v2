<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lampiran extends Model
{
    protected $table = 'lampirans';
    protected $fillable = [
        'ktp',
        'paspor',
        'kartu_keluarga',
        'akte',
        'sidik_jari',
        'pribadi_id'
    ];
    public function pribadi()
    {
        return $this->belongsTo(Pribadi::class);
    }
}
