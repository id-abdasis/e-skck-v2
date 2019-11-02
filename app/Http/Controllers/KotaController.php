<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class KotaController extends Controller
{
    public function provinsi()
    {
        $api_provinsi = 'http://dev.farizdotid.com/api/daerahindonesia/provinsi';
        $provinsi = file_get_contents($api_provinsi);
        $r_provinsi = json_decode($provinsi);
        return response()->json( $r_provinsi, 200);
    }

    public function kabupaten($id)
    {
        $api_kabupaten = 'http://dev.farizdotid.com/api/daerahindonesia/provinsi/' . $id . '/kabupaten';
        $kabupaten = file_get_contents($api_kabupaten);
        $r_kabupaten = json_decode($kabupaten);
        foreach ($r_kabupaten->kabupatens as $data) {
            echo '<option value="' . $data->id . '|' . $data->nama . '">' . $data->nama . '</option>';
        }

    }

    public function kecamatan($id)
    {
        $api_kecamatan = 'http://dev.farizdotid.com/api/daerahindonesia/provinsi/kabupaten/'. $id . '/kecamatan';
        $kecamatan = file_get_contents($api_kecamatan);
        $r_kecamatan = json_decode($kecamatan);
        foreach ($r_kecamatan->kecamatans as $data) {
            echo '<option  value="' . $data->id . '|' .$data->nama . '">' . $data->nama . '</option>';
        }
    }

    public function kelurahan($id)
    {
        $kelurahan = 'http://dev.farizdotid.com/api/daerahindonesia/provinsi/kabupaten/kecamatan/'. $id .'/desa';
        $kelurahan = file_get_contents($kelurahan);
        $r_kelurahan = json_decode($kelurahan);
        foreach ($r_kelurahan->desas as $data) {
            echo '<option value="' . $data->id . '|' .$data->nama . '">' . $data->nama . '</option>';
        }
    }
}