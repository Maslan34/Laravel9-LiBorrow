<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function indexAdmin(){
        return view('admin.adminIndex');
    }


    public function  settings(){

        $data= Setting::first();

        if( $data==null){
            $data=new Setting();
            $data->title='Project Title';
            $data->save();
            $data= Setting::first();
        }

        return view('admin.settings',['data'=>$data]);
    }


    public function  settingsUpdate(Request $request){

           $id=$request->input('id');

           $data= Setting::find($id);

        $data->title=  $request->input('title');
        $data->keywords=  $request->input('keywords');
        $data->description=  $request->input(' description');
        $data->company=  $request->input('company');
        $data->adress=  $request->input(' adress');
        $data->phone=  $request->input('phone');
        $data->fax=  $request->input('fax');
        $data->email=  $request->input('email');
        $data->smtpserver=  $request->input('smtpserver');
        $data->smtpemail=  $request->input(' smtpemail');
        $data->smtppassword=  $request->input('smtppassword');
        $data->smtpport=  $request->input(' smtpport');
        $data->facebook=  $request->input(' facebook');
        $data->instagram=  $request->input(' instagram');
        $data->twitter=  $request->input('twitter');
        $data->telegram=  $request->input(' telegram');
        $data->youtube=  $request->input(' youtube');
        $data->aboutus=  $request->input(' aboutus');
        $data->contacts=  $request->input(' contacts');
        $data->references=  $request->input(' references');
        if($request->file('icon')){ // for image uploading
            $data->icon=$request->file('icon')->store('icon');

        }
        $data->status=  $request->input('status');

        return view('admin.settings',);
    }
}
