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
                        <li class="breadcrumb-item active" aria-current="page"><a href="#"><span class="iconify" data-icon="bxs:user-rectangle" data-height="20"></span> Kelola Akun Siswa</a></li>
                    </ol>
                    <h2 class="mb-3 mt-4 fw-bold mx-1 mb-3 mt-1">KELOLA AKUN SISWA</h2>
                    <h5 class="mb-3 mt-4  mx-1 mb-3 mt-1"> Admin Terdaftar</h5>

                    <div class="card mb-4">

                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Kontak</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Kontak</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>System Architect</td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td class="text-center">
                                            <!-- Kolom untuk toggle button -->
                                                <!-- Toggle button -->
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input toggle-switch" id="toggle-switch1">
                                                    <label class="custom-control-label" for="toggle-switch1">On/Off</label>
                                                </div>
                                        </td>
                                        
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>

                
                    </div>



                    <h5 class="mb-3 mt-10  mx-1 mb-3 mt-1"> Akun Baru</h5>
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
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td class="text-center">
                                            <div class="d-flex justify-content-center">
                                                <a href="#" class="btn btn-success">Terima</a> &nbsp;
                                                <a data-id="#" class="btn btn-danger delete" data-kode= "#"href="#">Tolak</a>
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
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
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
