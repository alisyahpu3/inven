

<?php $__env->startSection('title','E-Sarinah-Dashboard'); ?>
<?php $__env->startSection('header','Data Barang Keluar'); ?>
<?php $__env->startSection('content'); ?>

 <!-- Basic Tables start -->
 <section class="section">
    <div class="card">
        <div class="card-body">
            <!-- Filter Lokasi -->
            <div class="row mb-3 align-items-center">
                <!-- Form Filter -->
                <div class="col-md-8">
                    <form id="filterForm" class="row g-2">
                        <div class="col-md-4">
                            <select id="filter-bulan" class="form-select" name="bulan">
                                <option value="" selected>Pilih Bulan</option>
                                <?php $__currentLoopData = range(1, 12); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bulan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($bulan); ?>"><?php echo e(DateTime::createFromFormat('!m', $bulan)->format('F')); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select id="filter-tahun" class="form-select" name="tahun">
                                <option value="" selected>Pilih Tahun</option>
                                <?php $__currentLoopData = range(date('Y') - 10, date('Y')); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tahun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($tahun); ?>"><?php echo e($tahun); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select id="filter-lokasi" class="form-select" name="lokasi">
                                <option value="" selected>Pilih Lokasi</option>
                                <option value="Gudang A">Gudang A</option>
                                <option value="Gudang B">Gudang B</option>
                                <option value="Gudang C">Gudang C</option>
                                <option value="Gudang D">Gudang D</option>
                                <option value="Gudang E">Gudang E</option>
                            </select>
                        </div>
                        <div class="col-md-12 text-end mt-2">
                            <button type="button" id="filterButton" class="btn btn-primary">Filter</button>
                        </div>
                    </form>
                </div>
                <!-- Tombol Cetak dan Tambah -->
                <div class="col-md-4 text-end">
                    <button id="printTable" class="btn btn-success me-2">Cetak Data</button>
                    <a href="/keluar/create" class="btn btn-primary">Tambah</a>
                </div>
            </div>
            
            <div class="table-responsive" style="overflow-x: auto; white-space: nowrap;">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Barang</th>
                            <th>Jumlah</th>
                            <th>Kondisi</th>
                            <th>Lokasi</th>
                            <th>Tanggal Keluar</th>
                            <th>EXP</th>
                            <th>Penanggung Jawab</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Elektronik</td>
                            <td>Tempat Sampah Kelas</td>
                            <td>5</td>
                            <td>Baik</td>
                            <td>Gudang A</td>
                            <td>2024-10-01</td>
                            <td>2025-10-01</td>
                            <td>Andi</td>
                            <td  >
                                <button class="btn btn-warning edit-barangkeluar-btn btn-sm" data-id="1" data-nama="Komputer" data-kategori="Elektronik" data-sumber="APBN" data-jumlah="10" data-kondisi="Baik" data-lokasi="Ruang IT" data-tanggal="2024-11-01"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Furniture</td>
                            <td>Kursi</td>
                            <td>12</td>
                            <td>Baik</td>
                            <td>Gudang B</td>
                            <td>2024-09-15</td>
                            <td>2025-09-15</td>
                            <td>Budi</td>
                            <td>
                                <button class="btn btn-warning btn-sm edit-btn" data-id="1" data-nama="Komputer" data-kategori="Elektronik" data-sumber="APBN" data-jumlah="10" data-kondisi="Baik" data-lokasi="Ruang IT" data-tanggal="2024-11-01"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Elektronik</td>
                            <td>Printer</td>
                            <td>3</td>
                            <td>Rusak</td>
                            <td>Gudang C</td>
                            <td>2024-09-20</td>
                            <td>2026-09-20</td>
                            <td>Citra</td>
                            <td>
                                <button class="btn btn-warning btn-sm edit-btn" data-id="1" data-nama="Komputer" data-kategori="Elektronik" data-sumber="APBN" data-jumlah="10" data-kondisi="Baik" data-lokasi="Ruang IT" data-tanggal="2024-11-01"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Kantor</td>
                            <td>Meja</td>
                            <td>8</td>
                            <td>Baik</td>
                            <td>Gudang A</td>
                            <td>2024-08-12</td>
                            <td>2026-08-12</td>
                            <td>Dewi</td>
                            <td>
                                <button class="btn btn-warning btn-sm edit-btn" data-id="1" data-nama="Komputer" data-kategori="Elektronik" data-sumber="APBN" data-jumlah="10" data-kondisi="Baik" data-lokasi="Ruang IT" data-tanggal="2024-11-01"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Alat Tulis</td>
                            <td>Pena</td>
                            <td>50</td>
                            <td>Baik</td>
                            <td>Gudang B</td>
                            <td>2024-07-22</td>
                            <td>2025-07-22</td>
                            <td>Eka</td>
                            <td>
                                <button class="btn btn-warning btn-sm edit-btn" data-id="1" data-nama="Komputer" data-kategori="Elektronik" data-sumber="APBN" data-jumlah="10" data-kondisi="Baik" data-lokasi="Ruang IT" data-tanggal="2024-11-01"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Alat Tulis</td>
                            <td>Buku</td>
                            <td>100</td>
                            <td>Baik</td>
                            <td>Gudang D</td>
                            <td>2024-06-30</td>
                            <td>2026-06-30</td>
                            <td>Farid</td>
                            <td>
                                <button class="btn btn-warning btn-sm edit-btn" data-id="1" data-nama="Komputer" data-kategori="Elektronik" data-sumber="APBN" data-jumlah="10" data-kondisi="Baik" data-lokasi="Ruang IT" data-tanggal="2024-11-01"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Elektronik</td>
                            <td>Proyektor</td>
                            <td>2</td>
                            <td>Baik</td>
                            <td>Gudang E</td>
                            <td>2024-11-01</td>
                            <td>2025-11-01</td>
                            <td>Gita</td>
                            <td>
                                <button class="btn btn-warning btn-sm edit-btn" data-id="1" data-nama="Komputer" data-kategori="Elektronik" data-sumber="APBN" data-jumlah="10" data-kondisi="Baik" data-lokasi="Ruang IT" data-tanggal="2024-11-01"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Kantor</td>
                            <td>Whiteboard</td>
                            <td>5</td>
                            <td>Baik</td>
                            <td>Gudang F</td>
                            <td>2024-10-10</td>
                            <td>2025-10-10</td>
                            <td>Hana</td>
                            <td>
                                <button class="btn btn-warning btn-sm edit-btn" data-id="1" data-nama="Komputer" data-kategori="Elektronik" data-sumber="APBN" data-jumlah="10" data-kondisi="Baik" data-lokasi="Ruang IT" data-tanggal="2024-11-01"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Elektronik</td>
                            <td>Kamera</td>
                            <td>4</td>
                            <td>Baik</td>
                            <td>Gudang G</td>
                            <td>2024-12-05</td>
                            <td>2026-12-05</td>
                            <td>Indra</td>
                            <td>
                                <button class="btn btn-warning btn-sm edit-btn" data-id="1" data-nama="Komputer" data-kategori="Elektronik" data-sumber="APBN" data-jumlah="10" data-kondisi="Baik" data-lokasi="Ruang IT" data-tanggal="2024-11-01"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Alat Tulis</td>
                            <td>Penghapus</td>
                            <td>20</td>
                            <td>Baik</td>
                            <td>Gudang H</td>
                            <td>2024-12-20</td>
                            <td>2025-12-20</td>
                            <td>Joko</td>
                            <td>
                                <button class="btn btn-warning btn-sm edit-btn" data-id="1" data-nama="Komputer" data-kategori="Elektronik" data-sumber="APBN" data-jumlah="10" data-kondisi="Baik" data-lokasi="Ruang IT" data-tanggal="2024-11-01"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
               
        <!-- Modal Edit Barang Keluar -->
