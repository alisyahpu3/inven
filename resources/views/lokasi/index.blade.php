@extends('layouts.app')

@section('title','E-Sarinah-Data Master')
@section('header','Data Master Lokasi')
@section('content')
<section class="section">
<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-start">
            <a href="/lokasi/create" class="btn btn-primary btn-sm" id="addLocationBtn">Tambah <i class="bi bi-pencil-fill"></i></a>
        </div>          
        <!-- Lokasi -->
        <div class="col-12">
            <hr>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Kode Lokasi</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>gudang A</td>
                        <td>
                            <button class="btn btn-warning btn-sm edit-location-btn" 
                                data-id="1" data-code="1" data-name="Gudang A">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                            <button class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Edit Lokasi -->
<div class="modal fade" id="editLocationModal" tabindex="-1" aria-labelledby="editLocationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="editLocationForm" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="editLocationModalLabel">Edit Lokasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="editLocationCode">Kode Lokasi</label>
                        <input type="text" name="code" id="editLocationCode" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="editLocationName">Nama Lokasi</label>
                        <input type="text" name="name" id="editLocationName" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
</section>
<script src="{{asset('dist/assets/static/js/components/dark.js')}}"></script>
<script src="{{asset('dist/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('dist/assets/compiled/js/app.js')}}"></script>
<script src="{{asset('dist/assets/extensions/jquery/jquery.min.js')}}"></script>
<script src="{{asset('dist/assets/extensions/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('dist/assets/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('dist/assets/static/js/pages/datatables.js')}}"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
    
         // Utility untuk menampilkan elemen
    function showElement(element) {
        if (element) {
            element.style.display = 'block';
            element.removeAttribute('aria-hidden');
        }
    }

    // Utility untuk menyembunyikan elemen
    function hideElement(element) {
        if (element) {
            element.style.display = 'none';
            element.setAttribute('aria-hidden', 'true');
        }
    }

    // Event Tambah Kategori
    const addCategoryBtn = document.getElementById('addCategoryBtn');
    if (addCategoryBtn) {
        addCategoryBtn.addEventListener('click', function () {
            const addCategoryForm = document.getElementById('addCategoryForm');
            showElement(addCategoryForm);
        });
    }

    const cancelCategoryBtn = document.getElementById('cancelCategoryBtn');
    if (cancelCategoryBtn) {
        cancelCategoryBtn.addEventListener('click', function () {
            const addCategoryForm = document.getElementById('addCategoryForm');
            hideElement(addCategoryForm);
        });
    }

    // Event Tambah Lokasi
    const addLocationBtn = document.getElementById('addLocationBtn');
    if (addLocationBtn) {
        addLocationBtn.addEventListener('click', function () {
            const addLocationForm = document.getElementById('addLocationForm');
            showElement(addLocationForm);
        });
    }

    const cancelLocationBtn = document.getElementById('cancelLocationBtn');
    if (cancelLocationBtn) {
        cancelLocationBtn.addEventListener('click', function () {
            const addLocationForm = document.getElementById('addLocationForm');
            hideElement(addLocationForm);
        });
    }

    // Event Edit Lokasi
    document.querySelectorAll('.edit-location-btn').forEach(function (button) {
        button.addEventListener('click', function () {
            const locationId = this.getAttribute('data-id');
            const locationCode = this.getAttribute('data-code');
            const locationName = this.getAttribute('data-name');

            // Set nilai input pada modal
            const editLocationCode = document.getElementById('editLocationCode');
            const editLocationName = document.getElementById('editLocationName');
            const editLocationForm = document.getElementById('editLocationForm');

            if (editLocationCode && editLocationName && editLocationForm) {
                editLocationCode.value = locationCode;
                editLocationName.value = locationName;
                editLocationForm.action = `/locations/${locationId}`;
            }

            // Tampilkan modal
            const editLocationModal = document.getElementById('editLocationModal');
            if (editLocationModal) {
                const modalInstance = new bootstrap.Modal(editLocationModal);
                editLocationModal.removeAttribute('aria-hidden');
                modalInstance.show();
            }
        });
    });
});

</script>

@endsection
