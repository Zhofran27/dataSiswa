@extends('layout.master')
@section('content')


<div class="px-3 py-2 border-bottom mb-3">
    <div class="container d-flex flex-wrap justify-content-center">
      <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto" role="search" method="get" action="/">
        <input type="text" name="cari" class="form-control w-75 d-inline" id="search" placeholder="Masukkan NIS Siswa">
        <button type="submit" class="btn btn-success">Cari</button>
      </form>
    </div>
  </div>
  <div class="container">
    <h3 class="mt-4">Data Siswa 
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Tambah</button>
    </h3>
    <div class="table-responsive">
      <table class="table table-hover table-borderless">
        <thead class="table-dark">
          <tr>
            <th>No</th>
            <th>Foto</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jenis Kelamin</th>
            <th>No. Telp</th>
            <th>Alamat</th>
            <th>Olah Data</th>
          </tr>
        </thead>
        <tbody> 
         @foreach ($data as $ds)
         <?php $no=1;?> 
          <tr>
            <td>{{ $no++ }}</td>
            <td>
              <img src="{{asset('foto/'.$ds->foto)}}" width="40%">
            </td>
            <td>{{$ds->nis}}</td>
            <td>{{$ds->nama}}</td>
            <td>{{$ds->kelas}}</td>
            <td>{{$ds->jenis_kelamin}}</td>
            <td>{{$ds->telp}}</td>
            <td>{{$ds->alamat_domisili}}</td>
            <td>
                <button type="button" class="btn btn-warning btn-sm">Ubah</button>
                <button type="button" class="btn btn-danger btn-sm">Hapus</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>


<!-- Modal -->
<div class="modal fade" id="tambahSiswa" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  @endsection