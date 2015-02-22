<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <script src="<?php  echo base_url(); ?>js/jquery/jquery.min.js"></script>
    <script src="<?php  echo base_url(); ?>js/jquery/jquery.widget.min.js"></script>
    <script src="<?php  echo base_url(); ?>js/prettify/prettify.js"></script>

    <script src="<?php  echo base_url(); ?>js/metro/metro-loader.js"></script>
    <script src="<?php  echo base_url(); ?>js/metro/metro-hint.js"></script>
    <script src="<?php  echo base_url(); ?>js/metro/metro-input-control.js"></script>
    <script src="<?php  echo base_url(); ?>js/metro/metro-button-set.js"></script>
    <script src="<?php  echo base_url(); ?>js/docs.js"></script>
    <script src="<?php  echo base_url(); ?>js/jquery/jquery.dataTables.js"></script>
    <script src="<?php  echo base_url(); ?>js/jquery/jquery.mousewheel.js"></script>
    <script src="<?php  echo base_url(); ?>js/jquery/jquery.widget.min.js"></script>
    <script src="<?php  echo base_url(); ?>js/metro.min.js"></script>
    <script src="<?php  echo base_url(); ?>js/load-metro.js"></script>
    <script src="<?php  echo base_url(); ?>js/metro/metro-dropdown.js"></script> 
    <link rel="stylesheet" href="<?php  echo base_url(); ?>css/metro-bootstrap.css">
    <link rel="stylesheet" href="<?php  echo base_url(); ?>css/docs.css">
    <link href="<?php  echo base_url(); ?>js/prettify/prettify.css" rel="stylesheet">
    <link href="<?php  echo base_url(); ?>css/metro-bootstrap-responsive.css" rel="stylesheet">

</head>
<body class="metro">
    <header  class="bg-dark" style="height: 65px;">
    <div class="navbar">
        <nav class="navigation-bar dark" >
            <nav class="navigation-bar-content container" >
                <img src="<?php echo base_url()?>assets/picture/logo.png"  style="height: inherit;width: 60px; margin-left:9%" class="element">    
            <span class="element-divider" style="height:100%"></span>
            <a class="element1 pull-menu" href="#"></a>
                <ul class="element-menu" >
                <li>
                <div class="element" style="margin-top: 10px;">
                    <a class="dropdown-toggle" href="#" style="font-size: x-large;">Barang</a>
                    <ul class="dropdown-menu dark" data-role="dropdown">
                        <li><a href="<?php echo base_url()?>admin_page/listBarang";>List Barang</a></li>
                        <li><a href="<?php echo base_url()?>admin_page/editBarang">Edit Barang</a></li>
                        <li><a href="<?php echo base_url()?>admin_page/tambahbarang">Tambah Barang</a></li>
                    </ul>
                </div>
                </li>
                <li>
                <div class="element" style="margin-top: 10px;">
                    <a   href="<?php echo base_url()?>admin_page/listTransaksi" style="font-size: x-large; color:white">Daftar Pemesanan</a>
                </div>
                </li>
            </ul>
            </nav>
        </nav>
    </div>
    </header>