<style>
  #movie-player {
    width: 100%;
    min-height: 0px;
    margin-top: 1rem;
  }

  .movie-score {
    color: white;
    padding: 20px;
    text-align: left;
  }

  .cat-type {
    color: white;
    text-align: left;
  }

  a:not([href]) {
    color: #f22536;
    text-decoration: none;
  }

  #movie-player .movie-header {
    display: flex;
    padding: 10px;
    width: 117%;
  }

  #movie-video #movie-detail .movie-card-detail {
    display: flex;
    flex-direction: column;
    width: 100%;
    padding: 0rem;
  }

  .movie-btn-report {
    color: #fff;
    background-color: #f22536;
    border-radius: 10px;
    border: none;
    height: 40px;
  }

  .movie-btn-report:hover {
    color: #f22536;
    background-color: white;
  }

  #movie-detail {
    justify-content: center;
  }

  .movie-social {

    text-align: left;
    display: flex;
    justify-content: space-evenly;
    transform: translateX(-7%);
  }

  .dropdown {
    position: relative;
    display: inline-block;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 36%;
    overflow: auto;
    z-index: 1;
  }

  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  .dropdown a:hover {
    background-color: #ddd;
  }

  .show {
    display: block;
  }

  .share-size {

    width: 50px;
    height: 45px;

    color: #f22536;
    font-size: 35px;
    padding: 6px 13px 0px 9px;
  }

  #video.fa-twitter {
    background: #35cbfe;
    color: white;
    width: 40px;
    height: 40px;
  }

  #video.fa-facebook {
    background: #3c5a98;
    color: white;
    width: 40px;
    height: 40px;
  }

  #video.fa-stack-2x {
    line-height: 30px;
    font-size: 2em;
    color: green;
  }

  #video.fab,
  .far {
    line-height: 30px;
    font-size: 30px;
    color: white;
  }

  .vl {
    border-right: 3px solid red;
    height: 54px;
  }

  ul.list-movie {
    background-color: #f14455;
    margin-top: 0rem;
  }

  ul.list-movie>li {
    margin: 5px;

  }

  .movie-title-list {

    background-color: #f22536;
    width: 83%;
    transform: translateX(10%);
    border-radius: 30px 30px 0px 0px;
    display: flex;
    justify-content: center;
  }

  .detail-size {
    width: 500px;
  }

  .movie-detail-all {
    margin: 0px 170px 0px 100px;
  }
  .player-size{
    width: 1000px;
    height: 600px;
  }
  .display-style-PC{
    display: none;
  }
  .style-share{
  background-color: white;
    border-radius: 25px 0px 0px 25px;
    transform: translateX(50%);
}
.report-size{
  transform: translateX(180%);
}
  @media only screen and (max-width: 600px) {
    .detail-size {
      width: 100%;
      text-align: center;
      padding: 0px 10px 0px 10px;
    }
    #movie-video #movie-detail .movie-card-detail .movie-title {
      font-size: 28px;

    }
    .movie-score {
      text-align: center;
      padding: 8px;

    }
    .movie-detail-all {
      margin: 0px 0px 0px 0px;
    }
    #movie-video #movie-detail .movie-card-detail .movie-title {
      font-size: 28px;
      text-align: center;
    }
    #movie-video #movie-detail .movie-card-detail .movie-description p {
      text-align: center;
    }
    #movie-player .movie-header {
      display: flex;
      padding: 10px;
      width: 100%;
    }
    .player-size{
    width: 100%;
    height: 300px;
  }
  .display-style-MB{
    display: none;
  }
  
  .display-style-PC{
    display: block;
  }
.style-share{
  background-color: white;
  border-radius: 0px 25px 25px 0px;
    transform: translateX(0%);
    width: 208px;
}
.report-size{
  transform: translateX(0%);
}

  }


</style>

