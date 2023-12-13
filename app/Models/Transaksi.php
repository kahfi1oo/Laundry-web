<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    //use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tb_transaksi';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_user',
        'jns_jasa',
        'jns_barang',
        'jumlah_barang',
        'total_harga',
        'tgl_terima',
        'tgl_selesai',
        'status',
    ];

    public function data_user(){
        return $this->belongsTo('App\Models\User', 'id_user');
    }
    
    public $timestamps = false;
}
