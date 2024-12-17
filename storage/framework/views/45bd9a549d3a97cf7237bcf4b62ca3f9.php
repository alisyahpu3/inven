

<?php $__env->startSection('title','E-Sarinah-Dashboard'); ?>
<?php $__env->startSection('header','Data Barang Masuk'); ?>
<?php $__env->startSection('content'); ?>

 <!-- Basic Tables start -->
 <section class="section">
    <div class="card">
        <div class="card-body">
            <div class="row mb-3">
                
                <div class="col-12 text-end">
                <a href="/masuk/create" class="btn btn-primary">Tambah</a> <!-- Button Add with Link -->
                </div>
            </div>
            <div class="table-responsive" style="overflow-x: auto; white-space: nowrap;">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Barang</th>
                            <th>Sumber Dana</th>
                            <th>Jumlah</th>
                            <th>Kondisi</th>
                            <th>Lokasi</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Elektronik</td>
                            <td>Komputer</td>
                            <td>APBN</td>
                            <td>10</td>
                            <td>Baik</td>
                            <td>Ruang IT</td>
                            <td>2024-11-01</td>
                            <td>
                                <button class="btn btn-warning btn-sm edit-btn" 
                                data-id="1" 
                                data-nama="Komputer" 
                                data-kategori="Elektronik" 
                                data-sumber="APBN" 
                                data-jumlah="10" 
                                data-kondisi="Baik" 
                                data-lokasi="Ruang IT" 
                                data-tanggal="2024-11-01">
                                    <i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Furniture</td>
                            <td>Kursi</td>
                            <td>BOS</td>
                            <td>30</td>
                            <td>Baik</td>
                            <td>Ruang Kelas</td>
                            <td>2024-10-25</td>
                            <td>
                                <button class="btn btn-warning btn-sm edit-btn" data-id="1" data-nama="Komputer" data-kategori="Elektronik" data-sumber="APBN" data-jumlah="10" data-kondisi="Baik" data-lokasi="Ruang IT" data-tanggal="2024-11-01"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Elektronik</td>
                            <td>Proyektor</td>
                            <td>Donasi</td>
                            <td>5</td>
                            <td>Rusak</td>
                            <td>Ruang Rapat</td>
                            <td>2024-11-03</td>
                            <td>
                                <button class="btn btn-warning btn-sm edit-btn" data-id="1" data-nama="Komputer" data-kategori="Elektronik" data-sumber="APBN" data-jumlah="10" data-kondisi="Baik" data-lokasi="Ruang IT" data-tanggal="2024-11-01"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Alat Tulis</td>
                            <td>Pensil</td>
                            <td>APBD</td>
                            <td>50</td>
                            <td>Baik</td>
                            <td>Gudang</td>
                            <td>2024-09-15</td>
                            <td>
                                <button class="btn btn-warning btn-sm edit-btn" data-id="1" data-nama="Komputer" data-kategori="Elektronik" data-sumber="APBN" data-jumlah="10" data-kondisi="Baik" data-lokasi="Ruang IT" data-tanggal="2024-11-01"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Elektronik</td>
                            <td>Printer</td>
                            <td>APBN</td>
                            <td>3</td>
                            <td>Baik</td>
                            <td>Ruang Admin</td>
                            <td>2024-10-12</td>
                            <td>
                                <button class="btn btn-warning btn-sm edit-btn" data-id="1" data-nama="Komputer" data-kategori="Elektronik" data-sumber="APBN" data-jumlah="10" data-kondisi="Baik" data-lokasi="Ruang IT" data-tanggal="2024-11-01"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Laboratorium</td>
                            <td>Tabung Reaksi</td>
                            <td>APBD</td>
                            <td>20</td>
                            <td>Baik</td>
                            <td>Laboratorium Kimia</td>
                            <td>2024-08-22</td>
                            <td>
                                <button class="btn btn-warning btn-sm edit-btn" data-id="1" data-nama="Komputer" data-kategori="Elektronik" data-sumber="APBN" data-jumlah="10" data-kondisi="Baik" data-lokasi="Ruang IT" data-tanggal="2024-11-01"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Elektronik</td>
                            <td>Televisi</td>
                            <td>Donasi</td>
                            <td>2</td>
                            <td>Baik</td>
                            <td>Ruang Guru</td>
                            <td>2024-07-14</td>
                            <td>
                                <button class="btn btn-warning btn-sm edit-btn" data-id="1" data-nama="Komputer" data-kategori="Elektronik" data-sumber="APBN" data-jumlah="10" data-kondisi="Baik" data-lokasi="Ruang IT" data-tanggal="2024-11-01"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Elektronik</td>
                            <td>AC</td>
                            <td>APBN</td>
                            <td>8</td>
                            <td>Rusak</td>
                            <td>Ruang Kelas</td>
                            <td>2024-11-06</td>
                            <td>
                                <button class="btn btn-warning btn-sm edit-btn" data-id="1" data-nama="Komputer" data-kategori="Elektronik" data-sumber="APBN" data-jumlah="10" data-kondisi="Baik" data-lokasi="Ruang IT" data-tanggal="2024-11-01"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Olahraga</td>
                            <td>Bola Basket</td>
                            <td>APBD</td>
                            <td>10</td>
                            <td>Baik</td>
                            <td>Lapangan</td>
                            <td>2024-09-30</td>
                            <td>
                                <button class="btn btn-warning btn-sm edit-btn" data-id="1" data-nama="Komputer" data-kategori="Elektronik" data-sumber="APBN" data-jumlah="10" data-kondisi="Baik" data-lokasi="Ruang IT" data-tanggal="2024-11-01"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Kesehatan</td>
                            <td>Termometer</td>
                            <td>APBD</td>
                            <td>5</td>
                            <td>Baik</td>
                            <td>Klinik</td>
                            <td>2024-06-11</td>
                            <td>
                                <button class="btn btn-warning btn-sm edit-btn" data-id="1" data-nama="Komputer" data-kategori="Elektronik" data-sumber="APBN" data-jumlah="10" data-kondisi="Baik" data-lokasi="Ruang IT" data-tanggal="2024-11-01"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
        <!-- Modal Edit Barang Masuk -->
