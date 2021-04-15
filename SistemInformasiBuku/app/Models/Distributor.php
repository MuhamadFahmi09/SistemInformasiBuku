<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    protected $table='table_distributor';
    protected $fillable=['id_distributor','nama_distributor','alamat','no_telepon'];
}
