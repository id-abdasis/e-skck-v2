<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ibu extends Model
{
    protected $table = 'ibus';

    protected $fillable = [
        'nama_lengkap_ibu',
        'agama_ibu',
        'pekerjaan_ibu',
        'umur_ibu',
        'provinsi_ibu',
        'kabupaten_ibu',
        'kecamatan_ibu',
        'alamat_ibu',
        'pribadi_id',
    ];
    public function pribadi()
    {
        return $this->belongsTo(Pribadi::class);
    }

}
