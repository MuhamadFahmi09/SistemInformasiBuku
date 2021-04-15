@extends('layouts.main')
@section ('conten')
<div class="container mt-4">
    <h3>Edit Setting Laporan</h3>
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
      {{session('sukses')}}
    </div>  
    @endif
    <div class="row">
    <div class="col-center-12">
   
    <form action="/settinglaporan/{{$settinglaporan->id}}/update"  method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">Id Setting</label>
                <input name="id_setting" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="id_setting"value="{{$settinglaporan->id_setting}}">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">Nama Perusahaan</label>
                <input name="nama_perusahaan" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nama_perusahaan"value="{{$settinglaporan->nama_perusahaan}}">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">Alamat</label>
                <input name="alamat" type="text" class="form-control" id="text" aria-describedby="alamat"value="{{$settinglaporan->alamat}}">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">No.Telepon</label>
                <input name="no_telepon" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="no_telepon"value="{{$settinglaporan->no_telepon}}">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">Web</label>
                <input name="web" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="web"value="{{$settinglaporan->web}}">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">Logo</label>
                <input name="logo" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="logo"value="{{$settinglaporan->logo}}">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input name="email" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="email"value="{{$settinglaporan->email}}">
                    </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-warning">Update</button>
                </form>
                </div>
                    </div>
                    </div>
                    </div>
                    @endsection
                
        



