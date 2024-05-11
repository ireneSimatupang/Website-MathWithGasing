@extends('layouts.main')

@section('content')

@include('layouts.top-navbar')

<div id="layoutSidenav">

    @include('layouts.side-navbar')

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <div class="breadcrumb rounded-pill mb-4 bg-light" style="color: RGBA(107,107,107,0.75); background-color: rgbA">
                    <div class="item px-3">
                        <i class="fas fa-home pt-1"></i>&nbsp;
                        <a href="/beranda" style="text-decoration: none; color: inherit;">Beranda /</a>
                        <a href="/kelola-materi" style="text-decoration: none; color: inherit;">Kelola Materi /</a>
                        <a href="/kelola-materi-bagian" style="text-decoration: none; color: inherit;">Penjumlahan</a>
                    </div>
                </div>

                <h2 class="pb-3">Kelola Materi</h2>

                <div class="tambah-data pb-3 mt-2 fw-bold mx-1 mb-3 mt-1 justify-content-start">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah Data </button>
                    <a href="/KelolaPengguna/KelolaUnit" class="btn btn-secondary mx-4">Kelola Level Bonus</a>

                </div>

                <div class="card mb-4">

                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Topik Materi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Topik Materi</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Penjumlahan Bagian 1</td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center">
                                            <a href="/kelola-materi-level" class="btn btn-success">Buka</a> &nbsp;&nbsp;
                                            <a href="#" class="btn btn-warning text-light"  data-bs-toggle="modal" data-bs-target="#exampleModal2">Ubah</a> &nbsp;&nbsp;
                                            <a data-id="#" class="btn btn-danger delete" data-kode="#" href="#">Hapus</a> &nbsp;&nbsp;
                                        </div>
                                    </td>

                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
        @include('layouts.footer')
    </div>
</div>

@endsection

<!-- // Modal Tambah Bagian Materi -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Tambah Topik Bagian Materi</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="" method="POST">
            <div class="row">
                <div class="col-md-4">
                    <label for="judul">Judul</label>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="judul">
                </div>
            </div>
            <div class="row py-1">
                <div class="col-md-4">
                    <label for="deskripsi">Deskripsi</label>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="deskripsi">
                </div>
            </div>
            <div class="row py-1">
                <div class="col-md-4">
                    <label for="dibuat">Dibuat oleh</label>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="dibuat">
                </div>
            </div>
            <div class="d-flex justify-content-end py-3">
                <button class="btn btn-success mx-3" type="submit">Simpan</button>
                <button class="btn btn-danger" type="submit">Batal</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- // Modal Ubah Materi -->

<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Ubah Topik Bagian Materi</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="" method="POST">
            <div class="row">
                <div class="col-md-4">
                    <label for="judul">Judul</label>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="judul" value="Penjumlahan">
                </div>
            </div>
            <div class="row py-1">
                <div class="col-md-4">
                    <label for="deskripsi">Deskripsi</label>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="deskripsi" value="Penjumlahan">
                </div>
            </div>
            <div class="row py-1">
                <div class="col-md-4">
                    <label for="dibuat">Dibuat oleh</label>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="dibuat" value="Bronco">
                </div>
            </div>
            <div class="d-flex justify-content-end py-3">
                <button class="btn btn-success mx-3" type="submit">Simpan</button>
                <button class="btn btn-danger" type="submit">Batal</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>