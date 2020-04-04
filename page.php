<?php get_header(); ?>

<main class="wrapper">
  <section class="content-body page">

  <?php
    while (have_posts()) {
      the_post();
  ?>

      <h2 class="post__title"><?php the_title(); ?></h2>
      <p><?php the_content(); ?></p>
  
    <?php
      }
    ?>

  </section>

  <?php get_sidebar(); ?>

</main>

<?php get_footer(); ?>