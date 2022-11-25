<aside>
  <div class="mb-8">
    <h2 class="mb-4 p-2 bg-main">カテゴリー</h2>
    <div>
      <?php wp_nav_menu(array(
        'theme_location' => 'sidebar',
        'menu_class' => 'CategoryList'
      )); ?>
    </div>
  </div>
  <div>
    <h2 class="mb-4 p-2 bg-main">オススメ記事</h2>
    <div>
      <?= do_shortcode('[popular_posts flex="0"]'); ?>
    </div>
  </div>
</aside>