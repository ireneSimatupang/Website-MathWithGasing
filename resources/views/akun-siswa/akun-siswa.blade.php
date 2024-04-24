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
                        <a href="/akun-siswa" style="text-decoration: none; color: inherit;">Kelola Akun Siswa</a>
                    </div>
                </div>

                <h2 class="pb-3">Kelola Akun Siswa</h2>


                <div class="card mb-4">
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
                                    <td>1</td>
                                    <td>Tiger Nixon</td>
                                    <td>nixon12313@gmail.com</td>
                                    <td>12</td>
                                    <td> <!-- Kolom untuk toggle button -->
                                        <!-- Toggle button -->
                                        <div class="custom-control custom-switch text-center">
                                            <input type="checkbox" class="custom-control-input toggle-switch" id="toggle-switch1">
                                            <label class="custom-control-label" for="toggle-switch1">On/Off</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Tiger Nixon</td>
                                    <td>nixon12313@gmail.com</td>
                                    <td>12</td>
                                    <td> <!-- Kolom untuk toggle button -->
                                        <!-- Toggle button -->
                                        <div class="custom-control custom-switch text-center">
                                            <input type="checkbox" class="custom-control-input toggle-switch" id="toggle-switch1">
                                            <label class="custom-control-label" for="toggle-switch1">On/Off</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Tiger Nixon</td>
                                    <td>nixon12313@gmail.com</td>
                                    <td>12</td>
                                    <td> <!-- Kolom untuk toggle button -->
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
            </div>
        </main>
        @include('layouts.footer')
    </div>
</div>

@endsection