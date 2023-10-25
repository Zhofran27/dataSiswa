@extends('layout.master')
@section('content')
@include('sweetalert::alert')


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
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahSiswa">Tambah</button>
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
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="post" action="/">
                @csrf
                <div class="mb-3">
                  <label class="form-label">NIS</label>
                  <input type="text" class="form-control" name="nis" placeholder="masukkan nis siswa">
                </div>
                <div class="mb-3">
                  <label class="form-label">Nama</label>
                  <input type="text" class="form-control" name="nm" placeholder="masukkan nama siswa">
                </div> @2023 RPL- Siswanto <div class="mb-3">
                  <label class="form-label">Kelas</label>
                  <input type="text" class="form-control" name="kls" placeholder="masukkan kelas">
                </div>
                <div class="mb-3">
                  <labelclass="form-label">Jenis Kelamin </label>
                    <select class="form-select" name="jkl">
                      <option selected>Pilih Jenis Kelamin</option>
                      <option value="laki-laki">Laki-Laki</option>
                      <option value="perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                  <label class="form-label">Telp</label>
                  <input type="text" class="form-control" name="tlp" placeholder="masukkan no. telp siswa">
                </div>
                <div class="mb-3">
                  <label class="form-label">Alamat Domisili</label>
                  <textarea class="form-control" name="alamat" rows="3"></textarea>
                </div>
                <div class="mb-3">
                  <label class="form-label">Foto Siswa:</label>
                  <input class="form-control" type="file">
                </div>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  @endsection