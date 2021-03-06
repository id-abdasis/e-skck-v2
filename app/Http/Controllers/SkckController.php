<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ayah;
use App\Fisik;
use App\Ibu;
use App\Keterangan;
use App\Lampiran;
use App\Pasangan;
use App\Pendidikan;
use App\Pidana;
use App\Pribadi;
use App\Satwil;
use App\Saudara;
use App\User;
use Alert;
use Auth;
use Session;
use Mail;

use App\Template;
use Illuminate\Support\Facades\Hash;

class SkckController extends Controller
{
    public function index()
    {
        return view('layouts.app');
    }
    public function pendaftaran()
    {
        $api_kabupaten = 'http://dev.farizdotid.com/api/daerahindonesia/provinsi/33/kabupaten';
        $api_kecamatan = 'http://dev.farizdotid.com/api/daerahindonesia/provinsi/kabupaten/3328/kecamatan';
        $kabupaten = file_get_contents($api_kabupaten);
        $r_kabupaten = json_decode($kabupaten);
        $kecamatan = file_get_contents($api_kecamatan);
        $r_kecamatan = json_decode($kecamatan);
        return view('layouts.client-side.pendaftaran-skck')->with(['polres' => $r_kabupaten, 'polsek' => $r_kecamatan]);
    }

    public function store_skck(Request $request)
    {
        // dd($request->hubungan_pasangan ? : '-');
        // dd($request->agama_pasangan);
        $pribadi = Pribadi::create($request->all());
        $pribadi_id = Pribadi::all()->pluck('id')->last();
        $kode_unik = date('dmyhs');
        if ($pribadi) {
            $request->request->add(['kode_unik' => $kode_unik ]);
            $satwil = $pribadi->satwil()->create($request->all());
            $ayah = $pribadi->ayah()->create($request->all());
            $pasangan = $pribadi->pasangan()->create([
                'status_pasangan'   => $request->status_pasangan ? : '-',
                'nama_lengkap_pasangan' => $request->nama_lengkap_pasangan ? : '-',
                'umur_pasangan' => $request->umur_pasangan ? : '-',
                'agama_pasangan'    => $request->agama_pasangan ? : '-',
                'pekerjaan_pasangan' => $request->pekerjaan_pasangan ? : '-',
                'jenis_kelamin_pasangan' => $request->jenis_kelamin_pasangan ? : '-',
                'provinsi_pasangan' => $request->provinsi_pasangan ? : '-',
                'kabupaten_pasangan' => $request->kabupaten_pasangan ? : '-',
                'kecamatan_pasangan'    => $request->kecamatan_pasangan ? : '-',
                'kelurahan_pasangan' => $request->kelurahan_pasangan ? : '-',
                'alamat_pasangan' => $request->alamat_pasangan ? : '-',
                'pribadi_id' => $request->id
            ]);
            $ibu = $pribadi->ibu()->create($request->all());
            $pendidikan = $pribadi->pendidikan()->create($request->all());
            $pidana = $pribadi->pidana()->create($request->all());
            $fisik = $pribadi->fisik()->create($request->all());
            $keterangan = $pribadi->keterangan()->create($request->all());
            // $saudara = $pribadi->saudara()->create($request->all());
            if (count($request->nama_lengkap_saudara) > 0) {
                foreach ($request->nama_lengkap_saudara as $key => $value) {
                    $saudara = new Saudara;
                    // dd( $saudara);
                    $saudara->nama_lengkap_saudara = $request->nama_lengkap_saudara[$key];
                    $saudara->umur_saudara = $request->umur_saudara[$key];
                    $saudara->agama_saudara = $request->agama_saudara[$key];
                    $saudara->pekerjaan_saudara = $request->pekerjaan_saudara[$key];
                    $saudara->provinsi_saudara = $request->provinsi_saudara[$key];
                    $saudara->kabupaten_saudara = $request->kabupaten_saudara[$key];
                    $saudara->kecamatan_saudara = $request->kecamatan_saudara[$key];
                    $saudara->kelurahan_saudara = $request->kelurahan_saudara[$key];
                    $saudara->alamat_saudara = $request->alamat_saudara[$key];
                    $saudara->pribadi_id    =   $pribadi_id;
                    $saudara->save();
                }
            }
            if ($request->hasFile('ktp')) {
                $fileExtention = $request->file('ktp')->getClientOriginalExtention();
                $uploadKTP = $request->file('ktp')->move('lampiran/'. $request->nama_lengkap_pendaftar . "_lapiran_ktp" . '.' . $fileExtention);
            }else{
                $uploadKTP = "Belum Di Upload";
            }
            if ($request->hasFile('paspor')) {
                $fileExtention = $request->file('paspor')->getClientOriginalExtention();
                $uploadPaspor = $request->file('paspor')->move('lampiran/'. $request->nama_lengkap_pendaftar . "_lapiran_paspor" . '.' . $fileExtention);
            }else{
                $uploadPaspor = "Belum Di Upload";
            }
            if ($request->hasFile('kartu_keluarga')) {
                $fileExtention = $request->file('kartu_keluarga')->getClientOriginalExtention();
                $uploadkartu_keluarga = $request->file('kartu_keluarga')->move('lampiran/'. $request->nama_lengkap_pendaftar . "_lapiran_kartu_keluarga" . '.' . $fileExtention);
            }else{
                $uploadkartu_keluarga = "Belum Di Upload";
            }
            if ($request->hasFile('akte')) {
                $fileExtention = $request->file('akte')->getClientOriginalExtention();
                $uploadAkte = $request->file('akte')->move('lampiran/'. $request->nama_lengkap_pendaftar . "_lapiran_akte" . '.' . $fileExtention);
            }else{
                $uploadAkte = "Belum Di Upload";
            }

            if ($request->hasFile('sidik_jari')) {
                $fileExtention = $request->file('sidik_jari')->getClientOriginalExtention();
                $uploadSidik_jari = $request->file('sidik_jari')->move('lampiran/'. $request->nama_lengkap_pendaftar . "_lapiran_sidik_jari" . '.' . $fileExtention);
            }else{
                $uploadSidik_jari = "Belum Di Upload";
            }

            $lampiran = $pribadi->lampiran()->create([
                'ktp' => $uploadKTP,
                'paspor'    => $uploadPaspor,
                'kartu_keluarga'    => $uploadkartu_keluarga,
                'akte'  => $uploadAkte,
                'sidik_jari'    => $uploadSidik_jari,
            ]);

            Alert::success('Berhasil', 'Pendaftaran Berhasil Di Lakukan');
            Session::flash('pendaftaran-sukses');
            $data  = [
                'nama' => $request->nama_lengkap_pendaftar,
                'nik' => $request->nomor_identitas_pendaftar,
                'kode_unik' =>$kode_unik
            ];
            $to_email = $request->email;
            $to_nama = $request->nama_lengkap_pendaftar;

            Mail::send('layouts.mail.mail', $data, function ($message) use ($to_email, $to_nama) {
                $message->from('id.polrestegal@gmail.com', 'SKCK Priority Polres Tegal');
                $message->sender('id.polrestegal@gmail.com', 'SKCK Priority Polres Tegal');
                $message->to($to_email, $to_nama);
                $message->subject('Data Pendaftaran SKCK Polres Tegal');
            });
            return redirect()->route('pendaftaran-sukses');
        }else{
            return redirect()->back()->withInput();
        }
    }

