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
                        <li class="breadcrumb-item active" aria-current="page"><a href="#"><span class="iconify" data-icon="bxs:user-rectangle" data-height="20"></span>Pencapaian Siswa</a></li>
                    </ol>
                    <h2 class="mb-3 mt-4 fw-bold mx-1 mb-3 mt-1">Pencapaian Siswa</h2>
                    
                    <div class="card mb-4">
                        
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Materi</th>
                                        <th>Nilai</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Materi</th>
                                        <th>Nilai</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        
                                        
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
