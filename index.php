<?php get_header(); ?>

    <main class="wrapper">

      <!-- blog section -->
      <section class="content-body blog">

      <?php 
        while(have_posts()) {
          the_post();        
      ?>

      <article>
        <p class="post__date"><?php the_date(); ?></p>
        <h2 class="post__title"><a href="<?php the_permalink(); ?>" class="heading-link"><?php the_title(); ?></a></h2>
        
        <?php the_excerpt(); ?>
        
        
      </article>

      <?php
        } //this is the closing bracket for the while loop
      ?>

      </section>

    <?php get_sidebar(); ?>


    </main>

<?php get_footer(); ?>