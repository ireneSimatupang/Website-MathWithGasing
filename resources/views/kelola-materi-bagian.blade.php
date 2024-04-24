@extends('layouts.main')

@section('content')

    @include('layouts.top-navbar')
    
    <div id="layoutSidenav">

        @include('layouts.side-navbar')    

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active"><i class="fas fa-home"></i>&nbsp;Beranda</li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="#"><span class="iconify" data-icon="bxs:user-rectangle" data-height="20"></span> Kelola Materi</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="#"><span class="iconify" data-icon="bxs:user-rectangle" data-height="20"></span> Kelola Bagian Materi</a></li>
                    </ol>
                    <h2 class="mb-3 mt-4 fw-bold mx-1 mb-3 mt-1">KELOLA MATERI</h2>

                    <div class="d-flex mb-3 mt-4 fw-bold mx-1 mb-3 mt-1 justify-content-start">
        
                        <a href="/KelolaPengguna/Tambah" class="btn btn-primary">Tambah Data</a> 
                        <a href="/KelolaPengguna/KelolaUnit" class="btn btn-info mx-4">Kelola Level Bonus</a>

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
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td class="text-center">
                                            <div class="d-flex">
                                                <a href="kelola-materi-level" class="btn btn-success">Buka</a> &nbsp;
                                                <a href="#" class="btn btn-warning">Ubah</a> &nbsp;
                                                <a data-id="#" class="btn btn-danger delete" data-kode= "#"href="#">Hapus</a>
                                            </div>
                                        </td>
                                        
                                    </tr>
                        
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Math With Gasing</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
        
@endsection
