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
                        <a href="/kelola-materi-bagian" style="text-decoration: none; color: inherit;">Kelola Level Bonus </a>
                    </div>
                </div>

                <h2 class="pb-3">Kelola Level Akhir</h2>

                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show pt-4" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <div class="tambah-data pb-3">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#preExampleModal">
                        Tambah Data </button>
                </div>

                <div class="card mb-4">

                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Soal Level Akhir</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Soal Level Akhir</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @php
                                $i=1;
                                @endphp
                                @foreach ($lBonus as $q)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$q->question}}</td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center">
                                            <div class="button1">
                                                <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#preExampleModal{{$q->id_question_level_bonus}}">Detail</a> &nbsp; &nbsp;

                                            </div>
                                            <div class="button2">
                                                <a href="#" class="btn btn-warning text-light" data-bs-toggle="modal" data-bs-target="#preExampleModalUbah{{$q->id_question_level_bonus}}">Ubah</a> &nbsp;&nbsp;

                                            </div>
                                            <form action="/kelola-level-bonus/hapus/{{$q->id_question_level_bonus}}" method="POST" class="d-inline-block">
                                                @csrf
                                                <button type="submit" class="btn btn-danger delete" data-materi-id="{{ $q->id_question_level_bonus }}" onclick="return confirm('Apakah anda yakin ingin menghapus soal level akhir ini?')">Hapus</button>
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


<!-- // Modal Tambah Materi pretest -->

<div class="modal fade" id="preExampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title" id="exampleModalLabel">
                    <h3>Tambah Soal Level Akhir</h3>
                    <small>Ikuti aturan yang telah ditetapkan</small>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="/kelola-level-bonus/tambah/{{$id_materi}}" method="POST">
                    @csrf
                    <h5>Soal</h5>
                    <div class="col">
                        <label for="soal">Soal Pre-Test</label>
                        <input type="text" class="form-control" name="soal">
                    </div>
                    <div class="col">
                        <label for="pilihan1">Pilihan 1</label>
                        <input type="text" class="form-control" name="pilihan1">
                    </div>
                    <div class="col">
                        <label for="pilihan2">Pilihan 2</label>
                        <input type="text" class="form-control" name="pilihan2">
                    </div>
                    <div class="col">
                        <label for="pilihan3">Pilihan 3</label>
                        <input type="text" class="form-control" name="pilihan3">
                    </div>
                    <div class="col">
                        <label for="pilihan4">Pilihan 4</label>
                        <input type="text" class="form-control" name="pilihan4">
                    </div>

                    <h5>Jawaban</h5>
                    <div class="col">
                        <label for="jawaban">Pilih Jawaban Benar</label>
                        <select class="form-control" id="jawaban" name="jawaban">
                            <option value="pilihan1">Pilihan 1</option>
                            <option value="pilihan2">Pilihan 2</option>
                            <option value="pilihan3">Pilihan 3</option>
                            <option value="pilihan4">Pilihan 4</option>
                        </select>
                    </div>
                    <!--           
          <div class="d-flex justify-content-end py-3">
            <button type="button" class="btn btn-primary" style="width: 500px; height: 40px ">Tambah Soal </button>
          </div> -->


                    <div class="d-flex justify-content-end py-3">
                        <button class="btn btn-success mx-3" type="submit">Simpan</button>
                        <button class="btn btn-danger" type="submit">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- Modal Detail Pre Test -->
@foreach ($lBonus as $q)
<div class="modal fade" id="preExampleModal{{$q->id_question_level_bonus}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title" id="exampleModalLabel">
                    <h3>Detail Soal Level Akhir</h3>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="#" method="POST">
                    @csrf
                    <h5>Soal</h5>
                    <div class="col">
                        <label for="soal">Soal Pre-Test</label>
                        <input type="text" class="form-control" name="soal" value="{{$q->question}}" disabled>
                    </div>
                    <div class="col">
                        <label for="pilihan1">Pilihan 1</label>
                        <input type="text" class="form-control" name="pilihan1" value="{{$q->option_1}}" disabled>
                    </div>
                    <div class="col">
                        <label for="pilihan2">Pilihan 2</label>
                        <input type="text" class="form-control" name="pilihan2" value="{{$q->option_2}}" disabled>
                    </div>
                    <div class="col">
                        <label for="pilihan3">Pilihan 3</label>
                        <input type="text" class="form-control" name="pilihan3" value="{{$q->option_3}}" disabled>
                    </div>
                    <div class="col">
                        <label for="pilihan4">Pilihan 4</label>
                        <input type="text" class="form-control" name="pilihan4" value="{{$q->option_4}}" disabled>
                    </div>

                    <h5>Jawaban</h5>
                    <div class="col">
                        <label for="jawaban">Pilih Jawaban Benar</label>
                        <select class="form-control" id="jawaban" name="jawaban" disabled>
                            <option value="pilihan1" @if ($q->correct_index == 'pilihan1') selected @endif>Pilihan 1</option>
                            <option value="pilihan2" @if ($q->correct_index == 'pilihan2') selected @endif>Pilihan 2</option>
                            <option value="pilihan3" @if ($q->correct_index == 'pilihan3') selected @endif>Pilihan 3</option>
                            <option value="pilihan4" @if ($q->correct_index == 'pilihan4') selected @endif>Pilihan 4</option>
                        </select>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endforeach

<!-- // Modal Ubah Materi pretest-->

@foreach ($lBonus as $q)
<div class="modal fade" id="preExampleModalUbah{{$q->id_question_level_bonus}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title" id="exampleModalLabel">
                    <h3>Ubah Soal Level Akhir</h3>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="/kelola-level-bonus/ubah/{{$q->id_question_level_bonus}}" method="POST">
                    @csrf
                    <h5>Soal</h5>
                    <div class="col">
                        <label for="soal">Soal Pre-Test</label>
                        <input type="text" class="form-control" name="soal" value="{{$q->question}}">
                    </div>
                    <div class="col">
                        <label for="pilihan1">Pilihan 1</label>
                        <input type="text" class="form-control" name="pilihan1" value="{{$q->option_1}}">
                    </div>
                    <div class="col">
                        <label for="pilihan2">Pilihan 2</label>
                        <input type="text" class="form-control" name="pilihan2" value="{{$q->option_2}}">
                    </div>
                    <div class="col">
                        <label for="pilihan3">Pilihan 3</label>
                        <input type="text" class="form-control" name="pilihan3" value="{{$q->option_3}}">
                    </div>
                    <div class="col">
                        <label for="pilihan4">Pilihan 4</label>
                        <input type="text" class="form-control" name="pilihan4" value="{{$q->option_4}}">
                    </div>

                    <h5>Jawaban</h5>
                    <div class="col">
                        <label for="jawaban">Pilih Jawaban Benar</label>
                        <select class="form-control" id="jawaban" name="jawaban">
                            <option value="pilihan1" @if ($q->correct_index == 'pilihan1') selected @endif>Pilihan 1</option>
                            <option value="pilihan2" @if ($q->correct_index == 'pilihan2') selected @endif>Pilihan 2</option>
                            <option value="pilihan3" @if ($q->correct_index == 'pilihan3') selected @endif>Pilihan 3</option>
                            <option value="pilihan4" @if ($q->correct_index == 'pilihan4') selected @endif>Pilihan 4</option>
                        </select>
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