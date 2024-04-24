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

                    
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Akun Siswa Terdaftar
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email Orangtua</th>
                                        <th>Usia</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email Orangtua</th>
                                        <th>Usia</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td> <!-- Kolom untuk toggle button -->
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

                                        <!-- Menggunakan Bootstrap JS -->
                                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
                                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

                                        <script>
                                        // Mendengarkan perubahan pada toggle switch
                                        $('.toggle-switch').change(function() {
                                            if ($(this).is(':checked')) {
                                            // Aksi ketika switch diaktifkan
                                            console.log('Switch diaktifkan');
                                            } else {
                                            // Aksi ketika switch dinonaktifkan
                                            console.log('Switch dinonaktifkan');
                                            }
                                        });
                                        </script>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
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
