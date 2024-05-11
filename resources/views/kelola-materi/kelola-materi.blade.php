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
                        <a href="/kelola-materi" style="text-decoration: none; color: inherit;">Kelola Materi</a>
                    </div>
                </div>

                <h2 class="pb-3">Kelola Materi</h2>

                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show pt-4" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <div class="tambah-data pb-3">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Tambah Data </button>
                </div>

                <div class="card mb-4">

                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Topik Materi</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Topik Materi</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @php
                                $i=1;
                                @endphp
                                @foreach ($materis as $m)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$m->title}}</td>
                                    <td>{{$m->deskripsi}}</td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center">
                                            <div class="button1"><a href="/kelola-materi-bagian" class="btn btn-success">Buka</a> &nbsp;&nbsp;


                                            </div>
                                            <div class="button2">
                                                <a href="/kelola-materi/ubah/{{$m->id_materi}}" class="btn btn-warning text-light" data-bs-toggle="modal" data-bs-target="#exampleModal{{$m->id_materi}}">Ubah</a> &nbsp;&nbsp;

                                            </div>
                                            <form action="/kelola-materi/hapus/{{$m->id_materi}}" method="POST" class="d-inline-block">
                                                @csrf
                                                <button type="submit" class="btn btn-danger delete" data-materi-id="{{ $m->id_materi }}" onclick="return confirm('Apakah anda yakin ingin menghapus materi ini? \n(Hal ini juga akan menghapus bagian dari materi tersebut.)')">Hapus</button>
                                            </form>
                                        </div>
                                    </td>

                                </tr>
                                @php
                                $i++;
                                @endphp
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
                <form action="/kelola-materi/tambah" method="POST">
                    @csrf
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
@foreach ($materis as $m)

<div class="modal fade" id="exampleModal{{$m->id_materi}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Ubah Topik Materi</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/kelola-materi/ubah/{{$m->id_materi}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <label for="judul">Judul</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="judul" value="{{$m->title}}">
                        </div>
                    </div>
                    <div class="row py-1">
                        <div class="col-md-4">
                            <label for="deskripsi">Deskripsi</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="deskripsi" value="{{$m->deskripsi}}">
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


@endforeach