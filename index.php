
<?php get_header(); ?>
  <main role="main">
    <div class="main-container">

      <!-- POSTS -->
      <section class="posts-container">
        <h1>Posts</h1>

        <!-- loop posts -->
        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
          <article class="post">
            <!-- thumbnail -->
            <img src="<?php echo verifyThumbnail(); ?>" alt="post-thumbnail">
            <!-- titulo -->
            <h2><?php the_title(); ?></h2>
            <!-- data -->
            <small>
              Data: <?php echo the_date(); ?>
            </small>
            <!-- descrição -->
            <p><?php the_excerpt(); ?></p>   
            <br>    
            <!-- tags -->
            <small  class="post-tags">
              <?php the_tags(); ?>
            </small>
            <a href="<?php the_permalink(); ?>" class="btn-read-more">Leia mais</a>
          </article>
        <?php endwhile; endif; ?>
        <!-- paginação -->
        <?php echo wp_link_pages(); ?>
      </section>

      <!-- redes socias e etc -->
      <aside>
        <div class="aside-block">
          <?php get_search_form(); ?>
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