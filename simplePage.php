<?php
/**
 * Template Name: simple-page
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<style>
.header {
  background-color: #c02b2b;
}
</style>

<div class="content-wrapper">
  <div class="container">
    <?php /* The loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <h1><?=the_title()?></h1>
    <?=the_content()?>
    <?php endwhile; ?>
  </div>
</div>


<?php get_footer();