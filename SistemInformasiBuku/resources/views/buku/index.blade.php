@extends('layouts.main')
@section ('conten')
<div class="container mt-4">

  
    @if(session('sukses'))
    @endif
    <div class="row">
    <h3>Table Buku</h3>
    <div class="col-6">
                <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
         Tambah Buku
            </button>
            <table class="table table-bordered">
        <tr>
            <th>Id Buku</th>
            <th>Judul</th>
            <th>No.Isbn</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun</th>
            <th>Stok</th>
            <th>Harga Pokok</th>
            <th>Harga Jual</th>
            <th>PPN</th>
            <th>Diskon</th>
            <th colspan="2">Aksi</th>
        </tr>
@foreach($buku as $buku)
<tr>
    <td>{{$buku->id_buku}}</td>
    <td>{{$buku->judul}}</td>
    <td>{{$buku->noisbn}}</td>
    <td>{{$buku->penulis}}</td>
    <td>{{$buku->penerbit}}</td>
    <td>{{$buku->tahun}}</td>   
    <td>{{$buku->stok}}</td>
    <td>{{$buku->harga_pokok}}</td>
    <td>{{$buku->harga_jual}}</td>
    <td>{{$buku->ppn}}</td>
    <td>{{$buku->diskon}}</td>
    <td><a href="/buku/{{$buku->id}}/edit" class="btn btn-warning btn-sn">Edit</a></td>
    <td>
        
        <a href="/buku/{{$buku->id}}/delete" class="btn btn-danger btn-sn" onclick="return confrim('Apakah Yakin Data Akan DiHapus')">Hapus</a>
    </td>
            
  
  </tr>
@endforeach
</table>
            <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Buku</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="buku/create" method="POST">
            {{csrf_field()}}
           
            <div class="form-group">
                <label for="exampleInputEmail1">Id Buku</label>
                <input name="id_buku" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nama">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Judul</label>
                <input name="judul" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nama">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">No.Isbn</label>
                <input name="noisbn" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nama">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Penulis</label>
                <input name="penulis" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nama">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Penerbit</label>
                <input name="penerbit" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nama">
                </div>
                <div class="form-group">
                <label>Tanggal</label>
                <input name="tahun" type="date" class="form-control" id="date" aria-describedby="nama">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Stok</label>
                <input name="stok" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nama">
                </div>
                <div class="form-group">
                <label for="date">Harga Pokok</label>
                <input name="harga_pokok" type="Text" class="form-control" id="date" aria-describedby="nama">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Harga Jual</label>
                <input name="harga_jual" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nama">
                </div>
                <div class="form-group">
                <label for="date">PPN</label>
                <input name="ppn" type="Text" class="form-control" id="date" aria-describedby="nama">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Diskon</label>
                <input name="diskon" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nama">
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

