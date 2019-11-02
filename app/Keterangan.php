<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keterangan extends Model
{
    protected $table = 'keterangans';

    protected $fillable = [
        'riwayat_pekerjaan',
        'hobi',
        'alamat_keterangan',
        'email',
        'pribadi_id',
    ];
    
    public function pribadi()
    {
        return $this->belongsTo(Pribadi::class);
    }
}
