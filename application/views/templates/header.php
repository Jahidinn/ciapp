<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- mycss -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/style.css">

    <title><?= $judul; ?></title>
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  		<div class="container">
  		<a class="navbar-brand" href="#">CI APP</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
  			<span class="navbar-toggler-icon"></span>
  		</button>
  		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
  			<div class="navbar-nav">
  				<a class="nav-item nav-link <?php if ($judul=='Home') { echo 'active'; }; ?>" href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a>
  				<a class="nav-item nav-link <?php if ($judul=='Data mahasiswa') { echo 'active'; }; ?>" href="<?= base_url(); ?>mahasiswa">Mahasiswa</a>
  				<a class="nav-item nav-link <?php if ($judul=='About') { echo 'active'; }; ?>" href="<?= base_url(); ?>about">About</a>
<!--   				<a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> -->
  			</div>
  		</div>
  		</div>
  	</nav>


<?php

?>