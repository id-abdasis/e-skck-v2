<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
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
}
