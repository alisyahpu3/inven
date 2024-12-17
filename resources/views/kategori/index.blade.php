@extends('layouts.app')

@section('title','E-Sarinah-Data Master')
@section('header','Data Master Kategori')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-start">
            <a href="/kategori/create" class="btn btn-primary btn-sm" id="addCategoryBtn">Tambah <i class="bi bi-pencil-fill"></i></a>
        </div>          
        <!-- kategori -->
        <div class="col-12">
            <hr>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Kode Kategori</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>gudang A</td>
                        <td>
                            <button class="btn btn-warning btn-sm edit-category-btn" 
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
<script>
    document.addEventListener('DOMContentLoaded', function () {
    // Event tombol tambah kategori
    const addCategoryBtn = document.getElementById('addCategoryBtn');
    const addCategoryForm = document.getElementById('addCategoryForm');
    const cancelCategoryBtn = document.getElementById('cancelCategoryBtn');

    if (addCategoryBtn && addCategoryForm) {
        addCategoryBtn.addEventListener('click', function () {
            addCategoryForm.style.display = 'block';
        });
    }

    if (cancelCategoryBtn && addCategoryForm) {
        cancelCategoryBtn.addEventListener('click', function () {
            addCategoryForm.style.display = 'none';
        });
    }

    // Event edit kategori
    document.querySelectorAll('.edit-category-btn').forEach(function (button) {
        button.addEventListener('click', function () {
            const categoryId = this.getAttribute('data-id');
            const categoryCode = this.getAttribute('data-code');
            const categoryName = this.getAttribute('data-name');

            document.getElementById('editCategoryCode').value = categoryCode;
            document.getElementById('editCategoryName').value = categoryName;

            document.getElementById('editCategoryForm').action = `/categories/${categoryId}`;

            const editCategoryModal = new bootstrap.Modal(document.getElementById('editCategoryModal'));
            editCategoryModal.show();
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
