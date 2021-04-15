<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SettingLaporan;

class SettingLaporanController extends Controller
{
    public function  index()
    {
        $settinglaporan = SettingLaporan::all();
        return view ('settinglaporan.index', compact('settinglaporan'));
      
      }
    public function create(Request $request)
{
  SettingLaporan::create($request->all());
  return redirect('/settinglaporan')->with('Sukses','Data Berhasil Terimput');
 
}
public function edit($id)
{
  $settinglaporan=SettingLaporan::find($id);
 return view('settinglaporan/edit',['settinglaporan' => $settinglaporan]);
}
public function update(Request $request,$id)
{
  $settinglaporan=SettingLaporan::find($id);
  $settinglaporan->update($request ->all());
  return redirect ('/settinglaporan')->with('Sukses,Data Berhasil Terupdate');
}
public function delete($id)
{
  $settinglaporan=SettingLaporan::find($id);
  $settinglaporan->delete($settinglaporan);
  return redirect('/settinglaporan')->with('Sukses','Data Berhasil Terhapus');
}
}