    public function daftar_skck()
    {
        $dataPendaftar = Pribadi::all();
        return view('layouts.admin-side.skck.daftar-skck')->with(['semua_skck' => $dataPendaftar]);
    }

    public function install()
    {
        $total_user = User::all()->count();
        if ($total_user < 1) {
            User::create([
                'name' => 'Admin',
                'email' => 'admin@mail.com',
                'password' => Hash::make('rahasia'),
            ]);

            Template::create([
                'judul_kiri_atas' => 'Belum di set',
                'alamat_dijudul' => 'Belum di set',
                'atas_nama' => 'Belum di set',
                'satuan_kepala' => 'Belum di set',
                'pejabat' => 'Belum di set',
                'jabatan' => 'Belum di set',
                'lokasi_cetak' => 'Belum di set',
                'masa' => 'Belum di set',
                'user_id' => User::all()->pluck('id')->first(),
            ]);

            Alert::success('Berhasil', 'Penambahan Akun Berhasil');
            return redirect('admin');
        }else{
            Alert::warning('Peringatan', 'Akun Sudah Tersedia Silahkan Login');
            return redirect('/login');
        }
    }

    public function template()
    {
        return view('layouts.admin-side.template');
    }

    public function detail_pendaftar($id)
    {
        $biodata  = Pribadi::find($id);
        return view('layouts.admin-side.skck.detail-skck')->with(['biodata' => $biodata]);
    }

