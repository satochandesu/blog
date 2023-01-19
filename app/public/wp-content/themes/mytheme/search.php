<?php get_header(); ?>
      <section class="blog-hero">
          <h1>Blog page</h1>
          <div class="border-bottom"></div>
          <form id="form" action="<?php echo home_url('/'); ?>" method="get" class="w-25 input-group py-3">
            <input type="text" name="s" class="form-control" placeholder="Search for..." aria-label="Search for...">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-search"></i>
            </button>
          </form>
      </section>
      <section class="blog">
      <h2><?php the_search_query(); ?> の検索結果</h2>
        <?php if (have_posts()): ?>
          <div class="container blog-container">
          <?php while (have_posts() ): the_post(); ?>
            <!-- 繰り返し表示させたい部分をいれる -->
            <div class="blog-card">
                <?php if ( has_post_thumbnail() ) : //アイキャッチ画像あり ?>
                    <img src="<?php the_post_thumbnail_url('post-thumbnails'); ?>">
                <?php else: //アイキャッチ画像なし ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.jpg">
                <?php endif; ?>
                  <div class="blog-text">
                      <h4> <?php the_title(); ?> </h4>
                      <div class="border-bottom"></div>
                      <p><?php the_title(); ?></p>
                      <p><?php the_time('Y/M/D'); ?> </p>
                      <a type="button" class="btn btn-dark" href="<?php the_permalink(); ?>">READ MORE</a>
                  </div>
              </div>
          <?php endwhile; ?>
          <?php else: ?>
            検索されたキーワードにマッチする記事はありませんでした
          <?php endif; ?>
              
              <!-- <div class="blog-card">
                  <img src="img/blog-img.jpg">
                  <div class="blog-text">
                      <h4>Blog's title</h4>
                      <div class="border-bottom"></div>
                      <p>texttexttexttexttexttexttexttexttext</p>
                      <p>2023.1.1</p>
                      <a type="button" class="btn btn-dark" href="single.php">READ MORE</a>
                  </div>
              </div>
              <div class="blog-card">
                  <img src="img/blog-img.jpg">
                  <div class="blog-text">
                      <h4>Blog's title</h4>
                      <div class="border-bottom"></div>
                      <p>texttexttexttexttexttexttexttexttext</p>
                      <p>2023.1.1</p>
                      <button type="button" class="btn btn-dark" href="single.php">READ MORE</button>
                  </div>
              </div>
              <div class="blog-card">
                  <img src="img/blog-img.jpg">
                  <div class="blog-text">
                      <h4>Blog's title</h4>
                      <div class="border-bottom"></div>
                      <p>texttexttexttexttexttexttexttexttext</p>
                      <p>2023.1.1</p>
                      <a type="button" class="btn btn-dark" href="single.php">READ MORE</a>
                  </div>
              </div>
              <div class="blog-card">
                  <img src="img/blog-img.jpg">
                  <div class="blog-text">
                      <h4>Blog's title</h4>
                      <div class="border-bottom"></div>
                      <p>texttexttexttexttexttexttexttexttext</p>
                      <p>2023.1.1</p>
                      <a type="button" class="btn btn-dark" href="single.php">READ MORE</a>
                  </div>
              </div> -->
          </div>
      </section>
      <?php get_footer(); ?>