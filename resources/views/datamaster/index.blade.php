@extends('layouts.app')

@section('title','E-Sarinah-Dashboard')
@section('header','Data Master')
@section('content')
<div class="container">
    <div class="row">
        <!-- Kategori -->
        <div class="col-md-6">
            <button class="btn btn-primary" id="addCategoryBtn">Tambah Kategori</button>
            
            <form action="#" method="POST" id="addCategoryForm" style="display: none;">
                @csrf
                <div class="form-group">
                    <label for="categoryCode">Kode Kategori</label>
                    <input type="text" name="code" id="categoryCode" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="categoryName">Nama Kategori</label>
                    <input type="text" name="name" id="categoryName" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <button type="button" class="btn btn-secondary" id="cancelCategoryBtn">Batal</button> <!-- Tombol Batal -->
            </form>

            <div class="mt-4">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <h3>Kategori</h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>M001</td>
                            <td>Mebel</td>
                            <td>
                                <button class="btn btn-warning btn-sm edit-category-btn" 
                                data-id="1" data-code="M001" data-name="Mebel">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                                <button class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Lokasi -->
        <div class="col-md-6">
            <button class="btn btn-primary" id="addLocationBtn">Tambah Lokasi</button>
            
            <form action="#" method="POST" id="addLocationForm" style="display: none;">
                @csrf
                <div class="form-group">
                    <label for="locationCode">Kode Lokasi</label>
                    <input type="text" name="code" id="locationCode" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="locationName">Nama Lokasi</label>
                    <input type="text" name="name" id="locationName" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <button type="button" class="btn btn-secondary" id="cancelLocationBtn">Batal</button> <!-- Tombol Batal -->
            </form>

            <div class="mt-4">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <h3>Lokasi</h3>
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
</div>
<!-- Modal Edit Kategori -->
<div class="modal fade" id="editCategoryModal" tabindex="-1" aria-labelledby="editCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="editCategoryForm" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="editCategoryModalLabel">Edit Kategori</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="editCategoryCode">Kode Kategori</label>
                        <input type="text" name="code" id="editCategoryCode" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="editCategoryName">Nama Kategori</label>
                        <input type="text" name="name" id="editCategoryName" class="form-control" required>
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


<script>
    // Menampilkan form kategori
    document.getElementById('addCategoryBtn').addEventListener('click', function() {
        document.getElementById('addCategoryForm').style.display = 'block';
    });

    // Menyembunyikan form kategori ketika tombol batal diklik
    document.getElementById('cancelCategoryBtn').addEventListener('click', function() {
        document.getElementById('addCategoryForm').style.display = 'none';
    });

    // Menampilkan form lokasi
    document.getElementById('addLocationBtn').addEventListener('click', function() {
        document.getElementById('addLocationForm').style.display = 'block';
    });

    // Menyembunyikan form lokasi ketika tombol batal diklik
    document.getElementById('cancelLocationBtn').addEventListener('click', function() {
        document.getElementById('addLocationForm').style.display = 'none';
    });
    document.addEventListener('DOMContentLoaded', function () {
    // Event edit kategori
    document.querySelectorAll('.edit-category-btn').forEach(function (button) {
        button.addEventListener('click', function () {
            const categoryId = this.getAttribute('data-id');
            const categoryCode = this.getAttribute('data-code');
            const categoryName = this.getAttribute('data-name');

            // Set nilai input pada modal
            document.getElementById('editCategoryCode').value = categoryCode;
            document.getElementById('editCategoryName').value = categoryName;

            // Set form action
            document.getElementById('editCategoryForm').action = `/categories/${categoryId}`;

            // Tampilkan modal
            const editCategoryModal = new bootstrap.Modal(document.getElementById('editCategoryModal'));
            editCategoryModal.show();
        });
    });

    // Event edit lokasi
    document.querySelectorAll('.edit-location-btn').forEach(function (button) {
        button.addEventListener('click', function () {
            const locationId = this.getAttribute('data-id');
            const locationCode = this.getAttribute('data-code');
            const locationName = this.getAttribute('data-name');

            // Set nilai input pada modal
            document.getElementById('editLocationCode').value = locationCode;
            document.getElementById('editLocationName').value = locationName;

            // Set form action
            document.getElementById('editLocationForm').action = `/locations/${locationId}`;

            // Tampilkan modal
            const editLocationModal = new bootstrap.Modal(document.getElementById('editLocationModal'));
            editLocationModal.show();
        });
    });
});

</script>
<script src="{{asset('dist/assets/static/js/components/dark.js')}}"></script>
<script src="{{asset('dist/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('dist/assets/compiled/js/app.js')}}"></script>
<script src="{{asset('dist/assets/extensions/jquery/jquery.min.js')}}"></script>
<script src="{{asset('dist/assets/extensions/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('dist/assets/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('dist/assets/static/js/pages/datatables.js')}}"></script>

@endsection
