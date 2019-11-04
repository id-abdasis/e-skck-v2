<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pribadi extends Model
{
    protected $table = 'pribadis';

    protected $fillable = [
        'nama_lengkap_pendaftar',
        'tempat_lahir_pendaftar',
        'tanggal_lahir_pendaftar',
        'jenis_kelamin_pendaftar',
        'status_perkawinan_pendaftar',
        'kewarganegaraan_pendaftar',
        'agama_pendaftar',
        'pekerjaan_pendaftar',
        'telepon_pendaftar',
        'provinsi_pendaftar',
        'kabupaten_pendaftar',
        'kecamatan_pendaftar',
        'kelurahan_pendaftar',
        'alamat_pendaftar',
        'jenis_identitas_pendaftar',
        'nomor_identitas_pendaftar',
        'nomor_paspor_pendaftar',
    ]; 

    public function ayah()
    {
        return $this->hasOne(Ayah::class);
    }

    public function ibu()
    {
        return $this->hasOne(Ibu::class);
    }

    public function saudara()
    {
        return $this->hasOne(Saudara::class);
    }

    public function satwil()
    {
        return $this->hasOne(Satwil::class);
    }

    public function pasangan()
    {
        return $this->hasOne(Pasangan::class);
    }

    public function pendidikan()
    {
        return $this->hasOne(Pendidikan::class);
    }

    public function lampiran()
    {
        return $this->hasOne(Lampiran::class);
    }

    public function fisik()
    {
        return $this->hasOne(Fisik::class);
    }

    public function pidana()
    {
        return $this->hasOne(Pidana::class);
    }

    public function keterangan()
    {
        return $this->hasOne(Keterangan::class);
    }
}
