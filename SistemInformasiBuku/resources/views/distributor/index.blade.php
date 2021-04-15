@extends('layouts.main')
@section ('conten')
<div class="container mt-4">

  
    @if(session('sukses'))
    @endif
    <div class="row">
    <h3>Table Distributor</h3>
    <div class="col-6">
                <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
         Tambah Distributor
            </button>
            <table class="table table-bordered">
        <tr>
            <th>Id Distributor</th>
            <th>Nama Distributor</th>
            <th>Alamat</th>
            <th>No.Telepon</th>
            <th colspan="2">Aksi</th>
        </tr>
@foreach($distributor as $distributor)
<tr>
    <td>{{$distributor->id_distributor}}</td>
    <td>{{$distributor->nama_distributor}}</td>
    <td>{{$distributor->alamat}}</td>
    <td>{{$distributor->no_telepon}}</td>
    <td><a href="/distributor/{{$distributor->id}}/edit" class="btn btn-warning btn-sn">Edit</a></td>
    <td>
        
        <a href="/distributor/{{$distributor->id}}/delete" class="btn btn-danger btn-sn" onclick="return confrim('Apakah Yakin Data Akan DiHapus')">Hapus</a>
    </td>
          
  
  </tr>
@endforeach
</table>
            <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Distributor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="distributor/create" method="POST">
            {{csrf_field()}}
           
            <div class="form-group">
                <label for="exampleInputEmail1">Id Distributor</label>
                <input name="id_distributor" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nama">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Nama Distributor</label>
                <input name="nama_distributor" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nama">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Alamat</label>
                <textarea name="alamat" id="alamat"  class="form-control" cols="30" rows="3"></textarea>
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">No.Telepon</label>
                <input name="no_telepon" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nama">
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

