@extends('layouts.main')
@section ('conten')
<div class="container mt-4">
    <h3>Edit Penjualan</h3>
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
      {{session('sukses')}}
    </div>  
    @endif
    <div class="row">
    <div class="col-center-12">
   
    <form action="/tempatpenjualan/{{$tempatpenjualan->id}}/update"  method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">Id Buku</label>
                <input name="id_buku" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="id_buku"value="{{$tempatpenjualan->id_buku}}">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">Jumlah Beli</label>
                <input name="jumlah_beli" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="jumlah_beli"value="{{$tempatpenjualan->jumlah_beli}}">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">Total Harga</label>
                <input name="total_harga" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="total_harga"value="{{$tempatpenjualan->total_harga}}">
                    </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-warning">Update</button>
                </form>
                </div>
                    </div>
                    </div>
                    </div>
                    @endsection
                
        



