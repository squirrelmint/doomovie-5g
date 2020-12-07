<body>


  <!-- Slider main container -->
  <div id="HomeSlide" class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->

      <?php
      foreach ($list_popular as $val) {

        if (strtolower($val['movie_sound']) == 'th' || strtolower($val['movie_sound']) == 'thai') {
          $mo_sound = 'พากษ์ไทย';
        } else if (strtolower($val['movie_sound']) == 'eng') {
          $mo_sound = 'พากษ์อังกฤษ';
        } else {
          $mo_sound = '';
        }

        if (!($val['movie_view'])) {
          $view = 0;
        } else if (strlen($val['movie_view']) >= 5) {
          $view =  substr($val['movie_view'], 0, -3) . 'k';
        } else {
          $view = $val['movie_view'];
        }


        $url_name = urldecode(str_replace([" ", "'"], ["-", ""], $val['movie_thname']));
      ?>



        <div class="swiper-slide">
          <div class="slider-area">
            <div class="slider-text-top"><?= $val['movie_thname'] ?></div>

            <div class="slider-text">
              <div class=""> <i class="fas fa-calendar-alt"></i> <?= $val['movie_year'] ?>
                <i class="fas fa-eye"></i> <?= $view ?>
                <i class="fas fa-star"></i> <?= $val['movie_ratescore'] ?>/10
                <i class="fab fa-imdb" style="color:#e3b629"></i>
              </div>
              <?= $val['movie_des'] ?>

            </div>


            <a onclick="goView('<?= $val['movie_id'] ?>', '<?= $url_name ?>', '<?= $val['movie_type'] ?>')" alt="<?= $val['movie_thname'] ?>)" tabindex="-1" title="<?= $val['movie_thname'] ?>">

              <button class="slider-button">รับชม</button>
              <button class="slider-button-play"><i class="fas fa-caret-right"></i></button>
            </a>
            <!-- <h2 class="title-slider">Iron man</h2> -->

            <?php if ($val['movie_quality']) {
            ?>
              <div class="fourk-right d-flex">
                <button><?= $val['movie_quality'] ?></button>
              </div>
            <?php
            }
            ?>


          </div>
          <?php if (substr($val['slide_img'], 0, 4) == 'http') {
            $movie_picture = $val['slide_img'];
          } else {
            $movie_picture = $path_slide . $val['slide_img'];
          }
          ?>


          <img src="<?= $movie_picture ?>">


        </div>


      <?php
      }
      ?>




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
    <div class="swiper-wrapper">
      <?php foreach ($list_category as $val) {
        $catename = str_replace(' ', '-', $val['category_name']);
      ?>
        <div class="swiper-slide">
          <div class="movie-box">
            <a href="<?php echo base_url() . '/category/' . $val['category_id'] . '/' . $catename ?>" title="<?= $val['category_name'] ?>">
              <img src="<?= $document_root . 'img_cate/' . $val['category_id'] . '.jpg' ?>" alt="<?= $val['category_name'] ?>" title="<?= $val['category_name'] ?>">

              <span class="movie-cate-name"><?= $val['category_name'] ?></span>
            </a>
          </div>

        </div>

      <?php
      } ?>

    </div>




    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

  </div>

  <section id="movie-banners" class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-12 ">
        <?php
        if (!empty($ads['pos1'])) {
          foreach ($ads['pos1'] as $val) {

            if (substr($val['ads_picture'], 0, 4) == 'http') {
              $ads_picture = $val['ads_picture'];
            } else {
              $ads_picture = $path_ads . $val['ads_picture'];
            }
        ?>
            <a onclick="onClickAds(<?= $val['ads_id'] ?>, <?= $branch ?>)" href="<?= $val['ads_url'] ?>" alt="<?= $val['ads_name'] ?>" title="<?= $val['ads_name'] ?>">
              <img class="banners" src="<?= $ads_picture ?>" alt="<?= $val['ads_name'] ?>" title="<?= $val['ads_name'] ?>">
            </a>
        <?php
          }
        }
        ?>
      </div>
    </div>
  </div>
