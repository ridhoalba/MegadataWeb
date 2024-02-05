<?php 

require_once"_config/config.php";
require"libs/vendor/autoload.php";

if(!isset($_SESSION['username'])){
    echo "<script>window.location='".base_url('auth/login.php')."';</script>";
}   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>MegadataWeb</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url('css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?= base_url('css/simple-sidebar.css');?>" rel="stylesheet">
    <link rel="icon" href="<?=base_url('assets/img/megadata.png')?>" type="image/x-icon">
    <link href="<?= base_url('libs/datatables.min.css');?>" rel="stylesheet">
</head>
<body>  
    <script src="<?= base_url('js/jquery.js'); ?>" ></script>
    <script src="<?= base_url('js/bootstrap.min.js'); ?>" ></script>
    <script src="<?= base_url('libs/datatables.min.js'); ?>" ></script>

    <!-- sidebar -->
    <div id="wrapper">
    <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href=""><span class="text-primary" ><b>MegadataWeb</b></span></a>
                </li>
                <li>
                    <a href="<?= base_url('dashboard') ?>">Dashboard</a>
                </li>
                <li>
                    <a href="<?= base_url('barang/data.php') ?>">Data Barang</a>
                </li>
                <li>
                    <a href="<?= base_url('teknisi/data.php'); ?>">Data Teknisi</a>
                </li>
                <li>
                    <a href="<?= base_url('client/data.php'); ?>">Data Client</a>
                </li>
                <li>
                    <a href="<?= base_url('instalasi/data.php'); ?>">Data Instalasi</a>
                </li>
                <li>
                    <a href="<?= base_url('rfo/data.php'); ?>">Data Rfo</a>
                </li>
                <li>
                    <a href="<?= base_url('auth/logout.php') ?>"><span class="text-danger" >Logout</span></a>
                </li >
            </ul>
        </div>
        <div id="page-content-wrapper">
            <div class="container-fluid">


