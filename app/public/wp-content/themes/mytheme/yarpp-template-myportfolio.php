<?php
/*
YARPP Template: myportfolio
Description: This template returns the related posts as thumbnails in an ordered list. Requires a theme which supports post thumbnails.
Author: YARPP Team
*/
?>

<?php
/*
Templating in YARPP enables developers to uber-customize their YARPP display using PHP and template tags.

The tags we use in YARPP templates are the same as the template tags used in any WordPress template. In fact, any WordPress template tag will work in the YARPP Loop. You can use these template tags to display the excerpt, the post date, the comment count, or even some custom metadata. In addition, template tags from other plugins will also work.

If you've ever had to tweak or build a WordPress theme before, you’ll immediately feel at home.

// Special template tags which only work within a YARPP Loop:

1. the_score()		// this will print the YARPP match score of that particular related post
2. get_the_score()		// or return the YARPP match score of that particular related post

Notes:
1. If you would like Pinterest not to save an image, add `data-pin-nopin="true"` to the img tag.

*/
?>
<section id="related-article">
  <div class="container my-4rem">
  <div class="title text-center pt-5" id="related-article">
			<h2>Related article</h2>
			<div class="border-bottom"></div>
		</div>

    <?php if (have_posts()):?>
    <div class="row">
      <?php while (have_posts()) : the_post(); ?>
      <div class="col-md-6 mb-5">
        <div class="card blog-card text-center">
          <a href="<?php the_permalink(); ?>">
            <?php if ( has_post_thumbnail() ) : //アイキャッチ画像あり ?>
              <img src="<?php the_post_thumbnail_url('post-thumbnails'); ?>" class="img-fluid">
            <?php else: //アイキャッチ画像なし ?>
              <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.jpg" class="img-fluid">
            <?php endif; ?>
          </a> 
          <div class="card-body">
            <a href="<?php the_permalink(); ?>">
              <h3 class="card-title"><?php the_title(); // タイトルを取得 ?></h3>
              <p class="card-text">
              <?php the_excerpt(); // 抜粋文を取得する ?>
              </p>
            </a>
          </div>
		  <a type="button" class="btn btn-primary" href="<?php the_permalink(); ?>">READ MORE</a>
        </div>
      </div>
      <?php endwhile; ?>
    </div><!-- //row -->
    
    <?php else: // 関連記事が無いときの表示 ?>
      <p>No related photos.</p>
    <?php endif; ?>
  </div><!-- //container -->
</section>
