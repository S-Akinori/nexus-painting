<?php get_header(); ?>
  <?php get_template_part('./inc/components/FV', null) ?>
  <div class="Container mx-auto">
    <h1 class="text-center"><?= is_category() ? 'カテゴリー: ' . single_cat_title('', false) : 'ブログ' ?></h1>
    <div class="lg:flex">
      <div class="pb-12 lg:w-2/3 lg:p-4 flex flex-wrap">
        <div>
          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
          <div>
            <a class="Posts__item" href="<?php the_permalink(); ?>">
              <div class="Posts__item__image">
                <img src="<?= has_post_thumbnail() ? get_the_post_thumbnail_url('', 'full') : get_template_directory_uri() . '/assets/images/no-image.jpg' ?>" alt="<?php the_title() ?>">
              </div>
              <div class="Posts__item__content">
                <div class="Posts__item__content__title"><?php the_title() ?></div>
                <div class="Posts__item__content__text"><?php the_excerpt() ?></div>
              </div>
            </a>
          </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
      <div class="lg:w-1/3 lg:p-4">
        <?php get_sidebar(); ?>
      </div>
    </div>
    <?php get_template_part('./inc/components/Pagination', null) ?>
  </div>
<?php get_footer(); ?>