<section id="movie-banners" class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-12 ">
        <?php
        if (!empty($adstop)) {
          foreach ($adstop as $ads) {
            if (substr($ads['ads_picture'], 0, 4) == 'http') {
              $ads_picture = $ads['ads_picture'];
            } else {
              $ads_picture = $path_ads . $ads['ads_picture'];
            }
        ?>
            <a href="<?= $ads['ads_url'] ?>" alt="<?= $ads['ads_name'] ?>" title="<?= $ads['ads_name'] ?>">
              <img class="banners" src="<?= $ads_picture ?>" alt="<?= $ads['ads_name'] ?>" title="<?= $ads['ads_name'] ?>">
            </a>
        <?php
          }
        }
        ?>
      </div>
    </div>
  </div>
</section>

<!-- Icons Grid -->
<section id="movie-video" class="text-center">
  <div class="movie-detail-all">
    <div id="movie-detail">

      <div class="detail-size">
        <div class="movie-card-detail">
          <h1 class="movie-title">Rogue (2020) </h1>
          <div class="movie-score">
            <i class="fas fa-calendar-day"></i> 2019
            <i class="fas fa-clock"></i> 55min
            <i class="fas fa-star"></i> 3.8

          </div>
          <div class="movie-description">
            <p>
              เรื่องย่อ: เรื่องย่อ
              Line
              เมแกนฟ็อกซ์ (แฟรนไชส์ ​​Transformers) รับมือกับบทบาทใหม่ที่น่าตื่นเต้นในฐานะทหารรับจ้างผู้แข็งแกร่งในการต่อสู้ในนิยายแอ็คชั่นสุดระทึกนี้ ในฐานะหัวหน้าทีมโอฮาราเธอเป็นผู้นำกลุ่มทหารที่มีชีวิตชีวาในภารกิจที่กล้าหาญนั่นคือช่วยเหลือตัวประกันจากผู้จับกุมในแอฟริกาห่างไกล แต่เมื่อภารกิจดำเนินไปอย่างผิดปกติและทีมต้องติดอยู่ทีมของโอฮาร่าต้องเผชิญหน้ากับกลุ่มกบฏที่เลือดไหลและโหดร้าย – และฝูงสิงโตที่ดุร้ายและโกรธเกรี้ยวที่พวกเขาพบเจอ เชิญรับชมหนังภาพยนตร์ เรื่องนี้ได้เลย </p>
          </div>
          <div class="cat-type">
            <p>ประเภท : <a>หนังฝรั่ง</a> | <a>สยองขวัญ</a> | <a>ลึกลับ</a> | <a>ระทึกขวัญ</a></p>
            <p> คุณภาพ : <a>4K<a></p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div id="movie-player">
            <div class="movie-header">
              <img src="https://api.vip-streaming.com/images/movie/61jGwtibL5if52Fmrkn9EuJF6Zdm7Jyaa.jpg" alt="Rogue (2020)" title="Rogue (2020)">
              <div class="movie-trailer">
                <iframe src="https://www.youtube.com/embed/n4YXauObskA" frameborder="0" allowfullscreen=""></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="movie-box">

    <div class="movie-social">
      <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn movie-btn-report">ระดับความชัด <i class="fas fa-caret-down"></i></button>
        <div id="myDropdown" class="dropdown-content show">
          <a href="#">4k</a>
          <a href="#">1080p</a>
          <a href="#">720p</a>
          <a href="#">480p</a>
          <a href="#">360p</a>
        </div>
        <button class="movie-btn-report">พากย์ไทย</button>
        <button class="movie-btn-report">Soundtrack 5.1</button>
      </div>
      <button class="movie-btn-report display-style-MB report-size" onclick="get_Report()" >แจ้งหนังเสีย</button>
      <div class=" display-style-MB style-share" >
        <a href="#" id="video" class="fas fa-share-alt share-size vl"></a>
        <a></a>
        <a href="#" id="video" class="fa fa-twitter sa"></a>
        <a href="#" id="video" class="fa fa-facebook sa"></a>

        <span a="" id="video" href="#" class="fa-stack fa-lg sa">
          <i a="" id="video" href="#" class="fas fa-circle fa-stack-2x"></i>
          <i a="" id="video" href="#" class="fab fa-line fa-stack-1x fa-inverse"></i>
        </span>

      </div>
    </div>


  </div>

  </div>
  </div>
  <div class="size-video" style="width: 100%;
    height: 100%;">
    <iframe id="player" class="player-size" class="player" src="http://localhost:1002/player/20033/a" scrolling="no" frameborder="0" allowfullscreen="yes"></iframe>
    <!-- สำหรับ series -->
  </div>

  <button class="movie-btn-report display-style-PC" onclick="get_Report()" style="position: absolute;
    transform: translateX(325%);">แจ้งหนังเสีย</button>
      <div class="display-style-PC style-share">
        <a href="#" id="video" class="fas fa-share-alt share-size vl"></a>
        <a></a>
        <a href="#" id="video" class="fa fa-twitter sa"></a>
        <a href="#" id="video" class="fa fa-facebook sa"></a>

        <span a="" id="video" href="#" class="fa-stack fa-lg sa">
          <i a="" id="video" href="#" class="fas fa-circle fa-stack-2x"></i>
          <i a="" id="video" href="#" class="fab fa-line fa-stack-1x fa-inverse"></i>
        </span>

      </div>
    </div>