    public function sunting_pendaftar($id)
    {       
        $biodata = Pribadi::find($id);
        $saudara = Saudara::where('pribadi_id', $id)->get();
        // dd($saudara);
        // dd($biodata->pasangan);
        return view('layouts.admin-side.skck.edit-skck')->with(['biodata' => $biodata, 'saudaras' => $saudara]);
    }

    public function update_pendaftar(Request $request)
    {
        // dd($lampiran->ktp);
        $pribadi = Pribadi::find($request->id)->update($request->except(['_token']));
        $pribadi_biodata = Pribadi::find($request->id);
        $pribadi_id = $pribadi_biodata->id;
        $kode_unik = date('dmyhs');
        // dd($pribadi_id)->first();
        if ($pribadi) {
            $request->request->add(['kode_unik' => $kode_unik ]);
            $satwil = Satwil::where('pribadi_id', $pribadi_id)->first()->fill($request->all())->save();
            $ayah = Ayah::where('pribadi_id', $pribadi_id)->first()->fill($request->all())->save();
            $pasangan = Pasangan::where('pribadi_id', $pribadi_id)->first()->update([
                'status_pasangan'   => $request->status_pasangan ? : '-',
                'nama_lengkap_pasangan' => $request->nama_lengkap_pasangan ? : '-',
                'umur_pasangan' => $request->umur_pasangan ? : '-',
                'agama_pasangan'    => $request->agama_pasangan ? : '-',
                'pekerjaan_pasangan' => $request->pekerjaan_pasangan ? : '-',
                'jenis_kelamin_pasangan' => $request->jenis_kelamin_pasangan ? : '-',
                'provinsi_pasangan' => $request->provinsi_pasangan ? : '-',
                'kabupaten_pasangan' => $request->kabupaten_pasangan ? : '-',
                'kecamatan_pasangan'    => $request->kecamatan_pasangan ? : '-',
                'kelurahan_pasangan' => $request->kelurahan_pasangan ? : '-',
                'alamat_pasangan' => $request->alamat_pasangan ? : '-',
                'pribadi_id' => $request->id
            ]);
            $ibu = Ibu::where('pribadi_id', $pribadi_id)->first()->fill($request->all())->save();
            $pendidikan = Pendidikan::where('pribadi_id', $pribadi_id)->first()->fill($request->all())->save();
            $pidana = Pidana::where('pribadi_id', $pribadi_id)->first()->fill($request->all())->save();
            $fisik = Fisik::where('pribadi_id', $pribadi_id)->first()->fill($request->all())->save();
            $keterangan = Keterangan::where('pribadi_id', $pribadi_id)->first()->fill($request->all())->save();
            // $saudara = Saudara::find($pribadi_id)->first()->fill($request->all())->save();
            if (count($request->nama_lengkap_saudara) > 0) {
                foreach ($request->nama_lengkap_saudara as $key => $value) {
                    $saudara = Saudara::where('pribadi_id', $pribadi_id)->first()->first();
                    // dd($saudara);
                    $saudara->nama_lengkap_saudara = $request->nama_lengkap_saudara[$key];
                    $saudara->umur_saudara = $request->umur_saudara[$key];
                    $saudara->agama_saudara = $request->agama_saudara[$key];
                    $saudara->pekerjaan_saudara = $request->pekerjaan_saudara[$key];
                    $saudara->provinsi_saudara  = $request->provinsi_saudara[$key];
                    $saudara->kabupaten_saudara = $request->kabupaten_saudara[$key];
                    $saudara->kecamatan_saudara = $request->kecamatan_saudara[$key];
                    $saudara->kelurahan_saudara = $request->kelurahan_saudara[$key];
                    $saudara->alamat_saudara = $request->alamat_saudara[$key];
                    $saudara->save();
                }
            }
            $lampiran = Lampiran::where('pribadi_id',$request->id)->first();

            if ($request->hasFile('ktp')) {
                $fileExtention = $request->file('ktp')->getClientOriginalExtention();
                $uploadKTP = $request->file('ktp')->move('lampiran/'. $request->nama_lengkap_pendaftar . "_lapiran_ktp" . '.' . $fileExtention);
            }else{
                $uploadKTP = $lampiran->ktp;
            }
            if ($request->hasFile('paspor')) {
                $fileExtention = $request->file('paspor')->getClientOriginalExtention();
                $uploadPaspor = $request->file('paspor')->move('lampiran/'. $request->nama_lengkap_pendaftar . "_lapiran_paspor" . '.' . $fileExtention);
            }else{
                $uploadPaspor = $lampiran->paspor;
            }
            if ($request->hasFile('kartu_keluarga')) {
                $fileExtention = $request->file('kartu_keluarga')->getClientOriginalExtention();
                $uploadkartu_keluarga = $request->file('kartu_keluarga')->move('lampiran/'. $request->nama_lengkap_pendaftar . "_lapiran_kartu_keluarga" . '.' . $fileExtention);
            }else{
                $uploadkartu_keluarga = $lampiran->kartu_keluarga;
            }
            if ($request->hasFile('akte')) {
                $fileExtention = $request->file('akte')->getClientOriginalExtention();
                $uploadAkte = $request->file('akte')->move('lampiran/'. $request->nama_lengkap_pendaftar . "_lapiran_akte" . '.' . $fileExtention);
            }else{
                $uploadAkte = $lampiran->akte;
            }

            if ($request->hasFile('sidik_jari')) {
                $fileExtention = $request->file('sidik_jari')->getClientOriginalExtention();
                $uploadSidik_jari = $request->file('sidik_jari')->move('lampiran/'. $request->nama_lengkap_pendaftar . "_lapiran_sidik_jari" . '.' . $fileExtention);
            }else{
                $uploadSidik_jari = $lampiran->sidik_jari;
            }

            $lampiran = Lampiran::where('pribadi_id', $pribadi_id)->first()->update([
                'ktp' => $uploadKTP,
                'paspor'    => $uploadPaspor,
                'kartu_keluarga'    => $uploadkartu_keluarga,
                'akte'  => $uploadAkte,
                'sidik_jari'    => $uploadSidik_jari,
            ]);

            Session::flash('update-pendaftar');
            return redirect()->route('detail', ['id' => $pribadi_id]);
        }else{
            return redirect()->back()->withInput();
        }
    }


    public function print_pendaftar($id)
    {
        $biodata = Pribadi::find($id);
        $template = Template::where('user_id',Auth::user()->id)->first();
        // dd($template);
        // dd(Auth::user()->id);
        // dd($biodata);
        return view('layouts.admin-side.skck.cetak-pendaftaran')->with(['biodata' => $biodata, 'template' => $template]);
    }
    






    public function hapus_pendaftar($id)
    {
        $biodata = Pribadi::find($id)->delete();
        Session::flash('hapus-pendaftar');
        return redirect()->back();
    }
}
