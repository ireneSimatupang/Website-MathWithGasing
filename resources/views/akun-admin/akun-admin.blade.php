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
                        <a href="/akun-admin" style="text-decoration: none; color: inherit;">Kelola Akun Admin</a>
                    </div>
                </div>

                <h2 class="pb-3">Kelola Akun Admin</h2>

                <h5 class="mb-3 mt-10  mx-1 mb-3 mt-1"> Akun Terdaftar</h5>

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
                                    <td>6247832428342</td>
                                    <td>
                                        <!-- Kolom untuk toggle button -->
                                        <!-- Toggle button -->
                                        <div class="custom-control custom-switch text-center">
                                            <input type="checkbox" class="custom-control-input toggle-switch" id="toggle-switch1">
                                            <label class="custom-control-label" for="toggle-switch1">On/Off</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>System Architect</td>
                                    <td>Tiger Nixon</td>
                                    <td>6247832428342</td>
                                    <td>
                                        <!-- Kolom untuk toggle button -->
                                        <!-- Toggle button -->
                                        <div class="custom-control custom-switch text-center">
                                            <input type="checkbox" class="custom-control-input toggle-switch" id="toggle-switch1">
                                            <label class="custom-control-label" for="toggle-switch1">On/Off</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>System Architect</td>
                                    <td>Tiger Nixon</td>
                                    <td>6247832428342</td>
                                    <td>
                                        <!-- Kolom untuk toggle button -->
                                        <!-- Toggle button -->
                                        <div class="custom-control custom-switch text-center">
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
                                    <td>6247832428342</td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center">
                                            <a href="#" class="btn btn-success">Terima</a> &nbsp;
                                            <a data-id="#" class="btn btn-danger delete" href="#">Tolak</a>
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