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
            <a href="/kelola-lencana" style="text-decoration: none; color: inherit;">Mengelola Lencana</a>
          </div>
        </div>

        <h2 class="pb-3">Mengelola Lencana</h2>

        <div class="tambah-data pb-3">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Data </button> <br></br>

          @php $rowCount = 0; @endphp
          <div style="display: flex; flex-wrap: wrap; justify-content: space-around;">
            @foreach($badges as $index => $Badge)
            <div class="card" style="width: 18rem; margin-bottom: 20px;">
              <img class="card-img-top" src="{{ asset('images/' . $Badge->image) }}" alt="{{$Badge->explanation}}">
              <div class="card-body">
                <p class="card-text">{{$Badge->explanation}}</p>
              </div>
              <div class="d-flex justify-content-center">
                <a href="#" class="btn btn-warning text-light" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $Badge->id_badge }}">Ubah</a> &nbsp;&nbsp;
                <form id="deleteForm" action="/hapus-lencana/{{$Badge->id_badge}}" method="POST" style="display: none;">
                  @csrf
                  @method('DELETE')
                </form>
                <button class="btn btn-danger delete" onclick="confirmDelete()">Hapus</button>
              </div><br>
            </div>
            @php $rowCount++; @endphp
            @if($rowCount % 3 == 0)
          </div>
          <div style="display: flex; flex-wrap: wrap; justify-content: space-around;">
            @endif
            @endforeach
          </div>
        </div>
    </main>
    @include('layouts.footer')
  </div>
</div>

@endsection

<!-- // Modal Tambah lencana-->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title" id="exampleModalLabel">
          <h3>Tambah Lencana</h3>
          <small>Ikuti aturan yang telah ditetapkan</small>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action="/tambah-lencana" method="POST" enctype="multipart/form-data">
          @csrf <!-- Tambahkan ini untuk melindungi formulir dari serangan CSRF -->

          <div class="col">
            <label for="topik">Topik Materi</label>
            <input type="text" class="form-control" name="topik">
          </div>
          <div class="col">
            <label for="lencana">Unggah Lencana</label>
            <input type="file" class="form-control" id="lencana" name="lencana">
          </div>

          <input type="hidden" id="id_materi" name="id_materi" value="{{$materi->id_materi}}">

          <input type="hidden" id="id_posttest" name="id_posttest" value="{{$posttest->id_posttest}}">

          <div class="d-flex justify-content-end py-3">
            <button class="btn btn-success mx-3" type="submit">Simpan</button>
            <button class="btn btn-danger" type="button" data-bs-dismiss="modal">Batal</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- // Modal ubah lencana-->

@foreach($badges as $index => $Badge)
<div class="modal fade" id="exampleModal{{ $Badge->id_badge }}" tabindex="-1" aria-labelledby="exampleModal{{ $Badge->id_badge }}Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title" id="exampleModal{{ $Badge->id_badge }}Label">
          <h3>Ubah Lencana</h3>
          <small>Ikuti aturan yang telah ditetapkan</small>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action="/ubah-lencana/{{ $Badge->id_badge }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="col">
            <label for="topik">Topik Materi</label>
            <input type="text" class="form-control" name="topik" value="{{ $Badge->explanation }}">
          </div>
          <div class="col">
            <label for="lencana">Unggah Lencana</label>
            <input type="file" class="form-control" id="lencana" name="lencana">
            <img src="{{ asset('images/' . $Badge->image) }}" alt="Lencana" style="max-width: 100px;">
          </div>
          <div class="d-flex justify-content-end py-3">
            <button class="btn btn-success mx-3" type="submit">Simpan</button>
            <button class="btn btn-danger" type="submit">Batal</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endforeach


<script>
    function confirmDelete() {
        if (confirm('Apakah Anda yakin ingin menghapus lencana ini?')) {
            event.preventDefault();
            document.getElementById('deleteForm').submit();
        }
    }
</script>