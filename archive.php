<?php get_header(); ?>

  <main class="wrapper">
    <section class="content-body archive">
    <h2 class="post__title">archive.php</h2>

    <!-- this is the page where we can list the blog posts based on the query -->
    <p>
      <ul>
        <?php wp_get_archives('title_li=&type=postbypost'); ?>
      </ul>
    </p>

    </section>


    <?php get_sidebar(); ?>

  </main>

<?php get_footer(); ?>