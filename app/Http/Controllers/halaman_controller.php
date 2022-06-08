<?php

namespace App\Http\Controllers;

use App\Http\Requests\authValidation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\TASYA;
use App\Models\ava;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Mail\email_lupa;
use Illuminate\Support\Facades\Mail;

class halaman_controller extends Controller
{
    public function error()
    {
        return view ('404');
    }

    public function belajar()
    {
        // $db = ava::where('email_user', Session::get('email_user'))->first();
        if(TASYA::where('email_user',Session::get('email_user'))->exists()){
            $cek = ava::where('email_user',Session::get('email_user'))->first();
            $gambar = $cek -> path;
            $nama = $cek -> nama_user;
            $email = $cek -> email_user;
        } else {
            $gambar = "https://www.shareicon.net/data/128x128/2016/06/10/586098_guest_512x512.png";
            $nama = "Username";
            $email = "Email";
        }
        return view ('kursus-beranda')->with('nama', $nama)->with('gambar', $gambar);
    }

    public function index()
    {
        return view ('index');
    }

    public function about()
    {
        return view ('about');
    }

    public function testimonial()
    {
        return view ('testimonial');
    }

    public function masuk()
    {
        return view ('masuk');
    }

    public function daftar()
    {
        return view ('tasyas.daftar');
    }

    public function huruf()
    {
        return view ('huruf');
    }

    public function tokoh()
    {
        return view ('tokoh');
    }

    public function kontak()
    {
        return view ('contact');
    }

    public function isyarat()
    {
        return view ('bahasa');
    }

    public function tuli(){
        return view('temanTuli');
    }

    public function lupa_pw(){
        return view('lupapw');
    }

    public function tim(){
        return view('team');
    }

    public function course(){
        return view('courses');
    }

    public function lupa()
        {
            // $db = ava::where('email_user', Session::get('email_user'))->first();
            // if(ava::where('email_user',Session::get('email_user'))->exists()){
            //     $cek = ava::where('email_user',Session::get('email_user'))->first();
            //     echo 'cek email anda';
            // }
            // else {
            //     echo 'email anda tidak terdaftar';
            // }

            return view('halaman-lupa');
        }


    public function loginValidasi(Request $request){
        $error = [
            "required" => ":attribute tidak boleh kosong",
            "email" => ":attribute harus berupa email",
            "min" => ":attribute minimal :min karakter",
            "max" => ":attribute maksimal :max karakter",
            // "confirmed" => ":attribute tidak sama"
        ];

        $rules = [
            //
            "email_user" => "required | email",
            "pass_user" => "required | min:8 | max:16",
            // "nama_user" => "required | min:8 | max:16",
            // "konfirmasi_pass" => "required | confirmed"
        ];

        $validator = Validator::make($request->all(), $rules, $error);
        // $this->redirect()->route('/index');
        // return $request -> validated();

        // return redirect('/index');


        if ($validator->fails()) {
            return redirect('/masuk')
                ->withErrors($validator)
                ->withInput();
        }
        else{
        $email = $request->email_user;
        $password = $request->pass_user;

        $data = TASYA::where('email_user',$email)->first();
        if($data && Hash::check($password, $data -> pass_user) ){ //apakah email tersebut ada atau tidak
                Session::put('name',$data->nama_user);
                Session::put('email_user',$data->email_user);
                Session::put('login',TRUE);
                Session::put('username', $data->nama_user);
                if($email == "admin@mail.com"){
                    Session::put('admin', True);
                    return redirect('/tasyas');
                }
                return redirect('belajar');
            }
        else{
            return redirect('/masuk');
        }
        }
    }

    public function lupaValidasi(Request $request){
        $error = [
            "required" => ":attribute tidak boleh kosong",
            "email" => ":attribute harus berupa email",
            "min" => ":attribute minimal :min karakter",
            "max" => ":attribute maksimal :max karakter",
            // "confirmed" => ":attribute tidak sama"
        ];

        $rules = [
            //
            "email_user" => "required | email",
            // "nama_user" => "required | min:8 | max:16",
            // "konfirmasi_pass" => "required | confirmed"
        ];

        // $validator = Validator::make($request->all(), $rules, $error);

        // if ($validator->fails()) {
        //     return redirect('/lupapw')
        //         ->withErrors($validator)
        //         ->withInput();
        // }
        // else{
            $email = $request->email_user;
            $data = TASYA::where('email_user', $email)->first();
            if ($data){
            $details = [
            'email' => $email,
            'pass' =>  $data->pass_user
            ];

            Mail::to($email)->send(new \App\Mail\email_lupa($details));
            return redirect('/lupapage');
            } else {
                return redirect("/lupa");
            }
        // }
    }

    public function reset(){
        return view('reset_pass');
    }

    public function resetValidasi(Request $request){

        $request->validate([
        "email_user" => "required | email",
        "pass_user" => "required | min:8 | max:16 | required_with:konfirmasi_pass | same:konfirmasi_pass",
        ]);

        $reset = TASYA::where('email_user',$request->email_user)->update([
        "pass_user" => Hash::make($request->pass_user),
        ]);

        if($reset){
            return view('selesai_reset');
        }else{
            return view('reset_pass');
        }
    }

    public function daftarValidasi(Request $request){
        $error = [
            "required" => ":attribute tidak boleh kosong",
            "email" => ":attribute harus berupa email",
            "min" => ":attribute minimal :min karakter",
            "max" => ":attribute maksimal :max karakter",
            "required_with" => ":attribute tidak boleh kosong",
            "same" => ":attribute tidak sama"
        ];

        $rules = [
            //
            "email_user" => "required | email",
            "pass_user" => "required | min:8 | max:16 | required_with:konfirmasi_pass | same:konfirmasi_pass",
            "nama_user" => "required | min:8 | max:16",
            "konfirmasi_pass" => "required"
        ];

        $validator = Validator::make($request->all(), $rules, $error);
        // $this->redirect()->route('/index');
        // return $request -> validated();

        // return redirect('/index');


        if ($validator->fails()) {
            return redirect('/daftar')
                ->withErrors($validator)
                ->withInput();
        }
        else{
            return redirect('/masuk');
        }

    }

    public function logout(){
        Session::forget('name');
        Session::forget('email_user');
        Session::forget('login');
        Session::forget('admin');
        return redirect('/index');
    }

    public function Hapus(){
        TASYA::where('email_user', Session::get('email_user'))->first()->delete();
        ava::where('email_user',Session::get('email_user'))->first()->delete();
        Session::forget('name');
        Session::forget('email_user');
        Session::forget('login');
        Session::forget('admin');
        return redirect('/index');
    }

    public function ubah($id){
        $data = TASYA::where('id', $id)->first();
        return view('tasyas.edit',['tasyas' => $data]);
    }

}
