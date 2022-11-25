<?php get_header(); ?>
<div class="pt-12 mx-auto Container">
  <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
  <div class="mb-4">
    <h1 class="text-center"><?php the_title(); ?></h1>
    <?php if(has_post_thumbnail()) : ?>
    <div class="img-container text-center py-2">
      <img src="<?= get_the_post_thumbnail_url('', 'full') ?>" alt="<?php the_title() ?>">
    </div>
    <?php endif ; ?>
  </div>
  <article class="article">
    <?php the_content(); ?>
  </article>
  <?php endwhile; endif ?>
</div>
<?php get_footer(); ?>