<?php
/**
 * Template Name: home
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<style>
.webp .banner {
  background-image: url('<?=get_template_directory_URI()?>/img/webp/banner.webp');
}

.no-webp .banner {
  background-image: url('<?=get_template_directory_URI()?>/img/src/banner.jpg');
}

@media screen and (min-width: 600px) {
  .webp .banner {
    background-image: url('<?=get_template_directory_URI()?>/img/webp/banner@2x.webp');
  }

  .no-webp .banner {
    background-image: url('<?=get_template_directory_URI()?>/img/src/banner@2x.jpg');
  }
}
</style>

<section class="banner">
  <div class="container fadeUp" data-anima-tempo>
    <h1>
      Live</br>
      Diante do</br>
      Trono</br>
      <span>no youtube!</span>
    </h1>
    <img src="<?=get_template_directory_URI()?>/img/src/yt-home.png" alt="Youtube #ficaEmCasa" />
  </div>
</section>

<section class="sobre">
  <div class="container">
    <h2 class="fadeUp" data-animar><span class="white">vamos unir forças</span>
      e fazer a diferença</h2>
    <p class="fadeUp" data-animar>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
      incididunt ut labore et dolore
      magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
      facilisis. </p>
    <h2 class="fadeUp" data-animar><span class="white">como funciona</span>
      a doação</h2>
    <p class="fadeUp" data-animar>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
      incididunt ut labore et dolore
      magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
      facilisis. </p>
  </div>

  <img src="<?=get_template_directory_URI()?>/img/src/comigo.svg" alt="Svg comigo" class="comigo" />
</section>

<section class="doacoes">
  <div class="container">
    <h2 class="fadeUp" data-animar><span class="red">para qual projeto</span>
      você gostaria de doar?</h2>

    <? include 'doacoes-itens.php' ?>
  </div>
</section>

<?php get_footer();