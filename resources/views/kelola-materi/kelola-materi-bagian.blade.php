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
                        <a href="/kelola-materi" style="text-decoration: none; color: inherit;">Kelola Materi /</a>
                        <a href="/kelola-materi-bagian" style="text-decoration: none; color: inherit;">Penjumlahan</a>
                    </div>
                </div>

                <h2 class="pb-3">Kelola Materi</h2>

                <div class="d-flex mb-3 mt-2 fw-bold mx-1 mb-3 mt-1 justify-content-start">

                    <a href="/KelolaPengguna/Tambah" class="btn btn-primary">Tambah Data</a>
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
                                            <a href="#" class="btn btn-warning">Ubah</a> &nbsp;&nbsp;
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