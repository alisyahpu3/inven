<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title','E-Sarinah'); ?></title>
    
    
    
    <link rel="shortcut icon" href="<?php echo e(asset('images/logo.png')); ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo e(asset('images/logo.png')); ?>" type="image/png">
    


  <link rel="stylesheet" href="<?php echo e(asset('dist/assets/compiled/css/app.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('dist/assets/compiled/css/app-dark.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('dist/assets/compiled/css/iconly.css')); ?>">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

  <style>
    /* Pastikan <th> dan <td> berada di tengah */
    th, td {
        text-align: center;
        vertical-align: middle; /* Agar teks berada di tengah secara vertikal */
    }
    
    /* Aturan untuk memastikan teks tidak tertimpa aturan lain */
    table th, table td {
        text-align: center !important;
    }
</style>
</head>

<body>
    <script src="<?php echo e(asset('dist/assets/static/js/initTheme.js')); ?>"></script>
    <div id="app">
        <!--sidebar-->
        <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--sidebar-->

        <div id="main">
            <!--header-->   
            <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--header-->
<!--content-->

<div class="page-content"> 
    <?php echo $__env->yieldContent('content'); ?>
</div>
<!--content-->
<!--footer-->
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--footer-->
</body>

</html><?php /**PATH C:\laragon\www\inventaris\resources\views/layouts/app.blade.php ENDPATH**/ ?>