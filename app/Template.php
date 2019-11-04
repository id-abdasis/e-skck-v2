<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    //

    protected $table = 'templates';
    protected $fillable = [
        'judul_kiri_atas',
        'alamat_dijudul',
        'atas_nama',
        'satuan_kepala',
        'pejabat',
        'jabatan',
        'lokasi_cetak',
        'masa',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
