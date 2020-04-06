<?php get_header(); ?>

  <main class="wrapper">

  
    <section class="content-body blog-post">

    <?php 
      while (have_posts()) {
        the_post();
    ?>
    
      <article>
        <p class="post__date"><?php the_date(); ?></p>
        <h2 class="post__title"><?php the_title(); ?></h2>
        <?php the_content(); ?>    
      </article>

      <div class="post__tags">
        <p>Tags:</p>
        <ul>
          <?php the_tags('<li>', ' ', '</li>'); ?>
        </ul>
      </div>


    
      
    <?php 
    
    $comments = get_comments(); 
    print_r($comments);
    
    foreach ($comments as $comment) {
      $html = "<p>";
      echo '<br><br>';
      print_r($comment);
      echo '<br><br>';
      if ($comment->comment_author_url) {
        $html .= "<a href='$comment->comment_author_url' target='_blank' rel='noopener noreferrer'>$comment->comment_author</a>";        
      } else {
        $html .= "$comment->comment_author_url";
      }
      $html .= " @ $comment->comment_date</p>
        <p>$comment->comment_content</p>
      ";
      echo "$comment->comment_author <br>";
      echo "$comment->comment_date <br>";
      echo "$comment->comment_author_email <br>";
      echo "$comment->comment_author_url <br>";
      echo "$comment->comment_content";
      echo "<br><br>";
      echo $html;
    }

    
    comment_form(); ?>

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