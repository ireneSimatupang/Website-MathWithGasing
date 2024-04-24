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
                            <a href="/kelola-materi-bagian" style="text-decoration: none; color: inherit;">Penjumlahan /</a>
                            <a href="/kelola-materi-level" style="text-decoration: none; color: inherit;">Penjumlahan Bagian 1</a>
                        </div>
                    </div>

                    <h2 class="pb-3">Kelola Materi</h2>

                    <h5 class="mb-3 mt-4  mx-1 mb-3 mt-1"> Kelola Pre-Test</h5>
                   
                    <div class="d-flex mb-3 mt-4 fw-bold mx-1 mb-3 mt-1 justify-content-start">
        
                        <a href="/Tambahdata-pretest" class="btn btn-primary">Tambah Data</a> 
                        

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
                                                <a href="#" class="btn btn-success">Detail</a> &nbsp;
                                                <a href="#" class="btn btn-warning">Ubah</a> &nbsp;
                                                <a data-id="#" class="btn btn-danger delete" data-kode= "#"href="#">Hapus</a>
                                            </div>
                                        </td>
                                        
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>

                
                    </div>



                    <h5 class="mb-3 mt-4  mx-1 mb-3 mt-1"> Kelola Video Materi</h5>
                   
                    <div class="d-flex mb-3 mt-4 fw-bold mx-1 mb-3 mt-1 justify-content-start">
        
                        <a href="/KelolaPengguna/Tambah" class="btn btn-primary">Tambah Data</a> 
                        

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
                                                <a href="#" class="btn btn-success">Detail</a> &nbsp;
                                                <a href="#" class="btn btn-warning">Ubah</a> &nbsp;
                                                <a data-id="#" class="btn btn-danger delete" data-kode= "#"href="#">Hapus</a>
                                            </div>
                                        </td>
                                        
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>



                                <h5 class="mb-3 mt-4  mx-1 mb-3 mt-1"> Kelola Post-Test</h5>
                   
                    <div class="d-flex mb-3 mt-4 fw-bold mx-1 mb-3 mt-1 justify-content-start">
        
                        <a href="/KelolaPengguna/Tambah" class="btn btn-primary">Tambah Data</a> 
                        

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
                                                <a href="#" class="btn btn-success">Detail</a> &nbsp;
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
            @include('layouts.footer')
        </div>
    </div>
        
@endsection
