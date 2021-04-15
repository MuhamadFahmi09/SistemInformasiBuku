<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasok;

class PasokController extends Controller
{
    public function  index()
    {
        $pasok = Pasok::all();
        return view ('pasok.index', compact('pasok'));
      
      }
    public function create(Request $request)
{
  Pasok::create($request->all());
  return redirect('/pasok')->with('Sukses','Data Berhasil Terimput');
 
}
public function edit($id)
{
  $pasok=Pasok::find($id);
 return view('pasok/edit',['pasok' => $pasok]);
}
public function update(Request $request,$id)
{
  $pasok=Pasok::find($id);
  $pasok->update($request ->all());
  return redirect ('/pasok')->with('Sukses,Data Berhasil Terupdate');
}
public function delete($id)
{
  $pasok=Pasok::find($id);
  $pasok->delete($pasok);
  return redirect('/pasok')->with('Sukses','Data Berhasil Terhapus');
}
}
