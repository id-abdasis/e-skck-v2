<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Satwil extends Model
{
    protected $table = 'satwils';

    protected $fillable = [
        'keperluan',
        'alamat_satwil',
        'provinsi_satwil',
        'kabupaten_satwil',
        'kecamatan_satwil',
        'kelurahan_satwil',
        'pembayaran_satwil',
        'kode_unik',
        'pribadi_id',
    ];
    public function pribadi()
    {
        return $this->belongsTo(Pribadi::class);
    }
}


