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
			<?php get_template_part('template-parts', 'sub'); ?>
		</div>
		<!--/#sub-->

	</div>
	<!--/#contents-in-->

	<div id="side">
		<?php get_template_part('template-parts', 'side'); ?>
	</div>
	<!--/#side-->

</div>
<!--/#contents-->

<?php get_footer(); ?>