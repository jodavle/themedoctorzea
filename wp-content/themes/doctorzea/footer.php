</div>
<footer class="site-footer">
  <div class="row grid">
    <div class="col-3_xs-6">
      <?php if (is_active_sidebar('footer_1')) : ?>
        <div class="footer-menu">
        <?php dynamic_sidebar('footer_1'); ?>
        </div>
      <?php endif; ?>
    </div>
    <div class="col-3_xs-6">
      <?php if (is_active_sidebar('footer_2')) : ?>
        <div class="footer-menu">
        <?php dynamic_sidebar('footer_2'); ?>
        </div>
      <?php endif; ?>
    </div>
    <div class="col-3_xs-6">
      <?php if (is_active_sidebar('footer_3')) : ?>
        <div class="footer-menu">
        <?php dynamic_sidebar('footer_3'); ?>
        </div>
      <?php endif; ?>
    </div>
    <div class="col-3_xs-6">
      <?php if (is_active_sidebar('footer_4')) : ?>
        <div class="footer-menu">
        <?php dynamic_sidebar('footer_4'); ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
  <div class="row grid after-footer">
    <div class="col-6_sm-12"><p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?>. Todos los derechos reservados.</p></div>
    <div class="col-6_sm-12 col_sm-first">Politica de privacidad | Terminos y condiciones</div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>