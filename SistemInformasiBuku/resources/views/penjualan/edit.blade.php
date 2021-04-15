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
   
    <form action="/penjualan/{{$penjualan->id}}/update"  method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">Id Penjualan</label>
                <input name="id_penjualan" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="id_penjualan"value="{{$penjualan->id_penjualan}}">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">Id Buku</label>
                <input name="id_buku" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="id_buku"value="{{$penjualan->id_buku}}">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">Id Kasir</label>
                <input name="id_kasir" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="id_kasir"value="{{$penjualan->id_kasir}}">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">Jumlah Beli</label>
                <input name="jumlah_beli" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="jumlah_beli"value="{{$penjualan->jumlah_beli}}">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">Bayar</label>
                <input name="bayar" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="bayar"value="{{$penjualan->bayar}}">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">Kembalian</label>
                <input name="kembalian" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="kembalian"value="{{$penjualan->kembalian}}">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">Total Harga</label>
                <input name="total_harga" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="total_harga"value="{{$penjualan->total_harga}}">
                    </div>
                     <div class="form-group">
                <label for="exampleInputEmail1">Tanggal</label>
                <input name="tanggal" type="date" class="form-control" id="date" aria-describedby="tanggal"value="{{$penjualan->tanggal}}">
                    </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-warning">Update</button>
                </form>
                </div>
                    </div>
                    </div>
                    </div>
                    @endsection
                
        



