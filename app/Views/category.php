
  <!-- Icons Grid -->
  <section>
    <div  id ="CAT" class="container">
      <div class="cat-font">
        <div class="">หมวดหมู่ </div>
        <div class="cat-type"> </div>
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