</section>

  <section class="movie-content text-center">
    <div id="Home" class="container ">
      <div class="row movie-content">
        <div class="col-md-12 col-lg-12 ">
          <h1>DOOMOVIE-5G</h1>
          <h2>หนังใหม่ ดูหนังออนไลน์ ครบเรื่องทุกรสที่ DOOMOVIE-5G</h2>
        </div>
      </div>
    </div>
  </section>

  <!-- Icons Grid -->
  <section id="Home" class="text-center">
    <div id="Home" class="container">
      <div class="border-size">
        <div class="border-size-font">หนังใหม่</div>
        
        <div class="border-size-font-all"><i class="fas fa-grip-horizontal"></i> ดูทั้งหมด</div>
      </div>
      <div class="content-size">
        <div class="">
          <ul id="list-movie" class="list-movie">
            <?php

            foreach ($list['list'] as  $val) {

              if (strtolower($val['movie_sound']) == 'th' || strtolower($val['movie_sound']) == 'thai') {
                $mo_sound = 'พากษ์ไทย';
              } else if (strtolower($val['movie_sound']) == 'eng') {
                $mo_sound = 'พากษ์อังกฤษ';
              } else {
                $mo_sound = '';
              }

              if (!($val['movie_view'])) {
                $view = 0;
              } else if (strlen($val['movie_view']) >= 5) {
                $view =  substr($val['movie_view'], 0, -3) . 'k';
              } else {
                $view = $val['movie_view'];
              }
              if (!empty($val['movie_ratescore']) && $val['movie_ratescore'] != 0) {
                if (strpos($val['movie_ratescore'], '.')) {
                  $score = substr($val['movie_ratescore'], 0, 3);
                } else {
                  $score = substr($val['movie_ratescore'], 0);
                }
              }

              $url_name = urldecode(str_replace([" ", "'"], ["-", ""], $val['movie_thname']));


            ?>
              <li>
                <div class="movie-box">
                  <a onclick="goView('<?= $val['movie_id'] ?>', '<?= $url_name ?>', '<?= $val['movie_type'] ?>')" alt="<?= $val['movie_thname'] ?>" title="<?= $val['movie_thname'] ?>">
                    <img src="<?= $val['movie_picture'] ?>" alt="<?= $val['movie_thname'] ?>" title="<?= $val['movie_thname'] ?>">
                  </a>
                  <div class="movie-overlay"></div>
                  <span class="movie-view"><?= $view ?> <i class="fas fa-eye"></i></span>

                </div>
                <div class="title-in">
                  <h2>
                    <a onclick="goView('<?= $val['movie_id'] ?>', '<?= $url_name ?>', '<?= $val['movie_type'] ?>')" tabindex="-1" aalt="<?= $val['movie_thname'] ?>" title="<?= $val['movie_thname'] ?>"><?= $val['movie_thname'] ?></a>
                    <span class="movie-sound"><?= $mo_sound ?></span>
                  </h2>
                  <div class="movie-score">
                    <div class="star">
                      <i class="fas fa-star"></i><?= $score ?>
                    </div>
                    <div class="quality">
                      <h5 style="color: #af3b82;"><?= $val['movie_quality'] ?></h5>
                    </div>
                  </div>
                </div>
              </li>

            <?php
            }
            ?>

          </ul>
        </div>
      </div>
    </div>


    <?php foreach ($get_list_video_bycate as $val_cate) {

    ?>
      <div id="Home" class="container">
        <div class="border-size">
          <div class="border-size-font"> <?= $val_cate['list'][0]['category_name'] ?></div>
          <div class=""></div>
          <a class="title-link" onclick="goCate('<?= $val_cate['list'][0]['category_id'] ?>', '<?= $val_cate['list'][0]['category_name'] ?>')">
            <div class="border-size-font-all"><i class="fas fa-grip-horizontal"></i> ดูทั้งหมด</div>
          </a>
        </div>
        <div class="content-size">
          <div class="">
            <ul id="list-movie" class="list-movie">

              <?php

              foreach ($val_cate['list']  as $key => $val) {
                if ($key != 'total') {
                  if (strtolower($val['movie_sound']) == 'th' || strtolower($val['movie_sound']) == 'thai') {
                    $mo_sound = 'พากษ์ไทย';
                  } else if (strtolower($val['movie_sound']) == 'eng') {
                    $mo_sound = 'พากษ์อังกฤษ';
                  } else {
                    $mo_sound = '';
                  }

                  if (!($val['movie_view'])) {
                    $view = 0;
                  } else if (strlen($val['movie_view']) >= 5) {
                    $view =  substr($val['movie_view'], 0, -3) . 'k';
                  } else {
                    $view = $val['movie_view'];
                  }
                  if (!empty($val['movie_ratescore']) && $val['movie_ratescore'] != 0) {
                    if (strpos($val['movie_ratescore'], '.')) {
                      $score = substr($val['movie_ratescore'], 0, 3);
                    } else {
                      $score = substr($val['movie_ratescore'], 0);
                    }
                  }
                  $url_name = urldecode(str_replace([" ", "'"], ["-", ""], $val['movie_thname']));

              ?>

                  <li>
                    <div class="movie-box">
                      <a onclick="goView('<?= $val['movie_id'] ?>', '<?= $url_name ?>', '<?= $val['movie_type'] ?>')" alt="<?= $val['movie_thname'] ?>)" alt="<?= $val['movie_thname'] ?>" title="<?= $val['movie_thname'] ?>">
                        <img src="<?= $val['movie_picture'] ?>" alt="<?= $val['movie_thname'] ?>" title="<?= $val['movie_thname'] ?>">

                      </a>
                      <div class="movie-overlay"></div>
                      <span class="movie-view"><?= $view ?> <i class="fas fa-eye"></i></span>

                    </div>
                    <div class="title-in">
                      <h2>
                        <a onclick="goView('<?= $val['movie_id'] ?>', '<?= $url_name ?>', '<?= $val['movie_type'] ?>')" alt="<?= $val['movie_thname'] ?>)" tabindex="-1" title="<?= $val['movie_thname'] ?>"><?= $val['movie_thname'] ?></a>
                        <a><?= $mo_sound  ?></a>
                      </h2>
                      <div class="movie-score">
                        <div class="star">
                          <i class="fas fa-star"></i><?= $score ?>

                        </div>
                        <div class="quality">
                          <h5 style="color: #af3b82;"><?= $val['movie_quality'] ?> </h5>
                        </div>
                      </div>
                    </div>
                  </li>
              <?php
                }
              }
              ?>
            </ul>
          </div>
        </div>
      </div>

    <?php
    }


    ?>

