<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Http\Requests\StoreTransaksiRequest;
use App\Http\Requests\UpdateTransaksiRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->id();
        $dt_user = User::where('id', $user)->get()->first();
        return view('pesanan',['dt_user' => $dt_user, "title" => "pesanan"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTransaksiRequest  $request
     * @return \Illuminate\Http\Response
     */

     
    public function store(StoreTransaksiRequest $request)
    {
            $validatedData = $request->validate([
                'id_user' => 'required',
                'jns_jasa' => 'required|max:20',
                'jns_barang' => 'required|max:20',
                'jumlah_barang',
                'total_harga',
                'tgl_terima' => 'required',
                'tgl_selesai',
                'status' => 'required',
            ]);
        

        Transaksi::create($validatedData);

        $request->session()->flash('success', 'Berhasil membuat pesanan!');

        return redirect('/status');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        $transaksi = Transaksi::where('status', '!=', 'Selesai')->paginate(3);
        return view('admin.jobproses',['transaksi' => $transaksi, "title" => "jobproses"]);
    }

    public function trdone(Transaksi $trdone)
    {
        $trdone = Transaksi::where('status', '=', 'Selesai')->paginate(3);
        return view('admin.jobdone',['transaksi' => $trdone, "title" => "jobdone"]);
    }

    public function status(Transaksi $status)
    {
        $user = auth()->id();
        $status = Transaksi::where('id_user', $user)->paginate(1);
        return view('status',['status' => $status, "title" => "status"]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */

     public function editjob($id){
        $transaksi = Transaksi::where('id', $id)->get();
	    return view('admin.editjob',['transaksi' => $transaksi, "title"=>"editjob"]);
     }

     public function updatejob(Request $request){
        Transaksi::where('id', $request->id)->update([
            'jns_barang' => $request->jns_barang,
            'jns_jasa' => $request->jns_jasa,
            'jumlah_barang' => $request->jumlah_barang,
            'total_harga' => $request->total_harga,
            'status' => $request->status,
            
        ]);
        
        if ($request->status == 'Selesai') {
            Transaksi::where('id', $request->id)->update([
                'tgl_selesai' => now(),
            ]);
            
            // $selesai = "{{ date('Y-m-d') }}";
        }
        return redirect('/jobproses');
    }

    public function hapusjob($id){
        Transaksi::where('id', $id)->delete();
        return redirect('/jobproses');
    }

    public function hapusjobdone($id){
        Transaksi::where('id', $id)->delete();
        return redirect('/jobdone');
    }

    public function formtambahjob(){
        return view('admin.tambahjob',[
            'title' => 'tambahjob'
        ]);
    }

    public function tambahjob(Request $request){
        $validatedData = $request->validate([
            'id_user' => 'required',
            'jns_jasa' => 'required|max:20',
            'jns_barang' => 'required|max:20',
            'jumlah_barang' =>'required',
            'total_harga'=>'required',
            'tgl_terima' => 'required',
            'tgl_selesai',
            'status' => 'required',
        ]);
        
        Transaksi::create($validatedData);
        return redirect('/jobproses'); 
    }

    public function laporhari()
    {
        $laporan = null;
        return view('admin.laporhari',['laporan' => $laporan, "title" => "laporhari"]);
    }
    public function laporanhari(Request $request)
    {
        $cari = $request->cari;
        $laporan = DB::table('tb_transaksi')
		->where('tgl_selesai','like',"%".$cari."%")
		->get();
        return view('admin.laporhari',['laporan' => $laporan, "title" => "laporanhari"]);

    }

    public function laporbulan()
    {
        $laporan = null;
        return view('admin.laporbulan',['laporan' => $laporan, "title" => "laporbulan"]);
    }
    public function laporanbulan(Request $request)
    {
        $cari = $request->cari;
        $laporan = DB::table('tb_transaksi')
		->where('tgl_selesai','like',"%".$cari."%")
		->get();
        return view('admin.laporbulan',['laporan' => $laporan, "title" => "laporanbulan"]);

    }

    public function laporminggu()
    {
        $laporan = null;
        return view('admin.laporminggu',['laporan' => $laporan, "title" => "laporminggu"]);
    }
    public function laporanminggu(Request $request)
    {
        $cari = $request->cari;
        $laporan = DB::table('tb_transaksi')
		->where('tgl_selesai','like',"%".$cari."%")
		->get();
        return view('admin.laporminggu',['laporan' => $laporan, "title" => "laporanminggu"]);

    }








    public function edit(Transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTransaksiRequest  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTransaksiRequest $request, Transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        //
    }
}
