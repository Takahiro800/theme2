<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ポータルサイト向け 無料ホームページテンプレート tp_portal1</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="ここにサイト説明を入れます">
  <meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <script src="<?php echo get_template_directory_uri(); ?>/js/openclose.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/fixmenu.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/fixmenu_pagetop.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/ddmenu_min.js"></script>
  <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>


  <header>
    <div class="inner">
      <h1 id="logo"><a href="<?php echo get_template_directory_uri(); ?>/index.php"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="ポータルサイト"></a></h1>
      <p class="login"><a href="<?php echo get_template_directory_uri(); ?>/login.html">ログイン</a></p>
    </div>
    <?php wp_head(); ?>
  </header>

  <!--PC用（901px以上端末）メニュー-->
  <nav id="menubar" class="nav-fix-pos">
    <ul class="inner">
      <li><a href="<?php echo get_template_directory_uri(); ?>/index.html">ホーム<span>Home</span></a></li>
      <li><a href="<?php echo get_template_directory_uri(); ?>/list_base.html">情報一覧<span>Category</span></a>
        <ul class="ddmenu">
        <?php
					$args = array(
						'title_li' => '',
					);
					wp_list_categories($args); ?>
        </ul>
      </li>
      <li><a href="<?php echo get_permalink(33); ?>">掲載のご案内<span>Information</span></a></li>
      <li><a href="<?php echo get_permalink(35); ?>">よく頂く質問<span>Faq</span></a></li>
      <li><a href="<?php echo get_permalink(38); ?>">リンク<span>Link</span></a></li>
      <li><a href="<?php echo get_permalink(42); ?>">お問い合わせ<span>Contact</span></a></li>
    </ul>
  </nav>
  <!--小さな端末用（900px以下端末）メニュー-->
  <nav id="menubar-s">
    <ul>
      <li><a href="index.html">ホーム<span>Home</span></a></li>
      <li><a href="list_base.html">情報一覧<span>Category</span></a></li>
      <li><a href="info.html">掲載のご案内<span>Information</span></a></li>
      <li><a href="faq.html">よく頂く質問<span>Faq</span></a></li>
      <li><a href="link.html">リンク<span>Link</span></a></li>
      <li><a href="contact.html">お問い合わせ<span>Contact</span></a></li>
    </ul>
  </nav>