    <footer id="footer" class="f bg-wht-2">
      <div class="f__block flex-bt">
        <div class="f__logo">
          <a href="<?php echo esc_url(home_url());?>">
            <img src="<?php echo esc_url(get_theme_file_uri('assets/images/common/logo_main_01.svg')); ?>" alt="& Resort Wedding ロゴ" fetchpriority="high">
          </a>
        </div>
        <?php get_template_part('components/footer/menu'); ?>
      </div>
      <?php get_template_part('components/footer/copy'); ?>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>