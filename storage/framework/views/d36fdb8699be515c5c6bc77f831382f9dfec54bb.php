<!DOCTYPE html>
<html lang="en">
<head>        
    <!-- META SECTION -->
    <title><?php echo $__env->yieldContent('title'); ?> - St.Jame's Academy</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <link rel="icon" href="<?php echo e(url('users/img/st-james.jpg')); ?>" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" id="theme" href="<?php echo e(url('users/css/theme-white.css')); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('users/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('users/css/style.css')); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>

    <!-- tinymce -->
    <script src="<?php echo e(url('assets/tinymce/tinymce.min.js')); ?>"></script>
    <!-- EOF CSS INCLUDE -->                                    
</head>
