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
                            <a href="/kelola-materi-bagian" style="text-decoration: none; color: inherit;">Penjumlahan /</a>
                            <a href="/kelola-materi-level" style="text-decoration: none; color: inherit;">Penjumlahan Bagian 1</a>
                        </div>
                    </div>

                    <h2 class="pb-3">Kelola Materi</h2>

                    <h5 class="mb-3 mt-4  mx-1 mb-3 mt-1"> Kelola Pre-Test</h5>
                   
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
                                        <td>Pretest 1</td>
                                        <td class="text-center">
                                            <div class="d-flex justify-content-center">
                                                <a href="#" class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#exampleModal3">Detail</a> &nbsp; &nbsp;
                                                <a href="#" class="btn btn-warning text-light"  data-bs-toggle="modal" data-bs-target="#exampleModal2">Ubah</a> &nbsp;&nbsp;
                                                <a data-id="#" class="btn btn-danger delete" data-kode= "#"href="#">Hapus</a>
                                            </div>
                                        </td>
                                        
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>

                
                    </div>



                    <h5 class="mb-3 mt-4  mx-1 mb-3 mt-1"> Kelola Video Materi</h5>
                   
                    <div class="tambah-data pb-3">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal7">
                        Tambah Data </button>
                    </div>
                    
                    <div class="card mb-4">

                        <div class="card-body">
                            <table id="datatablesSimple2">
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
                                        <td>Video 1</td>
                                        <td class="text-center">
                                            <div class="d-flex justify-content-center">
                                            <a href="#" class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#exampleModal8">Detail</a> &nbsp; &nbsp;
                                                <a href="#" class="btn btn-warning text-light"  data-bs-toggle="modal" data-bs-target="#exampleModal7">Ubah</a> &nbsp;&nbsp;
                                                <a data-id="#" class="btn btn-danger delete" data-kode= "#"href="#">Hapus</a> 
                                            </div>
                                        </td>
                                        
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>



                                <h5 class="mb-3 mt-4  mx-1 mb-3 mt-1"> Kelola Post-Test</h5>
                   
                    <div class="tambah-data pb-3">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                        Tambah Data </button>
                    </div>
                    
                    <div class="card mb-4">

                        <div class="card-body">
                            <table id="datatablesSimple3">
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
                                        <td>Post-test1</td>
                                        <td class="text-center">
                                            <div class="d-flex justify-content-center">
                                                <a href="#" class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#exampleModal6">Detail</a> &nbsp; &nbsp;
                                                <a href="#" class="btn btn-warning text-light"  data-bs-toggle="modal" data-bs-target="#exampleModal4">Ubah</a> &nbsp;&nbsp;
                                                <a data-id="#" class="btn btn-danger delete" data-kode= "#"href="#">Hapus</a>                                            </div>
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


<!-- // Modal Tambah Materi pretest -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
      <div class="modal-title" id="exampleModalLabel">
      <h3>Tambah Pre-Test</h3>
      <small>Ikuti aturan yang telah ditetapkan</small>
      </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
      <form action="" method="POST">
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
            <div class="d-flex justify-content-end py-3">
                <button type="button" class="btn btn-primary" style="width: 500px; height: 40px ">Tambah Soal </button>
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

<!-- // Modal Ubah Materi pretest-->

<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Ubah Pre-Test</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="" method="POST">
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
      

            <div class="d-flex justify-content-end py-3">
                <button class="btn btn-success mx-3" type="submit">Simpan</button>
                <button class="btn btn-danger" type="submit">Batal</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- // Modal detail Materi pretest-->

<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModal3Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel3">Detail Pre-Test</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
      <form action="" method="POST">
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
            
        </form>
      </div>
    </div>
  </div>
</div>

<!-- // Modal Tambah Materi postest-->

<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModal4Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
      <div class="modal-title" id="exampleModal4Label">
      <h3>Tambah Post-Test</h3>
      <small>Ikuti aturan yang telah ditetapkan</small>
      </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
      <form action="" method="POST">
        <h5>Soal</h5>
            <div class="col">
                    <label for="soal">Soal Post-Test</label>
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
            
            <div class="d-flex justify-content-end py-3">
                <button type="button" class="btn btn-primary" style="width: 500px; height: 40px ">Tambah Soal </button>
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

<!-- // Modal Ubah Materi  postest -->

<div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModal5Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModal5Label">Ubah Pre-Test</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="" method="POST">
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
      

            <div class="d-flex justify-content-end py-3">
                <button class="btn btn-success mx-3" type="submit">Simpan</button>
                <button class="btn btn-danger" type="submit">Batal</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- // Modal detail Materi postest-->

<div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModal6Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel6">Detail Pre-Test</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
      <form action="" method="POST">
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
            
        </form>
      </div>
    </div>
  </div>
</div>


<!-- // Modal Tambah Materi video-->

<div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModal7Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
      <div class="modal-title" id="exampleModal7Label">
      <h3>Tambah Video Materi</h3>
      <small>Ikuti aturan yang telah ditetapkan</small>
      </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
      <form action="" method="POST">
        <h5>Soal</h5>
            <div class="col">
                    <label for="judul">Judul Materi</label>
                    <input type="text" class="form-control" name="judul">
            </div>
            <div class="col">
                <label for="video">Unggah Video Pembelajaran</label>
                <input type="file" class="form-control" id="video" name="video">
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

<!-- // Modal Ubah Materi video-->

<div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModal8Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
      <div class="modal-title" id="exampleModal8Label">
      <h3>Ubah Video Materi</h3>
      <small>Ikuti aturan yang telah ditetapkan</small>
      </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
      <form action="" method="POST">
            <div class="col">
                    <label for="judul">Judul Materi</label>
                    <input type="text" class="form-control" name="judul">
            </div>
            <div class="col">
                <label for="video">Unggah Video Pembelajaran</label>
                <input type="file" class="form-control" id="video" name="video">
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

<!-- // Modal detail Materi video -->

<div class="modal fade" id="exampleModal9" tabindex="-1" aria-labelledby="exampleModal9Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
      <div class="modal-title" id="exampleModal9Label">
      <h3>Detail Video Materi</h3>
      
      </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
      <form action="" method="POST">
            <div class="col">
                    <label for="judul">Judul Materi</label>
                    <input type="text" class="form-control" name="judul">
            </div>
            <div class="col">
                <label for="video">Unggah Video Pembelajaran</label>
                <input type="file" class="form-control" id="video" name="video">
            </div>
        </form>
      </div>
    </div>
  </div>
</div>