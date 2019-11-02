<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pidana extends Model
{
    protected $table = 'pidanas';

    protected $fillable = [
        'perkara_pidana',
        'perkara',
        'vonis',
        'proses_perkara',
        'hukuman',
        'perkara_pelanggaran',
        'jenis_pelanggaran',
        'proses_pelanggaran',
        'pribadi_id'
    ];
    public function pribadi()
    {
        return $this->belongsTo(Pribadi::class);
    }
}

