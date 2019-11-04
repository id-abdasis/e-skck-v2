<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ayah extends Model
{
    protected $table = 'ayahs';

    protected $fillable = [
        'nama_lengkap_ayah',
        'agama_ayah',
        'pekerjaan_ayah',
        'umur_ayah',
        'provinsi_ayah',
        'kabupaten_ayah',
        'kecamatan_ayah',
        'alamat_ayah',
        'kelurahan_ayah',
        'pribadi_id',
    ];

    public function pribadi()
    {
        return $this->belongsTo(Pribadi::class);
    }
}

