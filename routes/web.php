<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TransaksiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/layanan', function () {
    return view('service',[
        "title" => "Service"
    ]);
}); 

Route::get('/kontak', function () {
    return view('contact',[
        "title" => "Kontak"
    ]);
}); 

Route::get('/dashboard', function () {
    return view('admin.home',[
        "title" => "dashboard"
    ]);
}); 

Route::get('/laporminggu', function () {
    return view('admin.laporminggu',[
        "title" => "laporminggu"
    ]);
}); 

Route::get('/laporbulan', function () {
    return view('admin.laporbulan',[
        "title" => "laporbulan"
    ]);
}); 

Route::get('/tambahadmin', function () {
    return view('admin.tambahadmin',[
        "title" => "tambahadmin"
    ]);
}); 

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest'); 
Route::post('/login', [LoginController::class, 'authenticate']); 
Route::post('/logout', [LoginController::class, 'logout']); 

Route::get('/register', [RegisterController::class, 'index']); 
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/tambahadmin', [AdminController::class, 'tambah']);
Route::post('/registeradmin', [AdminController::class, 'store']);

Route::get('/admin', [AdminController::class, 'index']);
Route::post('/admin', [AdminController::class, 'authenticate']);
Route::post('/logoutadmin', [AdminController::class, 'logoutadmin']); 

Route::get('/pesan', [TransaksiController::class, 'index']);
Route::post('/pesan', [TransaksiController::class, 'store']);
Route::get('/jobproses', [TransaksiController::class, 'show']);
Route::get('/jobproses/edit/{id}', [TransaksiController::class, 'editjob']);
Route::get('/jobproses/hapus/{id}', [TransaksiController::class, 'hapusjob']);
Route::post('/jobproses/update', [TransaksiController::class, 'updatejob']);
Route::get('/tambahjob', [TransaksiController::class, 'formtambahjob']);
Route::post('/tambahjob', [TransaksiController::class, 'tambahjob']);
Route::get('/jobdone', [TransaksiController::class, 'trdone']);
Route::get('/jobdone/hapus/{id}', [TransaksiController::class, 'hapusjobdone']);
Route::get('/status', [TransaksiController::class, 'status']);

Route::get('/laporhari', [TransaksiController::class, 'laporhari']);
Route::get('/laporhari/cari', [TransaksiController::class, 'laporanhari']);
Route::get('/laporbulan', [TransaksiController::class, 'laporbulan']);
Route::get('/laporbulan/cari', [TransaksiController::class, 'laporanbulan']);
Route::get('/laporminggu', [TransaksiController::class, 'laporminggu']);
Route::get('/laporminggu/cari', [TransaksiController::class, 'laporanminggu']);

Route::get('/akunuser', [AccountController::class, 'akunuser']);
Route::get('/akunuser/edit/{id}', [AccountController::class, 'edituser']);
Route::post('/akunuser/update', [AccountController::class, 'updateuser']);
Route::get('/akunuser/resetpw/{id}', [AccountController::class, 'resetpw']);
Route::post('/akunuser/updatepw', [AccountController::class, 'updatepw']);
Route::get('/akunuser/hapus/{id}', [AccountController::class, 'hapususer']);
Route::get('/tambahuser', [AccountController::class, 'formtambahuser']);
Route::post('/tambahuser', [AccountController::class, 'tambahuser']);

Route::get('/akunadmin', [AccountController::class, 'akunadmin']);
Route::get('/akunadmin/edit/{id}', [AccountController::class, 'editadmin']);
Route::post('/akunadmin/update', [AccountController::class, 'updateadmin']);
Route::get('/akunadmin/resetpw/{id}', [AccountController::class, 'resetpwadmin']);
Route::post('/akunadmin/updatepw', [AccountController::class, 'updatepwadmin']);
Route::get('/akunadmin/hapus/{id}', [AccountController::class, 'hapusadmin']);
