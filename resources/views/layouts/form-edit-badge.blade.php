<div class="modal fade" id="formEditBadge{{ $badge['id_bagde'] }}" tabindex="-1" aria-labelledby="approvalModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Badge</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-xl form-box">
                    <form id="edit-badge-form" data-url="http://localhost:8000/api/badges/{{ $badge['id_bagde'] }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="id_penggunaWeb">ID Pengguna Web</label>
                            <input id="id_penggunaWeb" type="text" class="form-control" name="id_penggunaWeb" value="{{ old('id_penggunaWeb', $badge['id_penggunaWeb'] ?? '') }}" required autocomplete="id_penggunaWeb" autofocus readonly>
                        </div>

                        <div class="form-group">
                            <label for="image">Image</label>
                            <input id="image" type="file" class="form-control" name="image">
                        </div>

                        <div class="form-group">
                            <label for="title">Judul</label>
                            <input id="title" type="text" class="form-control" name="title" value="{{ old('title', $badge['title'] ?? '') }}" required autocomplete="title">
                        </div>

                        <div class="form-group">
                            <label for="explanation">Explanation</label>
                            <input id="explanation" type="text" class="form-control" name="explanation" value="{{ old('explanation', $badge['explanation'] ?? '') }}" required autocomplete="explanation">
                        </div>

                        <div class="form-group">
                            <label for="id_materi">Materi</label>
                            <select id="id_materi" class="form-control" name="id_materi" required>
                                <option value="">Pilih Materi</option>
                                @foreach($materiData as $materi)
                                    <option value="{{ $materi['id_materi'] }}" {{ $materi['id_materi'] == old('id_materi', $badge['id_materi'] ?? '') ? 'selected' : '' }}>
                                        {{ $materi['id_materi'] }} - {{ $materi['title'] }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="id_posttest">ID Posttest</label>
                            <select id="id_posttest" class="form-control" name="id_posttest" required>
                                <option value="">Pilih ID Posttest</option>
                                @foreach($posttestData as $posttest)
                                    <option value="{{ $posttest['id_posttest'] }}" {{ $posttest['id_posttest'] == old('id_posttest', $badge['id_posttest'] ?? '') ? 'selected' : '' }}>
                                        {{ $posttest['id_posttest'] }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="button" class="btn btn-primary" onclick="updateBadge('{{ $badge['id_bagde'] }}')">Submit</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function updateBadge(id) {
        var form = document.getElementById('edit-badge-form');
        var formData = new FormData(form);

        var url = form.getAttribute('data-url');

        fetch(url, {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Failed to update badge');
            }
            return response.json();
        })
        .then(data => {
            console.log(data); // Output pesan sukses dari server
            // Redirect ke halaman kelola-materi jika berhasil
            window.location.href = '/kelola-lencana';
        })
        .catch(error => {
            console.error('Error:', error);
            // Tampilkan pesan error kepada pengguna
            alert('Gagal mengupdate badge. Silakan coba lagi.');
        });
    }
</script>
