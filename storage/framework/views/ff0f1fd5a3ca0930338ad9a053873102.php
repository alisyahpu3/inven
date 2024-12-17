

<?php $__env->startSection('title', 'E-Sarinah-Dashboard'); ?>
<?php $__env->startSection('header', 'Input Lokasi'); ?>
<?php $__env->startSection('content'); ?>
<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
  <div class="row match-height">
    <div class="col-12">
      <div class="card">
        <div class="card-content">
          <div class="card-body">
            <form class="form" data-parsley-validate action="#" method="POST">
              <?php echo csrf_field(); ?>
              <!-- Form Row 1 -->
              <div class="row">
                <!-- Kode Lokasi -->
                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label for="kode-lokasi-column" class="form-label">Kode Lokasi</label>
                    <input type="text" id="kode-lokasi-column" class="form-control" placeholder="Kode Lokasi" name="kode_lokasi" required />
                  </div>
                </div>
                <!-- Nama Lokasi -->
                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label for="nama-lokasi-column" class="form-label">Nama Lokasi</label>
                    <input type="text" id="nama-lokasi-column" class="form-control" placeholder="Nama Lokasi" name="nama_lokasi" required />
                  </div>
                </div>
              </div>

              <!-- Submit & Reset Buttons -->
              <div class="row">
                <div class="col-12 d-flex justify-content-end">
                  <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                  <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="<?php echo e(asset('dist/assets/static/js/components/dark.js')); ?>"></script>
<script src="<?php echo e(asset('dist/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js')); ?>"></script>
<script src="<?php echo e(asset('dist/assets/compiled/js/app.js')); ?>"></script>
<script src="<?php echo e(asset('dist/assets/extensions/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('dist/assets/extensions/parsleyjs/parsley.min.js')); ?>"></script>
<script src="<?php echo e(asset('dist/assets/static/js/pages/parsley.js')); ?>"></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\inventaris\resources\views/kategori/create.blade.php ENDPATH**/ ?>