<?php get_header(); ?>

<div id="contents" class="inner">

	<div id="contents-in">

		<div id="main">

			<section>

				<h2><?php echo the_category(); ?></h2>
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>

						<div class="list">

							<p class="img"><a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/sample_foods1.jpg" alt="タイトル"></a></p>

							<div class="text">

								<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><span class="newicon">NEW</span></h4>

								<p class="mb10"><?php the_excerpt(); ?></p>

								<p class="mini1 color2">東京都品川区XXXX</p>

								<span class="icon"><a href="#">全室禁煙</a></span>
								<span class="icon"><a href="#">ご予約可</a></span>
								<span class="icon"><a href="#">駐車場あり</a></span>

								<p><a href="<?php the_permalink(); ?>" class="btn2">詳細をみる</a></p>

							</div>
							<!--/.text-->

							<p class="date"><span>■登録日:2019/03/03 20:18</span><span>■更新日:2019/03/14 10:37</span></p>

							<p class="name"><a href="item.html">サンプル飲食店</a></p>
							<!--{/def}-->

						</div>
						<!--/.list-->
					<?php endwhile; ?>
				<?php endif; ?>




			</section>

		</div>
		<!--/#main-->

		<div id="sub">

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

		</div>
		<!--/#sub-->

	</div>
	<!--/#contents-in-->

	<div id="side">

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

	</div>
	<!--/#side-->

</div>
<!--/#contents-->

<?php get_footer(); ?>