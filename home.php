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
    <h2 class="fadeUp" data-animar><span class="white">Vamos unir forças </span>
      e fazer a diferença!</h2>
    <p class="fadeUp" data-animar>Mesmo de casa é possível abençoar e aliviar o sofrimento de outros. A sua doação é a
      esperança de um mundo melhor
      para alguém.</p>
    <h2 class="fadeUp" data-animar><span class="white">Como fazer </span>
      a doação?</h2>
    <p class="fadeUp" data-animar>Para doar, basta escolher um dos projetos abaixo, apoiados pela Missão DT. Em seguida,
      escolher a forma de doar e o valor. Siga os passos para finalizar a sua doação.
    </p>
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