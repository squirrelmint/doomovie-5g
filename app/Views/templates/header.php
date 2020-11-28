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


<style>
  .fa {
    font-size: 23px;
    width: 30px;
    text-align: center;
    text-decoration: none;
    margin: 5px 2px;
    border-radius: 50%;
    padding-top: 10px;
  }

  .sa:hover {
    opacity: 0.7;
  }

  .fa-facebook {
    background: white;
    color: black;
    width: 40px;
    height: 40px;
  }

  .fa-twitter {
    background: white;
    color: black;
    width: 40px;
    height: 40px;
  }

  .fab,
  .far {
    line-height: 30px;
    font-size: 30px;
    color: black
  }

  .fa-stack-2x {
    line-height: 30px;
    font-size: 2em;
    color: white;
  }

  .slider-text {
    font-size: 20px;
    color: #ffff;
    position: absolute;
    transform: translate(22%, 50%);
    top: -400px;
    width: 40%;

  }

  .slider-button {
    width: 90px;
    height: 40px;
    background-color: #fa4238;
    color: white;
    position: absolute;
    transform: translate(50%, 50%);
    left: 280px;
    top: -135px;
    border: none;
    font-size: 24px;
  }

  .slider-button-play {
    width: 50px;
    height: 40px;
    background-color: #cb3526;
    color: white;
    position: absolute;
    transform: translate(50%, 50%);
    left: 250px;
    top: -135px;
    border: none;
  }


  #swp1.swiper-container {
    width: 100%;
    height: 100%;
  }

  #swp1.swiper-wrapper {
    padding-left: initial;
    margin: 0;
  }

  #swp1.swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #f14455;
    width: 100%;
    height: 200px;
    border-right: 1px solid black;
    /* Center slide text vertically */
    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: space-evenly;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
  }

  /*     #swp1.swiper-slide:nth-child(2n) {
        width: 60%;
    }
    #swp1.swiper-slide:nth-child(3n) {
        width: 40%;
    } */

  .fa-style {
    width: 100%;
    padding-left: 57px;
  }

  @media only screen and (max-width: 600px) {
    .fa-style {
      display: none;
    }

    .logo-media {
      position: absolute;
      transform: translatex(0%);
      left: 95px;
      width: 55%;
    }

    #swp1.swiper-slide {
      display: none;
    }

    #HomeSlide .swiper-slide img {
      width: auto;
      min-width: 100%;
      height: 100%;
      transform: translate(-5%, 15%);
    }

    .slider-text {
      font-size: 10px;
      color: #ffff;
      position: absolute;
      transform: translate(35%, 335%);
      top: -400px;
      width: 70%;
    }

    .slider-text-top {
      font-size: 10px;
      color: #ffff;
      position: absolute;
      transform: translate(35%, 55%);
      top: -175px;
      width: 70%;
    }

    .slider-button-play {
      width: 50px;
      height: 40px;
      left: 65px;
      top: -65px;

    }

    .slider-button {
      width: 90px;
      height: 40px;
      background-color: #fa4238;
      color: white;
      position: absolute;
      transform: translate(50%, 50%);
      left: 95px;
      top: -65px;
      border: none;
      font-size: 24px;
    }



    .bar .bar1,
    .bar .bar2,
    .bar .bar3 {
      width: 35px;
      height: 5px;
      background-color: #333;
      margin: 6px 0;
      transition: 0.4s;
    }

    .change .bar1 {
      -webkit-transform: rotate(-45deg) translate(-9px, 6px);
      transform: rotate(-45deg) translate(-9px, 6px);
    }

    .change .bar2 {
      opacity: 0;
    }

    .change .bar3 {
      -webkit-transform: rotate(45deg) translate(-8px, -8px);
      transform: rotate(45deg) translate(-8px, -8px);
    }

    .bar .mobile-container {
      max-width: 480px;
      margin: auto;
      background-color: #555;
      height: 500px;
      color: white;
      border-radius: 10px;
    }

    .bar .topnav {
      width: max-content;
      height: max-content;
      background-color: #333;
      position: absolute;
    }

    .bar .topnav #myLinks {
      display: none;
    }

    .bar .topnav a {
      color: white;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
      display: block;
    }

    .bar .topnav a.icon {
      display: block;
      position: absolute;
    }

    .bar .topnav a:hover {
      background-color: #ddd;
      color: black;
    }
    .bar .disnav {
      display: block;
      width: max-content;
      height: max-content;
      background-color: #333;
      position: absolute;
    }

    .disnav-pc {
      display: none;
    }

    .bar-style {
      position: absolute;
    }
  }

  .disnav {
    display: NONE;
  }
