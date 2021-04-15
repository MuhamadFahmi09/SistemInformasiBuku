<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Distributor;

class DistributorController extends Controller
{
    public function  index()
    {
        $distributor = Distributor::all();
        return view ('distributor.index', compact('distributor'));
      
      }
    public function create(Request $request)
{
  Distributor::create($request->all());
  return redirect('/distributor')->with('Sukses','Data Berhasil Terimput');
 
}
public function edit($id)
{
  $distributor=Distributor::find($id);
 return view('distributor/edit',['distributor' => $distributor]);
}
public function update(Request $request,$id)
{
  $distributor=Distributor::find($id);
  $distributor->update($request ->all());
  return redirect ('/distributor')->with('Sukses,Data Berhasil Terupdate');
}
public function delete($id)
{
  $distributor=Distributor::find($id);
  $distributor->delete($distributor);
  return redirect('/distributor')->with('Sukses','Data Berhasil Terhapus');
}
}
