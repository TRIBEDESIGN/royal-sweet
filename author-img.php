<!-- プロフィール画像部分 -->
<div class="author-img">
  <!--スライダーメイン-->
  <div class="swiper slider author-img__main">
    <div class="swiper-wrapper">
      <div class="swiper-slide author-img__main--image">
        <?php echo get_avatar($uid, 420); ?>
      </div>
      <?php if (!empty($udata->subimage1)) : ?>
        <div class="swiper-slide author-img__main--image">
          <img src="<?php the_field('subimage1'); ?>" alt="セラピストプロフィール画像2">
        </div>
      <?php endif; ?>

      <?php if (!empty($udata->subimage2)) : ?>
        <div class="swiper-slide author-img__main--image">
          <img src="<?php the_field('subimage2'); ?>" alt="セラピストプロフィール画像３">
        </div>
      <?php endif; ?>
    </div>
    <?php $sns02_url = royal_sweet_get_sns02_url( $uid ); ?>
    <?php if ( $sns02_url ) : ?>
      <div class="author-img__main--link">
        <a href="<?php echo esc_url( $sns02_url ); ?>" target="_blank" rel="noopener noreferrer">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/sns02-icon.png" alt="SNS 02">
        </a>
      </div>
    <?php endif; ?>
  </div>

  <!--スライダーサムネイル-->
  <div class="swiper slider-thumbnail author-img__thumbnail">
    <div class="swiper-wrapper">
      <div class="swiper-slide author-img__thumbnail--image">
        <?php echo get_avatar($uid, 420); ?>
      </div>
      <?php if (!empty($udata->subimage1)) : ?>
        <div class="swiper-slide author-img__thumbnail--image">
          <img src="<?php the_field('subimage1'); ?>" alt="セラピストプロフィール画像２">
        </div>
      <?php endif; ?>

      <?php if (!empty($udata->subimage2)) : ?>
        <div class="swiper-slide author-img__thumbnail--image">
          <img src="<?php the_field('subimage2'); ?>" alt="セラピストプロフィール画像３">
        </div>
      <?php endif; ?>
    </div>
  </div>
</div><!-- .author-img -->