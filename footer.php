</main>
<footer class="footer">
  <div class="mb-8 md:w-max mx-auto">
    <div class="px-4 mb-8 mx-auto Logo"><a href="<?= home_url(); ?>"><img src="<?= get_template_directory_uri()?>/assets/images/logo.png" alt="<?= bloginfo(); ?>"></a></div>
    <?php wp_nav_menu(array(
      'theme_location' => 'footer',
      'menu_class' => 'footer-list',
      'container' => 'nav'
    )); ?>
  </div>
  <div class="text-center text-sm">&copy; 2020 <?= bloginfo();?></div>
</footer>
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/scripts/main.js"></script>
</body>
</html>