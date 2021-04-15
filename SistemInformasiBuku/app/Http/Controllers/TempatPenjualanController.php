<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TempatPenjualan;

class TempatPenjualanController extends Controller
{
    public function  index()
    {
        $tempatpenjualan = TempatPenjualan::all();
        return view ('tempatpenjualan.index', compact('tempatpenjualan'));
      
      }
    public function create(Request $request)
{
  TempatPenjualan::create($request->all());
  return redirect('/tempatpenjualan')->with('Sukses','Data Berhasil Terimput');
 
}
public function edit($id)
{
  $tempatpenjualan=TempatPenjualan::find($id);
 return view('tempatpenjualan/edit',['tempatpenjualan' => $tempatpenjualan]);
}
public function update(Request $request,$id)
{
  $tempatpenjualan=TempatPenjualan::find($id);
  $tempatpenjualan->update($request ->all());
  return redirect ('/tempatpenjualan')->with('Sukses,Data Berhasil Terupdate');
}
public function delete($id)
{
  $tempatpenjualan=TempatPenjualan::find($id);
  $tempatpenjualan->delete($tempatpenjualan);
  return redirect('/tempatpenjualan')->with('Sukses','Data Berhasil Terhapus');
}
}
