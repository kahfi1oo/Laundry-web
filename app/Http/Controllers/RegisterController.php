<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index',[
            'title' => 'register'
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'nama' => 'required|max:20',
            'alamat' => 'required|max:20',
            'no_hp' => 'required|max:15',
            'username' => 'required|max:20|unique:tb_user',
            'password' => 'required|min:5|max:20'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        $request->session()->flash('success', 'Berhasil mendaftar akun! Silahkan login');

        return redirect('/login');
        
    }

    // public function storeadmin(Request $request){
    //     $validatedData = $request->validate([
    //         'username_admin' => 'required|max:20|unique:tb_user',
    //         'password_admin' => 'required|min:5|max:20',
    //         'nama_admin' => 'required|max:20',
    //     ]);

    //     $validatedData['password_admin'] = bcrypt($validatedData['password_admin']);

    //     Admin::create($validatedData);

    //     $request->session()->flash('success', 'Berhasil mendaftar akun! Silahkan login');

    //     return redirect('/akunadmin');
        
    // }
}
