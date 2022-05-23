<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ava;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

class avauploader extends Controller
{
    public function ava(){
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
        return view('ava')->with('image', $gambar)->with('nama', $nama)->with('email', $email);
    }

    public function prosesupload(request $request){
        $request->validate([
            'berkas' => 'required|file|image|mimes:png,jpg|max:2000',
        ]);
        // $path = $request->berkas->store('uploads');
        // $namaFile = $request->berkas->getClientOriginalName();
        $extFile = $request->berkas->getClientOriginalName();
        $namaFile = 'file-'.time()."-".$extFile;
        $path = $request->berkas->move('image',$namaFile);
        // echo "Variabel path berisi: $path <br>";
        $pathBaru = asset('image/'.$namaFile);
        $pathSejati = "https://tasya-tamanisyarat.herokuapp.com/image/".$namaFile;
        // echo "Proses Upload Berhasil, file berada di : <a href='$pathBaru'>$pathBaru</a>" ;
        $cek = ava::where('email_user',Session::get('email_user'))->first();
        if($cek){
            ava::where('email_user',Session::get('email_user'))->first()->delete();
            File::delete($pathSejati);
            ava::create([
            'email_user' => Session::get('email_user'),
            'nama_user' => $request->nama,
            'nama_file' => $namaFile,
            'path' => $pathSejati,
        ]);
        $nama = $cek -> nama_user;
        $email = $cek -> email_user;
        }else{
            ava::create([
            'email_user' => Session::get('email_user'),
            'nama_user' => $request->nama,
            'nama_file' => $namaFile,
            'path' => $pathSejati,
        ]);
        $nama = $cek -> nama_user;
        $email = $cek -> email_user;
        }
        return view('ava')->with('image',$pathBaru)->with('status', 1)->with('nama', $nama)->with('email', $email);
    }
}
