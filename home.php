<?php get_header(); ?>
  <?php get_template_part('./inc/components/FV', null) ?>
  <div class="Container mx-auto">
    <?php acf_form() ?>
    <?php get_template_part('./inc/components/Service', null) ?>
  </div>
  <div>
    <?php get_template_part('./inc/components/Action', null) ?>
  </div>
  <div class="Container mx-auto">
    <?php get_template_part('./inc/components/Feature', null) ?>
  </div>
  <div class="Container mx-auto">
    <?php get_template_part('./inc/components/Flow', null) ?>
  </div>
  <div>
    <?php get_template_part('./inc/components/Action', null) ?>
  </div>
  <div class="Container mx-auto">
    <?php get_template_part('./inc/components/FAQ', null) ?>
  </div>
  <div class="Container mx-auto">
    <?php get_template_part('./inc/components/Gallery', null) ?>
  </div>
  <div>
    <?php get_template_part('./inc/components/Action', null) ?>
  </div>
  <div class="Container mx-auto">
    <?php get_template_part('./inc/components/Popular-posts', null) ?>
  </div>
  <div>
    <?php get_template_part('./inc/components/Action', null) ?>
  </div>
<?php get_footer(); ?>