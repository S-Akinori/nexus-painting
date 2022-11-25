<?php get_header(); ?>
<div class="px-6 pt-12 mx-auto container">
  <div class="lg:flex">
    <div class="pb-12 mb-12 border-b border-b-accent lg:w-2/3 lg:p-4">
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <div class="mb-4">
        <h1 class="text-center"><?php the_title(); ?></h1>
        <?php if(has_post_thumbnail()) : ?>
        <div class="img-container text-center py-2">
          <img src="<?= get_the_post_thumbnail_url('', 'full') ?>" alt="<?php the_title() ?>">
        </div>
        <?php endif ; ?>
        <p class="text-sm"><?php the_date(); ?></p>
      </div>
      <article class="article">
        <?php the_content(); ?>
      </article>
      <?php endwhile; endif ?>
      <div class="mt-12">
        <?php get_template_part('./inc/components/Action', null, ['size' => 'md']) ?>
      </div>
    </div>
    <div class="lg:w-1/3 lg:p-4">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>