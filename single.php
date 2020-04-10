<?php get_header(); ?>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>


		<div id="contents" class="inner">

			<div id="contents-in">

				<div id="main">

					<article class="item">

						<h2><?php the_title(); ?>

							<?php if (check_new_post(get_post_time('Y-m-d'))) : ?>
								<span class="new">NEW</span>
							<?php endif; ?>
							<?php if (has_tag('禁煙')) : ?>
								<span class="option1"><?php the_tags(''); ?></span>
							<?php endif; ?>
							<span class="option2">オプション2</span></h2>
						<p>詳細ページは飲食店用しか梱包していません。必要に応じてそれぞれの詳細ページを準備して下さい。</p>

						<figure class="c mb15"><img src="<?php echo get_template_directory_uri(); ?>/images/sample_foods1.jpg" alt="タイトル"></figure>

						<?php the_content(); ?>

					</article>

					<?php previous_post_link('%link', '前の記事へ', TRUE); ?>
					<?php next_post_link('%link', '次の記事へ', TRUE); ?>

				</div>
				<!--/#main-->

				<div id="sub">
					<?php get_template_part('template-parts/loop', 'sub'); ?>
				</div>
				<!--/#sub-->

			</div>
			<!--/#contents-in-->

			<div id="side">
				<?php get_template_part('template-parts/loop', 'side'); ?>
			</div>
			<!--/#side-->

		</div>
		<!--/#contents-->
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>