<div class="modal fade" id="editBarangModal" tabindex="-1" aria-labelledby="editBarangModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="editBarangForm" method="POST" action="#">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="modal-header">
                    <h5 class="modal-title" id="editBarangModalLabel">Edit Barang Masuk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Nama Barang -->
                    <div class="mb-3">
                        <label for="edit-nama" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" id="edit-nama" name="nama_barang" readonly>
                    </div>
                    <!-- Kategori -->
                    <div class="mb-3">
                        <label for="edit-kategori" class="form-label">Kategori</label>
                        <input type="text" class="form-control" id="edit-kategori" name="kategori" readonly>
                    </div>
                    <!-- Sumber Dana -->
                    <div class="mb-3">
                        <label for="edit-sumber" class="form-label">Sumber Dana</label>
                        <input type="text" class="form-control" id="edit-sumber" name="sumber_dana" readonly>
                    </div>
                    <!-- Jumlah -->
                    <div class="mb-3">
                        <label for="edit-jumlah" class="form-label">Jumlah</label>
                        <input type="number" class="form-control" id="edit-jumlah" name="jumlah" required>
                    </div>
                    <!-- Kondisi -->
                    <div class="mb-3">
                        <label for="edit-kondisi" class="form-label">Kondisi</label>
                        <select class="form-select" id="edit-kondisi" name="kondisi">
                            <option value="Baik">Baik</option>
                            <option value="Diperbaiki">Diperbaiki</option>
                            <option value="Rusak">Rusak</option>
                            <option value="Hilang">Hilang</option>
                        </select>
                    </div>
                    <!-- Lokasi -->
                    <div class="mb-3">
                        <label for="edit-lokasi" class="form-label">Lokasi</label>
                        <select class="form-select" id="edit-lokasi" name="lokasi">
                            <option value="Gudang">Gudang</option>
                            <option value="Dapur">Dapur</option>
                            <option value="Kantor">Kantor</option>
                            <option value="Ruang IT">Ruang IT</option>
                        </select>
                    </div>
                    <!-- Tanggal -->
                    <div class="mb-3">
                        <label for="edit-tanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="edit-tanggal" name="tanggal" readonly>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>


    </div>      
    </div>
</div>
    
    
</section>

<!-- Basic Tables end -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const editButtons = document.querySelectorAll('.edit-btn');

        editButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                // Ambil data dari atribut data-*
                const id = button.getAttribute('data-id');
                const nama = button.getAttribute('data-nama');
                const kategori = button.getAttribute('data-kategori');
                const sumber = button.getAttribute('data-sumber');
                const jumlah = button.getAttribute('data-jumlah');
                const kondisi = button.getAttribute('data-kondisi');
                const lokasi = button.getAttribute('data-lokasi');
                const tanggal = button.getAttribute('data-tanggal');

                // Set nilai ke dalam input modal
                document.getElementById('editBarangForm').action = `/barang-masuk/${id}`;
                document.getElementById('edit-nama').value = nama;
                document.getElementById('edit-kategori').value = kategori;
                document.getElementById('edit-sumber').value = sumber;
                document.getElementById('edit-jumlah').value = jumlah;
                document.getElementById('edit-kondisi').value = kondisi;
                document.getElementById('edit-lokasi').value = lokasi;
                document.getElementById('edit-tanggal').value = tanggal;

                // Tampilkan modal
                const editBarangModal = new bootstrap.Modal(document.getElementById('editBarangModal'));
                editBarangModal.show();
            });
        });
    });
</script>




<script src="<?php echo e(asset('dist/assets/static/js/components/dark.js')); ?>"></script>
<script src="<?php echo e(asset('dist/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js')); ?>"></script>
<script src="<?php echo e(asset('dist/assets/compiled/js/app.js')); ?>"></script>
<script src="<?php echo e(asset('dist/assets/extensions/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('dist/assets/extensions/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('dist/assets/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js')); ?>"></script>
<script src="<?php echo e(asset('dist/assets/static/js/pages/datatables.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\inventaris\resources\views/masuk/index.blade.php ENDPATH**/ ?>