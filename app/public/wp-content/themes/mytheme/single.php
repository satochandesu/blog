      <?php get_header(); ?>
      <div class="container pt-5 mt-4">
          <div class="row">
            <?php while (have_posts()) : the_post(); ?>
            <main class="col-md-8 px-md-4">
              <article class="container shadow p-3 mb-5 bg-body rounded" >
                  <div class="post-img text-center">
                  <img src="<?php the_post_thumbnail_url( `full` ); ?>" class="img-fluid" width="500px">
                  </div>
                  <li class="blog-tag mt-3">
                    <i class="fas fa-tag"></i> <?php the_category( '/' ); ?>
                  </li>
                  <h3 class="text-center mt-5"><?php the_title(); ?></h3>
                  <div class="border-bottom"></div>
                  <p class="p-2"><?php the_content(); ?></p>
              </article>
              <?php endwhile; ?>
            </main>
            <?php get_sidebar(); ?>
          </div><!-- .row -->
      </div><!-- .container -->
      <?php get_footer(); ?>