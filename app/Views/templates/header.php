<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php echo $setting['setting_description']; ?>">
  <meta name="keywords" content="<?php echo $setting['setting_keyword']; ?>">

  <!-- TAG og facebook -->

  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php echo base_url(); ?>" />
  <meta property="og:title" content="<?php echo $setting['setting_title']; ?>" />
  <meta property="og:description" content="<?php echo  $setting['setting_description']; ?>" />
  <meta property="og:image" content="<?php echo $setting['setting_img']; ?>" />


  <!-- TAG og Twitter -->
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:title" content="<?php echo $setting['setting_title']; ?>" />
  <meta name="twitter:description" content="<?php echo  $setting['setting_description']; ?>" />
  <meta name="twitter:image" content="<?php echo $setting['setting_img']; ?>" />
  <meta name="twitter:site" content="@ondemandacademy" />

  <title><?php echo $setting['setting_title']; ?></title>

  <link rel="icon" type="image/png" href="<?= $path_setting . $setting['setting_icon'] ?>" />

  <!-- Bootstrap core CSS -->
  <link href="<?= $document_root ?>assets/vendor/bootstrap/css/bootstrap.min.css?v=1" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?= $document_root ?>assets/vendor/fontawesome-free/css/all.min.css?v=1" rel="stylesheet">
  <link href="<?= $document_root ?>assets/vendor/simple-line-icons/css/simple-line-icons.css?v=1" rel="stylesheet" type="text/css">

  <!-- Swiper -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,400;0,700;1,100;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?= $document_root ?>assets/css/landing-page.css?v=2" rel="stylesheet">

  <?php

  if (("https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) != ('https://' . $_SERVER['HTTP_HOST'] . '/')) {

  ?>

    <link rel="canonical" href="<?= 'https://' . $_SERVER['HTTP_HOST'] ?>" />

  <?php } ?>

  <!-- Bootstrap core JavaScript -->
  <script src="<?= $document_root ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= $document_root ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <?php

  if (!empty($setting['setting_header'])) {
    echo base64_decode($setting['setting_header']);
  }

  ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>




<body>
  <div id="overlay"></div>

  <header id="HEAD">
    <!-- Navigation -->
    <nav id="movie-menu" class="navbar navbar-expand-lg navbar-light static-top">
      <div class="bar bar-style" onclick="myFunction(this)">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
        <div class="topnav">
          <div id="myLinks">
            <ul class="navbar-nav m-auto disnav">
              <li class="share-icon">
                <a href="#" class="fa fa-twitter sa"></a>
                <a href="#" class="fa fa-facebook sa"></a>
                <span a href="#" class='fa-stack fa-lg sa' style="transform: translateY(10px);">
                  <i a href="#" class='fas fa-circle fa-stack-2x'></i>
                  <i a href="#" class='fab fa-line fa-stack-1x fa-inverse'></i>
                </span>
              </li>
              <li class="nav-item <?= $chk_act['home'] ?>">
                <a class="nav-link" href="<?php echo base_url() ?>">หน้าหลัก </a>
              </li>
              <!-- <li class="nav-item <?= $chk_act['poppular'] ?>">
              <a class="nav-link" href="<?php echo base_url('popular') ?>">TopIMDB</a>
            </li> -->
              <li class="nav-item <?= $chk_act['netflix'] ?>">
                <a class="nav-link" href="<?= base_url('/category/28/Netflix-Movie') ?>">TopIMDB</a>
              </li>
              <li class="nav-item <?= $chk_act['category'] ?>">
                <a class="nav-link" href="<?php echo base_url('category') ?>">หมวดหมู่/ประเภทหนัง</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="<?php echo base_url('contract') ?>">ติดต่อ/โฆษนา</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="container logo-media">

        <img class="logo">


        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <ul class="navbar-nav m-auto disnav-pc">

            <li class="nav-item <?= $chk_act['home'] ?>">
              <a class="nav-link" href="<?php echo base_url() ?>">หน้าหลัก <span class="sr-only">(current)</span></a>
            </li>
            <!-- <li class="nav-item <?= $chk_act['poppular'] ?>">
              <a class="nav-link" href="<?php echo base_url('popular') ?>">TopIMDB</a>
            </li> -->
            <li class="nav-item <?= $chk_act['netflix'] ?>">
              <a class="nav-link" href="<?= base_url('/topimdb') ?>">TopIMDB</a>
            </li>
            <li class="nav-item <?= $chk_act['category'] ?>">
              <a class="nav-link" href="<?php echo base_url('category') ?>">หมวดหมู่/ประเภทหนัง</a>
            </li>
            <li class="nav-item " >
              <a class="nav-link" href="<?php echo base_url('contract') ?>">ติดต่อ/โฆษนา </a>
            </li>
          </ul>

          <form id="movie-formsearch">
            <div class="input-group" id="adv-search">
              <?php
              if (!empty($keyword)) {
                $value = $keyword;
              } else {
                $value = '';
              }
              ?>
              <div class="fa-style">
                <a href="#" class="fa fa-twitter sa"></a>
                <a href="#" class="fa fa-facebook sa"></a>

                <span a href="#" class='fa-stack fa-lg sa'>
                  <i a href="#" class='fas fa-circle fa-stack-2x'></i>
                  <i a href="#" class='fab fa-line fa-stack-1x fa-inverse'></i>
                </span>

              </div>
              <input id="movie-search" class="search" placeholder="ค้นหา หนังออนไลน์" value="<?php echo $value ?>">

              <div class="input-group-btn">
                <div class="btn-group" role="group">
                  <button type="submit" class="search-icon"
                  ><i class="fas fa-search"></i></button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </nav>


    <script type="text/javascript">
      $(document).ready(function() {
        $('#movie-formsearch').submit(function(e) {
          goSearch();
          return false; //<---- Add this line
        });
      });

      function goSearch() {
        var search = $.trim($("#movie-search").val())

        if (search) {
          window.location.href = "/search/" + $("#movie-search").val();
        } else {
          window.location.href = "<?= base_url() ?>";
        }
      }


    </script>

   
  </header>

