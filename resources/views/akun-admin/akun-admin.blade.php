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
                        <a href="/akun-admin" style="text-decoration: none; color: inherit;">Kelola Akun Admin</a>
                    </div>
                </div>

                <h2 class="pb-3">Kelola Akun Admin</h2>

                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show pt-4" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                @if (session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show pt-4" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

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
                                @foreach($regisAdmins as $admin)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $admin->name }}</td>
                                    <td>{{ $admin->email }}</td>
                                    <td>{{ $admin->kontak }}</td>
                                    <td>
                                        <!-- Kolom untuk toggle button -->
                                        <!-- Toggle button -->

                                        <form method="POST" action="/update-status-admin/{{$admin->id_penggunaWeb}}" id="user-status-form-{{$admin->id_penggunaWeb}}">
                                                @csrf
                                                <div class="custom-control custom-switch text-center pt-2">
                                                    <input type="checkbox" class="custom-control-input" name="status" id="toggle-switch{{$admin->id_penggunaWeb}}" @if($admin->status == 'active') checked @endif
                                                    onchange="document.getElementById('user-status-form-{{$admin->id_penggunaWeb}}').submit()"> <label class="custom-control-label" for="toggle-switch{{$admin->id_penggunaWeb}}">Off/On</label>
                                                </div>
                                            </form>
                                    </td>
                                </tr>
                                @endforeach

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
                                @foreach($newAdmins as $admin)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $admin->name }}</td>
                                    <td>{{ $admin->email }}</td>
                                    <td>{{ $admin->kontak }}</td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center">
                                            <form action="/approvedAdmin/{{$admin->id_penggunaWeb}}" method="POST">
                                            @csrf
                                                <button type="submit" class="btn btn-success">Terima</button>
                                            
                                            <a data-id="#" class="btn btn-danger delete" href="#">Tolak</a>
                                            </form> &nbsp;
                                        </div>
                                    </td>
                                </tr>
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