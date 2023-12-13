<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jasa extends Model
{
    use HasFactory;

    protected $table = 'tb_jasa';
    public $timestamps = false;
    protected $primarykey = 'id';
    protected $fillable = [
         'jenis_jasa',
         'jenis_barang',
         'harga',
     ];



}
