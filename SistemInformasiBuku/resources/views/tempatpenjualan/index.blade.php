@extends('layouts.main')
@section ('conten')
<div class="container mt-4">

  
    @if(session('sukses'))
    @endif
    <div class="row">
    <h3>Table Tempat Penjualan</h3>
    <div class="col-6">
                <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
         Tambah Tempat Penjualan
            </button>
            <table class="table table-bordered">
        <tr>
            <th>Id Buku</th>
            <th>Jumlah Beli</th>
            <th>Total Harga</th>
            <th colspan="2">Aksi</th>
        </tr>
@foreach($tempatpenjualan as $tempatpenjualan)
<tr>
    <td>{{$tempatpenjualan->id_buku}}</td>
    <td>{{$tempatpenjualan->jumlah_beli}}</td>
    <td>{{$tempatpenjualan->total_harga}}</td>
    <td><a href="/tempatpenjualan/{{$tempatpenjualan->id}}/edit" class="btn btn-warning btn-sn">Edit</a></td>
    <td>
        
        <a href="/tempatpenjualan/{{$tempatpenjualan->id}}/delete" class="btn btn-danger btn-sn" onclick="return confrim('Apakah Yakin Data Akan DiHapus')">Hapus</a>
    </td>
           
  
  </tr>
@endforeach
</table>
            <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Tempat Penjualan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="tempatpenjualan/create" method="POST">
            {{csrf_field()}}
           
            <div class="form-group">
                <label for="exampleInputEmail1">Id Buku</label>
                <input name="id_buku" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nama">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Jumlah Beli</label>
                <input name="jumlah_beli" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nama">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Total Harga</label>
                <input name="total_harga" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nama">
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

