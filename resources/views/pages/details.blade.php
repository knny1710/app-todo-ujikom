@extends('layouts.app')

@section('content')
    <div id="content" class="container">
        {{-- Tombol kembali --}}
        <div class="d-flex align-items-center">
            <a href="{{ route('home') }}" class="btn btn-sm">
                <i class="bi bi-arrow-left-short fs-4"></i>
                <span class="fw-bold fs-5">Kembali</span>
            </a>
        </div>

          {{-- Alert pada saat ada pesan sukses yang dikirim dari controller yang berupa session --}}
        <div class="row">
            <div class="col-8">
                <div class="card" style="height: 80vh; max-height: 80vh;">
                    <div class="card-header d-flex align-items-center justify-content-between overflow-hidden">
                        <h3 class="fw-bold fs-4 text-truncate" style="max-width: 80%;">{{ $task->name }}</h3>
                        <button class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#editModal">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                    </div>
                    <div class="card-body">
                        <p id="taskDescription">
                            {{ $task->description }}
                        </p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-outline-danger w-100">
                            Hapus
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="height: 80vh; max-height: 80vh;">
                    <div class="card"></div>
                </div>
            </div>
        </div>

        <!-- Modal Edit Deskripsi -->
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Deskripsi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <textarea id="editDescription" class="form-control" rows="5">{{ $task->description }}</textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary" id="saveChanges">Simpan Perubahan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('saveChanges').addEventListener('click', function() {
            const newDescription = document.getElementById('editDescription').value;
            document.getElementById('taskDescription').innerText = newDescription;
            // Anda bisa menambahkan AJAX request di sini untuk menyimpan perubahan ke server
            // Misalnya menggunakan fetch atau axios
        });
    </script>
@endsection