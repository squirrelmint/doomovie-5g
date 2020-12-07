<body>
<?php
              if ($list['list']) {
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
              }
                ?>
        </body>