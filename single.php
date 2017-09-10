
<?php get_header(); ?>
  <main role="main">
    <div class="main-container">
      <?php the_post(); ?>
      <!-- POST -->
      <section class="posts-container">
        <h1 class="post-title"><?php the_title(); ?></h1>
        <div class="post-content">
          <?php the_content(); ?>
        </div>

        <!-- comentarios -->
        <div class="comments-container">
          <?php if ( comments_open() || get_comments_number() ) : ?>
            <?php comments_template(); ?>
          <?php endif; ?>             
        </div>
      </section>

      <!-- BARRA LATERAL -->
      <aside>
        <div class="aside-block">
          <form action="#" class="search-form">
            <input type="pesquisar" placeholder="Pesquisar...">
            <button type="submit">
              <i class="fa fa-search"></i>             
            </button>
          </form>
        </div>

        <div class="aside-block">
          <h3>Siga-nos!</h3>
          <div class="social-container">
            <!-- facebook -->
            <a href="#">
              <i class="fa fa-facebook-official"></i>
            </a>
            <!-- Twitter -->
            <a href="#">
              <i class="fa fa-twitter-square" aria-hidden="true"></i>
            </a>
            <!-- youtube -->
            <a href="#">
              <i class="fa fa-youtube-square" aria-hidden="true"></i>
            </a>
          </div>
        </div>

        <div class="aside-block tags-aside-container">
          <h3>Tags</h3>
          <?php echo getAllTags(); ?>
        </div>

      </aside>
    </div>
  </main>
  <?php get_footer(); ?>