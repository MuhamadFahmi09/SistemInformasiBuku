    @extends('layouts.main')
    @section ('conten')
    <div class="container mt-4">

    
        @if(session('sukses'))
        @endif
        <div class="row">
        <h3>Table Pasok</h3>
        <div class="col-6">
                    <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
            Tambah Pasok
                </button>
                <table class="table table-bordered">
            <tr>
                <th>Id Pasok</th>
                <th>Id Distributor</th>
                <th>Id Buku</th>
                <th>Jumlah</th>
                <th>Tanggal</th>
                <th colspan="2">Aksi</th>
            </tr>
    @foreach($pasok as $pasok)
    <tr>
        <td>{{$pasok->id_pasok}}</td>
        <td>{{$pasok->id_distributor}}</td>
        <td>{{$pasok->id_buku}}</td>
        <td>{{$pasok->jumlah}}</td>
        <td>{{$pasok->tanggal}}</td>
        <td><a href="/pasok/{{$pasok->id}}/edit" class="btn btn-warning btn-sn">Edit</a></td>
        <td>
            
            <a href="/pasok/{{$pasok->id}}/delete" class="btn btn-danger btn-sn" onclick="return confrim('Apakah Yakin Data Akan DiHapus')">Hapus</a>
        </td>
             
    
    </tr>
    @endforeach
    </table>
                <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Pasok</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="pasok/create" method="POST">
                {{csrf_field()}}
            
                <div class="form-group">
                    <label for="exampleInputEmail1">Id Pasok</label>
                    <input name="id_pasok" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nama">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Id Distributor</label>
                    <input name="id_distributor" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nama">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Id Buku</label>
                    <input name="id_buku" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nama">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah</label>
                    <input name="jumlah" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nama">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal</label>
                    <input name="tanggal" type="date" class="form-control" id="date" aria-describedby="nama">
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

