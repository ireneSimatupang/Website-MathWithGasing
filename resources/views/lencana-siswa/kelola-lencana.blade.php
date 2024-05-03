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
                        <a href="/kelola-lencana" style="text-decoration: none; color: inherit;">Mengelola Lencana</a>
                    </div>
                </div>

                <h2 class="pb-3">Mengelola Lencana</h2>

                <div class="tambah-data pb-3">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Tambah Data </button> <br></br>

                        @foreach($materis as $index => $materi)
                        <div style="display: flex; justify-content: space-around;">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Matematika Bagian 1</p>
                    </div>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="btn btn-warning text-light"  data-bs-toggle="modal" data-bs-target="#exampleModal1">Ubah</a> &nbsp;&nbsp;
                            <a data-id="#" class="btn btn-danger delete" data-kode="#" href="#">Hapus</a> &nbsp;&nbsp;
                    </div><br>
                </div>

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Matematika Bagian 1</p>
                </div>
                <div class="d-flex justify-content-center">
                            <a href="#" class="btn btn-warning text-light"  data-bs-toggle="modal" data-bs-target="#exampleModal1">Ubah</a> &nbsp;&nbsp;
                            <a data-id="#" class="btn btn-danger delete" data-kode="#" href="#">Hapus</a> &nbsp;&nbsp;
                    </div><br>
            </div>

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Matematika Bagian 1</p>
                </div>
                <div class="d-flex justify-content-center">
                            <a href="#" class="btn btn-warning text-light"  data-bs-toggle="modal" data-bs-target="#exampleModal1">Ubah</a> &nbsp;&nbsp;
                            <a data-id="#" class="btn btn-danger delete" data-kode="#" href="#">Hapus</a> &nbsp;&nbsp;
                    </div><br>
            </div>
                        </div>

                        
            </div>
        </main>
        @include('layouts.footer')
    </div>
</div>

@endsection

<!-- // Modal Tambah lencana-->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
      <div class="modal-title" id="exampleModalLabel">
      <h3>Tambah Lencana</h3>
      <small>Ikuti aturan yang telah ditetapkan</small>
      </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
      <form action="" method="POST">
        
            <div class="col">
                    <label for="topik">Topik Materi</label>
                    <input type="text" class="form-control" name="topik">
            </div>
            <div class="col">
                <label for="lencana">Unggah Lencana</label>
                <input type="file" class="form-control" id="lencana" name="lencana">
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

<!-- // Modal ubah lencana-->

<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModal1Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
      <div class="modal-title" id="exampleModal1Label">
      <h3>Tambah Lencana</h3>
      <small>Ikuti aturan yang telah ditetapkan</small>
      </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
      <form action="" method="POST">
        
            <div class="col">
                    <label for="topik">Topik Materi</label>
                    <input type="text" class="form-control" name="topik">
            </div>
            <div class="col">
                <label for="lencana">Unggah Lencana</label>
                <input type="file" class="form-control" id="lencana" name="lencana">
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