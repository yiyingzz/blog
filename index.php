<?php get_header(); ?>

    <main class="wrapper">

      <section class="content-body index">

      <?php 
        while(have_posts()) {
          the_post();        
      ?>

      <div class="blog-post">
        <article>
          <p class="post__date"><?php the_date(); ?></p>
          <h2 class="post__title"><a href="<?php the_permalink(); ?>" class="heading-link"><?php the_title(); ?></a></h2>
          
          <?php the_excerpt(); ?>
        </article>
      </div>

      <?php
        } 
      ?>

      </section>

    <?php get_sidebar(); ?>


    </main>

<?php get_footer(); ?>