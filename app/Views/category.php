<!-- Icons Grid -->


<section>
  <div class="container cate-list">
    <div class="cat-font">
      <div class="">หมวดหมู่ </div>
    </div>
    <div >
      <ul class="movie-category">
        <?php
        foreach ($list_category as $val) {
          $catename = str_replace(' ', '-', $val['category_name']);
        ?>

          <li><i class="fas fa-video"></i><a href="<?php echo base_url() . '/category/' . $val['category_id'] . '/' . $catename ?>"> <?= $val['category_name'] ?></a></li>
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
        if (!empty($ads['pos2'])) {
          foreach ($ads['pos2'] as $val) {

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