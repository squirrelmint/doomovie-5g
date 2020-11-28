  <style>
    .cat-font {
      color: white;
      width: 100%;

      position: relative;
      display: flex;
      justify-content: space-evenly;
      transform: translateX(-5%);
      font-size: 40px;
    }

    .cat-type {
      transform: translateX(-75px);
    }

    @media only screen and (max-width: 600px) {
      .cat-type {
        transform: translateX(-30px);
      }

      .cat-font {
        transform: translateX(0%);
        font-size: 23px;
      }

      ul.movie-category {
        -webkit-columns: 1;

      }
      ul.movie-category {
        transform: translateX(20%);
      }

    }
  </style>
  <!-- Icons Grid -->
  <section>
    <div class="container">
      <div class="cat-font">
        <div class="">หมวดหมู่ </div>
        <div class="cat-type"> ประเภทหนัง</div>
      </div>
      <div class="row">

        <ul class="movie-category">
          <?php
          foreach ($list_category as $val) {
            $catename = str_replace(' ', '-', $val['category_name']);
          ?>
            <div style="display: flex;">
              <div style="padding-right: 28px;">
                <i class="fas fa-video"></i></div>
              <li><a href="<?php echo base_url() . '/category/' . $val['category_id'] . '/' . $catename ?>"><?= $val['category_name'] ?></a></li>
            </div>
          <?php } ?>
        </ul>
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