@extends('layouts.main')
    @section ('conten')
    <div class="container mt-4">

    
        @if(session('sukses'))
        @endif
        <div class="row">
        <h3>Table Setting Laporan</h3>
        <div class="col-6">
                    <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
            Tambah Setting Laporan
                </button>
                <table class="table table-bordered">
            <tr>
                <th>Id Setting </th>
                <th>Nama Perusahaan</th>
                <th>Alamat</th>
                <th>No.Telepon</th>
                <th>Web</th>
                <th>Logo</th>
                <th>Email</th>
                <th colspan="2">Aksi</th>
            </tr>
    @foreach($settinglaporan as $settinglaporan)
    <tr>
        <td>{{$settinglaporan->id_setting}}</td>
        <td>{{$settinglaporan->nama_perusahaan}}</td>
        <td>{{$settinglaporan->alamat}}</td>
        <td>{{$settinglaporan->no_telepon}}</td>
        <td>{{$settinglaporan->web}}</td>
        <td>{{$settinglaporan->logo}}</td>
        <td>{{$settinglaporan->email}}</td>
        <td><a href="/settinglaporan/{{$settinglaporan->id}}/edit" class="btn btn-warning btn-sn">Edit</a></td>
        <td>
            
            <a href="/settinglaporan/{{$settinglaporan->id}}/delete" class="btn btn-danger btn-sn" onclick="return confrim('Apakah Yakin Data Akan DiHapus')">Hapus</a>
        </td>
        
    
    </tr>
    @endforeach
    </table>
                <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Setting Laporan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="settinglaporan/create" method="POST">
                {{csrf_field()}}
            
                <div class="form-group">
                    <label for="exampleInputEmail1">Id Setting </label>
                    <input name="id_setting" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nama">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Nama Perusahaan</label>
                    <input name="nama_perusahaan" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nama">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <textarea name="alamat" id="alamat"  class="form-control" cols="30" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">No.Telepon</label>
                    <input name="no_telepon" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nama">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Web</label>
                    <input name="web" type="text" class="form-control" id="text" aria-describedby="nama">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Logo</label>
                    <input name="logo" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="nama">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input name="email" type="text" class="form-control" id="text" aria-describedby="nama">
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

