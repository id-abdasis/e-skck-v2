<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saudara extends Model
{
    protected $table = 'saudaras';
    protected $fillable = [
        'nama_lengkap_saudara',
        'agama_saudara',
        'pekerjaan_saudara',
        'umur_saudara',
        'provinsi_saudara',
        'kabupaten_saudara',
        'kecamatan_saudara',
        'kelurahan_saudara',
        'alamat_saudara',
        'pribadi_id',
    ];
    public function pribadi()
    {
        return $this->belongsTo(Pribadi::class);
    }
    
}