<div class="modal fade" id="editBarangKeluarModal" tabindex="-1" aria-labelledby="editBarangKeluarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="editBarangKeluarForm" method="POST" action="#">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="modal-header">
                    <h5 class="modal-title" id="editBarangKeluarModalLabel">Edit Barang Keluar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Nama Barang -->
                    <div class="mb-3">
                        <label for="edit-nama" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" id="edit-nama" name="nama_barang" readonly>
                    </div>
                    <!-- Penanggung Jawab -->
                    <div class="mb-3">
                        <label for="edit-penanggungjawab" class="form-label">Penanggung Jawab</label>
                        <input type="text" class="form-control" id="edit-penanggungjawab" name="penanggungjawab" required>
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
                        <select id="edit-kondisi" class="form-select" name="kondisi" required>
                            <option value="Baik">Baik</option>
                            <option value="Diperbaiki">Diperbaiki</option>
                            <option value="Rusak">Rusak</option>
                            <option value="Hilang">Hilang</option>
                        </select>
                    </div>
                    <!-- Lokasi -->
                    <div class="mb-3">
                        <label for="edit-lokasi" class="form-label">Lokasi</label>
                        <select id="edit-lokasi" class="form-select" name="lokasi" required>
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
                    <!-- Masa Pakai -->
                    <div class="mb-3">
                        <label for="edit-masapakai" class="form-label">Masa Pakai</label>
                        <select id="edit-masapakai" class="form-select" name="masa_pakai" required>
                            <option value="1">1 tahun</option>
                            <option value="3">3 tahun</option>
                            <option value="5">5 tahun</option>
                        </select>
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
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const editButtons = document.querySelectorAll('.edit-barangkeluar-btn');

        editButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                // Ambil data dari atribut data-*
                const id = button.getAttribute('data-id');
                const nama = button.getAttribute('data-nama');
                const penanggungjawab = button.getAttribute('data-penanggungjawab');
                const kategori = button.getAttribute('data-kategori');
                const sumber = button.getAttribute('data-sumber');
                const jumlah = button.getAttribute('data-jumlah');
                const kondisi = button.getAttribute('data-kondisi');
                const lokasi = button.getAttribute('data-lokasi');
                const tanggal = button.getAttribute('data-tanggal');
                const masaPakai = button.getAttribute('data-masapakai');

                // Set nilai ke dalam input modal
                document.getElementById('editBarangKeluarForm').action = `/barang-keluar/${id}`;
                document.getElementById('edit-nama').value = nama;
                document.getElementById('edit-penanggungjawab').value = penanggungjawab;
                document.getElementById('edit-kategori').value = kategori;
                document.getElementById('edit-sumber').value = sumber;
                document.getElementById('edit-jumlah').value = jumlah;
                document.getElementById('edit-kondisi').value = kondisi;
                document.getElementById('edit-lokasi').value = lokasi;
                document.getElementById('edit-tanggal').value = tanggal;
                document.getElementById('edit-masapakai').value = masaPakai;

                // Tampilkan modal
                const editBarangKeluarModal = new bootstrap.Modal(document.getElementById('editBarangKeluarModal'));
                editBarangKeluarModal.show();
            });
        });
    });
