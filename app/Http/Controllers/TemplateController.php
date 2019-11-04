<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use Session;
use App\Template;
use Auth;
use DB;
class TemplateController extends Controller
{
    public function setting_template()
    {
        $template = Template::all()->first();
        return view('layouts.admin-side.template')->with(['template' => $template]);
    }

    public function update_template(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul_kiri_atas' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            $user_id = Auth::user()->id;
            $request->request->add(['user_id' => $user_id]);
            DB::table('templates')->where('user_id', Auth::user()->id)->update($request->except(['_token']));
            Session::flash('template-diupdate');
            return redirect()->route('template.setting-template');
        }
        
    }
}
