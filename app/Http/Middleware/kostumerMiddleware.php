<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\TASYA;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class kostumerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // $email = $request->email_user;
        // $password = $request->password;

        // $data = TASYA::where('email_user',$email)->first();
        // if($data){ //apakah email tersebut ada atau tidak
        //     if(Hash::check($password,$data->password)){
        //         Session::put('name',$data->name);
        //         Session::put('email',$data->email);
        //         Session::put('login',TRUE);
        //         return $next($request);
        //     }
        //     else{
        //         return redirect('/login')->with('alert','Password atau Email, Salah !');
        //     }
        // }
        // else{
        //     return redirect('/login')->with('alert','Password atau Email, Salah!');
        // }
        if(Session::get('login')){
            if(Session::get('admin')){
                return redirect('/tasyas');
            }else{
            return $next($request);
            }
        }else{
            return redirect('/login')->with('alert','Kamu harus login dulu');
        }
    }
}
