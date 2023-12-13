<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function akunuser(User $user)
    {
        $user = User::paginate(10);
        return view('admin.akunuser',['user' => $user, "title" => "akunuser"]);
    }


    public function edituser($id){
        $user = User::where('id', $id)->get();
	    return view('admin.edituser',['user' => $user, "title"=>"edituser"]);
    }

    public function updateuser(Request $request){
        User::where('id', $request->id)->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'username' => $request->username,
        ]);
        return redirect('/akunuser');
    }

    public function resetpw($id){
        $user = User::where('id', $id)->get();
	    return view('admin.resetpw',['user' => $user, "title"=>"resetpw"]);
    }

    public function updatepw(Request $request){
        User::where('id', $request->id)->update([
            'password' => Hash::make($request->password),
        ]);
        return redirect('/akunuser');
    }

    public function hapususer($id){
        User::where('id', $id)->delete();
        return redirect('/akunuser');
    }

    public function formtambahuser(){
        return view('admin.tambahuser',[
            'title' => 'tambahuser'
        ]);
    }

    public function tambahuser(Request $request){
        $validatedData = $request->validate([
            'nama' => 'required|max:20',
            'alamat' => 'required|max:20',
            'no_hp' => 'required|max:15',
            'username' => 'required|max:20|unique:tb_user',
            'password' => 'required|min:5|max:20'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        return redirect('/akunuser'); 
    }




    public function akunadmin(Admin $admin)
    {
        $admin = Admin::paginate(10);
        return view('admin.akunadmin',['admin' => $admin, "title" => "akunadmin"]);
    }

    public function editadmin($id){
        $admin = Admin::where('id', $id)->get();
	    return view('admin.editadmin',['admin' => $admin, "title"=>"editadmin"]);
    }

    public function updateadmin(Request $request){
        Admin::where('id', $request->id)->update([
            'nama_admin' => $request->nama_admin,
            'username_admin' => $request->username_admin,
        ]);
        return redirect('/akunadmin');
    }

    public function resetpwadmin($id){
        $admin = Admin::where('id', $id)->get();
	    return view('admin.resetpwadmin',['admin' => $admin, "title"=>"resetpwadmin"]);
    }

    public function updatepwadmin(Request $request){
        Admin::where('id', $request->id)->update([
            'password_admin' => Hash::make($request->password_admin),
        ]);
        return redirect('/akunadmin');
    }

    public function hapusadmin($id){
        Admin::where('id', $id)->delete();
        return redirect('/akunadmin');
    }
}
