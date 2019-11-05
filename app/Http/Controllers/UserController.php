<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Hash;
use Auth;
use App\Template;
use Session;
class UserController extends Controller
{
    public function index()
    {

        $users = User::all();
        
        return view('layouts.admin-side.user.daftar-user')->with(['users' => $users]);
    }


    public function tambah_user()
    {
        return view('layouts.admin-side.user.tambah-user');
    }

    public function store_user(Request $request)
    {
        $validator =Validator::make($request->all(), [
            'name' => 'required|min:3|max:50',
            'email' => 'email|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            if ($validator->fails()) {
                $errors = $validator->errors();
                if ($errors->first('email')) {
                    Alert::warning('Peringatan', 'Email sudah terdaftar');
                    return redirect()->back()->withErrors($validator)->withInput();
                }
            }else {
                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                ]);

                if ($user) {
                    $user->template()->create([
                        'judul_kiri_atas' => 'Belum di set',
                        'alamat_dijudul' => 'Belum di set',
                        'atas_nama' => 'Belum di set',
                        'satuan_kepala' => 'Belum di set',
                        'pejabat' => 'Belum di set',
                        'jabatan' => 'Belum di set',
                        'lokasi_cetak' => 'Belum di set',
                        'masa' => 'Belum di set',
                    ]);
                }
                Session::flash('tambah');
                return redirect()->route('daftar-user');
            }


        }
    }

    public function hapus_user($id)
    {
        $user = User::find($id)->delete();
        Session::flash('hapus');
        return redirect()->back();

    }

    public function sunting_user($id)
    {
        $user = User::find($id);
        return view('layouts.admin-side.user.sunting-user')->with(['user' => $user]);
    }

    public function update_user($id, Request $request)
    {
        $password_asal = User::where('id', $id)->pluck('password')->first();
        $user = User::find($id)->update([
            'name'  => $request->name,
            'email' => $request->email,
            'password' => $request->password ? : $password_asal,
        ]);

        Alert::success('Berhasil', 'Perubahan Berhasil Disimpan');
        Session::flash('update-user');
        return redirect()->route('daftar-user');
    }

   


}