</section>

<section id="movie-banners" class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-12 ">
        <?php
        if (!empty($adsbottom)) {
          foreach ($adsbottom as $ads) {
            if (substr($ads['ads_picture'], 0, 4) == 'http') {
              $ads_picture = $ads['ads_picture'];
            } else {
              $ads_picture = $path_ads . $ads['ads_picture'];
            }
        ?>
            <a href="<?= $ads['ads_url'] ?>" alt="<?= $ads['ads_name'] ?>" title="<?= $ads['ads_name'] ?>">
              <img class="banners" src="<?= $ads_picture ?>" alt="<?= $ads['ads_name'] ?>" title="<?= $ads['ads_name'] ?>">
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
  <div class="container">
    <div class="row">
      <div class="movie-title-list">
        <h1>แนะนำหนังใหม่</h1>
      </div>
      <ul id="list-movie" class="list-movie">
        <?php foreach ($videinterest as $interest) { ?>
          <li>
            <div class="movie-box">

              <?php if (substr($interest['movie_picture'], 0, 4) == 'http') {
                $movie_picture = $interest['movie_picture'];
              } else {
                $movie_picture = $path_thumbnail . $interest['movie_picture'];
              }

              $url_name = urlencode(str_replace(' ', '-', $interest['movie_thname']));
              ?>

              <a onclick="goView('<?= $interest['movie_id'] ?>', '<?= $url_name ?>')" alt="<?= $interest['movie_thname'] ?>" title="<?= $interest['movie_thname'] ?>">
                <img src="<?= $movie_picture ?>" alt="<?= $interest['movie_thname'] ?>" title="<?= $interest['movie_thname'] ?>">
              </a>
              <div class="movie-overlay"></div>
              <?php
              if (!($interest['movie_view'])) {
                $view = 0;
              } else if (strlen($interest['movie_view']) >= 5) {
                $view =  substr($interest['movie_view'], 0, -3) . 'k';
              } else {
                $view = $interest['movie_view'];
              }
              ?>
              <span class="movie-view"><?= $view ?> <i class="fas fa-eye"></i></span>


              <?php
              $sound_style = ' style="top:0;" ';
              if (!empty($interest['movie_quality'])) {
                $sound_style = '';
              ?>
                <span class="movie-quality"><?= $interest['movie_quality'] ?></span>
              <?php } ?>

              <?php
              if (!empty($interest['movie_sound'])) {
                $sound = $interest['movie_sound'];
                if (
                  strtolower($interest['movie_sound']) == 'th' ||
                  strtolower($interest['movie_sound']) == 'thai' ||
                  strpos(strtolower($interest['movie_sound']), 'thai') == true ||
                  strtolower($interest['movie_sound']) == 'ts'
                ) {
                  $sound = 'พากษ์ไทย';
                } else if (strtolower($interest['movie_sound']) == 'eng') {
                  $sound = 'พากษ์อังกฤษ';
                } else if (
                  strtolower($interest['movie_sound']) == 'st' ||
                  strpos(strtolower($interest['movie_sound']), '(t)') == true
                ) {
                  $sound = 'ซับไทย';
                }
              ?>
                <span class="movie-sound" <?= $sound_style ?>><?= $sound ?></span>
              <?php } ?>

            </div>
            <div class="title-in">
              <h2>
                <a onclick="goView('<?= $interest['movie_id'] ?>', '<?= $url_name ?>')" tabindex="-1" alt="<?= $interest['movie_thname'] ?>" title="<?= $interest['movie_thname'] ?>"><?= $interest['movie_thname'] ?></a>
              </h2>

              <?php
              if (!empty($interest['movie_ratescore']) && $interest['movie_ratescore'] != 0) {
                if (strpos($interest['movie_ratescore'], '.')) {
                  $score = substr($interest['movie_ratescore'], 0, 3);
                } else {
                  $score = substr($interest['movie_ratescore'], 0);
                }
              ?>
                <div class="movie-score">
                  <i class="fas fa-star"></i> <?= $score ?>
                </div>
              <?php } ?>

            </div>
          </li>
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


  function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
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

<!-- <div id="movie-detail">
        <div class="movie-card-detail">
          <h1 class="movie-title"><?= $videodata['movie_thname'] ?> </h1>
          <div class="movie-description">
            <p>
              เรื่องย่อ: <?php if (empty($videodata['movie_des'])) {
                            echo "-";
                          } else {
                            echo $videodata['movie_des'];
                          } ?>
            </p>
          </div>
          <div class="movie-box">
           
            <div class="movie-score">
            <?php
            if (!empty($videodata['movie_ratescore']) && $videodata['movie_ratescore'] != 0) {
              if (strpos($videodata['movie_ratescore'], '.')) {
                $score = substr($videodata['movie_ratescore'], 0, 3);
              } else {
                $score = substr($videodata['movie_ratescore'], 0);
              }
            ?>
              <i class="fas fa-star"></i> <?= $score ?>
              <?php } ?>
            </div>
            
            <div class="movie-social">
              <a href="https://www.facebook.com/sharer/sharer.php?kid_directed_site=0&sdk=joey&u=<?= urlencode(base_url(uri_string())) ?>&display=popup&ref=plugin&src=share_button" target="_blank">
                <i class="fab fa-facebook-square"></i>
              </a>  

              <a target="_blank" href="https://twitter.com/share?hashtags=ดูหนังออนไลน์,ดูหนังใหม่&text=<?= $url_name ?>">
                <i class="fab fa-twitter"></i>
              </a>

              <a href="https://social-plugins.line.me/lineit/share?url=<?= urlencode(base_url(uri_string())) ?>" target="_blank">
                <i class="fab fa-line"></i>
              </a>

              <button class="movie-btn-report" onclick="get_Report()">แจ้งหนังเสีย</button>
            </div>
          </div>

          <?php if (!empty($videodata['cate_data'])) { ?>
          <div class="movie-category">
            Category:
            <?php
            foreach ($videodata['cate_data'] as $val) {
              $catename = str_replace(' ', '-', $val['category_name']);
            ?>
              <a href="<?php echo base_url() . '/category/' . $val['category_id'] . '/' . $catename ?>" target="_blank">
                <span class="cate-name"><?= $val['category_name'] ?></span>
              </a>
            <?php } ?>
          </div>
          <?php } ?>

        </div>
      </div> -->

<!-- </div>
  </div> -->









<!-- อันเก่า -->