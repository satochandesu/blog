<!doctype html>
<html lang="en">
  <head>
  <?php wp_head(); ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- AndroidのChrome用 -->
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/android-chrome-192x192.png" sizes="192x192">
    <!-- iOSタッチアイコン用 -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon.png">
    <!-- windows8,10でスタート画面にピン留めした時の設定 -->
    <meta name="msapplication-square70x70logo" content="<?php echo get_template_directory_uri(); ?>/img/site-tile-70x70.png">
    <meta name="msapplication-square150x150logo" content="<?php echo get_template_directory_uri(); ?>/img/site-tile-150x150.png">
    <meta name="msapplication-wide310x150logo" content="<?php echo get_template_directory_uri(); ?>/img/site-tile-310x150.png">
    <meta name="msapplication-square310x310logo" content="<?php echo get_template_directory_uri(); ?>/img/site-tile-310x310.png">
      <!-- Place your kit's code here -->
    <script src="https://kit.fontawesome.com/2fa172a2bf.js" crossorigin="anonymous"></script>
    <title><?php echo get_the_title(); ?></title>
  </head>
  <body>
      <header>
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="container">
                <a class="navbar-brand" href="<?php echo home_url() ?>">英会話学習応援ブログ</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                  <?php wp_nav_menu(
                    array(
                        //登録したメニュー名使って、呼び出すメニューを指定する
                        'theme_location' => 'header-navigation',
                        'menu_class' => 'navbar-nav',
                    )
                    ); 
                  ?>
                    <!-- <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#about">About</a>
                    <a class="nav-link" href="index.html">Blogs</a>
                    <a class="nav-link" href="#sites">Sites</a> -->
                  </div>
                </div>
              </div>
          </nav>
      </header>