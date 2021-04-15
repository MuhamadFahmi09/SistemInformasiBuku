<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempatPenjualan extends Model
{
    protected $table='table_tempatpenjualan';
    protected $fillable=['id_buku','jumlah_beli','total_harga'];
}