<section id="movie-banners" class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-12 ">
        <?php
        if (!empty($ads['pos2'])) {
          foreach ($ads['pos2'] as $val) {

            if (substr($val['ads_picture'], 0, 4) == 'http') {
              $ads_picture = $val['ads_picture'];
            } else {
              $ads_picture = $path_ads . $val['ads_picture'];
            }
        ?>
            <a onclick="onClickAds(<?= $val['ads_id'] ?>, <?= $branch ?>)" href="<?= $val['ads_url'] ?>" alt="<?= $val['ads_name'] ?>" title="<?= $val['ads_name'] ?>">
              <img class="banners" src="<?= $ads_picture ?>" alt="<?= $val['ads_name'] ?>" title="<?= $val['ads_name'] ?>">
            </a>
        <?php
          }
        }
        ?>
      </div>
    </div>
  </div>
</section>
</body>
<script>
  $(document).ready(function() {
    ""
    var track_click = 2; //track user click on "load more" button, righ now it is 0 click
    var total_pages = '<?= $list['total_page'] ?>';

    if (track_click >= total_pages) {
      $("#movie-loadmore").hide(0);
    }

    $("#movie-loadmore").click(function(e) { //user clicks on button

      if (track_click <= total_pages) //user click number is still less than total pages
      {
        //post page number and load returned data into result element
        $.get('<?php echo $url_loadmore ?>', {
          'page': track_click
        }, function(data) {
          $("#list-movie").append(data); //append data received from server

          track_click++; //user click increment on load button

        }).fail(function(xhr, ajaxOptions, thrownError) { //any errors?
          alert(thrownError); //alert with HTTP error
        });

      }

      if (track_click >= total_pages) {

        $("#movie-loadmore").hide(0);

      }

    });

  });

  var swiper = new Swiper('#swp1', {
    speed: 500,
    slidesPerView: 1,
    slidesPerGroup: 1,
    loopFillGroupWithBlank: true,
    spaceBetween: 50,
    // mousewheel: true,
    freeMode: false,
    initialSlide: '1',
    pagination: {
      el: '.swiper-pagination',
      dynamicBullets: true,
      clickable: true,
      renderBullet: function(index, className) {
        return '<span class="' + className + '">' + (index + 1) + '</span>';
      },
    },
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',

    },

    breakpoints: {
      320: {
        slidesPerView: 1,
        slidesPerGroup: 1,
        spaceBetween: 20
      },

      // when window width is >= 480px
      480: {
        slidesPerView: 1,
        slidesPerGroup: 1,
        spaceBetween: 30
      },

      768: {
        slidesPerView: 3,
        slidesPerGroup: 3,
        spaceBetween: 30
      },
      968: {
        slidesPerView: 3,
        slidesPerGroup: 3,
        spaceBetween: 40
      },
      1200: {
        slidesPerView: 3,
        slidesPerGroup: 3,
        spaceBetween: 50
      }

    },
  });
</script>