<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        return view('admin.login',[
            'title' => 'loginadmin'
        ]);
    }

    public function tambah(){
        return view('admin.tambahadmin',[
            'title' => 'tambahadmin'
        ]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'nama_admin'     => 'required',
            'username_admin'     => 'required|unique:tb_admin',
            'password_admin'   => 'required'
        ]);

        Admin::create([
            'nama_admin' => $request->nama_admin,
            'username_admin' => $request->username_admin,
            'password_admin' => Hash::make($request->password_admin),
        ]);
        return redirect('/akunadmin');
        
    }

    public function authenticate(Request $request){
        // $this->validate($request, [
        //     'username_admin' => 'required',
        //     'password_admin' => 'required'
        // ]);
    
        // //CUKUP MENGAMBIL EMAIL DAN PASSWORD SAJA DARI REQUEST
        // //KARENA JUGA DISERTAKAN TOKEN
        // $auth = $request->only('username_admin', 'password_admin');
        // // $auth['status'] = 1; //TAMBAHKAN JUGA STATUS YANG BISA LOGIN HARUS 1
      
        // //CHECK UNTUK PROSES OTENTIKASI
        // //DARI GUARD CUSTOMER, KITA ATTEMPT PROSESNYA DARI DATA $AUTH
        // if (auth()->guard('admin')->attempt($auth)) {
        //     //JIKA BERHASIL MAKA AKAN DIREDIRECT KE DASHBOARD
        //     return redirect()->intended(route('admin.dashboard'));
        // }
        // //JIKA GAGAL MAKA REDIRECT KEMBALI BERSERTA NOTIFIKASI
        // return redirect()->back()->with(['error' => 'Email / Password Salah']);


        $credentials = $request->validate([
            'username_admin' => 'required',
            'password_admin' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
        // if (auth()->guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/dashboard');
            //var_dump($credentials);
        }

        return back()->with('loginError', 'Username atau Password salah! Silahkan coba lagi');
    }

    public function logoutadmin(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/admin');
    }


    
}
