<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasangan extends Model
{
    protected $table = 'pasangans';

    protected $fillable = [
        'status_pasangan',
        'nama_lengkap_pasangan',
        'umur_pasangan',
        'agama_pasangan',
        'pekerjaan_pasangan',
        'provinsi_pasangan',
        'kabupaten_pasangan',
        'kecamatan_pasangan',
        'kelurahan_pasangan',
        'alamat_pasangan',
        'pribadi_id',
    ];
    public function pribadi()
    {
        return $this->belongsTo(Pribadi::class);
    }
}


