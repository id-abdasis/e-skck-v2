<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    protected $table = 'pendidikans';
    protected $fillable = [
        'tingkat_pendidikan',
        'nama_sekolah',
        'tahun_lulus',
        'provinsi_pendidikan',
        'kabupaten_pendidikan',
        'kecamatan_pendidikan',
        'pribadi_id',
    ];
    public function pribadi()
    {
        return $this->belongsTo(Pribadi::class);
    }
}


