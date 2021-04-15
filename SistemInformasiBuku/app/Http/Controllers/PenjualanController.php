<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;

class PenjualanController extends Controller
{
    public function  index()
    {
        $penjualan = Penjualan::all();
        return view ('penjualan.index', compact('penjualan'));
      
      }
    public function create(Request $request)
{
  Penjualan::create($request->all());
  return redirect('/penjualan')->with('Sukses','Data Berhasil Terimput');
 
}
public function edit($id)
{
  $penjualan=Penjualan::find($id);
 return view('penjualan/edit',['penjualan' => $penjualan]);
}
public function update(Request $request,$id)
{
  $penjualan=Penjualan::find($id);
  $penjualan->update($request ->all());
  return redirect ('/penjualan')->with('Sukses,Data Berhasil Terupdate');
}
public function delete($id)
{
  $penjualan=Penjualan::find($id);
  $penjualan->delete($penjualan);
  return redirect('/penjualan')->with('Sukses','Data Berhasil Terhapus');
}
}