</style>

<body>
  <div id="overlay"></div>

  <header>
    <!-- Navigation -->
    <nav id="movie-menu" class="navbar navbar-expand-lg navbar-light static-top">
      <div class="bar bar-style" onclick="myFunction(this)">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
        <div class="topnav">
          <div id="myLinks">
            <ul class="navbar-nav m-auto disnav">

              <li class="nav-item <?= $chk_act['home'] ?>">
                <a class="nav-link" href="<?php echo base_url() ?>">หน้าหลัก <span class="sr-only">(current)</span></a>
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
              <li class="nav-item">
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
              <a class="nav-link" href="<?= base_url('/category/28/Netflix-Movie') ?>">TopIMDB</a>
            </li>
            <li class="nav-item <?= $chk_act['category'] ?>">
              <a class="nav-link" href="<?php echo base_url('category') ?>">หมวดหมู่/ประเภทหนัง</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('contract') ?>">ติดต่อ/โฆษนา</a>
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
              <div class="fa-style" style="">
                <a href="#" class="fa fa-twitter sa"></a>
                <a href="#" class="fa fa-facebook sa"></a>

                <span a href="#" class='fa-stack fa-lg sa'>
                  <i a href="#" class='fas fa-circle fa-stack-2x'></i>
                  <i a href="#" class='fab fa-line fa-stack-1x fa-inverse'></i>
                </span>

              </div>
              <input id="movie-search" class="movie-search ml-auto" placeholder="ค้นหา หนังออนไลน์" value="<?php echo $value ?>">

              <div class="input-group-btn">
                <div class="btn-group" role="group">
                  <button type="submit" class="movie-search-button"><i class="fas fa-search"></i></button>
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

    <!-- Slider main container -->
    <div id="HomeSlide" class="swiper-container">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->

        <div class="swiper-slide">
          <div class="slider-area">
            <div class="slider-text-top">Iron man</div>
            <div class="slider-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis quasi fuga pariatur in doloribus neque voluptates laboriosam, magnam vel dolorem deleniti voluptatum libero deserunt nam, sunt aperiam molestiae illum necessitatibus.
            </div>
            <button class="slider-button">รับชม</button>
            <button class="slider-button-play"><i class="fas fa-caret-right" style="font-size: 34px;"></i></button>
            <!-- <h2 class="title-slider">Iron man</h2> -->

          </div>
          <img src="<?= $document_root ?>img_slide/1.jpg">
        </div>

        <!-- <div class="swiper-slide">
            <div class="slider-area">
              <h2 class="title-slider">ALIEN</h2>
            </div>
            <img src="<?= $document_root ?>img_slide/2.jpg">
          </div>

          <div class="swiper-slide">
            <div class="slider-area">
              <h2 class="title-slider">Joker</h2>
            </div>
            <img src="<?= $document_root ?>img_slide/3.jpg">
          </div> -->

      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>

      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>

      <!-- If we need scrollbar -->
      <div class="swiper-scrollbar"></div>
    </div>


    <!-- Swiper -->
    <div class="swiper-container" id="swp1">
      <ul class="swiper-wrapper" id="swp1">
        <li class="swiper-slide" id="swp1">
          <div>SCI-FI</div>
          <div>All MOVIES</div>
          <div>ACTION ADVENTURE</div>
        </li>
        <li class="swiper-slide" id="swp1">Slide 2</li>
        <li class="swiper-slide" id="swp1">Slide 3</li>
        <li class="swiper-slide" id="swp1">Slide 4</li>

      </ul>
      <!-- Add Pagination -->
      <div class="swiper-pagination" id="swp1"></div>

    </div>

  </header>


  <script>
    var swiper = new Swiper('.swiper-container', {
      pagination: '.swiper-pagination',
      slidesPerView: 'auto',
      paginationClickable: true,
      spaceBetween: 0
    });


    function myFunction(x) {
      x.classList.toggle("change");
      var x = document.getElementById("myLinks");
      if (x.style.display === "block") {
        x.style.display = "none";
      } else {
        x.style.display = "block";
      }
    }
  </script>