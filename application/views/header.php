<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tea Seance</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/open-iconic-bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css')?>">
    
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.theme.default.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/aos.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/ionicons.min.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/flaticon.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/icomoon.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">


  
  </head>
  
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="<?php echo site_url('/load/load_controller/home') ?>">Tea Sence</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">

            <li class="nav-item active"><a href="<?php echo site_url('/load/load_controller/home') ?>" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="<?php echo site_url('/load/load_controller/tours') ?>" class="nav-link">Tours</a></li>

            <li class="nav-item"><a href="<?php echo site_url('/load/load_controller/hotels') ?>" class="nav-link">Hotels</a></li>

            <li class="nav-item"><a href="<?php echo site_url('/load/load_controller/about') ?>" class="nav-link">About</a></li>

            <li class="nav-item"><a href="<?php echo site_url('/load/load_controller/contact') ?>" class="nav-link">Contact</a></li>

            <li class="nav-item"><a href="<?php echo site_url('/form/form_controller/index') ?>" class="nav-link">Login</a></li>

            <li class="nav-item"><a href="<?php echo site_url('/form/form_controller/logout') ?>" class="nav-link">Logout</a></li>

             <li class="nav-item"> 
              <li class="nav-item"></li>
              <li></li>
            </li>
            
            

          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url(<?php echo base_url('assets/images/bg_4.jpg');?>)">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <h1 class="mb-3">Experience The Best Trip ever</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url(<?php echo base_url('assets/images/bg_1.jpg');?>);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <h1 class="mb-3">Making the most out of your holiday</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url(<?php echo base_url('assets/images/bg_3.jpg');?>);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <h1 class="mb-3">Travel Operator Just For You</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END slider -->

