<?php

namespace App\Http\Controllers;

use App\Models\TASYA;
use App\Models\ava;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class TASYAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasyas = TASYA::all();
        if(ava::where('email_user',Session::get('email_user'))->exists()){
            $cek = ava::where('email_user',Session::get('email_user'))->first();
            $gambar = $cek -> path;
            $nama = $cek -> nama_user;
            $email = $cek -> email_user;
        } else {
            $gambar = "https://www.shareicon.net/data/128x128/2016/06/10/586098_guest_512x512.png";
            $nama = "Username";
            $email = "Email";
        }
        return view('tasyas.index',['tasyas'=>$tasyas])->with('gambar', $gambar)->with('nama', $nama)->with('email', $email);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tasyas.daftar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
        "email_user" => "required | email|unique:t_a_s_y_a_s,email_user",
        "pass_user" => "required | min:8 | max:16 | required_with:konfirmasi_pass | same:konfirmasi_pass",
        "nama_user" => "required | min:8 | max:16",
        ]);

        Tasya::create([
            "email_user" => $request->email_user,
            "pass_user" => Hash::make($request->pass_user),
            "nama_user" => $request->nama_user,]);

        ava::create([
            "email_user" => $request->email_user,
            "nama_user" => $request->nama_user,
            "nama_file" => "kosong",
            "path" => "https://www.shareicon.net/data/128x128/2016/06/10/586098_guest_512x512.png",
        ]);
        Session::put('name',$request->nama_user);
        Session::put('email_user',$request->email_user);
        Session::put('login',TRUE);
        Session::put('username', $request->nama_user);
        return redirect('/belajar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TASYA  $tasyas
     * @return \Illuminate\Http\Response
     */
    public function show($tasyas)
    {
        $result = TASYA::findOrfail($tasyas);
        return view('tasyas.show',['tasyas'=> $result]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TASYA  $tasyas
     * @return \Illuminate\Http\Response
     */
    public function edit(TASYA $tasyas)
    {
        return view('tasyas.edit',['tasyas' => $tasyas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TASYA  $tasyas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TASYA $tasyas)
    {
        $validateData = $request->validate([
            "pass_user" => "required | min:8 | max:16 ",
            "nama_user" => "required | min:8 | max:16",
            ]);

           TASYA::where('id',$request->id)->update([
            "pass_user" => Hash::make($request->pass_user),
            "nama_user" => $request->nama_user]);

            return redirect('/tasyas/'.$request->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TASYA  $tasyas
     * @return \Illuminate\Http\Response
     */
    public function destroy(TASYA $tasyas)
    {
        //
        $tasyas->delete();
        return redirect()->route('tasyas.index')->with('pesan', "Hapus data $tasyas->nama berhasil");
    }

    public function ubah($id){
        $data = TASYA::where('id', $id)->first();
        return view('tasyas.edit',['tasyas' => $data]);
    }
}
