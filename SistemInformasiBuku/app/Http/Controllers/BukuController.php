<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function  index()
    {
        $buku = Buku::all();
        return view ('buku.index', compact('buku'));
      
      }
    public function create(Request $request)
{
  Buku::create($request->all());
  return redirect('/buku')->with('Sukses','Data Berhasil Terimput');
 
}
public function edit($id)
{
  $buku=Buku::find($id);
 return view('buku/edit',['buku' => $buku]);
}
public function update(Request $request,$id)
{
  $buku=Buku::find($id);
  $buku->update($request ->all());
  return redirect ('/buku')->with('Sukses,Data Berhasil Terupdate');
}
public function delete($id)
{
  $buku=Buku::find($id);
  $buku->delete($buku);
  return redirect('/buku')->with('Sukses','Data Berhasil Terhapus');
}
}
