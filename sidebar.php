<aside>
  <div class="sidebar sidebar__img">
    <img
      src="<?php echo get_theme_file_uri('./assets/profile.jpg') ?>"
      alt="Yiying Zou, front end developer"
      class="sidebar__img__profile"
    />
    <img src="<?php echo get_theme_file_uri('./assets/hi.png'); ?>" alt="" class="sidebar__img__hi" />
  </div>

  <div class="sidebar sidebar__about">
    <h3>About</h3>
    <p>
      Hi, I'm Yiying, a web developer and artist.
    </p>
    <p>
      Why <em>notes.txt</em>? I love Notepad and use it constantly to jot
      down whatever's on my mind. I also use it to draft all my blog posts😉
    </p>
  </div>
  <div class="sidebar sidebar__social">
    <a href="#"
      ><img src="<?php echo get_theme_file_uri('./assets/icons/389-mail2.svg'); ?>" alt="" />
      yiyingzou@gmail.com</a
    >
    <a href="https://github.com/yiyingzz"
      ><img src="<?php echo get_theme_file_uri('./assets/icons/433-github.svg'); ?>" alt="" /> yiyingzz</a
    >
    <a href="https://twitter.com/yiyingzz"
      ><img src="<?php echo get_theme_file_uri('./assets/icons/407-twitter.svg'); ?>" alt="" /> yiyingzz</a
    >
  </div>

  <div class="sidebar sidebar__posts">
    <h3>Recent Posts</h3>
    <ul>

      <?php wp_get_archives('title_li=&type=postbypost&limit=5'); ?>

    </ul>
  </div>

<?php
  $tags = get_tags();
  $html = '
    <div class="sidebar sidebar__tags">
      <h3>Tags</h3>
        <ul>
  ';
      
  if ($tags) {
    foreach ($tags as $tag) {
      $tag_link = get_tag_link($tag);
      $html .= "<li><a href='{$tag_link}'>$tag->name</a></li>";
    }
    $html .= '
        </ul>
      </div>
    ';
    echo $html;
  }
?>

  <div class="sidebar sidebar__archive">
    <a href="<?php echo site_url('./blog-archive/'); ?>">Blog Archive</a>
    <a href="<?php echo site_url('./tutorials-tidbits/') ?>">Tutorials & Tidbits</a>
  </div>
</aside>