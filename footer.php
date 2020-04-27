<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<footer class="footer">
  <div class="container">
    <a href="http://missaodt.org" target="_blank">
      <img src="<?=get_template_directory_URI()?>/img/src/logo-black.png" alt="Logotipo Missão DT" />
    </a>

    <div class="social">
      <a href="https://facebook.com/missaodt/" target="_blank">
        <svg width="32" height="32" viewBox="0 0 32 32">
          <use xlink:href="#facebook"></use>
        </svg>
      </a>

      <a href="https://twitter.com/diantedotrono" target="_blank">
        <svg width="32" height="32" viewBox="0 0 32 32">
          <use xlink:href="#twitter"></use>
        </svg>
      </a>

      <a href="https://instagram.com/missaodtoficial/" target="_blank">
        <svg width="32" height="32" viewBox="0 0 32 32">
          <use xlink:href="#instagram"></use>
        </svg>
      </a>

      <a href="https://youtube.com/dtoficial" target="_blank">
        <svg width="32" height="32" viewBox="0 0 32 32">
          <use xlink:href="#youtube"></use>
        </svg>
      </a>
    </div>
  </div>
</footer>

<div style="display: none;">
  <? include 'svg.php'; ?>
</div>

<script src="<?=get_template_directory_URI()?>/app/app.js"></script>

<?php wp_footer(); ?>

</body>

</html>