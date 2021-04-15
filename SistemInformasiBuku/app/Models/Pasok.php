<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasok extends Model
{
    protected $table='table_pasok';
    protected $fillable=['id_pasok','id_distributor','id_buku','jumlah','tanggal'];
}

