<?php

namespace App\Http\Controllers;

use App\Models\TASYA;
use App\Models\ava;
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
        return view('tasyas.index',['tasyas'=>$tasyas]);
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
        return redirect('index');

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
            "email_user" => "required | email|unique:t_a_s_y_a_s,email_user,".$tasyas->id,
            "pass_user" => "required | min:8 | max:16 | required_with:konfirmasi_pass | same:konfirmasi_pass",
            "nama_user" => "required | min:8 | max:16",
            ]);

           TASYA::where('id',$tasyas->id)->update([
            "email_user" => $request->email_user,
            "pass_user" => Hash::make($request->pass_user),
            "nama_user" => $request->nama_user,]);
            return redirect()->route('tasyas.show',['tasya'=>$tasyas->id])
            ->with('pesan',"Update Data {$validateData['nama_user']} Berhasil");
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
}