</script>

<!-- Basic Tables end -->
<script src="<?php echo e(asset('dist/assets/static/js/components/dark.js')); ?>"></script>
<script src="<?php echo e(asset('dist/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js')); ?>"></script>
<script src="<?php echo e(asset('dist/assets/compiled/js/app.js')); ?>"></script>
<script src="<?php echo e(asset('dist/assets/extensions/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('dist/assets/extensions/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('dist/assets/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js')); ?>"></script>
<script src="<?php echo e(asset('dist/assets/static/js/pages/datatables.js')); ?>"></script>
<script>
    $(document).ready(function () {
        // Filter berdasarkan lokasi
        $('#filter-lokasi').on('change', function () {
            var selectedLocation = $(this).val().toLowerCase();
            $('#table1 tbody tr').filter(function () {
                // Jika lokasi terpilih cocok dengan sel lokasi (kolom ke-6), tampilkan baris
                $(this).toggle($(this).find('td:eq(5)').text().toLowerCase().indexOf(selectedLocation) > -1 || selectedLocation === "");
            });
        });

        // Fungsi Search/Pencarian
        $('#search').on('keyup', function () {
            var searchValue = $(this).val().toLowerCase();
            $('#table1 tbody tr').filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(searchValue) > -1);
            });
        });
    });
        
   
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\inventaris\resources\views/keluar/index.blade.php ENDPATH**/ ?>