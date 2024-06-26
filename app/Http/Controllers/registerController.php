<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; // For password hashing
use Illuminate\Support\Facades\Request as FacadesRequest;

class RegisterController extends Controller
{
    function register()
    {
        return view('register');
    }

    function create(Request $request)
    {
        $request->validate([
            'email'=> 'required|email|unique:users',
            'name'=>'required',
            'password'=> 'required|min:6',
            'password_confirmation' => 'required|same:password',
        ],[
            'email.required'=> 'Email wajib diisi',
            'name.required'=> 'Nama wajib diisi',
            'email.email'=> 'Silahkan masukkan email yang valid',
            'email.unique'=> 'Email sudah pernah digunakan, silahkan isi alamat yang lain',
            'password.required'=> 'Password wajib diisi',
            'password.min'=> 'Minimum password 6 karakter',
            'password_confirmation.required' =>'Password tidak sama',
        ]);

        $data = [
            'email'=> $request->email,
            'name'=> $request->name,
            'password'=> Hash::make($request->password),
            'photo'=> $request->avatar,
            'level' => 'pembeli',
        ];
        User::create($data);

        $infologin = [
            'email'=> $request->email,
            'password'=> $request->password
        ];


        if(Auth::attempt($infologin)){
            //kalau autentikasi sukses
            $successMessage =  "Akun " . Auth::user()->name . "berhasil didaftarkan! Silakan login.";
            return redirect('login')->with('success', $successMessage);
        }else{
            //kalu autentikasi gagal
            $errorMessage = 'Login gagal. Periksa kembali email dan password anda.';
            return redirect('register')->withErrors(['eror' => $errorMessage]);


        }
    }
}
