<?php $__env->startSection('title','E-Sarinah-Dashboard'); ?>
<?php $__env->startSection('header','Data Barang'); ?>
<?php $__env->startSection('content'); ?>

 <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon purple mb-2">
                                        <i class="iconly-bi bi-box-fill"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Barang Masuk</h6>
                                    <h6 class="font-extrabold mb-0">112.000</h6>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card"> 
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon blue mb-2">
                                        <i class="iconly-bi bi-boxes"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Barang Keluar</h6>
                                    <h6 class="font-extrabold mb-0">183.000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon green mb-2">
                                        <i class="iconly-boldBookmark"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Kategori</h6>
                                    <h6 class="font-extrabold mb-0">80.000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon red mb-2">
                                        <i class="iconly-bi bi-geo-fill"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Lokasi</h6>
                                    <h6 class="font-extrabold mb-0">112</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Barang Masuk</h4>
                        </div>
                        <div class="card-body">
                            <div id="chart-profile-visit"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3">
                <div class="card">
                        <div class="card-header">
                            <h4>Kondisi</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-7">
                                    <div class="d-flex align-items-center">
                                        <svg class="bi text-primary" width="32" height="32" fill="blue"
                                            style="width:10px">
                                            <use
                                                xlink:href="<?php echo e(asset('dist/assets/static/images/bootstrap-icons.svg#circle-fill')); ?>" />
                                        </svg>
                                        <h5 class="mb-0 ms-3">Baru</h5>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <h5 class="mb-0 text-end">862</h5>
                                </div>
                                <div class="col-12">
                                    <div id="chart-europe"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-7">
                                    <div class="d-flex align-items-center">
                                        <svg class="bi text-success" width="32" height="32" fill="blue"style="width:10px">
                                            <use
                                                xlink:href="<?php echo e(asset('dist/assets/static/images/bootstrap-icons.svg#circle-fill')); ?>" />
                                        </svg>
                                        <h5 class="mb-0 ms-3">Diperbaiki</h5>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <h5 class="mb-0 text-end">375</h5>
                                </div>
                                <div class="col-12">
                                    <div id="chart-america"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-7">
                                    <div class="d-flex align-items-center">
                                        <svg class="bi text-danger" width="32" height="32" fill="blue"
                                            style="width:10px">
                                            <use
                                                xlink:href="<?php echo e(asset('dist/assets/static/images/bootstrap-icons.svg#circle-fill')); ?>" />
                                        </svg>
                                        <h5 class="mb-0 ms-3">Rusak</h5>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <h5 class="mb-0 text-end">1025</h5>
                                </div>
                                <div class="col-12">
                                    <div id="chart-indonesia"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 <!-- Basic Tables start -->
 <section class="section">
    <div class="card">
        <div class="card-header">
            <h4>Detail Stok Barang</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive" style="overflow-x: auto; white-space: nowrap;">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Barang</th>
                            <th>Jumlah Masuk</th>
                            <th>Jumlah Keluar</th>
                            <th>Stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Elektronik</td>
                            <td>Laptop</td>
                            <td>15</td> <!-- Total barang masuk -->
                            <td>8</td> <!-- Total barang keluar -->
                            <td>7</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Furniture</td>
                            <td>Meja</td>
                            <td>25</td>
                            <td>13</td>
                            <td>12</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Elektronik</td>
                            <td>Printer</td>
                            <td>10</td>
                            <td>8</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Peralatan</td>
                            <td>Palu</td>
                            <td>17</td>
                            <td>9</td>
                            <td>8</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Alat Tulis</td>
                            <td>Pena</td>
                            <td>65</td>
                            <td>47</td>
                            <td>18</td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
        </div>
        
    </div>

</section>
<!-- Basic Tables end -->

<script src="<?php echo e(asset('dist/assets/static/js/components/dark.js')); ?>"></script>
<script src="<?php echo e(asset('dist/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js')); ?>"></script>
<script src="<?php echo e(asset('dist/assets/compiled/js/app.js')); ?>"></script>
<script src="<?php echo e(asset('dist/assets/extensions/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('dist/assets/extensions/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('dist/assets/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js')); ?>"></script>
<script src="<?php echo e(asset('dist/assets/static/js/pages/datatables.js')); ?>"></script>  
<!-- Need: Apexcharts -->
<script src="<?php echo e(asset ('dist/assets/extensions/apexcharts/apexcharts.min.js')); ?>"></script>
<script src="<?php echo e(asset ('dist/assets/static/js/pages/dashboard.js')); ?>"></script>
 </section>
    </section>
    <?php $__env->stopSection(); ?>

    
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\inventaris\resources\views/dashboard.blade.php ENDPATH**/ ?>