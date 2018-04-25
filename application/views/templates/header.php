<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?><!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Web Framework</title>
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
        <!-- Style tambahan
        Note: Jika menginginkan style CSS tambahan, gunakan file custom.css sehingga file CSS asli milik Bootstrap tetap orisinil. Tujuannya, agar nantinya jika ada update baru dari Bootstrap dan ingin kita implementasikan, maka custom style kita tidak tertimpa.
        -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/theme.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/custom.css">
    </head>
    <body>
        
        <div class="navbar navbar-dark bg-uno box-shadowf">
            <h5 class="my-0 mr-md-auto font-weight-normal text-light">Web Framework</h5>
            <nav class="my-2 my-md-0 mr-md-3">
                <a class="p-2 text-light" href="<?php echo site_url() ?>home">Home</a>
                <a class="p-2 text-light" href="<?php echo site_url() ?>about">About</a>
                <a class="p-2 text-light" href="<?php echo site_url() ?>blog">Blog</a>
            </nav>
            <a class="btn btn-primary" href="#">Login</a>
        </div>
        <!-- akhir Header -->