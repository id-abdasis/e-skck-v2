<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fisik extends Model
{
    protected $table = 'fisiks';

    protected $fillable = [
        'rambut',
        'wajah',
        'kulit',
        'tandaistimewa',
        'tinggi_badan',
        'berat_badan',
        'rumus_jari_kiri',
        'rumus_jari_kanan',
        'pribadi_id'
    ];

    public function pribadi()
    {
        return $this->belongsTo(Pribadi::class);
    }
}


