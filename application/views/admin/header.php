<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    <link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/css/datepicker.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/datatable-bootstrap.css">
    <link href="<?=base_url();?>assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/facebox.css">
    <link rel="stylesheet" href="<?=base_url(); ?>assets/js/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="<?=base_url(); ?>assets/js/select2/select2.css" />
  </head>
  <body>
    <nav class="navbar navbar-default navbar-utama" role="navigation">
      <div class="container">
        
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url();?>Administrasi/dashboard">
          <img src="<?php echo base_url();?>assets/images/logo-flag.png" class="logo-navbar">
          <strong>Administrasi</strong>
          </a>
        </div>
        
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-left">
            <li class="active"><a href="<?php echo base_url();?>Administrasi/dashboard"><i class="fa fa-home"></i> Beranda</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i class="fa fa-th-list"></i> Data <i class="fa fa-caret-down"></i></a>
              <ul class="dropdown-menu tipe-kiri dropdown-menu-login2">
                <li><a href="<?php echo base_url(); ?>Administrasi/data_barang_view"><i class="fa fa-tags"></i> Data Barang</a></li>
                <li><a href="<?php echo base_url(); ?>Administrasi/data_penjualan_view"><i class="fa fa-tags"></i> Data Penjualan</a></li>
                <li><a href="<?php echo base_url(); ?>Administrasi/data_proses_view"><i class="fa fa-tags"></i> Data Proses</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i class="fa fa-th-list"></i> Data Variable <i class="fa fa-caret-down"></i></a>
              <ul class="dropdown-menu tipe-kiri dropdown-menu-login2">
                <li><a href="<?php echo base_url(); ?>Administrasi/data_recency"><i class="fa fa-tags"></i> Recency</a></li>
                <li><a href="<?php echo base_url(); ?>Administrasi/data_frequency"><i class="fa fa-tags"></i> Frequency</a></li>
                <li><a href="<?php echo base_url(); ?>Administrasi/data_monetary"><i class="fa fa-tags"></i> Monetary</a></li>
              </ul>
            </li>
            </ul>
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="<?php echo base_url(); ?>Administrasi/logout"><i class="fa fa-sign-out"></i><?php echo $nama ?> (Log Out)</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="tengah">
          <div class="head-depan tengah">
            <div class="row">
              <div class="col-md-1">
                <img class="img-thumbnail img-responsive margin-b10" src="<?php echo base_url();?>assets/images/logo-flag.png" width="100" height="100" alt="Logo SMA Karangan" />
              </div>
              <div class="col-md-11">
                <?php foreach ($titlesistem as $t): ?>
                  <h1 class="judul-head"><?php echo $t['title']?></h1>
                  <p><i class="fa fa-cog fa-fw"></i> <?php echo $t['ket']?></p>             
                <?php endforeach ?>
              </div>
            </div>
            <hr class="hr1 margin-b-10" />
          </div>
        </div>
        
      </div>
    </div>
