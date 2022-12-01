<?php get_header(); ?>
<div class="pt-12 mx-auto Container">
  <div class="lg:flex">
    <div class="pb-12 mb-12 border-b border-b-accent lg:w-2/3 lg:p-4">
      <div class="mb-4">
        <h1 class="text-center">お探しのページが見つかりませんでした</h1>
      </div>
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