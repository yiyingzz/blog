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
      down whatever's on my mind.
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

    <?php
      while (have_posts()) {

          the_post();
    ?>

      <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

    <?php
      }
    ?>

    </ul>
  </div>

  <div class="sidebar sidebar__tags">
    <h3>Tags</h3>
    <ul>
      <li><a href="#">Link</a></li>
      <li><a href="#">Link</a></li>
      <li><a href="#">Link</a></li>
    </ul>
  </div>

  <div class="sidebar sidebar__archive">
    <a href="<?php echo site_url('./archive/'); ?>">Blog Archive</a>
    <a href="<?php echo site_url('./tutorials-tidbits/') ?>">Tutorials & Tidbits</a>
  </div>
</aside>