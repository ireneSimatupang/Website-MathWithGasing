@extends('layouts.main')

@section('content')

@include('layouts.top-navbar')


@section('scripts')
<script>
    function generatePDF(user_id) {
        console.log("User ID : " + user_id);

        $.ajax({
            type: 'GET',
            url: '/generate-pdf/' + user_id,
            success: function(response) {
                alert('PDF berhasil dibuat.');
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }

    function sendEmail(email) {
        $.ajax({
            type: 'POST',
            url: '/send-email',
            data: {
                email: email
            },
            success: function(response) {
                alert('Email berhasil dikirim.');
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }
</script>
@endsection

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
                                    <th>Jenis Kelamin</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email Orangtua</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @if(isset($users) && $users->count() > 0)
                                @foreach($users as $index => $user)
                                <tr>
                                    <td>{{ $user->id_user }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->gender }}</td>
                                    <td> <!-- Kolom untuk toggle button -->
                                        <!-- Toggle button -->
                                        <div class="d-flex justify-content-center   ">
                                            <div class="custom-control custom-switch text-center pt-2">
                                                <input type="checkbox" class="custom-control-input toggle-switch" id="toggle-switch1">
                                                <label class="custom-control-label" for="toggle-switch1">On/Off</label>
                                            </div>
                                            <div class="d-flex justify-content-center tambah-data pl-3">
                                                <div class="button-1">
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        Detail </button> &nbsp;&nbsp;&nbsp;
                                                </div>

                                                <div class="button-2">
                                                    <form enctype="multipart/form-data" action="/akun-siswa/exportPDF/{{ $user->id_user }}" method="post">
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-primary" onclick="this.form.target='_blank';return true;">Generate PDF</button>
                                                    </form>
                                                </div>
                                                &nbsp;&nbsp;&nbsp;
                                                <div class="button-3">
                                                    <button type="button" class="btn btn-success" onclick="sendEmail('{{ $user->email }}')">Kirim Nilai</button>
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="5">Tidak ada data pengguna.</td>
                                </tr>
                                @endif
                                <!--  -->
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


<!-- // Modal detail akun siswa -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title" id="exampleModalLabel">
                    <h3>Detail Siswa</h3>

                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="" method="POST">
                    <div class="row py-1">
                        <div class="col-md-4">
                            <label for="nama">Nama</label>
                        </div>
                        <div class="col-md-8">
                            <p>{{ $user->name }}</p>
                        </div>
                    </div>
                    <div class="row py-1">
                        <div class="col-md-4">
                            <label for="email">Email Orangtua</label>
                        </div>
                        <div class="col-md-8">
                            <p>{{ $user->email }}</p>
                        </div>
                    </div>
                    <div class="row py-1">
                        <div class="col-md-4 ">
                            <label for="gender">Jenis Kelamin</label>
                        </div>
                        <div class="col-md-8">
                            <p>{{ $user->gender }}</p>
                        </div>
                    </div>
                    <div class="row py-1">
                        <div class="col-md-4 ">
                            <label for="pretest">Total Pre-Test</label>
                        </div>
                        <div class="col-md-8">
                            <p>{{$user->total_pretest ?? '-' }}</p>
                        </div>
                    </div>
                    <div class="row py-1">
                        <div class="col-md-4 ">
                            <label for="posttest">Total Post-Test</label>
                        </div>
                        <div class="col-md-8">
                            <p>{{ $user->total_score ?? '-' }}</p>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>