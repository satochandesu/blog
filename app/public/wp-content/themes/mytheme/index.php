    <?php get_header(); ?>
      <section class="blog-hero">
          <h1>英会話学習応援ブログ<br>ブログページ</h1>
          <div class="border-bottom"></div>
          <form id="form" action="<?php echo home_url('/'); ?>" method="get" class="w-25 input-group py-3">
            <input type="text" name="s" class="form-control" placeholder="Search for..." aria-label="Search for...">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-search"></i>
            </button>
          </form>
      </section>
      
      <section class="blog">
          <div class="container blog-container pt-5 mt-4">
            <div class="row">
                <div class="col-md-8 px-md-4">
                    <?php while (have_posts() ): the_post(); ?>
                        <!-- 繰り返し表示させたい部分をいれる -->
                        <div class="blog-card">
                            <div class="blog-img">
                                <?php if ( has_post_thumbnail() ) : //アイキャッチ画像あり ?>
                                    <img src="<?php the_post_thumbnail_url('post-thumbnails'); ?>">
                                <?php else: //アイキャッチ画像なし ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.jpg">
                                <?php endif; ?>
                            </div>
                            <div class="blog-text">
                                <h4> <?php the_title(); ?> </h4>
                                <div class="border-left"></div>
                                <p><?php the_excerpt(); ?></p>
                                <a type="button" class="btn btn-primary" href="<?php the_permalink(); ?>">READ MORE</a>
                                <p class="mt-1"><?php the_time('Y/M/D'); ?> </p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
              <?php get_sidebar(); ?>
            </div><!-- .row -->
        </div><!-- .container -->
      </section>
      <?php get_footer(); ?>