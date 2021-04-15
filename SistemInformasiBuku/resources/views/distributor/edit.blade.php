@extends('layouts.main')
@section ('conten')
<div class="container mt-4">
    <h3>Edit Distributor</h3>
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
      {{session('sukses')}}
    </div>  
    @endif
    <div class="row">
    <div class="col-center-12">
   
    <form action="/distributor/{{$distributor->id}}/update"  method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">Id Distributor</label>
                <input name="id_distributor" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="id_distributor"value="{{$distributor->id_distributor}}">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">Nama Distributor</label>
                <input name="nama_distributor" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="nama_distributor"value="{{$distributor->nama_distributor}}">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">Alamat</label>
             <textarea name="alamat" id="alamat"  class="form-control" cols="30" rows="3" value="{{$distributor->alamat}}"></textarea>   
                    </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-warning">Update</button>
                </form>
                </div>
                    </div>
                    </div>
                    </div>
                    @endsection
                
        



