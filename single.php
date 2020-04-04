<?php get_header(); ?>

  <main class="wrapper">

  
    <section class="content-body body">

    <?php 
      while (have_posts()) {
        the_post();
    ?>
    
      <article>
        <p class="post__date"><?php the_date(); ?></p>
        <h2 class="post__title"><?php the_title(); ?></h2>
        <?php the_content(); ?>    
      </article>

    <?php comment_form(); ?>

      <div class="blog__arrows">
        <div>
          <?php echo previous_post_link('%link', '&les; %title'); ?>
        </div>
        <div>
          <?php echo next_post_link('%link', '%title &ges; '); ?>
        </div>
      </div>

    <?php  
      } // end of while loop
    ?>


    </section>

    <?php get_sidebar(); ?>

  </main> 

<?php get_footer(); ?>