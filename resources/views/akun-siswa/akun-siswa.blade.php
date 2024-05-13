@extends('layouts.main')

@section('content')

@include('layouts.top-navbar')


@section('scripts')
<script>
    document.getElementById('sendEmailForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission

        // Submit form via AJAX
        fetch(this.action, {
                method: this.method,
                body: new FormData(this)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert(data.message); // Show success message from response
                } else {
                    alert(data.message); // Show error message from response (if any)
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat mengirim email.');
            });
    });
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
                        <a href="/beranda" style="text-decoration: none; color: inherit;">Beranda /</a>
                        <a href="/akun-siswa" style="text-decoration: none; color: inherit;">Kelola Akun Siswa</a>
                    </div>
                </div>

                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show pt-4" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <h2 class="pb-3">Kelola Akun Siswa</h2>

                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show pt-4" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif


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
                                @php 
                                $i=1;
                                @endphp
                                @foreach($users as $index => $user)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->gender }}</td>
                                    <td> <!-- Kolom untuk toggle button -->
                                        <!-- Toggle button -->
                                        <div class="d-flex justify-content-center   ">
                                            <form method="POST" action="/update-status/{{$user->id_user}}" id="user-status-form-{{$user->id_user}}">
                                                @csrf
                                                <div class="custom-control custom-switch text-center pt-2">
                                                    <input type="checkbox" class="custom-control-input" name="status" id="toggle-switch{{$user->id_user}}" @if($user->status == 1) checked @endif
                                                    onchange="document.getElementById('user-status-form-{{$user->id_user}}').submit()"> <label class="custom-control-label" for="toggle-switch{{$user->id_user}}">Off/On</label>
                                                </div>
                                            </form>

                                            <div class="d-flex justify-content-center tambah-data pl-3">
                                                <div class="button-1">
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        Detail </button> &nbsp;&nbsp;&nbsp;
                                                </div>
                                                <div class="button-2">
                                                    <form id="sendEmailForm" enctype="multipart/form-data" action="/akun-siswa/sendEmail/{{$user->id_user}}" method="post">
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-primary">Kirim Nilai</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                </tr>
                                @php 
                                $i++;
                                @endphp
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
                <div class="row py-1">
                    <div class="col-md-4">
                        <label for="nama">Nama</label>
                    </div>
                    <div class="col-md-8">
                        <p>: {{ $user->name }}</p>
                    </div>
                </div>
                <div class="row py-1">
                    <div class="col-md-4">
                        <label for="email">Email Orangtua</label>
                    </div>
                    <div class="col-md-8">
                        <p>: {{ $user->email }}</p>
                    </div>
                </div>
                <div class="row py-1">
                    <div class="col-md-4 ">
                        <label for="gender">Jenis Kelamin</label>
                    </div>
                    <div class="col-md-8">
                        <p>: {{ $user->gender }}</p>
                    </div>
                </div>
                <div class="row py-1">
                    <div class="col-md-4 ">
                        <label for="pretest">Total Pre-Test</label>
                    </div>
                    <div class="col-md-8">
                        <p>: {{$user->total_pretest ?? '-' }}</p>
                    </div>
                </div>
                <div class="row py-1">
                    <div class="col-md-4 ">
                        <label for="posttest">Total Post-Test</label>
                    </div>
                    <div class="col-md-8">
                        <p>: {{ $user->total_score ?? '-' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>