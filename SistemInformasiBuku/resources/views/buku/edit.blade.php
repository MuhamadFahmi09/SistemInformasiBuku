@extends('layouts.main')
@section ('conten')
<div class="container mt-4">
    <h3>Edit Buku</h3>
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
      {{session('sukses')}}
    </div>  
    @endif
    <div class="row">
    <div class="col-center-12">
   
    <form action="/buku/{{$buku->id}}/update"  method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">Id Buku</label>
                <input name="id_buku" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="id_buku"value="{{$buku->id_buku}}">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">Judul</label>
                <input name="judul" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="judul"value="{{$buku->judul}}">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">No.Isbn</label>
                <input name="noisbn" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="noisbn"value="{{$buku->noisbn}}">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">Penulis</label>
                <input name="penulis" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="penulis"value="{{$buku->penulis}}">
                    </div>
                     <div class="form-group">
                <label for="exampleInputEmail1">Penerbit</label>
                <input name="penerbit" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="penerbit"value="{{$buku->penerbit}}">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">Tahun</label>
                <input name="tahun" type="date" class="form-control" id="date" aria-describedby="tahun"value="{{$buku->tahun}}">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">Stok</label>
                <input name="stok" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="stok"value="{{$buku->stok}}">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">Harga Pokok</label>
                <input name="harga_pokok" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="harga_pokok"value="{{$buku->harga_pokok}}">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">Harga Jual</label>
                <input name="harga_jual" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="harga_jual"value="{{$buku->harga_jual}}">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">PPN</label>
                <input name="ppn" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="ppn"value="{{$buku->ppn}}">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">Diskon</label>
                <input name="diskon" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="diskon"value="{{$buku->diskon}}">
                    </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-warning">Update</button>
                </form>
                </div>
                    </div>
                    </div>
                    </div>
                    @endsection
                
        



