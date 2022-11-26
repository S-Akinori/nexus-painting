<?php get_header(); ?>
  <?php get_template_part('./inc/components/FV', null) ?>
  <div class="Container mx-auto">
    <h1 class="text-center">施工事例</h1>
    <div class="Gallery">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <div class="Gallery__item">
        <div class="Gallery__item__image">
          <div class="Gallery__item__image__before"><img src="<?php the_field('before_image'); ?>" alt="<?php the_title(); ?>"></div>
          <div class="Gallery__item__image__after"><img src="<?= has_post_thumbnail() ? get_the_post_thumbnail_url('', 'full') : get_template_directory_uri() . '/assets/images/no-image.jpg' ?>" alt="<?php the_title(); ?>"></div>
        </div>
        <div class="Gallery__item__content">
          <div class="Gallery__item__content__price"><span style="font-size:50%;">&yen;</span><?php the_field('price'); ?></div>
          <div class="Gallery__item__content__info">
            <div class="Gallery__item__content__info__item">
              <div class="Gallery__item__content__info__item__title">施工面積</div>
              <div class="Gallery__item__content__info__item__content"><?php the_field('area'); ?></div>
            </div>
            <div class="Gallery__item__content__info__item">
              <div class="Gallery__item__content__info__item__title">築年数</div>
              <div class="Gallery__item__content__info__item__content"><?php the_field('age'); ?></div>
            </div>
            <div class="Gallery__item__content__info__item">
              <div class="Gallery__item__content__info__item__title">工期</div>
              <div class="Gallery__item__content__info__item__content"><?php the_field('time'); ?></div>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; endif; ?>
    </div>
    <?php get_template_part('./inc/components/Pagination', null) ?>
  </div>
<?php get_footer(); ?>