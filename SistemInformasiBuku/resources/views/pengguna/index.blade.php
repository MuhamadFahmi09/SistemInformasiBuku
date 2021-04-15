@extends('layouts.main')
@section ('conten')
<div class="container mt-4">

  
    @if(session('sukses'))
    @endif
    <div class="row">
    <h3>Table Pengguna</h3>
    <div class="col-6">
                <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
         Tambah Pengguna
            </button>
            <table class="table table-bordered">
        <tr>
            <th>Id User</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No.Telepon </th>
            <th>Status </th>
            <th>Username</th>
            <th>Akses </th>
            <th colspan="2">Aksi</th>
        </tr>
@foreach($pengguna as $pengguna)
<tr>
    <td>{{$pengguna->id_user}}</td>
    <td>{{$pengguna->nama}}</td>
    <td>{{$pengguna->alamat}}</td>
    <td>{{$pengguna->no_telepon}}</td>
    <td>{{$pengguna->status}}</td>
    <td>{{$pengguna->username}}</td>
    <td>{{$pengguna->akses}}</td>
    <td><a href="/pengguna/{{$pengguna->id}}/edit" class="btn btn-warning btn-sn">Edit</a></td>
    <td>
        
        <a href="/pengguna/{{$pengguna->id}}/delete" class="btn btn-danger btn-sn" onclick="return confrim('Apakah Yakin Data Akan DiHapus')">Hapus</a>
    </td>
      
  
  </tr>
@endforeach
</table>
            <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Pengguna</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="pengguna/create" method="POST">
            {{csrf_field()}}
           
            <div class="form-group">
                <label for="exampleInputEmail1">Id User</label>
                <input name="id_user" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nama">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input name="nama" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nama">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control" cols="30" rows="3"></textarea>
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">No.Telepon</label>
                <input name="no_telepon" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nama">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Status</label>
                <input name="status" type="text" class="form-control" id="text" aria-describedby="nama">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input name="username" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nama">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="nama">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Akses</label>
                <input name="akses" type="text" class="form-control" id="text" aria-describedby="nama">
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
                </div>
            </div>
        </div>
        </div>
        </div>

     

    </div>
   </div>
   </div>
@endsection

