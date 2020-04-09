<section>
  <?php $args = array(
    'orderby' => 'date',
    'order' => 'DESC',
    'tag' => 'recommend',
  );
  $posts = get_posts($args);
  if ($posts) : ?>

    <h2>管理者おすす情報</h2>
    <?php
      foreach ($posts as $post) :
        setup_postdata($post)
        ?>
      <div class="list-sub">
        <a href="<?php the_permalink(); ?>" target="_blank">
          <p class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/sample_yahoo.jpg" alt=""></p>
          <h4><?php the_title(); ?></h4>
          <p><?php the_excerpt(); ?></p>
          <span class="new">new</span>
        </a>
      </div>
    <?php endforeach; ?>
  <?php endif;
  wp_reset_postdata(); ?>
</section>

<section>

  <h2>お知らせ</h2>

  <div class="list-sub">
    <a href="#">
      <p class="img t"><img src="<?php echo get_template_directory_uri(); ?>/images/sample_side1.jpg" alt="タイトル"></p>
      <h4>アルバイト募集！</h4>
      <p>ここに簡単な説明を入れます。サンプルテキスト。</p>
      <p class="name">サンプルカフェ</p>
    </a>
  </div>

  <div class="list-sub">
    <a href="#">
      <p class="img t"><img src="<?php echo get_template_directory_uri(); ?>/images/sample_side2.png" alt="タイトル"></p>
      <h4>医療スタッフ募集</h4>
      <p>ここに簡単な説明を入れます。サンプルテキスト。</p>
      <p class="name">サンプルクリニック</p>
    </a>
  </div>

  <div class="list-sub">
    <a href="#">
      <p class="img t"><img src="<?php echo get_template_directory_uri(); ?>/images/sample_side3.jpg" alt="タイトル"></p>
      <h4>Cafeオープン記念</h4>
      <p>ここに簡単な説明を入れます。サンプルテキスト。</p>
      <p class="name">サンプルCafe</p>
    </a>
  </div>

  <div class="list-sub">
    <a href="#">
      <p class="img t"><img src="<?php echo get_template_directory_uri(); ?>/images/sample_side1.jpg" alt="タイトル"></p>
      <h4>アルバイト募集！</h4>
      <p>ここに簡単な説明を入れます。サンプルテキスト。</p>
      <p class="name">サンプルカフェ</p>
    </a>
  </div>

  <div class="list-sub">
    <a href="#">
      <p class="img t"><img src="<?php echo get_template_directory_uri(); ?>/images/sample_side2.png" alt="タイトル"></p>
      <h4>医療スタッフ募集</h4>
      <p>ここに簡単な説明を入れます。サンプルテキスト。</p>
      <p class="name">サンプルクリニック</p>
    </a>
  </div>

  <div class="list-sub">
    <a href="#">
      <p class="img t"><img src="<?php echo get_template_directory_uri(); ?>/images/sample_side3.jpg" alt="タイトル"></p>
      <h4>Cafeオープン記念</h4>
      <p>ここに簡単な説明を入れます。サンプルテキスト。</p>
      <p class="name">サンプルCafe</p>
    </a>
  </div>

</section>