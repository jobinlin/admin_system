<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/AdminLTE.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/_all-skins.min.css')); ?>">
<?php $__env->startSection('linkcss'); ?>
<?php echo $__env->yieldSection(); ?>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php echo $__env->make('admin.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('admin.layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->yieldSection(); ?>
<!-- /.content-wrapper -->

<?php echo $__env->make('admin.layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('admin.layouts.control_sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo e(asset('assets/js/jquery-2.2.3.min.js')); ?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('assets/js/app.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/fastclick/fastclick.js')); ?>"></script>

<?php $__env->startSection('srcscript'); ?>
<?php echo $__env->yieldSection(); ?>

</body>
</html>