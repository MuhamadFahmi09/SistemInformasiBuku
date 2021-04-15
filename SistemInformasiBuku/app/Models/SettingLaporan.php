<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingLaporan extends Model
{
    protected $table='table_settinglaporan';
    protected $fillable=['id_setting','nama_perusahaan','alamat','no_telepon','web','logo','email'];
}
