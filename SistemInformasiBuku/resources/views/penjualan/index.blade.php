@extends('layouts.main')
@section ('conten')
<div class="container mt-4">


    @if(session('sukses'))
    @endif
    <div class="row">
        <h3>Table Penjualan</h3>
        <div class="col-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                Tambah Penjualan
            </button>
            <table class="table table-bordered">
                <tr>
                    <th>Id Penjualan</th>
                    <th>Id Buku</th>
                    <th>Id Kasir</th>
                    <th>Jumlah Beli </th>
                    <th>Bayar </th>
                    <th>Kembalian</th>
                    <th>Total Harga </th>
                    <th>Tanggal </th>
                    <th colspan="2">Aksi</th>
                </tr>
                @foreach($penjualan as $penjualan)
                <tr>
                    <td>{{$penjualan->id_penjualan}}</td>
                    <td>{{$penjualan->id_buku}}</td>
                    <td>{{$penjualan->id_kasir}}</td>
                    <td>{{$penjualan->jumlah_beli}}</td>
                    <td>{{$penjualan->bayar}}</td>
                    <td>{{$penjualan->kembalian}}</td>
                    <td>{{$penjualan->total_harga}}</td>
                    <td>{{$penjualan->tanggal}}</td>
                    <td><a href="/penjualan/{{$penjualan->id}}/edit" class="btn btn-warning btn-sn">Edit</a></td>
                    <td>

                        <a href="/penjualan/{{$penjualan->id}}/delete" class="btn btn-danger btn-sn"
                            onclick="return confrim('Apakah Yakin Data Akan DiHapus')">Hapus</a>
                    </td>


                </tr>
                @endforeach
            </table>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Penjualan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="penjualan/create" method="POST">
                                {{csrf_field()}}

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Id Penjualan</label>
                                    <input name="id_penjualan" type="Text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="nama">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Id Buku</label>
                                    <input name="id_buku" type="Text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="nama">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Id Kasir</label>
                                    <input name="id_kasir" type="Text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="nama">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Jumlah Beli </label>
                                    <input name="jumlah_beli" type="Text" class="form-control" id="jumlah_beli"
                                        aria-describedby="nama">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Bayar</label>
                                    <input name="bayar" type="text" class="form-control" id="bayar"
                                        aria-describedby="nama">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Kembalian</label>
                                    <input name="kembalian" type="Text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="nama">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Total Harga </label>
                                    <input name="total_harga" type="Text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="nama">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal</label>
                                    <input name="tanggal" type="date" class="form-control" id="date"
                                        aria-describedby="nama">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">Kembali</button>
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

@push('js')
<script>
    const jumlahBeli = document.getElementById('jumlah_beli');
    const bayar = document.getElementById('bayar');
    const harga = 2000;


    jumlahBeli.addEventListener('change', function(e) {
        console.log(jumlah_beli.value);
        bayar.value = parseInt(jumlahBeli.value) * harga;
    });
</script>
@endpush('js')
