<?php
require_once"_config/config.php";
require "_assets/libs/vendor/autoload.php";

if(!isset($_SESSION['user'])){
    echo "<script>window.location='".base_url('auth/login.php')."'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Aplikasi Rekam Medis</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url(); ?>/_assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/_assets/css/simple-sidebar.css" rel="stylesheet">
    <!-- load DataTables -->
    <link href="<?= base_url(); ?>/_assets/libs/DataTables/datatables.min.css" rel="stylesheet">
    <!-- load jquery online -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>

    <!-- load ckeditor -->
    <script src="<?= base_url(); ?>/_assets/libs/vendor/ckeditor/ckeditor/ckeditor.js"></script>
    <!-- <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script> -->

</head>
<body>
	<div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper" style="background-color:#ECE7EB;">
            <ul class="sidebar-nav">
                <li class="sidebar-brand" >
               <div style="padding-top:30px">
               <svg width="184" height="104" viewBox="0 0 184 104" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M98.5405 47C98.5405 31.4341 108.121 17 121.241 17C130.345 17 137.1 23.4761 141.27 32.663C145.44 23.4766 152.196 17 161.3 17C174.421 17 184 31.4366 184 47C184 80.3164 141.27 104 141.27 104C141.27 104 112.487 89.0121 102.168 64.427H127.659L131.711 56.6361L136.444 74.5538L147.527 59.1406H161.378V53.7031H145.068L138.556 62.7587L133.235 42.6139L124.719 58.9895H100.249C100.782 60.8502 101.428 62.6633 102.168 64.427L91 64.4267V58.9892L100.249 58.9895C99.1599 55.1857 98.5405 51.1831 98.5405 47Z" fill="#69253A"/>
<path d="M34.8947 52V41.6H24.1579V52H34.8947Z" fill="#69253A"/>
<path d="M34.8947 57.2V67.6H24.1579V57.2H34.8947Z" fill="#69253A"/>
<path d="M56.3682 52V41.6H45.6313V52H56.3682Z" fill="#69253A"/>
<path d="M56.3682 57.2V67.6H45.6313V57.2H56.3682Z" fill="#69253A"/>
<path d="M77.8421 52V41.6H67.1053V52H77.8421Z" fill="#69253A"/>
<path d="M77.8421 57.2V67.6H67.1053V57.2H77.8421Z" fill="#69253A"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M40.2632 0H61.7368C66.1843 0 69.7895 3.49219 69.7895 7.8V26H83.2105C87.658 26 91.2632 29.4921 91.2632 33.8V98.8H102V104H0V98.8H10.7368V33.8C10.7368 29.4921 14.342 26 18.7895 26H32.2105V7.8C32.2105 3.49219 35.8157 0 40.2632 0ZM16.1053 98.8H40.2632V83.2C40.2632 77.4563 45.0703 72.8 51 72.8C56.9297 72.8 61.7368 77.4563 61.7368 83.2V98.8H85.8947V33.8C85.8947 32.364 84.693 31.2 83.2105 31.2H69.3313C68.2259 34.2295 65.243 36.4 61.7368 36.4H40.2632C36.757 36.4 33.7741 34.2295 32.6687 31.2H18.7895C17.307 31.2 16.1053 32.364 16.1053 33.8V98.8ZM53.6842 10.4C53.6842 8.96407 52.4825 7.8 51 7.8C49.5175 7.8 48.3158 8.96407 48.3158 10.4V15.6H42.9474C41.4649 15.6 40.2632 16.764 40.2632 18.2C40.2632 19.636 41.4649 20.8 42.9474 20.8H48.3158V26C48.3158 27.436 49.5175 28.6 51 28.6C52.4825 28.6 53.6842 27.436 53.6842 26V20.8H59.0526C60.5351 20.8 61.7368 19.636 61.7368 18.2C61.7368 16.764 60.5351 15.6 59.0526 15.6H53.6842V10.4Z" fill="#69253A"/>
</svg>
               </div>

                    <!-- <a href=""><span style="color:#875C6E">Rekam Medis</span></a> -->
                </li>
                <li>
                    <a style="color:black; padding-top:90px" href="<?= base_url('dashboard'); ?>">Dashboard</a>
                </li>
                <li>
                    <a style="color:black;" href="<?= base_url('pasien/data.php') ?>">Data Pasien</a>
                </li>
                <li>
                    <a style="color:black;" href="<?= base_url('dokter/data.php') ?>">Data Dokter</a>
                </li>
                <li >
                    <a style="color:black;" href="<?= base_url('poliklinik/data.php') ?>">Data Poliklinik</a>
                </li>
                <li>
                    <a style="color:black;" href="<?= base_url('obat/data.php') ?>">Data Obat</a>
                </li>
                <li>
                    <a style="color:black;" href="<?= base_url('rekammedis/data.php') ?>">Rekam Medis</a>
                </li>
                <li >
                    <a href="<?= base_url('auth/logout.php') ?>"><span class="text-danger">Logout</span></a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                
            