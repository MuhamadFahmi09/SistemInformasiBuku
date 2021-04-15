@extends('layouts.main')
@section ('conten')
<div class="container mt-4">
    <h3>Edit Pasok</h3>
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
      {{session('sukses')}}
    </div>  
    @endif
    <div class="row">
    <div class="col-center-12">
   
    <form action="/pasok/{{$pasok->id}}/update"  method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">Id Pasok</label>
                <input name="id_pasok" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="id_pasok"value="{{$pasok->id_pasok}}">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">Id Distributor</label>
                <input name="id_distributor" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="id_distributor"value="{{$pasok->id_distributor}}">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">Id Buku</label>
                <input name="id_buku" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="id_buku"value="{{$pasok->id_buku}}">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">Jumlah</label>
                <input name="jumlah" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="jumlah"value="{{$pasok->jumlah}}">
                    </div>
                     <div class="form-group">
                <label for="exampleInputEmail1">Tanggal</label>
                <input name="tanggal" type="date" class="form-control" id="date" aria-describedby="tanggal"value="{{$pasok->tanggal}}">
                    </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-warning">Update</button>
                </form>
                </div>
                    </div>
                    </div>
                    </div>
                    @endsection
                
        



