<?php get_header(); ?>

    <main class="wrapper">
      <!-- info section (aside?) -->
      <aside>
        <div class="sidebar sidebar__img">
          <img
            src="./assets/profile.jpg"
            alt="Yiying Zou, front end developer"
            class="sidebar__img__profile"
          />
          <img src="./assets/hi.png" alt="" class="sidebar__img__hi" />
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
            ><img src="./assets/icons/389-mail2.svg" alt="" />
            yiyingzou@gmail.com</a
          >
          <a href="https://github.com/yiyingzz"
            ><img src="./assets/icons/433-github.svg" alt="" /> yiyingzz</a
          >
          <a href="https://twitter.com/yiyingzz"
            ><img src="./assets/icons/407-twitter.svg" alt="" /> yiyingzz</a
          >
        </div>

        <div class="sidebar sidebar__posts">
          <h3>Recent Posts</h3>
          <ul>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
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
          <a href="">Blog Archive</a>
        </div>
      </aside>

      <!-- blog section -->
      <section class="blog">
        <article>
          <p class="post__date">date</p>
          <h2 class="post__title"><a href="#" class="heading-link">Blog Title</h2></a>
          <p>
            blog post body Lorem ipsum dolor sit amet consectetur adipisicing
            elit. Consectetur odio ad obcaecati sapiente facilis autem
            doloremque voluptas perspiciatis quibusdam quae beatae voluptates at
            excepturi ab praesentium modi, accusantium architecto pariatur quam
            rerum! Necessitatibus, nemo. Illo nobis perferendis veniam, tenetur,
            doloribus amet omnis pariatur doloremque ex atque cumque quas alias
            esse rerum expedita. Deserunt commodi in quos.
            <a href="#" class="post__link">Read more &ges;</a>
          </p>
        </article>

        <article>
          <p class="post__date">date</p>
          <h2 class="post__title"><a href="#" class="heading-link">Blog Title</h2></a>
          <p>
            blog post body Lorem ipsum dolor sit amet cons ectetur adipisi cing
            elit. Consecte tur odio ad obca cati sapiente facilis autem dolore
            mque voluptas perspic iatis quibu sdam quae beatae voluptates at
            excepturi ab praese ntium modi, accusan tium arc hitecto pariatur
            quam Lorem ipsum d olor sit amet, conse ctetur adipisicing elit.
            Tempora vitae explic abo quae rat amet deleniti! rerum! Necessi
            tatibus, nemo. Illo nobis perfe rendis veniam, tenetur, Lorem ipsum
            dolor sit amet consectetur adipisicing elit. Adipisci labore, ut rem
            nostrum reiciendis consectetur voluptatibus maiores optio iusto nemo
            temporibus officiis, animi expedita perferendis ipsa dolorem veniam
            sit esse. doloribus amet omnis pariatur doloremque ex atque cumque
            quas alias esse rerum expedita. Deserunt commodi in quos.
            <a href="#" class="post__link">Read more &ges;</a>
          </p>
        </article>

        <article>
          <p class="post__date">date</p>
          <h2 class="post__title"><a href="#" class="heading-link">Blog Title</h2></a>
          <p>
            blog post body Lorem ipsum dolor sit amet consectetur adipisicing
            elit. Consectetur odio ad obcaecati sapiente facilis autem
            doloremque voluptas perspiciatis quibusdam quae beatae voluptates at
            excepturi ab praesentium modi, accusantium architecto pariatur quam
            rerum! Necessitatibus, nemo. Illo nobis perferendis veniam, tenetur,
            doloribus amet omnis pariatur doloremque ex atque cumque quas alias
            esse rerum expedita. Deserunt commodi in quos.
            <a href="#" class="post__link">Read more &ges;</a>
          </p>
        </article>

        <div class="blog__arrows">
          <p><a href="#">&les; Previous Page</a></p>
          <p><a href="">Next Page &ges;</a></p>
        </div>
      </section>
    </main>

<?php get_footer(); ?>