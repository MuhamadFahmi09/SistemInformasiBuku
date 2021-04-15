<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;

class PenggunaController extends Controller
{
    public function  index()
    {
        $pengguna = Pengguna::all();
        return view ('pengguna.index', compact('pengguna'));
      
      }
    public function create(Request $request)
{
  Pengguna::create($request->all());
  return redirect('/pengguna')->with('Sukses','Data Berhasil Terimput');
 
}
public function edit($id)
{
  $pengguna=Pengguna::find($id);
 return view('pengguna/edit',['pengguna' => $pengguna]);
}
public function update(Request $request,$id)
{
  $pengguna=Pengguna::find($id);
  $pengguna->update($request ->all());
  return redirect ('/pengguna')->with('Sukses,Data Berhasil Terupdate');
}
public function delete($id)
{
  $pengguna=Pengguna::find($id);
  $pengguna->delete($pengguna);
  return redirect('/pengguna')->with('Sukses','Data Berhasil Terhapus');
}
}
