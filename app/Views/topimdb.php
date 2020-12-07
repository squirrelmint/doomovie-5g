<!-- Icons Grid -->

<body>

<section id="movie-banners" class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-12 ">
        <?php
        if (!empty($ads['pos1'])) {
          foreach ($ads['pos1 '] as $val) {

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
  <section class="text-center">
    <div id="TOP" class="container">
      <div id="movie-list" class="row">
        <div class="movie-title-list">

          <h1>TopIMDB</h1>
        </div>

        <div class="content-size">
          <div class="">
            <ul id="list-movie" class="list-movie">
              <?php

              if ($list) {

                foreach ($list as $val_year) {
                  //           
              ?>

                  <div id="Home" class="container">
                    <div class="border-size">
                      <div class="border-size-font">
                        <?= $val_year[0]['movie_year'] ?>
                      </div>

                    </div>
                    <div class="content-size">
                      <div class="">
                        <ul id="list-movie" class="list-movie">

                          <?php

                          foreach ($val_year  as $key => $val) {
                            //                   echo '<pre>' . print_r($val, true) . '</pre>';
                            // die;
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
              }
                ?>

            </ul>
          </div>


        </div>





      </div>
    </div>
  </section>

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