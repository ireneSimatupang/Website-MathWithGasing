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
                        <a href="/" style="text-decoration: none; color: inherit;">Beranda /</a>
                        <a href="/lencana-siswa" style="text-decoration: none; color: inherit;">Lencana Siswa</a>
                    </div>
                </div>

                <h2 class="pb-3">Kelola Lencana</h2>



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
                                @foreach($materis as $index => $materi)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{$materi->title}}</td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center">
                                            <a href="/kelola-lencana/{{$materi->id_materi}}" class="btn btn-success">Buka</a> &nbsp;&nbsp;

                                        </div>
                                    </td>

                                </tr>

                                @endforeach
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



<!-- // Modal Tambah Materi -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Tambah Topik Materi</h3>
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
                <h3 class="modal-title" id="exampleModalLabel">Ubah Topik Materi</h3>
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