  <?php get_header(); ?>
  <section class="hero">
          <h1>英語学習応援ブログ</h1>
          <p>English unlock your dream</p>
          <div class="border-bottom"></div>
   </section>
    <!-- =======================
      About me Section 
    =========================== -->
    <section id="about" class="pt4rem">
      <div class="container py-3">
        <div class="row bg-white shadow py-4 pt-md-5">
          <div class="col-md-6 pr-md-5">
            <h2 class="pt-5 pt-md-0 text-center">このサイトについて</h2>
            <div class="border-bottom"></div>
            <p class="lead p-3">
            数あるサイトの中から本ブログサイトを御覧いただきありがとうございます。
            このブログは、<br>
              <span class="bold">
              これから英語を頑張りたい！<br>
              海外で叶えたい夢がある！<br>
              でも何をすればよいかわからない・・・<br>
              </span>
            そんな人たちの夢を達成するために、筆者の経験をもとに英語学習についての情報を発信することを目的に作られました。<br>英語を学び、外国人とコミュニケーションを取れるようになることで、より楽しい人生になること間違いなし！挫折しないことを優先して学習していきましょう。
            </p>
          </div><!-- .col-md-6 -->
          <div class="col-md-6">
            <div class="mx-md-4 mb-4">
              <div class="px-md-0">
                <img src="<?php echo get_template_directory_uri(); ?>/img/about.jpg" class="img-fluid rounded" alt="Morgan Freeman">
              </div>
              <div class="personal-info p-3">
                <h4 class="pt-5 pt-md-0 text-center">筆者について</h4>
                <p>セミプロサッカー選手としてオーストラリア、メルボルンで約１年半プレー。
                  豪州2部~4部の3チームを渡り歩き、日本人visa選手としてプレー。
                  朝は現地の語学学校に行き週５日、英語づけの日々。
                  練習のない日の午後は日本食レストランで英語で接客担当。
                  ドイツ人2人とスペイン人とのシェアハウス生活。
                  TOEIC300→750
                </p>
              </div>
            </div>
          </div><!-- .col-md-6 -->
        </div><!-- .row -->
      </div><!-- .container -->
    </section>    

    <!-- =======================
       me Section 
    =========================== -->
    <section id="service" class="pt4rem">
      <div class="container">
        <div class="text-center py-5">
          <h2 class="big-h2">ブログ内容</h2>
          <p>Blogging about ...</p>
          <div class="border-bottom"></div>
        </div>
        <!-- // -->
        <div class="row">
          <div class="col-md-4">
            <div class="service-box bg-white">
              <span class="ico-circle mb-3"><i class="fas fa-solid fa-language fa-3x"></i></span>
              <div class="pt-3 text-center">
                <h3>英語学習の手助け</h3>
                <p class="life-text">
                  英語を学習をするにあたっての心構えや大切なこと、具体的な方法について書いてあります。
                  また、自身の経験をもとによく使われる表現や単語など、コミュニケーションのヒントになる情報を発信していきます。
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box bg-white">
              <span class="ico-circle mb-3"><i class="fas fa-duotone fa-house-user fa-3x"></i></span>
              <div class="pt-3 text-center">
                <h3>オーストラリア生活</h3>
                <p class="life-text">
                約1年半のメルボルン生活の経験をもとに、海外に行き滞在するための知識や、あなたの目的に応じた生活のヒントを発信していきます。
                </p>
              </div>
            </div>
          </div>
          <!-- -->
          <div class="col-md-4">
            <div class="service-box bg-white">
              <span class="ico-circle mb-3"><i class="fas fa-solid fa-book fa-3x"></i></span>
              <div class="pt-3 text-center">
                <h3>学習コンテンツの紹介</h3>
                <p class="life-text">
                書籍や英会話教室だけでなく、インターネットの普及によりyoutubeやオンライン教材などさまざまな学習コンテンツがありますよね。その中から良質なコンテンツを紹介していきます。
                </p>
              </div>
            </div>
          </div>
        </div><!-- .row -->
      </div><!-- .container -->
    </section>
    <!-- =======================
      Blog Section
    =========================== --> 
    <section id="blog" class="pt4rem">
      <div class="container">
        <div class="col-sm-12 text-center py-2 mb-5">
          <h2 class="big-h2">最新ブログ</h2>
          <p>Latest post</p>
          <div class="border-bottom"></div>
        </div>
        <div class="row">
          <?php query_posts('post_type=post&showposts=3');
            while (have_posts() ): the_post(); ?>
            <div class="col-md-4 mb-5">
              <div class="card blog-card">
                <div class="card-category-box">
                    <?php
                      $categories = get_the_category();
                      if ( $categories ) {
                        echo $categories[0]->name;
                      }
                    ?>
                </div>
                <a href="<?php the_permalink(); ?>">
                  <?php if ( has_post_thumbnail() ) : //アイキャッチ画像あり ?>
                    <img src="<?php the_post_thumbnail_url('post-thumbnails'); ?>" alt="" class="img-fluid">
                  <?php else: //アイキャッチ画像なし ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.jpg" class="img-fluid">
                  <?php endif; ?>
                </a> 
                <div class="card-body">
                  <h3 class="card-title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </h3>
                  <p class="card-text"><?php the_excerpt(); ?></p>
                </div>
                <div class="card-footer d-flex justify-content-between align-items-center">
                  <div class="mb-1">
                    <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
                      <img src="<?php echo get_avatar_url($post->post_author); ?>" class="avatar rounded-circle" width="50px">
                      <?php the_author(); ?>   
                    </a>
                  </div>
                  <div class="mb-1">
                    <i class="far fa-clock"></i> <?php the_time('Y/m/d'); ?>
                  </div>
                </div>
              </div>
            </div>
          <?php endwhile; wp_reset_query();?>
        </div><!-- //row -->
      </div><!-- //container -->
    </section>

  </main>
<?php get_footer(); ?>