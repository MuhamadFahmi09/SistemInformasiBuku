<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table='table_pengguna';
    protected $fillable=['id_user','nama','alamat','no_telepon','status','username','password','akses'];
}

