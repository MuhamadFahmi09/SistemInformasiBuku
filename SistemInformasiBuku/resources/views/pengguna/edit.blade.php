@extends('layouts.main')
@section ('conten')
<div class="container mt-4">
    <h3>Edit Pengguna</h3>
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
      {{session('sukses')}}
    </div>  
    @endif
    <div class="row">
    <div class="col-center-12">
   
    <form action="/pengguna/{{$pengguna->id}}/update"  method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">Id User</label>
                <input name="id_user" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="id_user"value="{{$pengguna->id_user}}">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">Nama </label>
                <input name="nama" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nama"value="{{$pengguna->nama}}">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">Alamat</label>
                <input name="alamat" type="date" class="form-control" id="date" aria-describedby="alamat"value="{{$pengguna->alamat}}">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">No.Telepon</label>
                <input name="no_telepon" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="no_telepon"value="{{$pengguna->no_telepon}}">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">Status</label>
                <input name="status" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="status"value="{{$pengguna->status}}">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="username"value="{{$pengguna->username}}">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="password"value="{{$pengguna->password}}">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">Akses</label>
                <input name="akses" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="akses"value="{{$pengguna->akses}}">
                    </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-warning">Update</button>
                </form>
                </div>
                    </div>
                    </div>
                    </div>
                    @endsection
                
        



