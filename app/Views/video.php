<style>


</style>

<body>
<section id="movie-banners" class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-12 ">
        <?php
        if (!empty($ads['pos3'])) {
          foreach ($ads['pos3'] as $val) {

            if (substr($val['ads_picture'], 0, 4) == 'http') {
              $ads_picture = $val['ads_picture'];
            } else {
              $ads_picture = $path_ads . $val['ads_picture'];
            }
        ?>
            <a onclick="onClickAds(<?= $val['ads_id'] ?>, <?= $val['branch_id'] ?>)" href="<?= $val['ads_url'] ?>" alt="<?= $val['ads_name'] ?>" title="<?= $val['ads_name'] ?>">
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


  <?php if (substr($videodata['movie_picture'], 0, 4) == 'http') {

    $movie_picture = $videodata['movie_picture'];
  } else {

    $movie_picture = $path_thumbnail . $videodata['movie_picture'];
  }

  $url_name = urlencode(str_replace(' ', '-', $videodata['movie_thname']))

  ?>

  <!-- Icons Grid -->
  <section id="movie-video" class="text-center">
    <div id="VIDEO" class="movie-detail-all ">


      <div class="movie-name-title">

        <h1 class="movie-title"><?= $videodata['movie_thname'] ?> </h1>
      </div>
      <div class="movie-score-top-PC">

        <i class="fas fa-eye"></i> <?= $videodata['movie_view'] ?>
      </div>
      <div id="movie-detail">

        <div class="detail-size">
          <div class="movie-card-detail">


            <div class="movie-score">
              <div class="movie-score-top-MB">
                <i class="fas fa-eye"></i> <?= $videodata['movie_view'] ?>
              </div>
              <i class="fas fa-calendar-day"></i> <?= $videodata['movie_year'] ?>
              <i class="fas fa-star"></i> <?= $videodata['movie_ratescore'] ?>

            </div>
            <div class="movie-description">
              <p>
                <?= $videodata['movie_des'] ?>
              </p>
            </div>

          </div>
        </div>
        <div class="preview-size">
          <div id="VIDEO" >
            <div class="row">
              <div id="movie-player">
                <div class="movie-header">
                  <img src="<?php echo $videodata['movie_picture']; ?>" alt="<?= $videodata['movie_thname'] ?>" title="<?= $videodata['movie_thname'] ?>">
                  <div class="movie-trailer">

                    <?php

                    $yb = explode('?v=', $videodata['movie_preview']);

                    if (count($yb) > 1) {

                      $urlyb = "https://www.youtube.com/embed/" . $yb[1];
                    } else {

                      $urlyb = "https://www.youtube.com/embed/" . $yb[0];
                    }



                    ?>

                    <iframe src="<?= $urlyb ?>" frameborder="0" allowfullscreen=""></iframe>

                  </div>
                </div>
              </div>
              <div class="cat-type">
              <?php if (!empty($videodata['cate_data'])) { ?>
                <p>ประเภท :
                  <?php foreach ($videodata['cate_data'] as $val_cate) {

                    $catename = str_replace(' ', '-', $val_cate['category_name']);
                  ?>
                    <a class="font-a-style" href="<?php echo base_url() . '/category/' . $val_cate['category_id'] . '/' . $catename ?>" target="_blank">
                      <?= $val_cate['category_name'] ?>
                    </a> |
                  <?php } ?>
                </p>
  <?php } ?>

                <p> คุณภาพ : <a class="font-a-style"><?= $videodata['movie_quality'] ?></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="VIDEO" class="movie-box container">

      <div class="movie-social">
        <div class="Report">
          <button class="movie-btn-report  report-size" onclick="get_Report()">แจ้งหนังเสีย</button>
        </div>

        <div class=" display-style-MB style-share">
          <a href="#" id="video" class="fas fa-share-alt share-size vl"></a>
          <a target="_blank" href="https://twitter.com/share?hashtags=ดูหนังออนไลน์,ดูหนังใหม่&text=<?= $url_name ?>" id="video" class="fa fa-twitter sa"></a>
          <a href="https://www.facebook.com/sharer/sharer.php?kid_directed_site=0&sdk=joey&u=<?= urlencode(base_url(uri_string())) ?>&display=popup&ref=plugin&src=share_button" target="_blank" id="video" class="fa fa-facebook sa"></a>
          <a href="https://social-plugins.line.me/lineit/share?url=<?= urlencode(base_url(uri_string())) ?>" target="_blank">
            <span a="" id="video" class="fa-stack fa-lg sa">
              <i a="" id="video" class="fas fa-circle fa-stack-2x"></i>
              <i a="" id="video" class="fab fa-line fa-stack-1x fa-inverse"></i>
            </span>
          </a>

        </div>
      </div>


    </div>


    <div id="movie-player" class="size-video container" style="width: 100%;
    height: 100%;">
      <iframe id="player" class="player" src="<?= base_url('player/' . $videodata['movie_id'] . '/' . $index) ?>" scrolling="no" frameborder="0" allowfullscreen="yes"></iframe>
      <!-- สำหรับ series -->

      <?php if ($videodata['movie_type'] == 'se') { ?>

        <div class="movie-episode">

          <div id="NextEP" class="swiper-container">

            <div class="swiper-wrapper">



              <?php

              foreach ($videodata['epdata'] as $key => $val) {

                $active = '';

                if ($index == $key) {

                  $active = 'active';
                }

                $url_nameep = urlencode(str_replace(' ', '-', $videodata['name_ep'][$key]));



              ?>

                <div class="swiper-slide">

                  <a onclick="goEP('<?= $videodata['movie_id'] ?>','<?= $url_name ?>','<?= trim($key) ?>','<?= $url_nameep ?>')" tabindex="-1">

                    <img src="<?= $movie_picture ?>">

                    <span class="<?= $active ?>"><?= $videodata['name_ep'][$key] ?></span>

                  </a>

                </div>

              <?php } ?>



            </div>



            <!-- If we need navigation buttons -->

            <div class="swiper-button-prev"></div>

            <div class="swiper-button-next"></div>



            <!-- Add Pagination -->

            <div class="swiper-pagination"></div>

          </div>

        </div>

      <?php } ?>
    </div>


    <div id="VIDEO" class="movie-box container">

      <div class="movie-social">


        <div class=" display-style-PC style-share">
          <a href="#" id="video" class="fas fa-share-alt share-size vl"></a>
          <a target="_blank" href="https://twitter.com/share?hashtags=ดูหนังออนไลน์,ดูหนังใหม่&text=<?= $url_name ?>" id="video" class="fa fa-twitter sa"></a>
          <a href="https://www.facebook.com/sharer/sharer.php?kid_directed_site=0&sdk=joey&u=<?= urlencode(base_url(uri_string())) ?>&display=popup&ref=plugin&src=share_button" target="_blank" id="video" class="fa fa-facebook sa"></a>
          <a href="https://social-plugins.line.me/lineit/share?url=<?= urlencode(base_url(uri_string())) ?>" target="_blank">
            <span a="" id="video" class="fa-stack fa-lg sa">
              <i a="" id="video" class="fas fa-circle fa-stack-2x"></i>
              <i a="" id="video" class="fab fa-line fa-stack-1x fa-inverse"></i>
            </span>
          </a>
          </span>

        </div>

      </div>



    </div>


  </section>

  <section id="movie-banners" class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-12 ">
        <?php
        if (!empty($ads['pos4'])) {
          foreach ($ads['pos4'] as $val) {

            if (substr($val['ads_picture'], 0, 4) == 'http') {
              $ads_picture = $val['ads_picture'];
            } else {
              $ads_picture = $path_ads . $val['ads_picture'];
            }
        ?>
            <a onclick="onClickAds(<?= $val['ads_id'] ?>, <?= $val['branch_id'] ?>)" href="<?= $val['ads_url'] ?>" alt="<?= $val['ads_name'] ?>" title="<?= $val['ads_name'] ?>">
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


  <section id="movie-footer" class="text-center">
    <div id="VIDEO" class="container">
      <div class="row">
        <div class="movie-title-list">
          <h1>แนะนำหนังใหม่</h1>
        </div>
        <ul id="list-movie" class="list-movie">
         
            <?php
              if ($videinterest) {
                foreach ($videinterest as  $val) {

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
                  }else{
                    $score = 5;
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
              } else {
                ?>

                <h3> ไม่พบหนังที่คุณค้นหา</h3>

              <?php } ?>
        </ul>

        <div id="movie-comment">
          <div class="fb-comments" data-href="<?= base_url(uri_string()) ?>" data-colorscheme="light" data-width="1000" data-numposts="5"></div>
          <div id="fb-root"></div>
          <script>
            (function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s);
              js.id = id;
              js.src =
                'https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v3.2&appId=254458338652270&autoLogAppEvents=1';
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
          </script>
        </div>
      </div>
    </div>
  </section>

  <section id="movie-banners" class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-12 ">
        <?php
        if (!empty($ads['pos5'])) {
          foreach ($ads['pos5'] as $val) {

            if (substr($val['ads_picture'], 0, 4) == 'http') {
              $ads_picture = $val['ads_picture'];
            } else {
              $ads_picture = $path_ads . $val['ads_picture'];
            }
        ?>
            <a onclick="onClickAds(<?= $val['ads_id'] ?>, <?= $val['branch_id'] ?>)" href="<?= $val['ads_url'] ?>" alt="<?= $val['ads_name'] ?>" title="<?= $val['ads_name'] ?>">
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

  <script>
    window.onload = function() {

      var swiper = new Swiper('#NextEP', {
        speed: 800,
        slidesPerView: 4,
        slidesPerGroup: 4,
        loopFillGroupWithBlank: true,
        spaceBetween: 10,
        mousewheel: true,
        freeMode: true,
        initialSlide: '<?= $index ?>',

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
      });

    };

    function get_Report() {
      var movie_id = '<?= $videodata['movie_id'] ?>';
      var movie_name = '<?= $videodata['movie_thname'] ?>';
      var movie_ep_name = '';
      <?php if ($videodata['movie_type'] == 'se') { ?>
        movie_ep_name = '<?= $videodata['name_ep'][$index] ?>';
      <?php } ?>

      $.ajax({
        url: "<?= base_url('saveReport') ?>",
        data: {
          movie_id: movie_id,
          movie_name: movie_name,
          movie_ep_name: movie_ep_name
        },
        type: 'POST',
        async: false,
        success: function(data) {
          alert('แจ้งเรียบร้อยจะดำเนินการโดยเร็ว');
        }
      });
    }
  </script>





  <!-- อันเก่า -->
  <!-- <div class="container">
    <div class="row">
      <!-- <?php if (substr($videodata['movie_picture'], 0, 4) == 'http') {
              $movie_picture = $videodata['movie_picture'];
            } else {
              $movie_picture = $path_thumbnail . $videodata['movie_picture'];
            }
            $url_name = urlencode(str_replace(' ', '-', $videodata['movie_thname']))

            ?> -->
  <!-- <div id="movie-player">
        <div class="movie-header">
          <div class="movie-trailer">
          <?php
          $yb = explode('?v=', $videodata['movie_preview']);
          if (count($yb) > 1) {
            $urlyb = "https://www.youtube.com/embed/" . $yb[1];
          } else {
            $urlyb = "https://www.youtube.com/embed/" . $yb[0];
          }

          ?>
            <iframe src="<?= $urlyb ?>" frameborder="0" allowfullscreen=""></iframe>
          </div>
          <div class="movie-thumbnail">
            <img src="<?php echo $videodata['movie_picture']; ?>" alt="<?= $videodata['movie_thname'] ?>" title="<?= $videodata['movie_thname'] ?>">
          </div>
        </div>
        <iframe id="player" class="player" src="<?= base_url('player/' . $videodata['movie_id'] . '/' . $index) ?>" scrolling="no" frameborder="0" allowfullscreen="yes"></iframe>
            
       