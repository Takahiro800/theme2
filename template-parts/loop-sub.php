<nav>
  <h2>情報一覧</h2>
  <ul class="submenu">
    <?php
    $args = array(
      'title_li' => '',
      'exclude' => '6',
    );
    wp_list_categories($args); ?>
  </ul>
</nav>

<nav>
  <h2>不動産情報</h2>
  <ul class="submenu">
    <?php
    $args = array(
      'title_li' => '',
      'exclude' => '1,2,3,4,5,'
    );
    wp_list_categories($args); ?>
  </ul>
</nav>

<div class="box1">
  <h2 class="mb10">運営会社</h2>
  <p>東京都XX区XXXXビル３F<br>
    TEL：00-0000-0000<br>
    受付：00:00〜00:00<br>
    定休日：水曜日</p>
</div>

<p>
  <a href="recruit.html"><img src="<?php echo get_template_directory_uri(); ?>/images/banner1.jpg" alt="採用情報" class="pc"></a>
  <a href="recruit.html"><img src="<?php echo get_template_directory_uri(); ?>/images/banner1_sh.jpg" alt="採用情報" class="sh"></a>
</p>
<p>上のバナー画像は、901px以上の端末と900px以下とで画像２種類が切り替わります。<br>
  <a href="company.html#banner">詳しい説明はこちら。</a></p>